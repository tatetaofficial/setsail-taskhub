<footer class="w-full py-12 lg:py-16 px-6 lg:px-10 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            <div>
                <div class="flex items-center space-x-3 mb-6">
                    <div class="flex items-center space-x-3 relative group bg-white">
                        <div
                            class="absolute -inset-2 bg-linear-to-r from-brand-blue-600/10 to-purple-600/10 rounded-2xl blur-lg opacity-0 group-hover:opacity-100 transition-all duration-500">
                        </div>
                        <a href="#home"
                            class="relative focus:outline-none focus:ring-2 focus:ring-brand-blue-600 focus:ring-offset-2 rounded-xl transition-all">
                            <img src="{{ asset('image/setsail-logo.png') }}" width="180" alt="Setsail Logo"
                                class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105 relative z-10">
                        </a>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">Building entrepreneurial ecosystem for tomorrow's
                    innovators. Empowering students to create, innovate, and lead.</p>
            </div>

            <div>
                <h4 class="font-display font-bold mb-5 text-lg">Location</h4>
                <p class="text-gray-400 text-sm leading-relaxed">President University<br>Jl. Ki Hajar Dewantara<br>Kota
                    Jababeka, Cikarang<br>West Java, Indonesia</p>
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
                <p class="text-gray-400 text-sm">© {{ date('Y') }} Setsail BizAccel - President University. All rights
                    reserved.</p>
                <a href="https://tateta.samastanuswantara.com" target="_blank" rel="noopener noreferrer"
                    class="text-white text-xs font-semibold hover:text-brand-blue-100 transition-colors">Developed and Maintained by TATETA</a>
            </div>
        </div>
    </div>
</footer>