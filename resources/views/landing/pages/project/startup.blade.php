@extends('landing.layouts.main')

@section('title', 'Start-Up Teams - Setsail BizAccel')

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
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="text-sm font-bold tracking-wide leading-none">
                        INNOVATORS & ENTREPRENEURS
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight text-gray-900">
                    <span class="relative inline-block">
                        <span class="text-gradient">Start-Up Teams</span>
                        <div
                            class="absolute -bottom-2 left-0 right-0 h-1 bg-linear-to-r from-brand-blue-600 via-brand-red-500 to-brand-blue-600 rounded-full">
                        </div>
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto mb-10 leading-relaxed">
                    Meet our Start-Up Teams developed by President University students from across faculty and study
                    programs with various industries
                </p>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 lg:py-20 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-lg lg:text-xl text-gray-700 leading-relaxed max-w-4xl mx-auto">
                Our diverse portfolio spans across <span class="font-bold text-brand-blue-600">Fashion</span>, <span
                    class="font-bold text-brand-red-600">Food & Beverages</span>, <span
                    class="font-bold text-brand-blue-600">Industrial Services</span>, and <span
                    class="font-bold text-brand-red-600">Technology-Based Start-Ups</span>. Each team represents the
                innovative spirit and entrepreneurial drive fostered at President University.
            </p>
        </div>
    </section>

    <!-- Ready SetSail 4th Batch 2024 -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-700 rounded-full text-sm font-semibold">
                    July 2024 - January 2025
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Ready SetSail <span class="text-gradient">4th Batch 2024</span>
                </h2>
                <p class="text-lg text-gray-700 max-w-4xl mx-auto leading-relaxed">
                    A 6 months business incubation program for President University Students presented by Setsail BizAccel.
                    Aiming to develop Entrepreneurship Ecosystem within President University by creating Academic
                    Entrepreneurs, there are three sectors in Ready Set Sail business incubation program which are
                    SMEs/Creative Industry, Tech-Start-Up, Social Enterprise.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Clarityou -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/clarityou.png') }}" alt="Clarityou"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">
                            Technology
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Clarityou</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A digital media and technology startup dedicated to supporting teenagers' psychological well-being
                            and personal development. Founded in August 2020, providing diverse content across beauty,
                            relationships, education, and self-improvement.
                        </p>
                    </div>
                </div>

                <!-- Allegra -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/allegra.png') }}" alt="Allegra"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-pink-100 text-pink-700 rounded-full text-xs font-semibold">
                            Creative Industry
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Allegra</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Short for "Art Gallery Creative", reflects a joyful spirit. Sells multifunctional hanging bag racks
                            made from selected canvas fabric with neat stitching. Ideal for boarding house residents with limited
                            storage space.
                        </p>
                    </div>
                </div>

                <!-- SoapBerries -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/soapberries.png') }}" alt="SoapBerries"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                            Social Enterprise
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">SoapBerries</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Organic soap made from lerak, an eco-friendly product with natural cleansing properties. Safe for all
                            skin types with distinctive Indonesian spice fragrances like clove and lemongrass, helping preserve
                            the environment.
                        </p>
                    </div>
                </div>

                <!-- Tococo Indonesia -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/tococo.png') }}" alt="Tococo Indonesia"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Tococo Indonesia</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            PT. Tococo Indonesia Berkah utilizes every part of the coconut through zero-waste concept. Producing
                            coconut chips, oil, chocolate, coffee, sauce, and sugar since 2020 in Banyumas Regency, Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ready SetSail 3rd Batch 2023 -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-red-50 text-brand-red-700 rounded-full text-sm font-semibold">
                    July 2023 - January 2024
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Ready SetSail <span class="text-gradient">3rd Batch 2023</span>
                </h2>
                <p class="text-lg text-gray-700 max-w-4xl mx-auto leading-relaxed">
                    A 6 months business incubation program for President University Students presented by Setsail BizAccel.
                    Aiming to develop Entrepreneurship Ecosystem within President University by creating Academic
                    Entrepreneurs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Borneo Speciosa -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/borneo-speciosa.png') }}" alt="Borneo Speciosa"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                            Herbal Product
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Borneo Speciosa</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Kratom adalah tanaman tropis yang berasal dari daerah Asia Tenggara dan berpusat di Kapuas Hulu,
                            Kalbar. Kratom telah digunakan secara tradisional sebagai obat herbal dan stimulan di berbagai
                            masyarakat.
                        </p>
                    </div>
                </div>

                <!-- Ja Chi Keripik -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/jachi.png') }}" alt="Ja Chi Keripik"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Ja Chi Keripik</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Snack that uses a traditional flavor called Jamu. The reason they picked Jamu as the flavor is that
                            not only is it unique, it also has a few good effects on the human body.
                        </p>
                    </div>
                </div>

                <!-- Yoo-ri -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/yoo-ri.png') }}" alt="Yoo-ri"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Yoo-ri</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A food and beverage company that specializes as a Korean food distributor in the form of frozen food.
                        </p>
                    </div>
                </div>

                <!-- Seoul Bites -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/seoul-bites.png') }}" alt="Seoul Bites"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Seoul Bites</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Korean street food business with thick oriental flavor and Korean spices aroma. Made with premium
                            ingredients by experts, paying close attention to nutrition and content.
                        </p>
                    </div>
                </div>

                <!-- Lovaria -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/lovaria.png') }}" alt="Lovaria"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Lovaria</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            MOCAF noodle business producing and selling noodles made from mocaf (modified cassava flour). A
                            healthy and low-gluten noodle product, suitable for consumers with digestive problems or gluten
                            intolerance.
                        </p>
                    </div>
                </div>

                <!-- Pawon Djanganan -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/pawon-djanganan.png') }}" alt="Pawon Djanganan"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Pawon Djanganan</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Business engaged in the Food and Beverage sector, taking the concept of home-cooked food catering.
                        </p>
                    </div>
                </div>

                <!-- Hillsun Shop -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/hilsun.png') }}" alt="Hillsun Shop"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">
                            Fashion
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Hillsun Shop</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Business engaged in the fashion sector. Local t-shirt products made from premium cotton and drifit
                            sport material, comfortable for everyday wear, sports, and walking.
                        </p>
                    </div>
                </div>

                <!-- Akun Impact -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/akun-impact.png') }}" alt="Akun Impact"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">
                            Technology
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Akun Impact</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Engaged in the digital goods industry in the form of game accounts.
                        </p>
                    </div>
                </div>

                <!-- Fresh Smoothies -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/fresh-smooties.png') }}" alt="Fresh Smoothies"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-pink-100 text-pink-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Fresh Smoothies</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Freshsmoothies Indonesia is a fruit drink product blended with fresh milk, whipping cream, cheese or
                            other topping options and pieces of fruit.
                        </p>
                    </div>
                </div>

                <!-- Dana Jastip -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ asset('image/startups/ready-setsail/dana-jastip.png') }}" alt="Dana Jastip"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-semibold">
                            Service
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Dana Jastip</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Dana jastip hadir untuk memudahkan mahasiswa dengan pengalaman belanja yang efektif, praktis, dan
                            murah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ready SetSail 2nd Batch 2022 -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-4 px-4 py-1.5 bg-brand-blue-50 text-brand-blue-700 rounded-full text-sm font-semibold">
                    June 2022 - December 2022
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Ready SetSail <span class="text-gradient">2nd Batch 2022</span>
                </h2>
                <p class="text-lg text-gray-700 max-w-4xl mx-auto leading-relaxed">
                    A 6 months business incubation program for President University Students presented by Setsail BizAccel.
                    Three sectors: SMEs/Creative Industry, Tech-Start-Up, Social Enterprise.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Ariska Kids Store -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-pink-100 to-pink-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/ariska-kids.jpg') }}" alt="Ariska Kids Store"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-pink-100 text-pink-700 rounded-full text-xs font-semibold">
                            Retail
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Ariska Kids Store</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A retailer of baby gifts that will help busy couple workers and friends get gifts that are socially
                            fit, suitable, and less effort to wrap gifts for babies.
                        </p>
                    </div>
                </div>

                <!-- Daffoody -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-orange-100 to-orange-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/daffoody.jpg') }}" alt="Daffoody"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Daffoody</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Business that produces Indonesian snacks with high standard taste at affordable prices.
                        </p>
                    </div>
                </div>

                <!-- Fandom Kits -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-purple-100 to-purple-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/fandom-kits.jpg') }}" alt="Fandom Kits"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">
                            E-Commerce
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Fandom Kits</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Fandom Kits ID is an online business that offers products and services to people who want to buy
                            fandom goods from other countries easily.
                        </p>
                    </div>
                </div>

                <!-- 5x.Project -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/5x-project.jpg') }}" alt="5x.Project"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-semibold">
                            Fashion
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">5x.Project</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A business that has pivoted from mountain clothing to fashion rework. Each product has uniqueness with
                            a different QR Code.
                        </p>
                    </div>
                </div>

                <!-- Solar Portable Corp -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-yellow-100 to-yellow-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/solar-portable.jpg') }}" alt="Solar Portable Corp"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">
                            Technology
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Solar Portable Corp</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A breakthrough to reduce household electricity bills caused by additional electronic devices.
                        </p>
                    </div>
                </div>

                <!-- Tofuzen -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-brown-100 to-brown-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/tofuzen.jpg') }}" alt="Tofuzen"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Tofuzen</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Pioneer dessert company that uses Tofu as a substitute, adding tofu to chocolate for health-conscious
                            consumers.
                        </p>
                    </div>
                </div>

                <!-- Trayouw -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-teal-100 to-teal-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/trayouw.jpg') }}" alt="Trayouw"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-teal-100 text-teal-700 rounded-full text-xs font-semibold">
                            Creative Agency
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Trayouw</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A Creative Agency business that combines hobbies in writing and illustration into a business.
                        </p>
                    </div>
                </div>

                <!-- Stressed Sloths -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-indigo-100 to-indigo-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/stressed-sloths.jpg') }}" alt="Stressed Sloths"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-semibold">
                            Technology
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Stressed Sloths</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A game company consisting of 4 university students with the same interest and different skills who
                            want to make games.
                        </p>
                    </div>
                </div>

                <!-- Joscoffee Sidikalang -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-brown-100 to-brown-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/joscoffee.jpg') }}" alt="Joscoffee Sidikalang"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Joscoffee Sidikalang</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Coffee with certification standards to foster consumer confidence in consuming safe products that can
                            compete in national and international markets.
                        </p>
                    </div>
                </div>

                <!-- SKAi -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/skai.jpg') }}" alt="SKAi"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">
                            Technology
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">SKAi</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A Mobile App where users can get to know more about their own skin in seconds with some skin photos.
                        </p>
                    </div>
                </div>

                <!-- Good Morning Bakery -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-orange-100 to-orange-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/good-morning-bakery.jpg') }}" alt="Good Morning Bakery"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">
                            Food & Beverage
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Good Morning Bakery</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A mid-level bakery serving as a place where people gather in a free common space, not just for buying
                            bread and coffee.
                        </p>
                    </div>
                </div>

                <!-- Kongko Creative Media -->
                <div class="bg-white rounded-2xl shadow-custom card-hover border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-linear-to-br from-red-100 to-red-200 flex items-center justify-center">
                        <img src="{{ asset('image/startups/kongko-creative.jpg') }}" alt="Kongko Creative Media"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="inline-block mb-3 px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">
                            Creative Agency
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">Kongko Creative Media</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Provides additional support including financing, equipment, and human resources for content creators
                            besides ideas, guidance, and exposure.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alumni Section -->
    <section class="py-20 lg:py-28 px-6 lg:px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-block mb-6 px-6 py-3 bg-linear-to-r from-brand-blue-600 to-brand-red-600 text-white rounded-full shadow-lg">
                    <span class="font-bold tracking-wide text-base">OUR ALUMNI</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">
                    Successfully <span class="text-gradient">Graduated</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                    After going through a long journey, these Start-Ups were successfully graduated from our existing
                    Incubation Program and manage to sustain and grow their business to the next level.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                <!-- Jurus Kitchen -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-brand-blue-500 to-brand-blue-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">JK</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Jurus Kitchen</h4>
                    <p class="text-xs text-gray-600">Healthy Catering Service</p>
                </div>

                <!-- Madu Sedot -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-brand-red-500 to-brand-red-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">MS</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Madu Sedot</h4>
                    <p class="text-xs text-gray-600">Fast Moving Consumer Goods</p>
                </div>

                <!-- Thein Coffee -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-amber-500 to-amber-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">TC</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Thein Coffee</h4>
                    <p class="text-xs text-gray-600">Food & Beverage</p>
                </div>

                <!-- Shaula -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-pink-500 to-pink-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">SH</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Shaula</h4>
                    <p class="text-xs text-gray-600">Woman Clothing</p>
                </div>

                <!-- Ceritain.id -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-purple-500 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">CI</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Ceritain.id</h4>
                    <p class="text-xs text-gray-600">Mental Health Consulting</p>
                </div>

                <!-- Artha Adventure -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-green-500 to-green-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">AA</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Artha Adventure</h4>
                    <p class="text-xs text-gray-600">Adventure Tourism</p>
                </div>

                <!-- MarketPress -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-blue-500 to-blue-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">MP</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">MarketPress</h4>
                    <p class="text-xs text-gray-600">Digital Marketing</p>
                </div>

                <!-- Lele Up Level -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-teal-500 to-teal-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">LU</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Lele Up Level</h4>
                    <p class="text-xs text-gray-600">Aquaculture</p>
                </div>

                <!-- The Wings'O -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-orange-500 to-orange-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">TW</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">The Wings'O</h4>
                    <p class="text-xs text-gray-600">Food & Beverage</p>
                </div>

                <!-- BusinessCap -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-indigo-500 to-indigo-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">BC</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">BusinessCap</h4>
                    <p class="text-xs text-gray-600">Business Consulting</p>
                </div>

                <!-- Kampung Kembang Tourism -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-green-500 to-green-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">KK</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Kampung Kembang</h4>
                    <p class="text-xs text-gray-600">Tourism</p>
                </div>

                <!-- Olah Aja -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-green-500 to-green-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">OA</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Olah Aja</h4>
                    <p class="text-xs text-gray-600">Waste Management Tech</p>
                </div>

                <!-- TheXperience -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-purple-500 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">TX</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">TheXperience</h4>
                    <p class="text-xs text-gray-600">Experience Service</p>
                </div>

                <!-- Baenggo House -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-red-500 to-red-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">BH</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Baenggo House</h4>
                    <p class="text-xs text-gray-600">Food & Beverage</p>
                </div>

                <!-- PT. Ooki Surya Robot -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-gray-500 to-gray-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">OS</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Ooki Surya Robot</h4>
                    <p class="text-xs text-gray-600">Robotic Tools</p>
                </div>

                <!-- Nozomi Gakkou -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-red-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-blue-500 to-blue-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">NG</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Nozomi Gakkou</h4>
                    <p class="text-xs text-gray-600">Education</p>
                </div>

                <!-- Nun Madu -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-2 border-gray-100 hover:border-brand-blue-300 transition-all card-hover text-center">
                    <div class="w-16 h-16 bg-linear-to-br from-yellow-500 to-yellow-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">NM</span>
                    </div>
                    <h4 class="font-display font-bold text-base mb-2 text-gray-900">Nun Madu</h4>
                    <p class="text-xs text-gray-600">Honey Product</p>
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
                <span class="text-sm font-bold tracking-wide">BE THE NEXT SUCCESS STORY</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight text-gray-900">
                Ready to Build Your Start-Up?
            </h2>
            <p class="text-xl lg:text-2xl mb-10 text-gray-700">
                Join our incubation program and turn your innovative ideas into successful businesses
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                @guest
                    <a href="{{ route('filament.admin.auth.register') }}"
                        class="hero-accent-blue text-white font-bold py-4 px-10 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-primary inline-flex items-center justify-center gap-2 hover:scale-105">
                        Join Incubation Program
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