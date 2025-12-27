<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Setsail BizAccel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=DM+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        display: ['Sora', 'sans-serif'],
                    },
                    colors: {
                        'brand-red': {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                        },
                        'brand-blue': {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        },
                    },
                }
            }
        }
    </script>
    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .gradient-primary {
            background: linear-gradient(135deg, #1e40af 0%, #dc2626 100%);
        }

        .gradient-accent {
            background: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
        }

        .text-gradient {
            background: linear-gradient(135deg, #1e40af 0%, #dc2626 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-background {
            background:
                linear-gradient(135deg, #ffffff 0%, #f0f4ff 50%, #fff1f2 100%),
                url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232563eb' fill-opacity='0.03'%3E%3Cpath d='M50 50c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10zM10 10c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10zm0 40c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .hero-accent-blue {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
        }

        .hero-accent-red {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
        }

        .btn-primary {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        .stat-card {
            background: linear-gradient(135deg, #ffffff 0%, #f9fafb 100%);
            border: 1px solid #e5e7eb;
        }

        .team-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }

        .shadow-custom {
            box-shadow: 0 10px 40px -10px rgba(30, 64, 175, 0.15);
        }

        .shadow-custom-red {
            box-shadow: 0 10px 40px -10px rgba(220, 38, 38, 0.15);
        }
    </style>
</head>

<body class="antialiased bg-white text-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header
            class="w-full py-5 px-6 lg:px-10 flex justify-between items-center bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-100">
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <svg class="w-11 h-11 text-brand-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <div class="absolute -top-1 -right-1 w-3 h-3 bg-brand-red-600 rounded-full"></div>
                </div>
                <div>
                    <span class="text-2xl font-display font-bold text-gray-900">Setsail</span>
                    <span class="text-xs block text-gray-500 font-medium tracking-wide">BIZ ACCEL</span>
                </div>
            </div>

            @if (Route::has('login'))
                <div class="flex items-center space-x-3">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-gray-700 hover:text-brand-blue-700 px-5 py-2.5 rounded-lg text-sm font-semibold transition-all hover:bg-gray-50">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-gray-700 hover:text-brand-blue-700 px-5 py-2.5 rounded-lg text-sm font-semibold transition-all hover:bg-gray-50">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="gradient-primary text-white px-6 py-2.5 rounded-lg text-sm font-semibold hover:shadow-lg transition-all btn-primary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>

        <main class="flex-1">
            <!-- Hero Section -->
            <section class="hero-background py-24 lg:py-32 px-6 lg:px-10 relative overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute top-10 right-10 w-72 h-72 hero-accent-blue rounded-full blur-3xl opacity-20"></div>
                <div class="absolute bottom-10 left-10 w-80 h-80 hero-accent-red rounded-full blur-3xl opacity-20">
                </div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-brand-blue-100 rounded-full blur-3xl opacity-30">
                </div>

                <div class="max-w-7xl mx-auto relative z-10">
                    <div class="text-center">
                        <div
                            class="inline-block mb-6 px-5 py-2.5 bg-linear-to-r from-brand-blue-600 to-brand-red-600 text-white rounded-full shadow-lg">
                            <span class="text-sm font-bold tracking-wide">🏆 #1 IN THE WORLD FOR ENTREPRENEURIAL
                                SPIRIT</span>
                        </div>
                        <h1
                            class="text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight text-gray-900">
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
                                Access Setsail Hub
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
            <section id="about" class="py-20 lg:py-28 px-6 lg:px-10 bg-linear-to-b from-white to-gray-50">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div>
                            <div
                                class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-700 rounded-full text-sm font-semibold">
                                About Us</div>
                            <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight">
                                What is <span class="text-gradient">Setsail BizAccel?</span>
                            </h2>
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">Setsail BizAccel is President
                                University Business Accelerator. As a University-based Business Incubator, we aim to
                                build an entrepreneurial ecosystem for students at President University.</p>
                            <p class="text-lg text-gray-700 mb-8 leading-relaxed">We encourage students to create their
                                own company during their University life and provide programs related to
                                entrepreneurship which are embedded in the University curriculum.</p>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-0.5 bg-linear-to-r from-brand-blue-700 to-brand-red-600"></div>
                                <span class="text-sm font-semibold text-gray-500 tracking-wide">SHAPING FUTURE
                                    ENTREPRENEURS</span>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="stat-card p-10 rounded-3xl shadow-custom card-hover">
                                <div
                                    class="inline-flex items-center justify-center w-20 h-20 bg-linear-to-br from-brand-red-500 to-brand-red-600 rounded-2xl mb-6 shadow-lg">
                                    <svg class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                </div>
                                <h3 class="text-3xl font-display font-bold mb-3 text-gray-900">🏆 #1 in the World</h3>
                                <p class="text-gray-600 text-lg leading-relaxed">President University ranked #1 in the
                                    World for Entrepreneurial Spirit (WURI Ranking)</p>
                                <div class="mt-6 pt-6 border-t border-gray-200">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-4 h-4 mr-2 text-brand-blue-600" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Recognized globally for excellence
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-brand-blue-100 rounded-3xl -z-10">
                            </div>
                            <div class="absolute -top-6 -left-6 w-32 h-32 bg-brand-red-100 rounded-3xl -z-10"></div>
                        </div>
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
                        <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed">Building Entrepreneurship
                            Ecosystem and Knowledge Exchange Platform in President University Students. We are ready to
                            change our student's mindset in becoming entrepreneurs.</p>
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
                            <p class="text-gray-600 leading-relaxed">Capacity for 30 people with sophisticated
                                infrastructure including high-performance PCs and 3D modeling devices</p>
                        </div>

                        <div
                            class="bg-white p-8 lg:p-10 rounded-2xl shadow-custom-red card-hover border border-gray-100">
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
                            <p class="text-gray-600 leading-relaxed">Guidance from experienced businessmen, alumni, and
                                local & international incubators</p>
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
                            <p class="text-gray-600 leading-relaxed">Access to funding opportunities and connections
                                with investors to scale your business</p>
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
                        <p class="text-xl text-gray-700 max-w-3xl mx-auto">Equipped with sophisticated infrastructure to
                            support your entrepreneurship journey</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div
                            class="bg-white p-8 rounded-2xl border-2 border-brand-blue-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                            <div class="text-5xl mb-4">💻</div>
                            <h4 class="font-display font-bold text-lg mb-3 text-gray-900">High-Performance PCs</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">For design, development & business
                                operations</p>
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
                        <p class="text-xl text-gray-700">Dedicated professionals guiding your entrepreneurial journey
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mb-20">
                        <div
                            class="team-card p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                            <div
                                class="w-24 h-24 bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-2xl mx-auto mb-5 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                FG</div>
                            <h3 class="font-display font-bold text-lg mb-2 text-gray-900">Felix Goenadhi, S.Psi., M.Par
                            </h3>
                            <p class="text-brand-blue-600 text-sm font-semibold mb-3">Director</p>
                            <p class="text-xs text-gray-500">felix.goenadhi@president.ac.id</p>
                        </div>

                        <div
                            class="team-card p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                            <div
                                class="w-24 h-24 bg-linear-to-br from-brand-red-500 to-brand-red-700 rounded-2xl mx-auto mb-5 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                BA</div>
                            <h3 class="font-display font-bold text-lg mb-2 text-gray-900">Bima Arya Wicaksono, BBA</h3>
                            <p class="text-brand-red-600 text-sm font-semibold mb-3">Program Manager</p>
                            <p class="text-xs text-gray-500">bima.arya@president.ac.id</p>
                        </div>

                        <div
                            class="team-card p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                            <div
                                class="w-24 h-24 bg-linear-to-br from-brand-blue-600 to-brand-red-600 rounded-2xl mx-auto mb-5 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                GZ</div>
                            <h3 class="font-display font-bold text-lg mb-2 text-gray-900">Gamma Ahmad Zaki</h3>
                            <p class="text-brand-blue-600 text-sm font-semibold mb-3">Team Member</p>
                            <p class="text-xs text-gray-500">gamma.budihardjo@student.president.ac.id</p>
                        </div>

                        <div
                            class="team-card p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                            <div
                                class="w-24 h-24 bg-linear-to-br from-brand-red-500 to-brand-blue-600 rounded-2xl mx-auto mb-5 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                FA</div>
                            <h3 class="font-display font-bold text-lg mb-2 text-gray-900">Fatimah Janahtun Azzahra</h3>
                            <p class="text-brand-red-600 text-sm font-semibold mb-3">Team Member</p>
                        </div>
                    </div>

                    <!-- Mentors -->
                    <div class="mt-16">
                        <h3 class="text-3xl lg:text-4xl font-display font-bold text-center mb-12">Our <span
                                class="text-gradient">Mentors</span></h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                            <div
                                class="bg-linear-to-br from-white to-gray-50 p-8 rounded-2xl shadow-custom border border-gray-100 card-hover flex items-center space-x-6">
                                <div
                                    class="w-20 h-20 bg-linear-to-br from-green-500 to-green-700 rounded-xl shrink-0 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                    LE</div>
                                <div>
                                    <h4 class="font-display font-bold text-xl mb-2 text-gray-900">Ir. Lucky Esa, M.B.A
                                    </h4>
                                    <p class="text-green-700 text-sm font-semibold">Start-up Way Coach & Mentor</p>
                                </div>
                            </div>

                            <div
                                class="bg-linear-to-br from-white to-gray-50 p-8 rounded-2xl shadow-custom border border-gray-100 card-hover flex items-center space-x-6">
                                <div
                                    class="w-20 h-20 bg-linear-to-br from-orange-500 to-orange-700 rounded-xl shrink-0 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                    FS</div>
                                <div>
                                    <h4 class="font-display font-bold text-xl mb-2 text-gray-900">Frank Gerard Jacobus
                                        Silitonga</h4>
                                    <p class="text-orange-700 text-sm font-semibold">Chairman & Co-Founder of Aksi
                                        Nusantara</p>
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
                    <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight text-gray-900">Ready to
                        Start Your Entrepreneurial Journey?</h2>
                    <p class="text-xl lg:text-2xl mb-10 text-gray-700">Join Setsail BizAccel and turn your innovative
                        ideas into sustainable businesses</p>
                    <div class="flex flex-col sm:flex-row gap-5 justify-center">
                        <a href="/admin"
                            class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-primary inline-block hover:scale-105">
                            SETSAIL HUB
                        </a>
                        @guest
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="hero-accent-red text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-primary inline-block hover:scale-105">
                                    Get Started Today
                                </a>
                            @endif
                        @endguest
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="w-full py-12 lg:py-16 px-6 lg:px-10 bg-gray-900 text-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                    <div>
                        <div class="flex items-center space-x-3 mb-6">
                            <svg class="w-10 h-10 text-brand-blue-400" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                            </svg>
                            <div>
                                <span class="text-xl font-display font-bold">Setsail BizAccel</span>
                                <span class="text-xs block text-gray-400">President University</span>
                            </div>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">Building entrepreneurial ecosystem for
                            tomorrow's innovators. Empowering students to create, innovate, and lead.</p>
                    </div>

                    <div>
                        <h4 class="font-display font-bold mb-5 text-lg">Location</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">President University<br>Jl. Ki Hajar
                            Dewantara<br>Kota Jababeka, Cikarang<br>West Java, Indonesia</p>
                    </div>

                    <div>
                        <h4 class="font-display font-bold mb-5 text-lg">Contact</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            <span class="block mb-2">📧 info@setsail.president.ac.id</span>
                            <span class="block">🌐 setsail.president.ac.id</span>
                        </p>
                    </div>
                </div>

                <div class="border-t border-gray-800 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <p class="text-gray-400 text-sm">© {{ date('Y') }} Setsail BizAccel - President University. All
                            rights reserved.</p>
                        <a href="https://instagram.com/tateta.official"
                            class="text-gray-500 text-xs hover:text-brand-blue-400 transition-colors">Developed by
                            TATETA</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>