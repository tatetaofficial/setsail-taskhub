<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Setsail BizAccel') }}</title>

        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Instrument Sans', 'sans-serif'],
                        },
                    }
                }
            }
        </script>
        <style>
            .gradient-background {
                background: linear-gradient(to right, #2563eb, #4338ca);
            }
            .text-gradient {
                background: linear-gradient(to right, #2563eb, #4338ca);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .hero-pattern {
                background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
        </style>
    </head>
    <body class="antialiased bg-gray-50 text-gray-900">
        <div class="min-h-screen flex flex-col">
            <!-- Header -->
            <header class="w-full py-6 px-6 sm:px-10 flex justify-between items-center bg-white shadow-sm sticky top-0 z-50">
                <div class="flex items-center space-x-3">
                    <svg class="w-10 h-10 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <div>
                        <span class="text-2xl font-bold text-gray-900">Setsail</span>
                        <span class="text-xs block text-gray-500">BizAccel</span>
                    </div>
                </div>
                
                @if (Route::has('login'))
                    <div class="flex items-center space-x-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-md text-sm font-medium transition-colors">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-md text-sm font-medium transition-colors">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="gradient-background text-white px-4 py-2 rounded-md text-sm font-medium hover:shadow-lg transition-all">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </header>

            <main class="flex-1">
                <!-- Hero Section -->
                <section class="gradient-background hero-pattern text-white py-20 px-6 sm:px-10">
                    <div class="max-w-6xl mx-auto">
                        <div class="text-center">
                            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">President University <br><span class="text-yellow-300">Business Accelerator</span></h1>
                            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto mb-8">Building an entrepreneurial ecosystem for students at President University</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/admin" class="bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 text-lg">
                                    Access Setsail Hub
                                </a>
                                <a href="#about" class="bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-lg hover:bg-white hover:text-blue-600 transition-all duration-300 text-lg">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- About Section -->
                <section id="about" class="py-20 px-6 sm:px-10 bg-white">
                    <div class="max-w-6xl mx-auto">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                            <div>
                                <h2 class="text-4xl font-bold mb-6">What is <span class="text-gradient">Setsail BizAccel?</span></h2>
                                <p class="text-lg text-gray-700 mb-6 leading-relaxed">Setsail BizAccel is President University Business Accelerator. As a University-based Business Incubator, we aim to build an entrepreneurial ecosystem for students at President University.</p>
                                <p class="text-lg text-gray-700 leading-relaxed">We encourage students to create their own company during their University life and provide programs related to entrepreneurship which are embedded in the University curriculum.</p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-2xl">
                                <div class="bg-white p-6 rounded-xl shadow-lg">
                                    <svg class="w-16 h-16 text-blue-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    <h3 class="text-2xl font-bold mb-2">🏆 #1 in the World</h3>
                                    <p class="text-gray-600">President University ranked #1 in the World for Entrepreneurial Spirit (WURI Ranking)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Mission Section -->
                <section class="py-20 px-6 sm:px-10 bg-gray-50">
                    <div class="max-w-6xl mx-auto text-center">
                        <h2 class="text-4xl font-bold mb-6">Our <span class="text-gradient">Mission</span></h2>
                        <p class="text-xl text-gray-700 max-w-4xl mx-auto mb-12 leading-relaxed">Building Entrepreneurship Ecosystem and Knowledge Exchange Platform in President University Students. We are ready to change our student's mindset in becoming entrepreneurs.</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-600">
                                <div class="flex justify-center mb-4">
                                    <svg class="w-16 h-16 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold mb-3">Co-Working Space</h3>
                                <p class="text-gray-600">Capacity for 30 people with sophisticated infrastructure including high-performance PCs and 3D modeling devices</p>
                            </div>

                            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-indigo-600">
                                <div class="flex justify-center mb-4">
                                    <svg class="w-16 h-16 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM7 10a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold mb-3">Mentorship</h3>
                                <p class="text-gray-600">Guidance from experienced businessmen, alumni, and local & international incubators</p>
                            </div>

                            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-purple-600">
                                <div class="flex justify-center mb-4">
                                    <svg class="w-16 h-16 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold mb-3">Investment</h3>
                                <p class="text-gray-600">Access to funding opportunities and connections with investors to scale your business</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Facilities Section -->
                <section class="py-20 px-6 sm:px-10 bg-white">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="text-4xl font-bold text-center mb-6">What's in <span class="text-gradient">Setsail BizAccel?</span></h2>
                        <p class="text-xl text-gray-700 text-center max-w-3xl mx-auto mb-12">Equipped with sophisticated infrastructure to support your entrepreneurship journey</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center">
                                <div class="text-4xl mb-3">💻</div>
                                <h4 class="font-bold text-lg mb-2">High-Performance PCs</h4>
                                <p class="text-sm text-gray-600">For design, development & business operations</p>
                            </div>
                            
                            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-xl text-center">
                                <div class="text-4xl mb-3">📸</div>
                                <h4 class="font-bold text-lg mb-2">Photography Studio</h4>
                                <p class="text-sm text-gray-600">Professional setup for content creation</p>
                            </div>
                            
                            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-6 rounded-xl text-center">
                                <div class="text-4xl mb-3">🖨️</div>
                                <h4 class="font-bold text-lg mb-2">3D Modeling Device</h4>
                                <p class="text-sm text-gray-600">Turn your ideas into prototypes</p>
                            </div>
                            
                            <div class="bg-gradient-to-br from-pink-50 to-pink-100 p-6 rounded-xl text-center">
                                <div class="text-4xl mb-3">🎓</div>
                                <h4 class="font-bold text-lg mb-2">Workshop Space</h4>
                                <p class="text-sm text-gray-600">Capacity for up to 50 participants</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Team Section -->
                <section class="py-20 px-6 sm:px-10 bg-gray-50">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="text-4xl font-bold text-center mb-6">Our <span class="text-gradient">Team</span></h2>
                        <p class="text-xl text-gray-700 text-center mb-12">Dedicated professionals guiding your entrepreneurial journey</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                                <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-3xl font-bold">FG</div>
                                <h3 class="font-bold text-lg mb-1">Felix Goenadhi, S.Psi., M.Par</h3>
                                <p class="text-blue-600 text-sm mb-2">Director</p>
                                <p class="text-xs text-gray-500">felix.goenadhi@president.ac.id</p>
                            </div>
                            
                            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                                <div class="w-24 h-24 bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-3xl font-bold">BA</div>
                                <h3 class="font-bold text-lg mb-1">Bima Arya Wicaksono, BBA</h3>
                                <p class="text-indigo-600 text-sm mb-2">Program Manager</p>
                                <p class="text-xs text-gray-500">bima.arya@president.ac.id</p>
                            </div>
                            
                            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                                <div class="w-24 h-24 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-3xl font-bold">GZ</div>
                                <h3 class="font-bold text-lg mb-1">Gamma Ahmad Zaki</h3>
                                <p class="text-purple-600 text-sm mb-2">Team Member</p>
                                <p class="text-xs text-gray-500">gamma.budihardjo@student.president.ac.id</p>
                            </div>
                            
                            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                                <div class="w-24 h-24 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-3xl font-bold">FA</div>
                                <h3 class="font-bold text-lg mb-1">Fatimah Janahtun Azzahra</h3>
                                <p class="text-pink-600 text-sm mb-2">Team Member</p>
                            </div>
                        </div>
                        
                        <!-- Mentors -->
                        <div class="mt-16">
                            <h3 class="text-3xl font-bold text-center mb-8">Our <span class="text-gradient">Mentors</span></h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 flex items-center space-x-4">
                                    <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center text-white text-2xl font-bold flex-shrink-0">LE</div>
                                    <div>
                                        <h4 class="font-bold text-lg">Ir. Lucky Esa, M.B.A</h4>
                                        <p class="text-green-600 text-sm">Start-up Way Coach & Mentor</p>
                                    </div>
                                </div>
                                
                                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 flex items-center space-x-4">
                                    <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white text-2xl font-bold flex-shrink-0">FS</div>
                                    <div>
                                        <h4 class="font-bold text-lg">Frank Gerard Jacobus Silitonga</h4>
                                        <p class="text-orange-600 text-sm">Chairman & Co-Founder of Aksi Nusantara</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="gradient-background text-white py-16 px-6 sm:px-10">
                    <div class="max-w-4xl mx-auto text-center">
                        <h2 class="text-4xl font-bold mb-4">Ready to Start Your Entrepreneurial Journey?</h2>
                        <p class="text-xl mb-8 text-blue-100">Join Setsail BizAccel and turn your innovative ideas into sustainable businesses</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="/admin" class="bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                               SETSAIL HUB
                            </a>
                            @guest
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-yellow-400 text-gray-900 font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                                        Get Started Today
                                    </a>
                                @endif
                            @endguest
                        </div>
                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer class="w-full py-8 px-6 sm:px-10 bg-gray-900 text-white">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                        <div>
                            <div class="flex items-center space-x-2 mb-4">
                                <svg class="w-8 h-8 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                    <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                                </svg>
                                <span class="text-xl font-bold">Setsail BizAccel</span>
                            </div>
                            <p class="text-gray-400 text-sm">President University Business Accelerator - Building entrepreneurial ecosystem for tomorrow's innovators</p>
                        </div>
                        
                        <div>
                            <h4 class="font-bold mb-4">Location</h4>
                            <p class="text-gray-400 text-sm">President University<br>Jl. Ki Hajar Dewantara<br>Kota Jababeka, Cikarang<br>West Java, Indonesia</p>
                        </div>
                        
                        <div>
                            <h4 class="font-bold mb-4">Contact</h4>
                            <p class="text-gray-400 text-sm">Email: info@setsail.president.ac.id<br>Website: setsail.president.ac.id</p>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-800 pt-6 text-center">
                        <p class="text-gray-400 text-sm">© {{ date('Y') }} Setsail BizAccel - President University. All rights reserved.</p>
                        <a href="https://instagram.com/tateta.official"class="text-gray-500 text-xs mt-2">Develop by TATETA</a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>