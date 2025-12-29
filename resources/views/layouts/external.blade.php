<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'External Dashboard' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- App Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Additional Styles -->
    @stack('styles')

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Animation for notification */
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }

            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }

        .notification-enter {
            animation: slideInRight 0.3s ease-out;
        }

        .notification-exit {
            animation: slideOutRight 0.3s ease-in;
        }

        /* Navbar active state */
        .nav-active {
            color: rgb(37, 99, 235);
            background: linear-gradient(to right, rgb(219, 234, 254), rgb(237, 233, 254));
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
        }

        /* Mobile menu scrollbar */
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
    </style>
</head>

<body
    class="min-h-screen flex flex-col bg-linear-to-br from-gray-50 via-slate-50 to-gray-100 text-gray-900 antialiased">

    <!-- Header -->
    <header class="w-full py-4 px-4 lg:px-10 flex justify-between items-center
                   bg-linear-to-b from-white via-white to-gray-50/30
                   backdrop-blur-xl shadow-md sticky top-0 z-50
                   border-b border-gray-200/50 transition-all duration-300">

        <!-- LOGO -->
        <div class="flex items-center space-x-3 relative group">
            <div class="absolute -inset-2 bg-linear-to-r from-brand-blue-600/10 to-purple-600/10
                   rounded-2xl blur-lg opacity-0 group-hover:opacity-100 transition-all duration-500">
            </div>

            <a href="{{ route('landing.home') }}" class="relative">
                <img src="{{ asset('image/setsail-logo.png') }}"
                    class="h-10 lg:h-12 w-auto object-contain transition-all duration-500 group-hover:scale-105"
                    alt="Setsail Logo">
            </a>
        </div>



        <!-- CTA + STATUS + MOBILE BUTTON -->
        <div class="flex items-center gap-3">
            <!-- Status Indicator (Desktop) -->
            <div
                class="hidden md:flex items-center gap-2 text-xs text-green-700 bg-green-50 px-3 py-2 rounded-full border border-green-200">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                <span class="font-semibold">Active</span>
            </div>

            <!-- Current Time (Desktop) -->
            <div class="hidden lg:flex items-center gap-2 text-xs text-gray-600 bg-gray-100 px-3 py-2 rounded-full">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-medium">{{ now()->format('d M Y, H:i') }}</span>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <main class="flex-1">
        {{ $slot }}
    </main>

    <!-- Footer -->
       @include('landing.components.footer')

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Additional Scripts -->
    @stack('scripts')

    <!-- Enhanced Notification System -->
    <div id="notification-container" class="fixed top-4 right-4 z-50 space-y-3 pointer-events-none">
        <!-- Notifications will be inserted here -->
    </div>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const bar1 = document.getElementById('bar-1');
            const bar2 = document.getElementById('bar-2');
            const bar3 = document.getElementById('bar-3');
            const button = document.getElementById('mobile-menu-button');

            const isOpen = mobileMenu.classList.contains('scale-100');

            if (!isOpen) {
                // Open menu
                mobileMenu.classList.remove('scale-95', 'opacity-0', 'pointer-events-none');
                mobileMenu.classList.add('scale-100', 'opacity-100', 'pointer-events-auto');

                // Animate hamburger
                bar1.style.transform = 'translateY(6px) rotate(45deg)';
                bar2.style.transform = 'scaleX(0)';
                bar2.style.opacity = '0';
                bar3.style.transform = 'translateY(-6px) rotate(-45deg)';

                button.setAttribute('aria-expanded', 'true');
                document.body.style.overflow = 'hidden';
            } else {
                closeMobileMenu();
            }
        }

        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const bar1 = document.getElementById('bar-1');
            const bar2 = document.getElementById('bar-2');
            const bar3 = document.getElementById('bar-3');
            const button = document.getElementById('mobile-menu-button');

            // Close menu
            mobileMenu.classList.add('scale-95', 'opacity-0', 'pointer-events-none');
            mobileMenu.classList.remove('scale-100', 'opacity-100', 'pointer-events-auto');

            // Reset hamburger
            bar1.style.transform = 'translateY(0) rotate(0)';
            bar2.style.transform = 'scaleX(1)';
            bar2.style.opacity = '1';
            bar3.style.transform = 'translateY(0) rotate(0)';

            if (button) button.setAttribute('aria-expanded', 'false');
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

        function showNotification(message, type = 'info') {
            const container = document.getElementById('notification-container');
            const notification = document.createElement('div');

            const icons = {
                success: `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>`,
                error: `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                </svg>`,
                info: `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>`,
                warning: `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>`
            };

            const colors = {
                success: 'bg-green-500 border-green-600',
                error: 'bg-red-500 border-red-600',
                info: 'bg-blue-500 border-blue-600',
                warning: 'bg-yellow-500 border-yellow-600'
            };

            notification.className = `notification-enter pointer-events-auto flex items-center gap-3 px-5 py-4 rounded-xl text-white font-medium shadow-2xl border-l-4 ${colors[type] ?? colors.info} backdrop-blur-sm bg-opacity-95 max-w-md`;

            notification.innerHTML = `
                <div class="flex-shrink-0">
                    ${icons[type] ?? icons.info}
                </div>
                <div class="flex-1">
                    <p class="text-sm leading-relaxed">${message}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="flex-shrink-0 ml-2 hover:opacity-70 transition-opacity">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
            `;

            container.appendChild(notification);

            // Auto remove after 5 seconds
            setTimeout(() => {
                notification.classList.add('notification-exit');
                setTimeout(() => notification.remove(), 300);
            }, 5000);
        }

        // Listen for Livewire events
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('notify', (event) => {
                showNotification(event.message, event.type || 'info');
            });
        });
    </script>
</body>

</html>