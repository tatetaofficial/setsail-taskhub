@extends('landing.layouts.main')

@section('title', 'Programs - Setsail BizAccel')

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
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <span class="text-sm font-bold tracking-wide leading-none">
                        EMPOWERING STUDENT ENTREPRENEURS
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight text-gray-900">
                    Our <span class="relative inline-block">
                        <span class="text-gradient">Programs</span>
                        <div
                            class="absolute -bottom-2 left-0 right-0 h-1 bg-linear-to-r from-brand-blue-600 via-brand-red-500 to-brand-blue-600 rounded-full">
                        </div>
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto mb-10 leading-relaxed">
                    Comprehensive incubation programs designed to transform your entrepreneurial ideas into thriving
                    businesses
                </p>
            </div>
        </div>
    </section>

    <!-- Student Incubation Business Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-700 rounded-full text-sm font-semibold">
                    Main Program
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    <span class="text-gradient">Student Incubation</span> Business
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Comprehensive incubation program to nurture student entrepreneurs at President University
                </p>
            </div>

            <!-- Ready SetSail Program -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-3 mb-6 px-6 py-3 bg-linear-to-r from-brand-blue-500 to-brand-red-500 text-white rounded-full shadow-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="font-bold tracking-wide">READY SETSAIL</span>
                    </div>
                    <h3 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-4">
                        Ready SetSail Incubation Program
                    </h3>
                    <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                        An endeavor to enhance the entrepreneurial thinking of President University students through mentorship, funding, and comprehensive workshops
                    </p>
                </div>

                <!-- Ready SetSail Batches -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                    <!-- 4th Batch 2024 -->
                    <div class="space-y-4">
                        <div class="bg-linear-to-br from-brand-blue-50 to-white p-8 lg:p-10 rounded-3xl shadow-custom border border-gray-100">
                            <div class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-600 text-white rounded-full text-sm font-semibold">
                                Current Batch
                            </div>
                            <h4 class="text-2xl lg:text-3xl font-display font-bold mb-4 text-gray-900">
                                4th Batch 2024
                            </h4>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Ready SetSail 4th batch 2024 is an endeavor to enhance the entrepreneurial thinking of President University students, batch 2024. Mentorship, funding, and workshops will be provided for developing business skills in order to create their own business.
                            </p>
                            <div class="flex items-center space-x-4 mt-6">
                                <div class="w-12 h-0.5 bg-linear-to-r from-brand-blue-700 to-brand-red-600"></div>
                                <span class="text-sm font-semibold text-gray-500 tracking-wide">BATCH 2024 STUDENTS</span>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-lg border-2 border-brand-blue-100">
                            <img src="{{ asset('image/programs/rs-batch-4.png') }}" 
                                alt="Ready SetSail 4th Batch 2024" 
                                class="w-full  rounded-xl object-cover">
                            <div class="mt-3 text-center">
                                <p class="text-sm font-semibold text-brand-blue-600">4th Batch Program 2024</p>
                            </div>
                        </div>
                    </div>

                    <!-- 3rd Batch 2023 -->
                    <div class="space-y-4">
                        <div class="bg-linear-to-br from-brand-red-50 to-white p-8 lg:p-10 rounded-3xl shadow-custom border border-gray-100">
                            <div class="inline-block mb-4 px-4 py-1.5 bg-brand-red-600 text-white rounded-full text-sm font-semibold">
                                Previous Batch
                            </div>
                            <h4 class="text-2xl lg:text-3xl font-display font-bold mb-4 text-gray-900">
                                3rd Batch 2023
                            </h4>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                READY SETSAIL incubation program is an opportunity not to be missed for those of you who are coming from batch 2020-2022.
                            </p>
                            <p class="text-base text-gray-700 mb-3 font-semibold">Program categories:</p>
                            <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                                <div class="flex items-center space-x-2">
                                    <div class="w-1.5 h-1.5 bg-brand-red-600 rounded-full"></div>
                                    <span>Creative Industry</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-1.5 h-1.5 bg-brand-red-600 rounded-full"></div>
                                    <span>Technology</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-1.5 h-1.5 bg-brand-red-600 rounded-full"></div>
                                    <span>Social</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-1.5 h-1.5 bg-brand-red-600 rounded-full"></div>
                                    <span>Tourism</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-1.5 h-1.5 bg-brand-red-600 rounded-full"></div>
                                    <span>Culinary</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-lg border-2 border-brand-red-100">
                            <img src="{{ asset('image/programs/rs-batch-3.png') }}" 
                                alt="Ready SetSail 3rd Batch 2023" 
                                class="w-full rounded-xl object-cover">
                            <div class="mt-3 text-center">
                                <p class="text-sm font-semibold text-brand-red-600">3rd Batch Program 2023</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ready SetSail Activities -->
                <div class="mt-16">
                    <div class="text-center mb-12">
                        <h4 class="text-2xl lg:text-3xl font-display font-bold text-gray-900 mb-3">
                            Ready SetSail <span class="text-gradient">Activities</span>
                        </h4>
                        <p class="text-lg text-gray-600">Comprehensive activities to support your entrepreneurial journey</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Workshop -->
                        <div class="space-y-4">
                            <div class="bg-white p-8 rounded-2xl shadow-custom card-hover border border-gray-100">
                                <div
                                    class="inline-flex items-center justify-center w-14 h-14 bg-linear-to-br from-brand-blue-500 to-brand-blue-600 rounded-xl mb-5 shadow-lg">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <h5 class="text-xl font-display font-bold mb-3 text-gray-900">Workshop Ready SetSail</h5>
                                <p class="text-gray-600 leading-relaxed text-sm">
                                    Workshops held in 4 sessions from July – September 2023 with external expert mentors to develop business skills and knowledge.
                                </p>
                            </div>
                            <div class="bg-white p-3 rounded-xl shadow-lg border-2 border-brand-blue-100">
                                <img src="{{ asset('image/programs/rs-workshop.png') }}" 
                                    alt="Workshop Ready SetSail" 
                                    class="w-full h-48 rounded-lg object-cover">
                                <div class="mt-2 text-center">
                                    <p class="text-xs font-semibold text-brand-blue-600">Workshop Session</p>
                                </div>
                            </div>
                        </div>

                        <!-- 1 on 1 Mentoring -->
                        <div class="space-y-4">
                            <div class="bg-white p-8 rounded-2xl shadow-custom-red card-hover border border-gray-100">
                                <div
                                    class="inline-flex items-center justify-center w-14 h-14 bg-linear-to-br from-brand-red-500 to-brand-red-600 rounded-xl mb-5 shadow-lg">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h5 class="text-xl font-display font-bold mb-3 text-gray-900">1 on 1 Mentoring with Expert</h5>
                                <p class="text-gray-600 leading-relaxed text-sm">
                                    Progress tracking every 2 weeks with external expert mentors, conducted on Tuesday for 3 months to develop student companies.
                                </p>
                            </div>
                            <div class="bg-white p-3 rounded-xl shadow-lg border-2 border-brand-red-100">
                                <img src="{{ asset('image/programs/rs-1on1.png') }}" 
                                    alt="1 on 1 Mentoring with Expert" 
                                    class="w-full h-48 rounded-lg object-cover">
                                <div class="mt-2 text-center">
                                    <p class="text-xs font-semibold text-brand-red-600">Expert Mentoring</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pitching Day -->
                        <div class="space-y-4">
                            <div class="bg-white p-8 rounded-2xl shadow-custom card-hover border border-gray-100">
                                <div
                                    class="inline-flex items-center justify-center w-14 h-14 bg-linear-to-br from-purple-500 to-purple-600 rounded-xl mb-5 shadow-lg">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                    </svg>
                                </div>
                                <h5 class="text-xl font-display font-bold mb-3 text-gray-900">Pitching Day</h5>
                                <p class="text-gray-600 leading-relaxed text-sm">
                                    Student companies present their business journey, achievements, and development. Winners receive coaching funds for business capital.
                                </p>
                            </div>
                            <div class="bg-white p-3 rounded-xl shadow-lg border-2 border-purple-100">
                                <img src="{{ asset('image/programs/rs-pday.png') }}" 
                                    alt="Pitching Day" 
                                    class="w-full h-48 rounded-lg object-cover">
                                <div class="mt-2 text-center">
                                    <p class="text-xs font-semibold text-purple-600">Pitching Competition</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Programs Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-red-50 text-brand-red-700 rounded-full text-sm font-semibold">
                    Additional Programs
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Other <span class="text-gradient">Programs</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Comprehensive programs to support entrepreneurship ecosystem at President University
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- STREAM START-UP -->
                <div class="space-y-6">
                    <div class="bg-linear-to-br from-brand-blue-50 to-white p-10 lg:p-12 rounded-3xl shadow-custom border border-gray-100">
                        <div class="flex items-start gap-4 mb-6">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-linear-to-br from-brand-blue-500 to-brand-blue-600 rounded-xl shadow-lg shrink-0">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl lg:text-4xl font-display font-bold mb-3 text-gray-900">STREAM Start-Up</h3>
                                <div class="w-24 h-1 bg-linear-to-r from-brand-blue-600 to-brand-red-600 rounded-full mb-4"></div>
                            </div>
                        </div>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Setsail BizAccel supports the curriculum from President University in creating an entrepreneurial
                            ecosystem at President University by developing entrepreneurship related subject called Corporate
                            Entrepreneurship and Start-Up Mentorship for President University students.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Setsail BizAccel is also home for several student start-up that developed by President University as
                            a result of Start-Up Mentorship.
                        </p>
                        <div class="flex items-center space-x-4 mt-6">
                            <div class="w-12 h-0.5 bg-linear-to-r from-brand-blue-700 to-brand-red-600"></div>
                            <span class="text-sm font-semibold text-gray-500 tracking-wide">CURRICULUM INTEGRATION</span>
                        </div>
                    </div>
                    <!-- Image Proof -->
                    <div class="relative">
                        <div class="bg-white p-4 rounded-2xl shadow-lg border-2 border-brand-blue-100">
                            <img src="{{ asset('image/programs/st-startup.png') }}" 
                                alt="STREAM Start-Up Program" 
                                class="w-full h-80 rounded-xl object-cover">
                            <div class="mt-3 text-center">
                                <p class="text-sm font-semibold text-brand-blue-600">Student Start-Up Development</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-brand-blue-100 rounded-2xl -z-10"></div>
                    </div>
                </div>

                <!-- FAMILY BUSINESS -->
                <div class="space-y-6">
                    <div class="bg-linear-to-br from-brand-red-50 to-white p-10 lg:p-12 rounded-3xl shadow-custom border border-gray-100">
                        <div class="flex items-start gap-4 mb-6">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-linear-to-br from-brand-red-500 to-brand-red-600 rounded-xl shadow-lg shrink-0">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl lg:text-4xl font-display font-bold mb-3 text-gray-900">Family Business</h3>
                                <div class="w-24 h-1 bg-linear-to-r from-brand-red-600 to-brand-blue-600 rounded-full mb-4"></div>
                            </div>
                        </div>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            A specialized program designed to support students who come from family business backgrounds. This program helps students learn how to manage, innovate, and develop their family businesses with modern entrepreneurial approaches and strategies.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Through mentorship and workshops, students gain insights into succession planning, business transformation, and sustainable growth strategies for family-owned enterprises.
                        </p>
                        <div class="flex items-center space-x-4 mt-6">
                            <div class="w-12 h-0.5 bg-linear-to-r from-brand-red-700 to-brand-blue-600"></div>
                            <span class="text-sm font-semibold text-gray-500 tracking-wide">LEGACY & INNOVATION</span>
                        </div>
                    </div>
                    <!-- Image Proof -->
                    <div class="relative">
                        <div class="bg-white p-4 rounded-2xl shadow-lg border-2 border-brand-red-100">
                            <img src="{{ asset('image/programs/family-business.jpeg') }}" 
                                alt="Family Business Program" 
                                class="w-full h-80 rounded-xl object-cover">
                            <div class="mt-3 text-center">
                                <p class="text-sm font-semibold text-brand-red-600">Family Business Development</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-brand-red-100 rounded-2xl -z-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Programs Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-blue-50 text-blue-700 rounded-full text-sm font-semibold">
                    International Partnership
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Strategic <span class="text-gradient">Collaboration</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    International collaboration to strengthen entrepreneurship education at President University
                </p>
            </div>

            <div class="space-y-12">
                <!-- GITA Erasmus -->
                <div class="bg-linear-to-br from-white to-gray-50 p-10 lg:p-12 rounded-3xl shadow-custom border border-gray-100">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                        <div class="lg:col-span-2">
                            <div class="flex items-start gap-4 mb-6">
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-linear-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg shrink-0">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-3xl lg:text-4xl font-display font-bold mb-3 text-gray-900">GITA Erasmus
                                    </h3>
                                    <div
                                        class="w-24 h-1 bg-linear-to-r from-blue-600 to-blue-400 rounded-full mb-4">
                                    </div>
                                </div>
                            </div>
                            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                                GITA Erasmus is a consortium project consisting of 7 universities in Indonesia and 4
                                universities in Europe which has been working since 2017 with the aim of Capacity Building in
                                higher education institutions in Indonesia in the field of entrepreneurship.
                            </p>
                            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                                Setsail BizAccel received support in form of infrastructure from the GITA ERASMUS project to
                                encourage entrepreneurship at President University.
                            </p>
                            
                            <!-- Image Proof GITA -->
                            <div class="mt-6">
                                <div class="bg-white p-4 rounded-2xl shadow-lg border-2 border-blue-100">
                                    <img src="{{ asset('image/programs/p-gita.png') }}" 
                                        alt="GITA Erasmus Program" 
                                        class="w-full h-64 rounded-xl object-cover">
                                    <div class="mt-3 text-center">
                                        <p class="text-sm font-semibold text-blue-600">GITA Erasmus Partnership</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                            <h4 class="font-display font-bold text-lg mb-4 text-gray-900">Partner Universities</h4>
                            <div class="space-y-3">
                                <div class="text-sm text-gray-700">
                                    <p class="font-semibold text-brand-blue-600 mb-2">Indonesia (7):</p>
                                    <ul class="space-y-1 text-sm">
                                        <li>• President University</li>
                                        <li>• Universitas Brawijaya</li>
                                        <li>• Universitas Padjajaran</li>
                                        <li>• Universitas Negeri Semarang</li>
                                        <li>• Universitas Islam Indonesia</li>
                                        <li>• Universitas Ahmad Dahlan</li>
                                        <li>• STIE Malangkucecwara</li>
                                    </ul>
                                </div>
                                <div class="text-sm text-gray-700 pt-3 border-t border-gray-200">
                                    <p class="font-semibold text-blue-600 mb-2">Europe (4):</p>
                                    <ul class="space-y-1 text-sm">
                                        <li>• University of Gloucestershire</li>
                                        <li>• University of Innsbruck</li>
                                        <li>• Fachhochschule des Mittelstands</li>
                                        <li>• Dublin Institute of Technology</li>
                                    </ul>
                                </div>
                            </div>
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
                <span class="text-sm font-bold tracking-wide">JOIN OUR PROGRAMS</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight text-gray-900">
                Ready to Join Our Next Batch?
            </h2>
            <p class="text-xl lg:text-2xl mb-10 text-gray-700">
                Be part of our incubation program and transform your business ideas into reality
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                @guest
                    <a href="{{ route('filament.admin.auth.register') }}"
                        class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-primary inline-flex items-center justify-center gap-2 hover:scale-105">
                        Apply Now
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