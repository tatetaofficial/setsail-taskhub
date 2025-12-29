document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("accel-ai-toggle");
    const closeBtn = document.getElementById("accel-ai-close");
    const windowEl = document.getElementById("accel-ai-window");
    const sendBtn = document.getElementById("accel-ai-send");
    const inputEl = document.getElementById("accel-ai-input");
    const logEl = document.getElementById("accel-ai-log");
    const nudgeEl = document.getElementById("accel-ai-nudge");

    if (!toggleBtn || !windowEl || !logEl || !nudgeEl) return;

    const notifySound = new Audio("/sound/tick.mp3");
    notifySound.volume = 0.35;

    function playNotifySound() {
        notifySound.currentTime = 0;
        notifySound.play().catch(() => {});
    }

    let nudgeVisible = false;
    let nudgeCooldown = false;

    function showNudge(withSound = false) {
        if (nudgeVisible || nudgeCooldown) return;
        if (!windowEl.classList.contains("hidden")) return;

        nudgeVisible = true;
        nudgeCooldown = true;

        nudgeEl.classList.remove("hidden");
        requestAnimationFrame(() => {
            nudgeEl.classList.remove("opacity-0", "translate-y-2");
            nudgeEl.classList.add("opacity-100", "translate-y-0");
        });

        if (withSound) playNotifySound();

        setTimeout(() => {
            nudgeCooldown = false;
        }, 6000);
    }

    function hideNudge() {
        if (!nudgeVisible) return;
        nudgeVisible = false;

        nudgeEl.classList.add("opacity-0", "translate-y-2");
        setTimeout(() => {
            nudgeEl.classList.add("hidden");
        }, 300);
    }

    setTimeout(() => showNudge(false), 1200);

    ["scroll", "click", "keydown"].forEach((evt) => {
        window.addEventListener(evt, () => showNudge(true), { passive: true });
    });

    nudgeEl.addEventListener("click", () => {
        hideNudge();
        toggleChat(true);
    });

    function toggleChat(forceOpen = false) {
        hideNudge();

        if (forceOpen) {
            windowEl.classList.remove("hidden");
        } else {
            windowEl.classList.toggle("hidden");
        }

        if (!windowEl.classList.contains("hidden")) {
            inputEl?.focus();
            ensureWelcomeMessage();
        }
    }

    toggleBtn.addEventListener("click", () => toggleChat());
    closeBtn?.addEventListener("click", () => windowEl.classList.add("hidden"));

    sendBtn?.addEventListener("click", sendMessage);
    inputEl?.addEventListener("keydown", (e) => {
        if (e.key === "Enter") sendMessage();
    });

    async function sendMessage() {
        const message = inputEl.value.trim();
        if (!message) return;

        appendUserMessage(message);
        inputEl.value = "";

        const typingEl = appendAIBubble("Typing…");

        try {
            const res = await fetch("/api/accel-ai/chat", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        ?.getAttribute("content"),
                },
                body: JSON.stringify({ message }),
            });

            const data = await res.json();
            typingEl.remove();
            appendAIBubble(data.reply);
        } catch {
            typingEl.remove();
            appendAIBubble("Sorry, something went wrong.");
        }
    }

    function appendUserMessage(text) {
        const wrap = document.createElement("div");
        wrap.className = "flex justify-end";

        wrap.innerHTML = `
            <div class="bg-brand-red-50 text-brand-red-700
                        rounded-xl px-4 py-2 max-w-[75%]
                        text-sm shadow-sm">
                ${escapeHtml(text)}
            </div>
        `;

        logEl.appendChild(wrap);
        scrollToBottom();
    }

    function appendAIBubble(text) {
        const wrap = document.createElement("div");
        wrap.className = "flex items-end gap-2";

        wrap.innerHTML = `
            <img src="/image/accel/accel.png"
                 class="w-5 h-5 rounded-full shrink-0 bg-blue-600"
                 alt="Accel AI" />

            <div class="bg-white border border-gray-100
                        rounded-xl px-4 py-2 max-w-[75%]
                        text-sm shadow-sm">
              ${formatAIText(text)}
            </div>
        `;

        logEl.appendChild(wrap);
        scrollToBottom();
        return wrap;
    }

    function scrollToBottom() {
        logEl.scrollTop = logEl.scrollHeight;
    }

    function ensureWelcomeMessage() {
        if (logEl.children.length > 0) return;

        const welcomeText = windowEl.dataset.welcome;
        if (welcomeText) {
            appendAIBubble(welcomeText);
        }
    }

    function escapeHtml(text) {
        const div = document.createElement("div");
        div.textContent = text;
        return div.innerHTML;
    }
    function formatAIText(text) {
        if (!text) return "";

        // escape dulu untuk keamanan
        text = escapeHtml(text);

        // Bold: **text** → <strong>text</strong>
        text = text.replace(/\*\*(.*?)\*\*/g, "<strong>$1</strong>");

        // Bullet: * item atau - item → • item
        text = text.replace(/^\s*[\*\-]\s+/gm, "• ");

        // Pisah paragraf
        text = text.replace(/\n{2,}/g, "</p><p>");
        text = text.replace(/\n/g, "<br>");

        return `<p>${text}</p>`;
    }
});
