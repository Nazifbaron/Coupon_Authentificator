<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>VerifyPro - Coupon Verification</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error-container": "#ffdad6",
                        "on-surface": "#0d1c2e",
                        "on-primary": "#ffffff",
                        "surface-container": "#e5eeff",
                        "surface-tint": "#455f88",
                        "secondary-fixed-dim": "#83d8a6",
                        "tertiary": "#4b0005",
                        "primary-container": "#1a365d",
                        "on-tertiary-fixed-variant": "#930013",
                        "surface-dim": "#ccdbf4",
                        "surface-container-highest": "#d4e4fc",
                        "surface-bright": "#f8f9ff",
                        "tertiary-container": "#73000c",
                        "on-primary-fixed-variant": "#2d476f",
                        "error": "#ba1a1a",
                        "inverse-surface": "#223144",
                        "on-error-container": "#93000a",
                        "surface-container-lowest": "#ffffff",
                        "primary": "#002045",
                        "on-primary-fixed": "#001b3c",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-container": "#ff736c",
                        "inverse-primary": "#adc7f7",
                        "on-background": "#0d1c2e",
                        "surface-variant": "#d4e4fc",
                        "inverse-on-surface": "#eaf1ff",
                        "secondary-container": "#9ff5c1",
                        "surface-container-high": "#dce9ff",
                        "on-secondary-container": "#167249",
                        "primary-fixed": "#d6e3ff",
                        "tertiary-fixed": "#ffdad7",
                        "primary-fixed-dim": "#adc7f7",
                        "on-secondary": "#ffffff",
                        "secondary-fixed": "#9ff5c1",
                        "on-secondary-fixed": "#002111",
                        "surface-container-low": "#eff4ff",
                        "on-tertiary-fixed": "#410004",
                        "on-secondary-fixed-variant": "#005231",
                        "on-primary-container": "#86a0cd",
                        "on-error": "#ffffff",
                        "outline-variant": "#c4c6cf",
                        "outline": "#74777f",
                        "secondary": "#0a6c44",
                        "tertiary-fixed-dim": "#ffb3ad",
                        "background": "#f8f9ff",
                        "on-surface-variant": "#43474e",
                        "surface": "#f8f9ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xl": "64px",
                        "container-max": "1200px",
                        "lg": "40px",
                        "sm": "12px",
                        "xs": "4px",
                        "md": "24px",
                        "base": "8px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "code-display": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "code-display": ["24px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "700"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "1.2",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["20px", {
                            "lineHeight": "1.4",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }]
                    },
                    keyframes: {
                        toastIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(24px) scale(0.95)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0) scale(1)'
                            }
                        },
                        toastOut: {
                            '0%': {
                                opacity: '1',
                                transform: 'translateY(0) scale(1)'
                            },
                            '100%': {
                                opacity: '0',
                                transform: 'translateY(12px) scale(0.95)'
                            }
                        },
                        toastBar: {
                            '0%': {
                                transform: 'scaleX(1)'
                            },
                            '100%': {
                                transform: 'scaleX(0)'
                            }
                        },
                        fadeIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(10px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        }
                    },
                    animation: {
                        'toast-in': 'toastIn 0.45s cubic-bezier(0.16,1,0.3,1) forwards',
                        'toast-out': 'toastOut 0.35s ease-in forwards',
                        'toast-bar': 'toastBar 5s linear forwards',
                        'fade-in': 'fadeIn 0.4s ease forwards'
                    }
                },
            },
        }
    </script>


    <!-- EmailJS SDK -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>


    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
    <style>
        /* Barre de progression du toast */
        .toast-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            transform-origin: left;
            animation: toastBar 5s linear forwards;
        }

        /* Select arrow personnalisé */
        select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            padding-right: 40px !important;
            appearance: none;
            -webkit-appearance: none;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen flex flex-col">
    <!-- TopAppBar Navigation Shell -->
    <header class="fixed top-0 w-full z-50 bg-surface dark:bg-surface-dim shadow-sm dark:shadow-none flex items-center justify-between px-md h-14 w-full">
        <div class="flex items-center gap-sm">
            <span class="material-symbols-outlined text-primary dark:text-primary-fixed-dim" data-icon="verified">verified</span>
            <h1 class="text-headline-md font-headline-md text-primary dark:text-primary-fixed-dim">VerifyPro</h1>
        </div>
        <div class="relative hidden md:block">

            <button
                id="languageBtn"
                class="flex items-center gap-2 px-3 py-2 rounded-xl bg-white/5 hover:bg-white/10 transition-all">
                <span id="currentFlag">🇺🇸</span>
                <span id="currentLang">EN</span>
                <span class="material-symbols-outlined text-sm">
                    expand_more
                </span>
            </button>
            <div
                id="languageMenu"
                class="hidden absolute right-0 mt-2 w-44 bg-surface dark:bg-[#101828] rounded-2xl shadow-2xl border border-white/10 overflow-hidden">
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 hover:bg-white/5"
                    data-lang="en"
                    data-flag="🇺🇸">
                    🇺🇸 English
                </button>
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 hover:bg-white/5"
                    data-lang="fr"
                    data-flag="🇫🇷">
                    🇫🇷 Français
                </button>
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 hover:bg-white/5"
                    data-lang="es"
                    data-flag="🇪🇸">
                    🇪🇸 Español
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden relative">

            <!-- Button -->
            <button
                id="mobileMenuBtn"
                class="relative z-50 material-symbols-outlined text-on-surface-variant scale-95 active:scale-90 transition-all duration-300"
                aria-label="Toggle menu"
                aria-expanded="false">
                <span id="menuIcon">menu</span>
            </button>

            <!-- Overlay -->
            <div
                id="menuOverlay"
                class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300 z-40"></div>

            <!-- Mobile Dropdown -->
            <div
                id="mobileMenu"
                class="fixed top-0 right-0 h-screen w-72 bg-surface dark:bg-[#101828] shadow-2xl translate-x-full transition-transform duration-300 ease-in-out z-50 border-l border-white/10">

                <!-- Header -->
                <div class="flex items-center justify-between p-5 border-b border-white/10">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">
                            verified
                        </span>

                        <h2 class="font-bold text-lg">
                            VerifyPro
                        </h2>
                    </div>
                    <button
                        id="closeMenuBtn"
                        class="material-symbols-outlined">
                        close
                    </button>
                </div>
                <!-- Links -->
                <nav class="flex flex-col p-4 space-y-2">
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/5 transition-all duration-200">
                        <span class="material-symbols-outlined">verified</span>
                        Verify
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/5 transition-all duration-200">
                        <span class="material-symbols-outlined">history</span>
                        History
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/5 transition-all duration-200">
                        <span class="material-symbols-outlined">settings</span>
                        Settings
                    </a>
                </nav>
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="flex-grow flex flex-col items-center justify-center px-gutter pt-xl pb-xl">
        {{ $slot }}
    </main>
    <!-- BottomNavBar Navigation Shell (Mobile Only) -->
    <footer class="md:hidden fixed bottom-0 left-0 w-full z-50 bg-surface-container-lowest dark:bg-inverse-surface shadow-lg flex justify-around items-center py-2 px-4 rounded-t-xl">
        <div class="max-w-7xl mx-auto px-6 py-2">
            <div class="border-t border-slate-200 dark:border-white/5 pt-3 text-center text-xs text-slate-500 dark:text-slate-400">
                © 2026 Verify Coupon Authenticity, All rights reserved.
            </div>
        </div>
    </footer>
    <!-- Visual Accent Decoration -->
    <div class="fixed top-0 right-0 -z-10 w-1/3 h-1/2 bg-surface-container blur-[120px] opacity-50 rounded-full pointer-events-none"></div>
    <div class="fixed bottom-0 left-0 -z-10 w-1/4 h-1/3 bg-secondary-container blur-[100px] opacity-30 rounded-full pointer-events-none"></div>
</body>
<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const closeMenuBtn = document.getElementById('closeMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    const menuIcon = document.getElementById('menuIcon');

    function openMenu() {
        mobileMenu.classList.remove('translate-x-full');
        menuOverlay.classList.remove('opacity-0');
        menuOverlay.classList.remove('pointer-events-none');
        menuIcon.textContent = 'close';
        mobileMenuBtn.setAttribute('aria-expanded', 'true');
        document.body.classList.add('overflow-hidden');
    }

    function closeMenu() {
        mobileMenu.classList.add('translate-x-full');
        menuOverlay.classList.add('opacity-0');
        menuOverlay.classList.add('pointer-events-none');
        menuIcon.textContent = 'menu';
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('overflow-hidden');
    }

    mobileMenuBtn.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('translate-x-full');
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });
    closeMenuBtn.addEventListener('click', closeMenu);
    menuOverlay.addEventListener('click', closeMenu);
    // ESC key support
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeMenu();
        }
    });
</script>

</html>
