<div class="sticky top-0 z-10
           bg-white/90 backdrop-blur
           border-b border-gray-100
           px-4 py-3
           flex items-center justify-between
           rounded-t-2xl">
    <div class="flex flex-col">
        <span class="font-display font-semibold text-sm text-gray-900">
            {{ $ui['title'] }}
        </span>
        <span class="text-[11px] text-gray-400 leading-tight">
            {{ $ui['top-info'] }}
            · Powered by
            <a href="{{ $ui['powered_by']['url'] }}" target="_blank" rel="noopener noreferrer"
                class="text-brand-blue-600 hover:text-brand-blue-700 font-medium underline-offset-2 hover:underline">
                {{ $ui['powered_by']['label'] }}
            </a>
        </span>
    </div>

    <button id="accel-ai-close" aria-label="Close chat" class="w-8 h-8
               flex items-center justify-center
               rounded-full
               text-gray-400
               hover:text-gray-700
               hover:bg-gray-100
               transition">
        <x-heroicon-s-x-mark class="w-4 h-4" />
    </button>
</div>