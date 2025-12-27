@extends('landing.layouts.main')

@section('title', 'News Detail - Setsail BizAccel')

@section('content')
    <!-- Breadcrumb Section -->
    <section class="py-8 px-6 lg:px-10 bg-gray-50 border-b border-gray-200">
        <div class="max-w-5xl mx-auto">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-brand-blue-600 transition-colors">Home</a>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="/news" class="text-gray-600 hover:text-brand-blue-600 transition-colors">News</a>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-brand-blue-600 font-semibold">Article</span>
            </nav>
        </div>
    </section>

    <!-- Article Header -->
    <section class="py-16 lg:py-20 px-6 lg:px-10 bg-white">
        <div class="max-w-5xl mx-auto">
            <!-- Category Badge -->
            <div class="mb-6">
                <span class="inline-block px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full text-sm font-bold">
                    🏆 ACHIEVEMENT
                </span>
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold mb-6 leading-tight text-gray-900">
                President University Ranked #1 in Entrepreneurial Spirit Worldwide
            </h1>

            <!-- Meta Information -->
            <div class="flex flex-wrap items-center gap-6 pb-8 border-b border-gray-200 mb-8">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-linear-to-br from-brand-blue-500 to-brand-blue-600 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Written by</p>
                        <p class="font-semibold text-gray-900">Setsail BizAccel Team</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="font-medium">December 15, 2025</span>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">5 min read</span>
                </div>
            </div>

            <!-- Share Buttons -->
            <div class="flex items-center gap-4 mb-8">
                <span class="text-sm font-semibold text-gray-700">Share:</span>
                <div class="flex gap-2">
                    <button
                        class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </button>
                    <button
                        class="w-10 h-10 rounded-full bg-sky-500 hover:bg-sky-600 text-white flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </button>
                    <button
                        class="w-10 h-10 rounded-full bg-blue-800 hover:bg-blue-900 text-white flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </button>
                    <button
                        class="w-10 h-10 rounded-full bg-green-600 hover:bg-green-700 text-white flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    <section class="py-0 px-6 lg:px-10 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="rounded-2xl overflow-hidden shadow-custom mb-12">
                <img src="{{ asset('image/news/featured-ranking.jpg') }}" alt="President University #1 Ranking"
                    class="w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="pb-20 px-6 lg:px-10 bg-white">
        <div class="max-w-4xl mx-auto">
            <!-- Article Body -->
            <article class="prose prose-lg max-w-none">
                <!-- Lead Paragraph -->
                <p class="text-xl leading-relaxed text-gray-700 mb-8 font-medium">
                    President University has achieved a remarkable milestone by being ranked #1 worldwide in Entrepreneurial
                    Spirit by the World University Rankings for Innovation (WURI) 2025. This prestigious recognition places
                    President University ahead of renowned institutions such as Harvard University, Yonsei University, and
                    the National University of Singapore.
                </p>

                <h2 class="text-3xl font-display font-bold mt-12 mb-6 text-gray-900">A Testament to Excellence in
                    Entrepreneurship</h2>

                <p class="text-lg leading-relaxed text-gray-700 mb-6">
                    The WURI ranking evaluates universities based on their ability to foster entrepreneurial thinking,
                    innovation, and the practical application of knowledge. President University's top ranking is a testament
                    to its unwavering commitment to creating a vibrant entrepreneurial ecosystem that empowers students to
                    transform innovative ideas into successful ventures.
                </p>

                <p class="text-lg leading-relaxed text-gray-700 mb-6">
                    This achievement reflects the university's strategic initiatives in integrating entrepreneurship
                    education across all programs, providing students with hands-on experience, mentorship, and access to
                    resources that enable them to launch and scale their own businesses.
                </p>

                <!-- Quote Block -->
                <div
                    class="my-12 p-8 bg-linear-to-br from-brand-blue-50 to-brand-red-50 border-l-4 border-brand-blue-600 rounded-r-xl">
                    <svg class="w-10 h-10 text-brand-blue-600 mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-xl italic text-gray-800 leading-relaxed mb-4">
                        "This ranking is not just about President University; it's about every student who has dreamed of
                        creating something meaningful, every entrepreneur who has taken the leap, and every innovation that
                        has emerged from our community."
                    </p>
                    <p class="text-base font-semibold text-brand-blue-600">— University Leadership Team</p>
                </div>

                <h2 class="text-3xl font-display font-bold mt-12 mb-6 text-gray-900">The Role of SetSail BizAccel</h2>

                <p class="text-lg leading-relaxed text-gray-700 mb-6">
                    At the heart of this achievement is <strong>SetSail BizAccel</strong>, President University's official
                    business incubator. SetSail BizAccel has been instrumental in nurturing student innovation and
                    entrepreneurship through comprehensive support programs that include:
                </p>

                <!-- Feature List -->
                <div class="my-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-3 bg-white p-6 rounded-xl border-2 border-brand-blue-100">
                        <div class="shrink-0">
                            <div class="w-8 h-8 bg-brand-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Business Incubation Programs</h4>
                            <p class="text-sm text-gray-600">6-month structured programs for student startups</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 bg-white p-6 rounded-xl border-2 border-brand-blue-100">
                        <div class="shrink-0">
                            <div class="w-8 h-8 bg-brand-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Expert Mentorship</h4>
                            <p class="text-sm text-gray-600">One-on-one guidance from industry professionals</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 bg-white p-6 rounded-xl border-2 border-brand-blue-100">
                        <div class="shrink-0">
                            <div class="w-8 h-8 bg-brand-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">State-of-the-Art Facilities</h4>
                            <p class="text-sm text-gray-600">Co-working spaces, labs, and equipment</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 bg-white p-6 rounded-xl border-2 border-brand-blue-100">
                        <div class="shrink-0">
                            <div class="w-8 h-8 bg-brand-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Funding Opportunities</h4>
                            <p class="text-sm text-gray-600">Access to seed funding and investor networks</p>
                        </div>
                    </div>
                </div>

                <h2 class="text-3xl font-display font-bold mt-12 mb-6 text-gray-900">Building a Global Entrepreneurial
                    Ecosystem</h2>

                <p class="text-lg leading-relaxed text-gray-700 mb-6">
                    SetSail BizAccel has created a thriving environment where students from diverse backgrounds and
                    disciplines come together to innovate, collaborate, and build businesses that address real-world
                    challenges. The incubator supports ventures across various sectors including technology, creative
                    industries, social enterprises, food and beverage, and more.
                </p>

                <p class="text-lg leading-relaxed text-gray-700 mb-6">
                    Through programs like Ready SetSail, students receive comprehensive training in business development,
                    financial management, marketing, and operations. The incubator also facilitates connections with alumni
                    entrepreneurs, industry partners, and international mentors, creating a robust network that extends
                    beyond graduation.
                </p>

                <!-- Statistics -->
                <div class="my-12 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-linear-to-br from-brand-blue-50 to-white rounded-xl border border-brand-blue-100">
                        <div class="text-4xl font-display font-bold text-brand-blue-600 mb-2">50+</div>
                        <p class="text-sm text-gray-600 font-medium">Active Startups</p>
                    </div>
                    <div class="text-center p-6 bg-linear-to-br from-brand-red-50 to-white rounded-xl border border-brand-red-100">
                        <div class="text-4xl font-display font-bold text-brand-red-600 mb-2">100+</div>
                        <p class="text-sm text-gray-600 font-medium">Student Entrepreneurs</p>
                    </div>
                    <div class="text-center p-6 bg-linear-to-br from-green-50 to-white rounded-xl border border-green-100">
                        <div class="text-4xl font-display font-bold text-green-600 mb-2">30+</div>
                        <p class="text-sm text-gray-600 font-medium">Expert Mentors</p>
                    </div>
                    <div class="text-center p-6 bg-linear-to-br from-purple-50 to-white rounded-xl border border-purple-100">
                        <div class="text-4xl font-display font-bold text-purple-600 mb-2">20+</div>
                        <p class="text-sm text-gray-600 font-medium">Alumni Companies</p>
                    </div>
                </div>

                <h2 class="text-3xl font-display font-bold mt-12 mb-6 text-gray-900">Looking Ahead</h2>

                <p class="text-lg leading-relaxed text-gray-700 mb-6">
                    This #1 ranking is not just a celebration of past achievements but a catalyst for future innovation.
                    President University and SetSail BizAccel remain committed to expanding their programs, strengthening
                    partnerships, and creating even more opportunities for students to pursue their entrepreneurial dreams.
                </p>

                <p class="text-lg leading-relaxed text-gray-700 mb-6">
                    As we move forward, we invite more students, partners, and supporters to join us in this exciting journey
                    of building a globally competitive entrepreneurial ecosystem that makes a lasting impact on society.
                </p>

                <!-- Call to Action Box -->
                <div class="my-12 p-8 bg-linear-to-br from-brand-blue-600 to-brand-red-600 rounded-2xl text-white">
                    <h3 class="text-2xl font-display font-bold mb-4">Join the #1 Entrepreneurial Ecosystem</h3>
                    <p class="text-lg mb-6 text-white/90">
                        Ready to turn your innovative ideas into reality? Become part of SetSail BizAccel and start your
                        entrepreneurial journey today.
                    </p>
                    <a href="/programs"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue-600 font-bold py-3 px-8 rounded-xl hover:bg-gray-100 transition-all duration-300">
                        Explore Our Programs
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Tags -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h4 class="text-sm font-semibold text-gray-700 mb-4">Tags:</h4>
                <div class="flex flex-wrap gap-2">
                    <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-brand-blue-100 hover:text-brand-blue-700 transition-colors cursor-pointer">
                        Achievement
                    </span>
                    <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-brand-blue-100 hover:text-brand-blue-700 transition-colors cursor-pointer">
                        WURI Ranking
                    </span>
                    <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-brand-blue-100 hover:text-brand-blue-700 transition-colors cursor-pointer">
                        Entrepreneurship
                    </span>
                    <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-brand-blue-100 hover:text-brand-blue-700 transition-colors cursor-pointer">
                        Innovation
                    </span>
                    <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-brand-blue-100 hover:text-brand-blue-700 transition-colors cursor-pointer">
                        SetSail BizAccel
                    </span>
                </div>
            </div>

            <!-- Share Again -->
            <div class="mt-8 pt-8 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <h4 class="text-sm font-semibold text-gray-700">Share this article:</h4>
                    <div class="flex gap-2">
                        <button
                            class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </button>
                        <button
                            class="w-10 h-10 rounded-full bg-sky-500 hover:bg-sky-600 text-white flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </button>
                        <button
                            class="w-10 h-10 rounded-full bg-blue-800 hover:bg-blue-900 text-white flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </button>
                        <button
                            class="w-10 h-10 rounded-full bg-green-600 hover:bg-green-700 text-white flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    <section class="py-20 px-6 lg:px-10 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl lg:text-4xl font-display font-bold mb-12 text-center">
                Related <span class="text-gradient">Articles</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Related Article 1 -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('image/news/p2p-pitch-product.jpg') }}" alt="P2P Event"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-brand-blue-100 text-brand-blue-700 rounded-full text-xs font-bold mb-3">
                            EVENT
                        </span>
                        <h3 class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            P2P: Pitch to Product
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Master the art of pitching and turn your ideas into market-ready products.
                        </p>
                        <a href="#"
                            class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 inline-flex items-center gap-1">
                            Read More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Related Article 2 -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('image/news/fireside-chat.jpg') }}" alt="Fireside Chat"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-bold mb-3">
                            TALK
                        </span>
                        <h3 class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            Fireside Chat: Failures to Success
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Learn how failures can turn into success stories in business development.
                        </p>
                        <a href="#"
                            class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 inline-flex items-center gap-1">
                            Read More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Related Article 3 -->
                <article class="bg-white rounded-2xl shadow-custom border border-gray-100 overflow-hidden card-hover group">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('image/news/mentoring-maya-lucky.jpg') }}" alt="Mentoring"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold mb-3">
                            MENTORING
                        </span>
                        <h3 class="text-xl font-display font-bold mb-3 text-gray-900 group-hover:text-brand-blue-600 transition-colors">
                            1 ON 1 Mentoring Sessions
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Get personalized guidance from experienced mentors to grow your business.
                        </p>
                        <a href="#"
                            class="text-brand-blue-600 font-semibold text-sm hover:text-brand-blue-700 inline-flex items-center gap-1">
                            Read More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20 px-6 lg:px-10 overflow-hidden">
        <div class="absolute inset-0 bg-linear-to-br from-brand-blue-50 via-white to-brand-red-50"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full hero-accent-blue opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-1/2 h-full hero-accent-red opacity-10 blur-3xl"></div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-3xl lg:text-4xl font-display font-bold mb-4 text-gray-900">
                Want to Stay Updated?
            </h2>
            <p class="text-lg text-gray-700 mb-8">
                Subscribe to our newsletter and never miss important updates
            </p>
            <a href="/news"
                class="inline-flex items-center gap-2 hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-primary hover:scale-105">
                Back to News
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
        </div>
    </section>
@endsection