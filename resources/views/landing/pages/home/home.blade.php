@extends('landing.layouts.main')

@section('title', 'Setsail BizAccel')

@section('content')
    <!-- Hero Section -->
    <section class="hero-background py-24 lg:py-32 px-6 lg:px-10 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-10 right-10 w-72 h-72 hero-accent-blue rounded-full blur-3xl opacity-20"></div>
        <div class="absolute bottom-10 left-10 w-80 h-80 hero-accent-red rounded-full blur-3xl opacity-20"></div>
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-brand-blue-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center">
                <div class="inline-flex items-center gap-2 mb-6 px-5 py-2.5 bg-linear-to-r from-brand-blue-500 to-brand-red-500 text-white rounded-full shadow-lg">

                    <x-heroicon-s-trophy class="w-5 h-5 text-yellow-200 shrink-0" />

                    <span class="text-sm font-bold tracking-wide leading-none">
                        #1 IN THE WORLD FOR ENTREPRENEURIAL SPIRIT
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight text-gray-900">
                    President University<br>
                    <span class="relative inline-block">
                        <span class="text-gradient">Business Accelerator</span>
                        <div
                            class="absolute -bottom-2 left-0 right-0 h-1 bg-linear-to-r from-brand-blue-600 via-brand-red-500 to-brand-blue-600 rounded-full">
                        </div>
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto mb-10 leading-relaxed">Building an
                    entrepreneurial ecosystem for the next generation of innovators</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="/admin"
                        class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 text-base btn-primary hover:scale-105">
                        Get Started
                    </a>
                    <a href="#about"
                        class="bg-white border-2 border-brand-red-500 text-brand-red-600 font-bold py-4 px-10 rounded-xl hover:bg-brand-red-500 hover:text-white transition-all duration-300 text-base shadow-lg">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="bg-white py-12 px-6 lg:px-10 border-b border-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-display font-bold text-gradient mb-2">30+</div>
                    <p class="text-gray-600 font-medium">Co-Working Spaces</p>
                </div>
                <div class="text-center border-x-0 md:border-x border-gray-200">
                    <div class="text-4xl md:text-5xl font-display font-bold text-gradient mb-2">50+</div>
                    <p class="text-gray-600 font-medium">Workshop Capacity</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-display font-bold text-gradient mb-2">#1</div>
                    <p class="text-gray-600 font-medium">World Ranking</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-2 lg:py-2 px-6 lg:px-10 bg-linear-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-600 rounded-full text-sm font-semibold">
                        About Us</div>
                    <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight">
                        What is <span class="text-gradient">Setsail BizAccel?</span>
                    </h2>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">Setsail BizAccel is President University Business
                        Accelerator. As an University-based Business Incubator, we aim to build an entrepreneurial ecosystem
                        for students at President University.</p>
                    <p class="text-lg text-gray-700 mb-8 leading-relaxed">We encourage students to create their own company
                        during their University life and provide programs related to entrepreneurship which are embedded in
                        the University curriculum.</p>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-0.5 bg-linear-to-r from-brand-blue-700 to-brand-red-600"></div>
                        <span class="text-sm font-semibold text-gray-500 tracking-wide">SHAPING FUTURE ENTREPRENEURS</span>
                    </div>
                </div>
                <div class="relative group">
                    <div class="stat-card p-10 rounded-3xl shadow-custom card-hover">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 bg-linear-to-br from-brand-red-300 to-brand-red-400 rounded-2xl mb-6 shadow-lg">
                            <x-heroicon-s-trophy class="w-10 text-yellow-200" />
                        </div>
                        <h3 class="text-3xl font-display font-bold mb-3 text-gray-900">#1 in the World</h3>
                        <p class="text-gray-600 text-lg leading-relaxed">President University ranked #1 in the World for
                            Entrepreneurial Spirit (WURI Ranking)</p>
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-brand-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Recognized globally for excellence
                            </div>
                        </div>

                        <button onclick="toggleCertificate()"
                            class="mt-4 lg:hidden w-full bg-brand-red-500 hover:bg-brand-red-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            View Detail
                        </button>
                    </div>

                    <div
                        class="hidden lg:block fixed inset-0 items-center justify-center opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-500 z-9999 pointer-events-none">
                        <!-- Backdrop -->
                        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

                        <!-- Certificate Card -->
                        <div
                            class="relative flex items-center justify-center h-full transform scale-75 group-hover:scale-100 transition-all duration-700 -rotate-2 group-hover:rotate-0">
                            <div
                                class="bg-white p-6 rounded-3xl shadow-[0_25px_80px_rgba(0,0,0,0.4)] border-4 border-brand-red-400 max-w-[90vw] max-h-[90vh] overflow-auto">
                                <img src="{{ asset('image/wuri-rank.png') }}" alt="WURI Ranking Certificate"
                                    class="w-full h-auto rounded-2xl">
                                <div class="mt-4 text-center">
                                    <p class="text-xl font-bold text-gray-800 flex items-center justify-center gap-2">
                                        <x-heroicon-s-trophy class="w-6 h-6 text-yellow-500" />
                                        President University - Ranked #1 Worldwide
                                    </p>
                                    <p class="text-base text-gray-600 mt-1">World's Most Innovative Universities Ranking</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="certificateModal"
                        class="lg:hidden fixed inset-0 bg-black/80 backdrop-blur-sm z-9999 opacity-0 invisible transition-all duration-300 flex items-center justify-center p-4">
                        <button onclick="toggleCertificate()"
                            class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-lg hover:bg-gray-100 transition-colors z-10">
                            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <!-- Certificate Card Mobile -->
                        <div class="bg-white rounded-2xl shadow-2xl max-w-full max-h-[85vh] overflow-auto transform scale-90 transition-transform duration-300"
                            id="certificateCard">
                            <div class="p-4">
                                <img src=" {{ asset('image/wuri-rank.png') }}" alt="WURI Ranking Certificate"
                                    class="w-full h-auto rounded-lg">
                                <div class="mt-3 text-center">
                                    <p class="text-lg font-bold text-gray-800">🏆 President University</p>
                                    <p class="text-sm text-gray-600 mt-1">#1 Worldwide - WURI Ranking</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-brand-blue-100 rounded-3xl -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-brand-red-100 rounded-3xl -z-10"></div>
                </div>

                <script>
                    function toggleCertificate() {
                        const modal = document.getElementById('certificateModal');
                        const card = document.getElementById('certificateCard');

                        if (modal.classList.contains('invisible')) {
                            // Show modal
                            modal.classList.remove('invisible', 'opacity-0');
                            setTimeout(() => {
                                card.classList.remove('scale-90');
                                card.classList.add('scale-100');
                            }, 10);
                        } else {
                            // Hide modal
                            card.classList.remove('scale-100');
                            card.classList.add('scale-90');
                            setTimeout(() => {
                                modal.classList.add('invisible', 'opacity-0');
                            }, 300);
                        }
                    }

                    // Close modal when clicking backdrop
                    document.getElementById('certificateModal')?.addEventListener('click', function (e) {
                        if (e.target === this) {
                            toggleCertificate();
                        }
                    });
                </script>
            </div>

            <div class="mt-20">
                <div class="relative overflow-hidden py-8 bg-linear-to-r from-transparent via-white/50 to-transparent">
                    <div
                        class="absolute left-0 top-0 bottom-0 w-32 bg-linear-to-r from-gray-50 to-transparent z-10 pointer-events-none">
                    </div>
                    <div
                        class="absolute right-0 top-0 bottom-0 w-32 bg-linear-to-l from-gray-50 to-transparent z-10 pointer-events-none">
                    </div>

                    <div class="flex animate-scroll">
                        <!-- First Set of Logos -->
                        <div class="flex items-center space-x-12 px-6">
                            <!-- Logo 1 -->
                            <div
                                class="shrink-0 w-40 h-24  transition-all duration-300 flex items-center justify-center hover:scale-105 group">
                                <div class="text-center">
                                    <div class="text-4xl mb-1 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('image/presuniv-logo.png') }}" width="180"
                                            alt="President University"
                                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                                    </div>
                                </div>
                            </div>

                            <!-- Logo 2 -->
                            <div
                                class="shrink-0 w-40 h-24  transition-all duration-300 flex items-center justify-center hover:scale-105 group">

                                <div class="text-center">
                                    <div class="text-4xl mb-1 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('image/gita-logo.png') }}" width="180" alt="Gita"
                                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                                    </div>

                                </div>
                            </div>

                            <!-- Logo 3 -->
                            <div
                                class="shrink-0 w-40 h-24  transition-all duration-300 flex items-center justify-center hover:scale-105 group">

                                <div class="text-center">
                                    <div class="text-4xl mb-1 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('image/eu-logo.png') }}" width="180" alt="EU"
                                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                                    </div>
                                </div>
                            </div>

                            <!-- Logo 4 -->
                            <div
                                class="shrink-0 w-40 h-24  transition-all duration-300 flex items-center justify-center hover:scale-105 group">

                                <div class="text-center">
                                    <div class="text-4xl mb-1 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('image/akselwira-logo.png') }}" width="180" alt="Akselwira"
                                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Duplicate Set for Seamless Loop -->
                        <div class="flex items-center space-x-12 px-6">
                            <!-- Logo 1 -->
                            <div
                                class="shrink-0 w-40 h-24 transition-all duration-300 flex items-center justify-center hover:scale-105 group">
                                <div class="text-center">
                                    <div class="text-4xl mb-1 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('image/presuniv-logo.png') }}" width="180"
                                            alt="President University"
                                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                                    </div>
                                </div>
                            </div>

                            <!-- Logo 2 -->
                            <div
                                class="shrink-0 w-40 h-24 transition-all duration-300 flex items-center justify-center hover:scale-105 group">

                                <div class="text-center">
                                    <div class="text-4xl mb-1 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('image/gita-logo.png') }}" width="180" alt="Gita"
                                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                                    </div>

                                </div>
                            </div>

                            <!-- Logo 3 -->
                            <div
                                class="shrink-0 w-40 h-24 transition-all duration-300 flex items-center justify-center hover:scale-105 group">

                                <div class="text-center">
                                    <div class="text-4xl mb-1 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('image/eu-logo.png') }}" width="180" alt="EU"
                                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                                    </div>
                                </div>
                            </div>

                            <!-- Logo 4 -->
                            <div
                                class="shrink-0 w-40 h-24 transition-all duration-300 flex items-center justify-center hover:scale-105 group">

                                <div class="text-center">
                                    <div class="text-4xl mb-1 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('image/akselwira-logo.png') }}" width="180" alt="Akselwira"
                                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    @keyframes scroll {
                        0% {
                            transform: translateX(0);
                        }

                        100% {
                            transform: translateX(-50%);
                        }
                    }

                    .animate-scroll {
                        animation: scroll 30s linear infinite;
                    }

                    .animate-scroll:hover {
                        animation-play-state: paused;
                    }
                </style>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-red-50 text-brand-red-700 rounded-full text-sm font-semibold">
                    Our Mission</div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Empowering <span class="text-gradient">Tomorrow's Leaders</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed">Building Entrepreneurship Ecosystem and
                    Knowledge Exchange Platform in President University Students. We are ready to change our student's
                    mindset in becoming entrepreneurs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 lg:p-10 rounded-2xl shadow-custom card-hover border border-gray-100">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 bg-linear-to-br from-brand-blue-500 to-brand-blue-600 rounded-xl mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 text-gray-900">Co-Working Space</h3>
                    <p class="text-gray-600 leading-relaxed">Capacity for 30 people with sophisticated infrastructure
                        including high-performance PCs and 3D modeling devices</p>
                </div>

                <div class="bg-white p-8 lg:p-10 rounded-2xl shadow-custom-red card-hover border border-gray-100">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 bg-linear-to-br from-brand-red-500 to-brand-red-600 rounded-xl mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM7 10a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 text-gray-900">Mentorship</h3>
                    <p class="text-gray-600 leading-relaxed">Guidance from experienced businessmen, alumni, and local &
                        international incubators</p>
                </div>

                <div class="bg-white p-8 lg:p-10 rounded-2xl shadow-custom card-hover border border-gray-100">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 bg-linear-to-br from-brand-blue-600 to-brand-red-600 rounded-xl mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 text-gray-900">Investment</h3>
                    <p class="text-gray-600 leading-relaxed">Access to funding opportunities and connections with investors
                        to scale your business</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-700 rounded-full text-sm font-semibold">
                    Facilities</div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    What's in <span class="text-gradient">Setsail BizAccel?</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">Equipped with sophisticated infrastructure to support
                    your entrepreneurship journey</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white p-8 rounded-2xl border-2 border-brand-blue-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="text-5xl mb-4">💻</div>
                    <h4 class="font-display font-bold text-lg mb-3 text-gray-900">High-Performance PCs</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">For design, development & business operations</p>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl border-2 border-brand-red-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="text-5xl mb-4">📸</div>
                    <h4 class="font-display font-bold text-lg mb-3 text-gray-900">Photography Studio</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Professional setup for content creation</p>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl border-2 border-brand-blue-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="text-5xl mb-4">🖨️</div>
                    <h4 class="font-display font-bold text-lg mb-3 text-gray-900">3D Modeling Device</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Turn your ideas into prototypes</p>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl border-2 border-brand-red-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="text-5xl mb-4">🎓</div>
                    <h4 class="font-display font-bold text-lg mb-3 text-gray-900">Workshop Space</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Capacity for up to 50 participants</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-red-50 text-brand-red-700 rounded-full text-sm font-semibold">
                    Our Team</div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Meet the <span class="text-gradient">Experts</span>
                </h2>
                <p class="text-xl text-gray-700">Dedicated professionals guiding your entrepreneurial journey</p>
            </div>

            <div class="flex justify-center mb-12">
                <div
                    class="team-card p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover w-full max-w-xs">
                    <div class="w-40 rounded-2xl mx-auto mb-5 overflow-hidden ">
                        @if(file_exists(public_path('image/teams/director.png')))
                            <img src="{{ asset('image/teams/director.png') }}" alt="Felix Goenadhi"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-24 h-24 bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-2xl mx-auto mb-5 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                FG</div>
                        @endif
                    </div>
                    <h3 class="font-display font-bold text-lg mb-2 text-gray-900">Felix Goenadhi, S.Psi., M.Par</h3>
                    <p class="text-brand-red-600 text-sm font-semibold mb-3">Director</p>
                    <p class="text-xs text-gray-500">felix.goenadhi@president.ac.id</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-20 max-w-5xl mx-auto">
                <div class="team-card p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-40 rounded-2xl mx-auto mb-5 overflow-hidden ">
                        @if(file_exists(public_path('image/teams/pm.png')))

                            <img src="{{ asset('image/teams/pm.png') }}" alt="Bima Arya Wicaksono"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-24 h-24 bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-2xl mx-auto mb-5 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                BA</div>
                        @endif
                    </div>
                    <h3 class="font-display font-bold text-lg mb-2 text-gray-900">Bima Arya Wicaksono, BBA</h3>
                    <p class="text-brand-red-600 text-sm font-semibold mb-3">Program Manager</p>
                    <p class="text-xs text-gray-500">bima.arya@president.ac.id</p>
                </div>

                <div class="team-card p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-40 rounded-2xl mx-auto mb-5 overflow-hidden ">
                        @if(file_exists(public_path('image/teams/member-2.png')))
                            <img src="{{ asset('image/teams/member-2.png') }}" alt="Fatimah Janahtun Azzahra"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-24 h-24 bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-2xl mx-auto mb-5 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                FJ</div>
                        @endif
                    </div>
                    <h3 class="font-display font-bold text-lg mb-2 text-gray-900">Fatimah Janahtun Azzahra</h3>
                    <p class="text-brand-blue-600 text-sm font-semibold mb-3">Team Member</p>
                    <p class="text-xs text-gray-500">fatimah.janahtun@student.president.ac.id</p>
                </div>
                <div class="team-card p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-40 rounded-2xl mx-auto mb-5 overflow-hidden ">
                        @if(file_exists(public_path('image/teams/member-1.png')))
                            <img src="{{ asset('image/teams/member-1.png') }}" alt="Gamma Ahmad Zaki"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-24 h-24 bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-2xl mx-auto mb-5 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                GZ</div>
                        @endif
                    </div>
                    <h3 class="font-display font-bold text-lg mb-2 text-gray-900">Gamma Ahmad Zaki</h3>
                    <p class="text-brand-blue-600 text-sm font-semibold mb-3">Team Member</p>
                    <p class="text-xs text-gray-500">gamma.budihardjo@student.president.ac.id</p>
                </div>


            </div>
            <!-- Mentors -->
            <div class="mt-16">
                <h3 class="text-3xl lg:text-4xl font-display font-bold text-center mb-12">Our <span
                        class="text-gradient">Mentors</span></h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                    <div
                        class="bg-linear-to-br from-white to-gray-50 p-8 rounded-2xl shadow-custom border border-gray-100 card-hover flex items-center space-x-6">

                        <div class="w-40 rounded-xl shrink-0 overflow-hidden">
                            @if(file_exists(public_path('image/teams/mentor-1.png')))
                                <img src="{{ asset('image/teams/mentor-1.png') }}" alt="Ir. Lucky Esa, M.B.A"
                                    class="w-full h-full object-cover">
                            @else
                                <div
                                    class="w-full h-full flex items-center  shadow-lg  justify-center bg-linear-to-br from-green-500 to-green-700  text-white text-2xl font-display font-bold">
                                    LE
                                </div>
                            @endif
                        </div>

                        <div>
                            <h4 class="font-display font-bold text-xl mb-2 text-gray-900">Ir. Lucky Esa, M.B.A</h4>
                            <p class="text-green-700 text-sm font-semibold">Start-up Way Coach & Mentor</p>
                        </div>
                    </div>

                    <div
                        class="bg-linear-to-br from-white to-gray-50 p-8 rounded-2xl shadow-custom border border-gray-100 card-hover flex items-center space-x-6">
                        <div class="w-40 rounded-xl shrink-0 overflow-hidden">
                            @if(file_exists(public_path('image/teams/mentor-2.png')))
                                <img src="{{ asset('image/teams/mentor-2.png') }}" alt="Ir. Lucky Esa, M.B.A"
                                    class="w-full h-full object-cover">
                            @else
                                <div
                                    class="w-full h-full flex items-center  shadow-lg  justify-center bg-linear-to-br from-green-500 to-green-700  text-white text-2xl font-display font-bold">
                                    LE
                                </div>
                            @endif
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-xl mb-2 text-gray-900">Frank Gerard Jacobus Silitonga
                            </h4>
                            <p class="text-orange-700 text-sm font-semibold">Chairman & Co-Founder of Aksi Nusantara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20 lg:py-24 px-6 lg:px-10 overflow-hidden">
        <!-- Background with white base and blue/red accents -->
        <div class="absolute inset-0 bg-linear-to-br from-brand-blue-50 via-white to-brand-red-50"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full hero-accent-blue opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-1/2 h-full hero-accent-red opacity-10 blur-3xl"></div>

        <div class="max-w-5xl mx-auto text-center relative z-10">
            <div
                class="inline-block mb-6 px-5 py-2.5 bg-linear-to-r from-brand-blue-600 to-brand-red-600 text-white rounded-full shadow-lg">
                <span class="text-sm font-bold tracking-wide">JOIN US TODAY</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight text-gray-900">Ready to Start Your
                Entrepreneurial Journey?</h2>
            <p class="text-xl lg:text-2xl mb-10 text-gray-700">Join Setsail BizAccel and turn your innovative ideas into
                sustainable businesses</p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                @guest
                    <a href="{{ route('filament.admin.auth.register') }}" class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl
                           hover:shadow-2xl transition-all duration-300 btn-primary
                           inline-flex items-center justify-center gap-2 hover:scale-105">
                        Get Started Today
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                @endguest

                @auth
                    <a href="/admin" class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl
                           hover:shadow-2xl transition-all duration-300 btn-primary
                           inline-flex items-center justify-center gap-2 hover:scale-105">
                        Go to Dashboard
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                @endauth
            </div>

        </div>
    </section>
@endsection