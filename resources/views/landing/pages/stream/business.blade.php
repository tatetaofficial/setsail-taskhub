@extends('landing.layouts.main')

@section('title', 'Family Business - Setsail BizAccel')

@section('content')
    <!-- Hero Section -->
    <section class="hero-background py-24 lg:py-32 px-6 lg:px-10 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-10 right-10 w-72 h-72 hero-accent-blue rounded-full blur-3xl opacity-20"></div>
        <div class="absolute bottom-10 left-10 w-80 h-80 hero-accent-red rounded-full blur-3xl opacity-20"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-brand-blue-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col items-center text-center">
                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-2 mb-6 px-5 py-2.5 bg-linear-to-r from-brand-blue-500 to-brand-red-500 text-white rounded-full shadow-lg">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="text-sm font-bold tracking-wide leading-none">
                        LEGACY & INNOVATION
                    </span>
                </div>

                <!-- Title -->
                <h1
                    class="max-w-5xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight text-gray-900">
                    Center for
                    <span class="relative inline-block">
                        <span class="text-gradient">Humane Entrepreneurship</span>
                        <span
                            class="absolute -bottom-2 left-0 w-full h-1 bg-linear-to-r from-brand-blue-600 via-brand-red-500 to-brand-blue-600 rounded-full">
                        </span>
                    </span>
                    <span class="block mt-2 text-gradient">
                        & Family Business
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-lg sm:text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                    President University
                </p>
            </div>
        </div>
    </section>


    <!-- Welcome Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-600 rounded-full text-sm font-semibold">
                        Selamat Datang
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight">
                        Wadah Inovasi & Pengembangan <span class="text-gradient">Bisnis Keluarga</span>
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Pusat ini hadir sebagai wadah inovasi, riset, dan pengembangan bisnis keluarga dengan semangat
                        kewirausahaan yang berlandaskan nilai-nilai kemanusiaan.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Kami berkomitmen mendorong keberlanjutan dan regenerasi bisnis keluarga melalui pendekatan etis,
                        inklusif, dan berorientasi pada kesejahteraan bersama.
                    </p>
                    <div class="flex items-center space-x-4 mt-8">
                        <div class="w-12 h-0.5 bg-linear-to-r from-brand-blue-700 to-brand-red-600"></div>
                        <span class="text-sm font-semibold text-gray-500 tracking-wide">ETHICS, INCLUSION &
                            PROSPERITY</span>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="bg-linear-to-br from-brand-red-50 to-white p-10 rounded-3xl shadow-custom border border-gray-100">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 bg-linear-to-br from-brand-red-500 to-brand-red-600 rounded-2xl mb-6 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-4 text-gray-900">Fokus Utama</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-brand-red-600 rounded-full mt-2 shrink-0"></div>
                                <p class="text-gray-700">Keberlanjutan bisnis keluarga lintas generasi</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-brand-red-600 rounded-full mt-2 shrink-0"></div>
                                <p class="text-gray-700">Regenerasi dengan inovasi dan nilai kemanusiaan</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-brand-red-600 rounded-full mt-2 shrink-0"></div>
                                <p class="text-gray-700">Riset dan pengembangan strategis</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-brand-red-600 rounded-full mt-2 shrink-0"></div>
                                <p class="text-gray-700">Ekosistem kolaboratif nasional</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-brand-blue-100 rounded-3xl -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-brand-red-100 rounded-3xl -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-red-50 text-brand-red-700 rounded-full text-sm font-semibold">
                    Layanan Utama
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    <span class="text-gradient">GenNext</span> Programs
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Tiga pilar utama yang mendukung pengembangan riset, inovasi, dan kolaborasi strategis
                </p>
            </div>

            <div class="space-y-12">
                <!-- GenNext Insight Lab -->
                <div class="bg-white rounded-3xl shadow-custom border border-gray-100 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div
                            class="lg:col-span-1 bg-linear-to-br from-brand-blue-500 to-brand-blue-600 p-10 lg:p-12 flex flex-col justify-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </div>
                            <h3 class="text-3xl font-display font-bold text-white mb-3">GenNext Insight Lab</h3>
                            <div class="w-16 h-1 bg-white/50 rounded-full"></div>
                        </div>
                        <div class="lg:col-span-2 p-10 lg:p-12">
                            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                                Fasilitas riset kolaboratif multidisiplin yang berfokus pada penelitian strategis di bidang
                                bisnis keluarga.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-blue-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Asesmen & Valuasi</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-blue-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Pengembangan Kebijakan</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-blue-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Suksesi & Governance</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-blue-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Pengelolaan SDM</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-blue-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Internasionalisasi Bisnis</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GenNext Family Enterprise Incubation -->
                <div class="bg-white rounded-3xl shadow-custom border border-gray-100 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div
                            class="lg:col-span-1 bg-linear-to-br from-brand-red-500 to-brand-red-600 p-10 lg:p-12 flex flex-col justify-center order-2 lg:order-1">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-3xl font-display font-bold text-white mb-3">GenNext Family Enterprise
                                Incubation</h3>
                            <div class="w-16 h-1 bg-white/50 rounded-full"></div>
                        </div>
                        <div class="lg:col-span-2 p-10 lg:p-12 order-1 lg:order-2">
                            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                                Program pembinaan, pelatihan, mentoring, dan inkubasi khusus bagi mahasiswa, alumni, serta
                                keluarga pelaku bisnis keluarga.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-red-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Pembinaan & Pelatihan</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-red-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Mentoring Profesional</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-red-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Regenerasi Lintas Generasi</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-brand-red-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Inovasi & Keberlanjutan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GenNext Clinic & Advocacy Hub -->
                <div class="bg-white rounded-3xl shadow-custom border border-gray-100 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div
                            class="lg:col-span-1 bg-linear-to-br from-purple-500 to-purple-600 p-10 lg:p-12 flex flex-col justify-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-xl mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-3xl font-display font-bold text-white mb-3">GenNext Clinic & Advocacy Hub</h3>
                            <div class="w-16 h-1 bg-white/50 rounded-full"></div>
                        </div>
                        <div class="lg:col-span-2 p-10 lg:p-12">
                            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                                Layanan konsultasi profesional, advokasi kebijakan, serta kepakaran yang mendukung suksesi,
                                governance, dan penguatan ekosistem bisnis keluarga secara nasional.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-purple-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Konsultasi Profesional</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-purple-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Advokasi Kebijakan</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-purple-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Pengembangan SDM</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-purple-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Valuasi Bisnis</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-purple-600 mt-0.5 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">Penguatan Ekosistem</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Synergy Statement -->
            <div class="mt-16 text-center">
                <div
                    class="max-w-4xl mx-auto bg-linear-to-r from-brand-blue-50 to-brand-red-50 p-8 rounded-2xl border border-gray-200">
                    <svg class="w-12 h-12 text-brand-blue-600 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <p class="text-lg text-gray-700 leading-relaxed italic">
                        "Ketiga aktivitas ini secara sinergis mendukung pengembangan riset, inovasi, kapasitas SDM, serta
                        kolaborasi strategis bagi pelaku dan komunitas bisnis keluarga di lingkungan Universitas Presiden
                        dan
                        mitra eksternal."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Supported By Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-700 rounded-full text-sm font-semibold">
                    Leadership
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Supported By <span class="text-gradient">International Expert</span>
                </h2>
            </div>

            <!-- Prof. Ki-chan Kim -->
            <div class="max-w-4xl mx-auto mb-20">
                <div
                    class="bg-linear-to-br from-white to-gray-50 p-10 lg:p-12 rounded-3xl shadow-custom border border-gray-100">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div
                            class="w-48 h-48 rounded-2xl shrink-0 overflow-hidden bg-linear-to-br from-brand-blue-500 to-brand-blue-700">
                            @if(file_exists(public_path('image/family-business/prof-ki-chan-kim.png')))
                                <img src="{{ asset('image/family-business/prof-ki-chan-kim.png') }}" alt="Prof. Ki-chan Kim"
                                    class="w-full h-full object-cover">
                            @else
                                <div
                                    class="w-full h-full flex items-center justify-center text-white text-4xl font-display font-bold">
                                    KK
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 text-center md:text-left">
                            <h3 class="text-3xl font-display font-bold mb-3 text-gray-900">Prof. Ki-chan Kim</h3>
                            <div class="space-y-2 mb-4">
                                <p class="text-brand-blue-600 font-semibold text-lg">International Chancellor of President
                                    University</p>
                                <p class="text-brand-red-600 font-semibold">Chair of the International Council for Small
                                    Business (ICSB)</p>
                            </div>
                            <div class="flex items-center justify-center md:justify-start space-x-4 mt-6">
                                <div class="w-12 h-0.5 bg-linear-to-r from-brand-blue-700 to-brand-red-600"></div>
                                <span class="text-sm font-semibold text-gray-500 tracking-wide">INTERNATIONAL
                                    LEADERSHIP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="text-center mb-12">
                <h3 class="text-3xl lg:text-4xl font-display font-bold mb-3">
                    Our <span class="text-gradient">Team</span>
                </h3>
                <p class="text-lg text-gray-700">Dedicated professionals leading the center</p>
            </div>

            <!-- Director -->
            <div class="flex justify-center mb-12">
                <div
                    class="team-card p-8 rounded-2xl shadow-lg border border-gray-100 text-center card-hover w-full max-w-sm">
                    <div class="w-40 rounded-2xl mx-auto mb-5 overflow-hidden">
                        @if(file_exists(public_path('image/family-business/director.png')))
                            <img src="{{ asset('image/family-business/director.png') }}" alt="Dr. Anggraeni Permatasari"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-full h-full bg-linear-to-br from-brand-red-500 to-brand-red-700 rounded-2xl flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg">
                                AP
                            </div>
                        @endif
                    </div>
                    <h4 class="font-display font-bold text-xl mb-2 text-gray-900">Dr. Anggraeni Permatasari, S.Sos., M.S.M.
                    </h4>
                    <p class="text-brand-red-600 text-base font-semibold mb-3">Director</p>
                </div>
            </div>

            <!-- Team Members -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <!-- Dr. Adhi Setyo Santoso -->
                <div class="team-card p-6 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-32 rounded-xl mx-auto mb-4 overflow-hidden">
                        @if(file_exists(public_path('image/family-business/member-1.png')))
                            <img src="{{ asset('image/family-business/member-1.png') }}" alt="Dr. Adhi Setyo Santoso"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-full h-full bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-xl flex items-center justify-center text-white text-xl font-display font-bold">
                                AS
                            </div>
                        @endif
                    </div>
                    <h5 class="font-display font-bold text-base mb-2 text-gray-900">Dr. Adhi Setyo Santoso</h5>
                    <p class="text-brand-blue-600 text-sm font-semibold mb-1">ST, MBA</p>
                    <p class="text-xs text-gray-500">Team Member</p>
                </div>

                <!-- Dr. Anton Wachidin Widjaja -->
                <div class="team-card p-6 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-32 rounded-xl mx-auto mb-4 overflow-hidden">
                        @if(file_exists(public_path('image/family-business/member-2.png')))
                            <img src="{{ asset('image/family-business/member-2.png') }}" alt="Dr. Anton Wachidin Widjaja"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-full h-full bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-xl flex items-center justify-center text-white text-xl font-display font-bold">
                                AW
                            </div>
                        @endif
                    </div>
                    <h5 class="font-display font-bold text-base mb-2 text-gray-900">Dr. Anton Wachidin Widjaja</h5>
                    <p class="text-brand-blue-600 text-sm font-semibold mb-1">SE, MM</p>
                    <p class="text-xs text-gray-500">Team Member</p>
                </div>

                <!-- Rendika Nugraha -->
                <div class="team-card p-6 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-32 rounded-xl mx-auto mb-4 overflow-hidden">
                        @if(file_exists(public_path('image/family-business/member-3.png')))
                            <img src="{{ asset('image/family-business/member-3.png') }}" alt="Rendika Nugraha"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-full h-full bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-xl flex items-center justify-center text-white text-xl font-display font-bold">
                                RN
                            </div>
                        @endif
                    </div>
                    <h5 class="font-display font-bold text-base mb-2 text-gray-900">Rendika Nugraha</h5>
                    <p class="text-brand-blue-600 text-sm font-semibold mb-1">ST, MBA</p>
                    <p class="text-xs text-gray-500">Team Member</p>
                </div>

                <!-- Lukas Sangka Pamungkas -->
                <div class="team-card p-6 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-32 rounded-xl mx-auto mb-4 overflow-hidden">
                        @if(file_exists(public_path('image/family-business/member-4.png')))
                            <img src="{{ asset('image/family-business/member-4.png') }}" alt="Lukas Sangka Pamungkas"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-full h-full bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-xl flex items-center justify-center text-white text-xl font-display font-bold">
                                LS
                            </div>
                        @endif
                    </div>
                    <h5 class="font-display font-bold text-base mb-2 text-gray-900">Lukas Sangka Pamungkas</h5>
                    <p class="text-brand-blue-600 text-sm font-semibold mb-1">SP, MM</p>
                    <p class="text-xs text-gray-500">Team Member</p>
                </div>

                <!-- Ruhamaya Nida Wathoni -->
                <div class="team-card p-6 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-32 rounded-xl mx-auto mb-4 overflow-hidden">
                        @if(file_exists(public_path('image/family-business/member-5.png')))
                            <img src="{{ asset('image/family-business/member-5.png') }}" alt="Ruhamaya Nida Wathoni"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-full h-full bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-xl flex items-center justify-center text-white text-xl font-display font-bold">
                                RW
                            </div>
                        @endif
                    </div>
                    <h5 class="font-display font-bold text-base mb-2 text-gray-900">Ruhamaya Nida Wathoni</h5>
                    <p class="text-brand-blue-600 text-sm font-semibold mb-1">SAB, MSc</p>
                    <p class="text-xs text-gray-500">Team Member</p>
                </div>

                <!-- Bima Arya Wicaksono -->
                <div class="team-card p-6 rounded-2xl shadow-lg border border-gray-100 text-center card-hover">
                    <div class="w-32 rounded-xl mx-auto mb-4 overflow-hidden">
                        @if(file_exists(public_path('image/family-business/member-6.png')))
                            <img src="{{ asset('image/family-business/member-6.png') }}" alt="Bima Arya Wicaksono"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-full h-full bg-linear-to-br from-brand-blue-500 to-brand-blue-700 rounded-xl flex items-center justify-center text-white text-xl font-display font-bold">
                                BA
                            </div>
                        @endif
                    </div>
                    <h5 class="font-display font-bold text-base mb-2 text-gray-900">Bima Arya Wicaksono</h5>
                    <p class="text-brand-blue-600 text-sm font-semibold mb-1">SAB</p>
                    <p class="text-xs text-gray-500">Team Member</p>
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
                <span class="text-sm font-bold tracking-wide">JOIN OUR FAMILY BUSINESS PROGRAM</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight text-gray-900">
                Ready to Strengthen Your Family Business?
            </h2>
            <p class="text-xl lg:text-2xl mb-10 text-gray-700">
                Connect with us to learn more about our programs and services
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                @guest
                    <a href="{{ route('filament.admin.auth.register') }}"
                        class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-primary inline-flex items-center justify-center gap-2 hover:scale-105">
                        Get Started
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