<div class="border-t p-3 flex gap-2 bg-white rounded-b-2xl">
    <input
        id="accel-ai-input"
        type="text"
        placeholder="{{ $ui['placeholder'] }}"
        class="flex-1 border border-gray-200 rounded-xl
               px-4 py-2 text-sm
               placeholder:text-gray-400
               focus:outline-none
               focus:ring-2 focus:ring-brand-blue-500"
    />

    <button
        id="accel-ai-send"
        aria-label="Send message"
        class="hero-accent-blue text-white
               w-10 h-10
               rounded-xl
               flex items-center justify-center
               shadow-md
               hover:shadow-lg hover:scale-105
               transition-all duration-200"
    >
        <x-heroicon-s-paper-airplane class="w-5 h-5 -rotate-45" />
    </button>
</div>
