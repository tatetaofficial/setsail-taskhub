@extends('landing.layouts.main')

@section('title', 'News & Events - Setsail BizAccel')

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
                <div
                    class="inline-flex items-center gap-2 mb-6 px-5 py-2.5 bg-linear-to-r from-brand-blue-500 to-brand-red-500 text-white rounded-full shadow-lg">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    <span class="text-sm font-bold tracking-wide leading-none">
                        LATEST UPDATES
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight text-gray-900">
                    News & <span class="relative inline-block">
                        <span class="text-gradient">Events</span>
                        <div
                            class="absolute -bottom-2 left-0 right-0 h-1 bg-linear-to-r from-brand-blue-600 via-brand-red-500 to-brand-blue-600 rounded-full">
                        </div>
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto mb-10 leading-relaxed">
                    Stay updated with the latest news, events, and achievements from Setsail BizAccel
                </p>
            </div>
        </div>
    </section>

    <!-- Featured News Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-700 rounded-full text-sm font-semibold">
                    Featured Story
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    <span class="text-gradient">Highlighted</span> Achievement
                </h2>
            </div>

            <!-- Featured Article -->
            <div class="bg-white rounded-3xl shadow-custom border border-gray-100 overflow-hidden card-hover">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    <div class="h-96 lg:h-auto">
                        <img src="{{ asset('image/news/featured-ranking.jpg') }}" alt="President University #1 Ranking"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-10 lg:p-12 flex flex-col justify-center">
                        <div
                            class="inline-block w-fit mb-4 px-3 py-1.5 bg-yellow-100 text-yellow-800 rounded-full text-xs font-bold">
                            🏆 ACHIEVEMENT
                        </div>
                        <h3 class="text-3xl lg:text-4xl font-display font-bold mb-4 text-gray-900 leading-tight">
                            President University Ranked #1 in Entrepreneurial Spirit Worldwide
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            President University has been ranked #1 worldwide in Entrepreneurial Spirit by the World
                            University Rankings for Innovation (WURI) 2025, surpassing prestigious institutions like
                            Harvard,
                            Yonsei, and the National University of Singapore.
                        </p>
                        <p class="text-base text-gray-600 leading-relaxed mb-6">
                            This achievement is closely tied to SetSail BizAccel, the university's official business
                            incubator, which actively nurtures student innovation and entrepreneurship. By providing a
                            platform
                            for aspiring entrepreneurs to develop real ventures, SetSail plays a vital role in shaping a
                            globally competitive entrepreneurial ecosystem within President University.
                        </p>
                        <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-brand-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-sm text-gray-600 font-medium">December 2025</span>
                            </div>
                            <a href="{{ route('landing.news.show', 'president-university-ranked-1') }}"
                                class="inline-flex items-center gap-2 text-brand-blue-600 font-semibold hover:text-brand-blue-700">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent News Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-red-50 text-brand-red-700 rounded-full text-sm font-semibold">
                    Recent Updates
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Latest <span class="text-gradient">News</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Discover our recent events, programs, and activities
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- P2P: Pitch to Product -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('image/news/p2p-pitch-product.jpg') }}" alt="P2P: Pitch to Product"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute top-4 left-4 px-3 py-1 bg-brand-blue-600 text-white rounded-full text-xs font-bold">
                            EVENT
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            P2P: Pitch to Product
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm mb-4">
                            An empowering event designed to help you master the art of pitching — from crafting your ideas
                            with confidence to turning them into real, market-ready products. Learn how to communicate your
                            vision effectively and captivate investors.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="font-medium">November 2024</span>
                            </div>
                            <a href="#"
                                class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 transition-colors inline-flex items-center gap-1">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Accreditation Activities -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('image/news/accreditation-cs.jpg') }}" alt="Accreditation Activities"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute top-4 left-4 px-3 py-1 bg-purple-600 text-white rounded-full text-xs font-bold">
                            ACTIVITY
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            Accreditation Activities of Computer Science Faculty
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm mb-4">
                            The accreditation activities for the Computer Science Faculty were held on December 2, 2024, at
                            the Fablab, PUCC. This event aimed to showcase the advancements and achievements of the faculty
                            in
                            meeting accreditation standards.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="font-medium">December 2024</span>
                            </div>
                            <a href="#"
                                class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 transition-colors inline-flex items-center gap-1">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Fireside Chat -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('image/news/fireside-chat.jpg') }}" alt="Fireside Chat"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute top-4 left-4 px-3 py-1 bg-orange-600 text-white rounded-full text-xs font-bold">
                            TALK
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            Fireside Chat: How Failures Turn Into Success
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm mb-4">
                            An insight exchange event held by Setsail BizAccel on November 25, 2024 with Kak Maya Ruhmaya as
                            Director, featuring voices from tenants: Buzzy Wizzy, Alegra Group, Tococo Indonesia,
                            Soapberries,
                            and Clarityou.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="font-medium">November 2024</span>
                            </div>
                            <a href="#"
                                class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 transition-colors inline-flex items-center gap-1">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 1 ON 1 Mentoring -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('image/news/mentoring-maya-lucky.jpg') }}"
                            alt="1 ON 1 Mentoring with Kak Maya & Sir Lucky"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 bg-green-600 text-white rounded-full text-xs font-bold">
                            MENTORING
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            1 ON 1 Mentoring with Kak Maya & Sir Lucky
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm mb-4">
                            Starting a business from scratch isn't easy and is certainly full of challenges. But with the
                            right
                            guidance and mentorship, this journey can turn into an exciting adventure full of learning
                            experiences with insights from experienced mentors.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="font-medium">Ongoing</span>
                            </div>
                            <a href="#"
                                class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 transition-colors inline-flex items-center gap-1">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Ready Setsail 2024 Program -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('image/news/ready-setsail-mentoring.jpg') }}"
                            alt="Mentoring Session: Ready Setsail 2024"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute top-4 left-4 px-3 py-1 bg-brand-blue-600 text-white rounded-full text-xs font-bold">
                            PROGRAM
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            Mentoring Session: Ready Setsail 2024 Program
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm mb-4">
                            The Ready Setsail 2024 program is an exciting opportunity for President University students to
                            dive
                            into professional development. Designed to provide hands-on experience in roles like Admin, Web
                            Developer, and Content Creator.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="font-medium">2024</span>
                            </div>
                            <a href="#"
                                class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 transition-colors inline-flex items-center gap-1">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- P2MW Program -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('image/news/p2mw-program.jpg') }}"
                            alt="Entrepreneurship Development Program (P2MW) 2024"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute top-4 left-4 px-3 py-1 bg-brand-red-600 text-white rounded-full text-xs font-bold">
                            PROGRAM
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            Entrepreneurship Development Program (P2MW) 2024
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm mb-4">
                            A specialized initiative designed to support students who already run their own businesses. This
                            program offers development opportunities and coaching assistance by providing both mentorship
                            and
                            business coaching to participating students.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="font-medium">2024</span>
                            </div>
                            <a href="#"
                                class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 transition-colors inline-flex items-center gap-1">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16">
                <button
                    class="inline-flex items-center gap-2 bg-white border-2 border-brand-blue-600 text-brand-blue-600 font-bold py-4 px-10 rounded-xl hover:bg-brand-blue-600 hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Load More News
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 lg:py-24 px-6 lg:px-10 bg-white">
        <div class="max-w-5xl mx-auto">
            <div
                class="bg-linear-to-br from-brand-blue-600 to-brand-red-600 rounded-3xl shadow-custom p-10 lg:p-16 text-center relative overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>

                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-display font-bold mb-4 text-white">
                        Stay Updated with Our Newsletter
                    </h2>
                    <p class="text-xl text-white/90 mb-8">
                        Subscribe to receive the latest news, events, and opportunities from Setsail BizAccel
                    </p>
                    <form class="max-w-md mx-auto">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="email" placeholder="Enter your email address"
                                class="flex-1 px-6 py-4 rounded-xl border-2 border-white/20 bg-white/10 text-white placeholder-white/60 focus:outline-none focus:border-white focus:bg-white/20 transition-all">
                            <button type="submit"
                                class="bg-white text-brand-blue-600 font-bold py-4 px-8 rounded-xl hover:bg-gray-100 transition-all duration-300 shadow-lg whitespace-nowrap">
                                Subscribe Now
                            </button>
                        </div>
                    </form>
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
                <span class="text-sm font-bold tracking-wide">JOIN OUR COMMUNITY</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight text-gray-900">
                Be Part of the Entrepreneurial Journey
            </h2>
            <p class="text-xl lg:text-2xl mb-10 text-gray-700">
                Connect with us and be the first to know about upcoming events and opportunities
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                @guest
                    <a href="{{ route('filament.admin.auth.register') }}"
                        class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-primary inline-flex items-center justify-center gap-2 hover:scale-105">
                        Get Started Today
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                @endguest

                @auth
                    <a href="/admin"
                        class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-primary inline-flex items-center justify-center gap-2 hover:scale-105">
                        Go to Dashboard
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                @endauth

                <a href="/"
                    class="bg-white border-2 border-brand-red-500 text-brand-red-600 font-bold py-4 px-10 rounded-xl hover:bg-brand-red-500 hover:text-white transition-all duration-300 inline-flex items-center justify-center gap-2 shadow-lg">
                    Back to Home
                </a>
            </div>
        </div>
    </section>
@endsection