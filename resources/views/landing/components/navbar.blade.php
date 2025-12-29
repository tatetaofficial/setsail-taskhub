<header
    class="w-full py-4 px-4 lg:px-10 flex justify-between items-center
           bg-linear-to-b from-white via-white to-gray-50/30
           backdrop-blur-xl shadow-md sticky top-0 z-50
           border-b border-gray-200/50 transition-all duration-300">

    <!-- LOGO -->
    <div class="flex items-center space-x-3 relative group">
        <div
            class="absolute -inset-2 bg-linear-to-r from-brand-blue-600/10 to-purple-600/10
                   rounded-2xl blur-lg opacity-0 group-hover:opacity-100 transition-all duration-500">
        </div>

        <a href="{{ route('landing.home') }}" class="relative">
            <img src="{{ asset('image/setsail-logo.png') }}"
                 class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105"
                 alt="Setsail Logo">
        </a>
    </div>

    <!-- DESKTOP NAV -->
    <nav class="hidden lg:flex items-center gap-2 bg-gray-100/80 backdrop-blur-sm
                px-3 py-2 rounded-full shadow-inner">

        @php
            $navBase = 'relative px-5 py-2.5 text-sm font-bold rounded-full transition-all duration-300 overflow-hidden';
            $navIdle = 'text-gray-600 hover:text-brand-blue-600 hover:bg-white hover:shadow-md';
        @endphp

        <a href="{{ route('landing.home') }}"
           @class([$navBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.home'), $navIdle => !request()->routeIs('landing.home')])>
            Home
        </a>

        <a href="{{ route('landing.programs') }}"
           @class([$navBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.programs'), $navIdle => !request()->routeIs('landing.programs')])>
            Programs
        </a>

        <a href="{{ route('landing.startup-teams') }}"
           @class([$navBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.startup-teams'), $navIdle => !request()->routeIs('landing.startup-teams')])>
            Startup Teams
        </a>

        <a href="{{ route('landing.family-business') }}"
           @class([$navBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.family-business'), $navIdle => !request()->routeIs('landing.family-business')])>
            Family Business
        </a>

        <a href="{{ route('landing.news.list') }}"
           @class([$navBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.news.*'), $navIdle => !request()->routeIs('landing.news.*')])>
            News
        </a>
    </nav>

    <!-- CTA + MOBILE BUTTON -->
    <div class="flex items-center gap-3">
        <a href="{{ auth()->check() ? '/admin' : '/admin/login' }}"
           class="hero-accent-blue text-white font-extrabold py-3 px-8 rounded-full shadow-xl
                  hover:shadow-2xl transition-all duration-500 text-sm
                  hover:scale-110 active:scale-95">
            Join Now
        </a>

        <button
    id="mobile-menu-toggle"
    onclick="toggleMobileMenu()"
    class="lg:hidden w-11 h-11 rounded-xl bg-linear-to-br from-gray-50 to-gray-100
           shadow-md border border-gray-200/50
           text-xl font-bold flex items-center justify-center transition-all duration-300">
    ☰
</button>

    </div>
</header>

<!-- MOBILE MENU -->
<div id="mobile-menu"
     class="lg:hidden fixed top-[88px] left-4 right-4 bg-white/95 backdrop-blur-xl
            rounded-3xl shadow-2xl border border-gray-200/50
            scale-95 opacity-0 pointer-events-none transition-all duration-300 z-999">

    <nav class="px-6 py-6 space-y-2">

        @php
            $mobileBase = 'flex justify-between items-center px-5 py-4 rounded-2xl font-bold transition-all duration-300';
            $mobileIdle = 'text-gray-700 bg-gray-50/50 hover:text-brand-blue-600 hover:bg-linear-to-r hover:from-brand-blue-50 hover:to-purple-50';
        @endphp

        <a href="{{ route('landing.home') }}"
           @class([$mobileBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.home'), $mobileIdle => !request()->routeIs('landing.home')])
           onclick="closeMobileMenu()">Home</a>

        <a href="{{ route('landing.programs') }}"
           @class([$mobileBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.programs'), $mobileIdle => !request()->routeIs('landing.programs')])
           onclick="closeMobileMenu()">Programs</a>

        <a href="{{ route('landing.startup-teams') }}"
           @class([$mobileBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.startup-teams'), $mobileIdle => !request()->routeIs('landing.startup-teams')])
           onclick="closeMobileMenu()">Startup Teams</a>

        <a href="{{ route('landing.family-business') }}"
           @class([$mobileBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.family-business'), $mobileIdle => !request()->routeIs('landing.family-business')])
           onclick="closeMobileMenu()">Family Business</a>

        <a href="{{ route('landing.news.list') }}"
           @class([$mobileBase, 'nav-active text-brand-blue-600' => request()->routeIs('landing.news.*'), $mobileIdle => !request()->routeIs('landing.news.*')])
           onclick="closeMobileMenu()">News</a>
    </nav>
</div>


<script>
   function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    if (!mobileMenu || !toggleBtn) return;

    const isOpen = mobileMenu.classList.contains('scale-100');

    if (!isOpen) {
        // OPEN
        mobileMenu.classList.remove('scale-95', 'opacity-0', 'pointer-events-none');
        mobileMenu.classList.add('scale-100', 'opacity-100', 'pointer-events-auto');

        toggleBtn.textContent = '✕';
        document.body.style.overflow = 'hidden';
    } else {
        closeMobileMenu();
    }
}


function closeMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    if (!mobileMenu || !toggleBtn) return;

    mobileMenu.classList.add('scale-95', 'opacity-0', 'pointer-events-none');
    mobileMenu.classList.remove('scale-100', 'opacity-100', 'pointer-events-auto');

    toggleBtn.textContent = '☰';
    document.body.style.overflow = '';
}


    // Close mobile menu on escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeMobileMenu();
        }
    });

    // Close mobile menu on window resize to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024) {
            closeMobileMenu();
        }
    });
</script>

<style>
    html {
        scroll-behavior: smooth;
    }

    #mobile-menu nav::-webkit-scrollbar {
        width: 6px;
    }

    #mobile-menu nav::-webkit-scrollbar-track {
        background: transparent;
    }

    #mobile-menu nav::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 3px;
    }

    #mobile-menu nav::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
    .nav-active {
    color: rgb(var(--color-brand-blue-600));
    background: linear-gradient(
        to right,
        rgb(var(--color-brand-blue-50)),
        rgb(237 233 254) /* purple-50 */
    );
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
}
</style>