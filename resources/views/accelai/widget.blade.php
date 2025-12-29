@php
    $ui = $mode === 'agent'
        ? [
            'title' => 'Accel AI · Mentor',
            'welcome' => 'Hi 👋 I’m Accel AI. Let’s work on your business, idea, or project together.',
            'placeholder' => 'Tell me what you’re building or struggling with…',
            'top-info' => 'Mentor Mode · AccelAI v0.0.1',
            'powered_by' => [
                'label' => 'TATETA',
                'url' => 'https://tateta.samastanuswantara.com', 
            ],
        ]
        : [
            'title' => 'Accel AI',
            'welcome' => 'Hi 👋 I’m Accel AI. I’m here to help you get started with SetSail BizAccel.',
            'placeholder' => 'Ask about programs, events, or how to join…',
            'top-info' => 'Customer Service Mode · AccelAI v0.0.1',
            'powered_by' => [
                'label' => 'TATETA',
                'url' => 'https://tateta.samastanuswantara.com',
            ],
        ];
@endphp
<!-- Accel AI Nudge Bubble -->
<div
    id="accel-ai-nudge"
    class="
        fixed z-40
        bottom-10 right-6
        sm:bottom-32 sm:right-6

        max-w-[220px]
        bg-white
        border border-gray-200
        shadow-lg
        rounded-xl
        px-4 py-4
        text-sm text-gray-700

        opacity-0 translate-y-3
        transition-all duration-500

        hidden sm:block
    "
>
    <div class="flex items-start gap-2">
        <span class="text-lg">👋</span>
        <p class="leading-snug">
            Hi! Need help about <strong>SetSail BizAccel</strong>?
        </p>
    </div>
</div>

<!-- Floating Button -->
<button id="accel-ai-toggle" class="fixed bottom-6 right-6 z-50 w-16 h-16 rounded-full
           bg-brand-blue-600
           text-white shadow-lg
           flex items-center justify-center
           hover:bg-brand-blue-700
           transition-all duration-200">
    <img src="{{ asset('image/accel/accel.png') }}" width="45" alt="">
</button>


<!-- Chat Window -->
<div
    id="accel-ai-window"
    data-mode="{{ $mode }}"
    data-welcome="{{ $ui['welcome'] }}"
    class="
        fixed z-50 flex flex-col font-sans
        bg-white border border-gray-100 shadow-custom rounded-2xl

        bottom-5 left-4 right-4
        max-h-[75vh]

        sm:bottom-24 sm:right-6 sm:left-auto
        sm:w-96 sm:max-h-[65vh]

        hidden
    "
>



    @include('accelai.partials.header', ['ui' => $ui])

    @include('accelai.partials.messages', ['ui' => $ui])

    @include('accelai.partials.input', ['ui' => $ui])
</div>