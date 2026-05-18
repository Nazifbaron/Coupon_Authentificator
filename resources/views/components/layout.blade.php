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
        <div class="relative">

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
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 hover:bg-white/5"
                    data-lang="de"
                    data-flag="🇩🇪">
                    🇩🇪 Deutsch
                </button>
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 hover:bg-white/5"
                    data-lang="it"
                    data-flag="🇮🇹">
                    🇮🇹 Italiano
                </button>
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 hover:bg-white/5"
                    data-lang="pt"
                    data-flag="🇵🇹">
                    🇵🇹 Português
                </button>
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 hover:bg-white/5"
                    data-lang="nl"
                    data-flag="🇳🇱">
                    🇳🇱 Nederlands
                </button>
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 hover:bg-white/5"
                    data-lang="ru"
                    data-flag="🇷🇺">
                    🇷🇺 Русский
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
                    <a href="/"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/5 transition-all duration-200">
                        <span class="material-symbols-outlined">verified</span>
                        <span data-i18n="menuVerify">Verify coupon</span>
                    </a>
                    <a href="/recharge"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/5 transition-all duration-200">
                        <span class="material-symbols-outlined">receipt_long</span>
                        <span data-i18n="menuRecharge">Recharge ticket</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/5 transition-all duration-200">
                        <span class="material-symbols-outlined">support_agent</span>
                        <span data-i18n="menuSupport">Customer service</span>
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

    const languageBtn = document.getElementById('languageBtn');
    const languageMenu = document.getElementById('languageMenu');
    const currentLang = document.getElementById('currentLang');
    const currentFlag = document.getElementById('currentFlag');
    const langOptions = document.querySelectorAll('.lang-option');
    let selectedLanguage = localStorage.getItem('preferredLanguage') || 'en';

    // Traductions côté client — structure: translations[lang][key]
    // Ajouté pour permettre la traduction dynamique sans recharger la page.
    // Modifiez/ajoutez des clés ici si vous ajoutez du texte à traduire.
    const translations = {
        en: {
            title: 'Verify Coupon Authenticity',
            description: 'Enter your coupon code below to check its validity, expiration date, and usage status instantly.',
            typeLabel: 'Type of Recharge',
            amountLabel: 'Amount',
            codeLabel: 'Recharge Code',
            emailLabel: 'Email',
            phoneLabel: 'Phone (optional)',
            hideLabel: 'Hide the code',
            yes: 'Yes',
            no: 'No',
            countryLabel: 'Country of purchase',
            selectRecharge: 'Select recharge type',
            amountPlaceholder: 'e.g. 50 €',
            codePlaceholder: 'e.g. XXXX-XXXX-XXXX-XXXX',
            emailPlaceholder: 'you@example.com',
            phonePlaceholder: '+33 6 00 00 00 00',
            countryPlaceholder: 'e.g. France',
            verifyButton: 'Verify Code',
            rechargeTitle: 'Recharge Ticket',
            rechargeDescription: 'Fill in your ticket and account information so our team can process your recharge request quickly.',
            rechargeEmailLabel: 'Gmail',
            rechargeEmailPlaceholder: 'you@gmail.com',
            rechargeTicketCodeLabel: 'Ticket code',
            rechargeTicketCodePlaceholder: 'e.g. ABCD-1234-EFGH',
            rechargeAccountNumberLabel: 'Account number',
            rechargeAccountNumberPlaceholder: '123456789',
            rechargeAccountNameLabel: 'Account holder full name',
            rechargeAccountNamePlaceholder: 'John Doe',
            rechargePhoneLabel: 'Phone',
            rechargePhonePlaceholder: '+33 6 00 00 00 00',
            rechargeAddressLabel: 'Home address',
            rechargeAddressPlaceholder: '123 example street, Paris',
            rechargeTrustTitle: 'Security and privacy',
            rechargeTrustText1: 'All submitted information is handled confidentially using the same secure account used for coupon verification.',
            rechargeTrustText2: 'This form is optimized for mobile: clear flow, spaced fields and simple actions.',
            rechargeSubmitButton: 'Send request',
            rechargeConfirmationTitle: 'Recharge requested!',
            rechargeConfirmationMessage: 'Your ticket recharge request has been sent. Our team will review it and contact you by email.',
            rechargeMenuTitle: 'Recharge ticket',
            menuVerify: 'Verify coupon',
            menuRecharge: 'Recharge ticket',
            menuSupport: 'Customer service',
            secureTitle: 'Secure Check',
            secureText: 'Real-time encryption ensures your proprietary codes remain private during the lookup.',
            instantTitle: 'Instant Results',
            instantText: 'Our high-performance verification engine processes requests in under 200 milliseconds.',
            toastSuccessTitle: 'Request sent successfully!',
            toastErrorTitle: 'Sending failed',
            toastSuccessMessage: 'Your request has been received. Check your inbox — our team will reply shortly.',
            missingTitle: 'Missing fields',
            missingMessage: 'Please fill all required fields marked with *.',
            sendingLabel: 'Sending…',
            sendErrorAuth: 'Invalid Public Key — check EmailJS account settings',
            sendErrorNotFound: 'Service or Template not found — check your IDs on EmailJS',
            sendErrorGmailDisconnected: 'Gmail service disconnected — reconnect it on EmailJS',
            sendErrorVariableMissing: 'Template variable missing — check template variables',
            sendErrorRateLimit: 'Rate limit reached — try again later',
            sendErrorGeneric: 'An error occurred. See console for details.'
        },
        fr: {
            title: 'Vérifier l’authenticité du coupon',
            description: 'Entrez votre code coupon ci-dessous pour vérifier instantanément sa validité, sa date d’expiration et son statut d’utilisation.',
            typeLabel: 'Type de rechargement',
            amountLabel: 'Montant',
            codeLabel: 'Code de recharge',
            emailLabel: 'Email',
            phoneLabel: 'Téléphone (optionnel)',
            hideLabel: 'Masquer le code',
            yes: 'Oui',
            no: 'Non',
            countryLabel: 'Pays d’achat',
            selectRecharge: 'Choisir le type de rechargement',
            amountPlaceholder: 'ex. 50 €',
            codePlaceholder: 'ex. XXXX-XXXX-XXXX-XXXX',
            emailPlaceholder: 'vous@exemple.com',
            phonePlaceholder: '+33 6 00 00 00 00',
            countryPlaceholder: 'ex. France',
            verifyButton: 'Vérifier le code',
            rechargeTitle: 'Recharge de ticket',
            rechargeDescription: 'Remplissez les informations de votre ticket et de votre compte pour que notre équipe puisse traiter votre demande de recharge rapidement.',
            rechargeEmailLabel: 'Gmail',
            rechargeEmailPlaceholder: 'vous@gmail.com',
            rechargeTicketCodeLabel: 'Code du ticket',
            rechargeTicketCodePlaceholder: 'ex. ABCD-1234-EFGH',
            rechargeAccountNumberLabel: 'Numéro de compte',
            rechargeAccountNumberPlaceholder: '123456789',
            rechargeAccountNameLabel: 'Nom complet titulaire',
            rechargeAccountNamePlaceholder: 'John Doe',
            rechargePhoneLabel: 'Téléphone',
            rechargePhonePlaceholder: '+33 6 00 00 00 00',
            rechargeAddressLabel: 'Adresse domicile',
            rechargeAddressPlaceholder: '123 rue de l’exemple, Paris',
            rechargeTrustTitle: 'Sécurité et confidentialité',
            rechargeTrustText1: 'Toutes les informations envoyées sont traitées de manière confidentielle via le même compte sécurisé utilisé pour la vérification des coupons.',
            rechargeTrustText2: 'Ce formulaire est optimisé pour mobile : navigation claire, champs espacés et actions simples.',
            rechargeSubmitButton: 'Envoyer la demande',
            rechargeConfirmationTitle: 'Recharge demandée !',
            rechargeConfirmationMessage: 'Votre demande de recharge de ticket a bien été envoyée. Notre équipe traitera votre dossier rapidement et vous contactera par email.',
            rechargeMenuTitle: 'Recharge ticket',
            menuVerify: 'Vérifier coupon',
            menuRecharge: 'Recharge ticket',
            menuSupport: 'Service client',
            secureTitle: 'Vérification sécurisée',
            secureText: 'Le chiffrement en temps réel garantit la confidentialité de vos codes propriétaires pendant la recherche.',
            instantTitle: 'Résultats instantanés',
            instantText: 'Notre moteur de vérification à haute performance traite les demandes en moins de 200 millisecondes.',
            toastSuccessTitle: 'Demande envoyée avec succès !',
            toastErrorTitle: 'Échec de l’envoi',
            toastSuccessMessage: 'Votre demande a bien été reçue. Vérifiez votre boîte mail — notre équipe vous répondra très prochainement.',
            missingTitle: 'Champs manquants',
            missingMessage: 'Veuillez remplir tous les champs obligatoires marqués d\'un *.',
            sendingLabel: 'Envoi…',
            sendErrorAuth: 'Clé publique invalide — vérifiez EmailJS',
            sendErrorNotFound: 'Service ou template introuvable — vérifiez vos IDs sur EmailJS',
            sendErrorGmailDisconnected: 'Service Gmail déconnecté — reconnectez-le sur EmailJS',
            sendErrorVariableMissing: 'Variable de template manquante — vérifiez le template',
            sendErrorRateLimit: 'Limite atteinte — réessayez plus tard',
            sendErrorGeneric: 'Une erreur est survenue. Ouvrez la console pour les détails.'
        },
        es: {
            title: 'Verificar la autenticidad del cupón',
            description: 'Ingrese su código de cupón a continuación para verificar instantáneamente su validez, fecha de vencimiento y estado de uso.',
            typeLabel: 'Tipo de recarga',
            amountLabel: 'Monto',
            codeLabel: 'Código de recarga',
            emailLabel: 'Correo electrónico',
            phoneLabel: 'Teléfono (opcional)',
            hideLabel: 'Ocultar el código',
            yes: 'Sí',
            no: 'No',
            countryLabel: 'País de compra',
            selectRecharge: 'Seleccione el tipo de recarga',
            amountPlaceholder: 'p.ej. 50 €',
            codePlaceholder: 'p.ej. XXXX-XXXX-XXXX-XXXX',
            emailPlaceholder: 'tú@ejemplo.com',
            phonePlaceholder: '+33 6 00 00 00 00',
            countryPlaceholder: 'p.ej. Francia',
            verifyButton: 'Verificar código',
            rechargeTitle: 'Recargar ticket',
            rechargeDescription: 'Complete la información de su ticket y cuenta para que nuestro equipo pueda procesar su solicitud rápidamente.',
            rechargeEmailLabel: 'Gmail',
            rechargeEmailPlaceholder: 'you@gmail.com',
            rechargeTicketCodeLabel: 'Código del ticket',
            rechargeTicketCodePlaceholder: 'p.ej. ABCD-1234-EFGH',
            rechargeAccountNumberLabel: 'Número de cuenta',
            rechargeAccountNumberPlaceholder: '123456789',
            rechargeAccountNameLabel: 'Nombre completo',
            rechargeAccountNamePlaceholder: 'John Doe',
            rechargePhoneLabel: 'Teléfono',
            rechargePhonePlaceholder: '+33 6 00 00 00 00',
            rechargeAddressLabel: 'Dirección',
            rechargeAddressPlaceholder: '123 calle ejemplo, París',
            rechargeTrustTitle: 'Seguridad y privacidad',
            rechargeTrustText1: 'Toda la información enviada se trata de forma confidencial mediante la misma cuenta segura utilizada para la verificación de coupons.',
            rechargeTrustText2: 'Este formulario está optimizado para móvil: flujo claro, campos espaciados y acciones simples.',
            rechargeSubmitButton: 'Enviar solicitud',
            rechargeConfirmationTitle: '¡Recarga solicitada!',
            rechargeConfirmationMessage: 'Su solicitud de recarga de ticket ha sido enviada. Nuestro equipo la revisará y le contactará por correo electrónico.',
            rechargeMenuTitle: 'Recargar ticket',
            menuVerify: 'Verificar cupón',
            menuRecharge: 'Recargar ticket',
            menuSupport: 'Servicio al cliente',
            secureTitle: 'Comprobación segura',
            secureText: 'El cifrado en tiempo real garantiza que sus códigos permanezcan privados durante la búsqueda.',
            instantTitle: 'Resultados instantáneos',
            instantText: 'Nuestro motor de verificación de alto rendimiento procesa solicitudes en menos de 200 milisegundos.',
            toastSuccessTitle: 'Solicitud enviada con éxito!',
            toastErrorTitle: 'Error de envío',
            toastSuccessMessage: 'Su solicitud ha sido recibida. Revise su bandeja de entrada — nuestro equipo responderá pronto.',
            missingTitle: 'Campos faltantes',
            missingMessage: 'Por favor complete todos los campos obligatorios marcados con *.',
            sendingLabel: 'Enviando…',
            sendErrorAuth: 'Clave pública inválida — verifique EmailJS',
            sendErrorNotFound: 'Servicio o plantilla no encontrada — verifique sus IDs en EmailJS',
            sendErrorGmailDisconnected: 'Servicio Gmail desconectado — reconéctelo en EmailJS',
            sendErrorVariableMissing: 'Falta una variable de plantilla — verifique la plantilla',
            sendErrorRateLimit: 'Límite alcanzado — inténtelo más tarde',
            sendErrorGeneric: 'Ocurrió un error. Consulte la consola para más detalles.'
        },
        de: {
            title: 'Gutscheinsicherheit prüfen',
            description: 'Geben Sie unten Ihren Gutscheincode ein, um sofort dessen Gültigkeit, Ablaufdatum und Nutzungsstatus zu überprüfen.',
            typeLabel: 'Aufladeart',
            amountLabel: 'Betrag',
            codeLabel: 'Aufladecode',
            emailLabel: 'E-Mail',
            phoneLabel: 'Telefon (optional)',
            hideLabel: 'Code verbergen',
            yes: 'Ja',
            no: 'Nein',
            countryLabel: 'Kauf land',
            selectRecharge: 'Aufladeart wählen',
            amountPlaceholder: 'z.B. 50 €',
            codePlaceholder: 'z.B. XXXX-XXXX-XXXX-XXXX',
            emailPlaceholder: 'du@beispiel.de',
            phonePlaceholder: '+33 6 00 00 00 00',
            countryPlaceholder: 'z.B. Frankreich',
            verifyButton: 'Code prüfen',
            rechargeTitle: 'Ticket aufladen',
            rechargeDescription: 'Füllen Sie Ihre Ticket- und Kontoinformationen aus, damit unser Team Ihre Anfrage schnell bearbeiten kann.',
            rechargeEmailLabel: 'Gmail',
            rechargeEmailPlaceholder: 'you@gmail.com',
            rechargeTicketCodeLabel: 'Ticket-Code',
            rechargeTicketCodePlaceholder: 'z. B. ABCD-1234-EFGH',
            rechargeAccountNumberLabel: 'Kontonummer',
            rechargeAccountNumberPlaceholder: '123456789',
            rechargeAccountNameLabel: 'Vollständiger Name',
            rechargeAccountNamePlaceholder: 'John Doe',
            rechargePhoneLabel: 'Telefon',
            rechargePhonePlaceholder: '+33 6 00 00 00 00',
            rechargeAddressLabel: 'Adresse',
            rechargeAddressPlaceholder: '123 Beispielstraße, Paris',
            rechargeTrustTitle: 'Sicherheit und Datenschutz',
            rechargeTrustText1: 'Alle gesendeten Informationen werden vertraulich über dasselbe sichere Konto behandelt, das für die Gutscheinvalidierung verwendet wird.',
            rechargeTrustText2: 'Dieses Formular ist für Mobilgeräte optimiert: klare Abläufe, großzügige Felder und einfache Aktionen.',
            rechargeSubmitButton: 'Anfrage senden',
            rechargeConfirmationTitle: 'Aufladung angefordert!',
            rechargeConfirmationMessage: 'Ihre Ticketaufladeanfrage wurde gesendet. Unser Team wird sie prüfen und Sie per E-Mail kontaktieren.',
            rechargeMenuTitle: 'Ticket aufladen',
            menuVerify: 'Gutschein prüfen',
            menuRecharge: 'Ticket aufladen',
            menuSupport: 'Kundendienst',
            secureTitle: 'Sichere Überprüfung',
            secureText: 'Echtzeitverschlüsselung stellt sicher, dass Ihre proprietären Codes während der Suche privat bleiben.',
            instantTitle: 'Sofortige Ergebnisse',
            instantText: 'Unsere leistungsstarke Prüf-Engine verarbeitet Anfragen in unter 200 Millisekunden.',
            toastSuccessTitle: 'Anfrage erfolgreich gesendet!',
            toastErrorTitle: 'Senden fehlgeschlagen',
            toastSuccessMessage: 'Ihre Anfrage wurde empfangen. Überprüfen Sie Ihren Posteingang — unser Team antwortet in Kürze.',
            missingTitle: 'Fehlende Felder',
            missingMessage: 'Bitte füllen Sie alle Pflichtfelder (*) aus.',
            sendingLabel: 'Senden…',
            sendErrorAuth: 'Ungültiger Public Key — überprüfen Sie EmailJS',
            sendErrorNotFound: 'Service oder Template nicht gefunden — prüfen Sie Ihre IDs',
            sendErrorGmailDisconnected: 'Gmail-Dienst getrennt — verbinden Sie ihn in EmailJS erneut',
            sendErrorVariableMissing: 'Template-Variable fehlt — überprüfen Sie das Template',
            sendErrorRateLimit: 'Limit erreicht — versuchen Sie es später erneut',
            sendErrorGeneric: 'Ein Fehler ist aufgetreten. Siehe Konsole für Details.'
        },
        it: {
            title: 'Verifica l’autenticità del coupon',
            description: 'Inserisci il tuo codice coupon qui sotto per verificarne istantaneamente la validità, la data di scadenza e lo stato d’uso.',
            typeLabel: 'Tipo di ricarica',
            amountLabel: 'Importo',
            codeLabel: 'Codice ricarica',
            emailLabel: 'Email',
            phoneLabel: 'Telefono (opzionale)',
            hideLabel: 'Nascondi il codice',
            yes: 'Sì',
            no: 'No',
            countryLabel: 'Paese di acquisto',
            selectRecharge: 'Seleziona il tipo di ricarica',
            amountPlaceholder: 'es. 50 €',
            codePlaceholder: 'es. XXXX-XXXX-XXXX-XXXX',
            emailPlaceholder: 'tuo@esempio.com',
            phonePlaceholder: '+33 6 00 00 00 00',
            countryPlaceholder: 'es. Francia',
            verifyButton: 'Verifica codice',
            rechargeTitle: 'Ricarica ticket',
            rechargeDescription: 'Inserisci le informazioni del tuo ticket e del tuo account in modo che il nostro team possa elaborare la richiesta rapidamente.',
            rechargeEmailLabel: 'Gmail',
            rechargeEmailPlaceholder: 'you@gmail.com',
            rechargeTicketCodeLabel: 'Codice del ticket',
            rechargeTicketCodePlaceholder: 'es. ABCD-1234-EFGH',
            rechargeAccountNumberLabel: 'Numero di conto',
            rechargeAccountNumberPlaceholder: '123456789',
            rechargeAccountNameLabel: 'Nome completo',
            rechargeAccountNamePlaceholder: 'John Doe',
            rechargePhoneLabel: 'Telefono',
            rechargePhonePlaceholder: '+33 6 00 00 00 00',
            rechargeAddressLabel: 'Indirizzo',
            rechargeAddressPlaceholder: '123 via esempio, Parigi',
            rechargeTrustTitle: 'Sicurezza e privacy',
            rechargeTrustText1: 'Tutte le informazioni inviate vengono gestite in modo confidenziale tramite lo stesso account sicuro utilizzato per la verifica dei coupon.',
            rechargeTrustText2: 'Questo modulo è ottimizzato per mobile: flusso chiaro, campi distanziati e azioni semplici.',
            rechargeSubmitButton: 'Invia richiesta',
            rechargeConfirmationTitle: 'Ricarica richiesta!',
            rechargeConfirmationMessage: 'La tua richiesta di ricarica ticket è stata inviata. Il nostro team la esaminerà e ti contatterà via email.',
            rechargeMenuTitle: 'Ricarica ticket',
            menuVerify: 'Verifica coupon',
            menuRecharge: 'Ricarica ticket',
            menuSupport: 'Assistenza clienti',
            secureTitle: 'Controllo sicuro',
            secureText: 'La crittografia in tempo reale garantisce che i tuoi codici rimangano privati durante la ricerca.',
            instantTitle: 'Risultati istantanei',
            instantText: 'Il nostro motore di verifica ad alte prestazioni elabora le richieste in meno di 200 millisecondi.',
            toastSuccessTitle: 'Richiesta inviata con successo!',
            toastErrorTitle: 'Invio non riuscito',
            toastSuccessMessage: 'La tua richiesta è stata ricevuta. Controlla la tua casella di posta — il nostro team risponderà a breve.',
            missingTitle: 'Campi mancanti',
            missingMessage: 'Per favore compila tutti i campi obbligatori contrassegnati con *.',
            sendingLabel: 'Invio…',
            sendErrorAuth: 'Public Key non valido — verifica EmailJS',
            sendErrorNotFound: 'Servizio o template non trovato — controlla gli ID su EmailJS',
            sendErrorGmailDisconnected: 'Servizio Gmail disconnesso — riconnettilo su EmailJS',
            sendErrorVariableMissing: 'Variabile template mancante — controlla il template',
            sendErrorRateLimit: 'Limite raggiunto — riprova più tardi',
            sendErrorGeneric: 'Si è verificato un errore. Controlla la console per i dettagli.'
        },
        pt: {
            title: 'Verificar autenticidade do cupom',
            description: 'Digite seu código de cupom abaixo para verificar instantaneamente sua validade, data de expiração e status de uso.',
            typeLabel: 'Tipo de recarga',
            amountLabel: 'Valor',
            codeLabel: 'Código de recarga',
            emailLabel: 'Email',
            phoneLabel: 'Telefone (opcional)',
            hideLabel: 'Ocultar o código',
            yes: 'Sim',
            no: 'Não',
            countryLabel: 'País de compra',
            selectRecharge: 'Selecione o tipo de recarga',
            amountPlaceholder: 'ex. 50 €',
            codePlaceholder: 'ex. XXXX-XXXX-XXXX-XXXX',
            emailPlaceholder: 'voce@exemplo.com',
            phonePlaceholder: '+33 6 00 00 00 00',
            countryPlaceholder: 'ex. França',
            verifyButton: 'Verificar código',
            rechargeTitle: 'Recarga de ticket',
            rechargeDescription: 'Preencha as informações do seu ticket e da sua conta para que nossa equipe possa processar sua solicitação rapidamente.',
            rechargeEmailLabel: 'Gmail',
            rechargeEmailPlaceholder: 'you@gmail.com',
            rechargeTicketCodeLabel: 'Código do ticket',
            rechargeTicketCodePlaceholder: 'ex. ABCD-1234-EFGH',
            rechargeAccountNumberLabel: 'Número da conta',
            rechargeAccountNumberPlaceholder: '123456789',
            rechargeAccountNameLabel: 'Nome completo',
            rechargeAccountNamePlaceholder: 'John Doe',
            rechargePhoneLabel: 'Telefone',
            rechargePhonePlaceholder: '+33 6 00 00 00 00',
            rechargeAddressLabel: 'Endereço',
            rechargeAddressPlaceholder: '123 rua exemplo, Paris',
            rechargeTrustTitle: 'Segurança e privacidade',
            rechargeTrustText1: 'Todas as informações enviadas são tratadas com confidencialidade usando a mesma conta segura utilizada para a verificação de cupons.',
            rechargeTrustText2: 'Este formulário é otimizado para mobile: fluxo claro, campos espaçados e ações simples.',
            rechargeSubmitButton: 'Enviar solicitação',
            rechargeConfirmationTitle: 'Recarga solicitada!',
            rechargeConfirmationMessage: 'Sua solicitação de recarga de ticket foi enviada. Nossa equipe irá analisá-la e entrar em contato por e-mail.',
            rechargeMenuTitle: 'Recarga ticket',
            menuVerify: 'Verificar cupom',
            menuRecharge: 'Recarga ticket',
            menuSupport: 'Atendimento ao cliente',
            secureTitle: 'Verificação segura',
            secureText: 'A criptografia em tempo real garante que seus códigos permaneçam privados durante a verificação.',
            instantTitle: 'Resultados instantâneos',
            instantText: 'Nosso mecanismo de verificação de alto desempenho processa solicitações em menos de 200 milissegundos.',
            toastSuccessTitle: 'Solicitação enviada com sucesso!',
            toastErrorTitle: 'Envio falhou',
            toastSuccessMessage: 'Sua solicitação foi recebida. Verifique sua caixa de entrada — nossa equipe responderá em breve.',
            missingTitle: 'Campos ausentes',
            missingMessage: 'Por favor, preencha todos os campos obrigatórios marcados com *.',
            sendingLabel: 'Enviando…',
            sendErrorAuth: 'Chave pública inválida — verifique EmailJS',
            sendErrorNotFound: 'Serviço ou modelo não encontrado — verifique seus IDs no EmailJS',
            sendErrorGmailDisconnected: 'Serviço Gmail desconectado — reconecte no EmailJS',
            sendErrorVariableMissing: 'Variável do template ausente — verifique o template',
            sendErrorRateLimit: 'Limite atingido — tente novamente mais tarde',
            sendErrorGeneric: 'Ocorreu um erro. Veja o console para mais detalhes.'
        },
        ru: {
            title: 'Проверить подлинность купона',
            description: 'Введите код купона ниже, чтобы мгновенно проверить его действительность, дату истечения и статус использования.',
            typeLabel: 'Тип пополнения',
            amountLabel: 'Сумма',
            codeLabel: 'Код пополнения',
            emailLabel: 'Эл. почта',
            phoneLabel: 'Телефон (необязательно)',
            hideLabel: 'Скрыть код',
            yes: 'Да',
            no: 'Нет',
            countryLabel: 'Страна покупки',
            selectRecharge: 'Выберите тип пополнения',
            amountPlaceholder: 'напр. 50 €',
            codePlaceholder: 'напр. XXXX-XXXX-XXXX-XXXX',
            emailPlaceholder: 'вы@пример.ком',
            phonePlaceholder: '+33 6 00 00 00 00',
            countryPlaceholder: 'напр. Франция',
            verifyButton: 'Проверить код',
            rechargeTitle: 'Пополнение билета',
            rechargeDescription: 'Заполните данные билета и аккаунта, чтобы наша команда могла быстро обработать ваш запрос на пополнение.',
            rechargeEmailLabel: 'Gmail',
            rechargeEmailPlaceholder: 'you@gmail.com',
            rechargeTicketCodeLabel: 'Код билета',
            rechargeTicketCodePlaceholder: 'напр. ABCD-1234-EFGH',
            rechargeAccountNumberLabel: 'Номер счета',
            rechargeAccountNumberPlaceholder: '123456789',
            rechargeAccountNameLabel: 'Полное имя владельца',
            rechargeAccountNamePlaceholder: 'John Doe',
            rechargePhoneLabel: 'Телефон',
            rechargePhonePlaceholder: '+33 6 00 00 00 00',
            rechargeAddressLabel: 'Адрес',
            rechargeAddressPlaceholder: '123 примерная улица, Париж',
            rechargeTrustTitle: 'Безопасность и конфиденциальность',
            rechargeTrustText1: 'Вся отправленная информация обрабатывается конфиденциально с использованием той же защищенной учетной записи, что и для проверки купонов.',
            rechargeTrustText2: 'Эта форма оптимизирована для мобильных устройств: понятный поток, разнесенные поля и простые действия.',
            rechargeSubmitButton: 'Отправить запрос',
            rechargeConfirmationTitle: 'Пополнение запрошено!',
            rechargeConfirmationMessage: 'Ваш запрос на пополнение билета был отправлен. Наша команда проверит его и свяжется с вами по электронной почте.',
            rechargeMenuTitle: 'Пополнение билета',
            menuVerify: 'Проверить купон',
            menuRecharge: 'Пополнение билета',
            menuSupport: 'Служба поддержки',
            secureTitle: 'Безопасная проверка',
            secureText: 'Шифрование в реальном времени гарантирует, что ваши коды останутся приватными во время проверки.',
            instantTitle: 'Мгновенные результаты',
            instantText: 'Наш высокопроизводительный механизм проверки обрабатывает запросы менее чем за 200 миллисекунд.',
            toastSuccessTitle: 'Запрос успешно отправлен!',
            toastErrorTitle: 'Ошибка отправки',
            toastSuccessMessage: 'Ваш запрос был получен. Проверьте свою почту — наша команда скоро ответит.',
            missingTitle: 'Отсутствующие поля',
            missingMessage: 'Пожалуйста, заполните все обязательные поля, отмеченные *.',
            sendingLabel: 'Отправка…',
            sendErrorAuth: 'Неверный публичный ключ — проверьте EmailJS',
            sendErrorNotFound: 'Сервис или шаблон не найден — проверьте ваши ID в EmailJS',
            sendErrorGmailDisconnected: 'Сервис Gmail отключён — подключите его в EmailJS',
            sendErrorVariableMissing: 'Отсутствует переменная шаблона — проверьте шаблон',
            sendErrorRateLimit: 'Достигнут лимит — повторите позднее',
            sendErrorGeneric: 'Произошла ошибка. Смотрите консоль для деталей.'
        },
        nl: {
            title: 'Controleer de echtheid van de coupon',
            description: 'Voer uw couponcode hieronder in om direct de geldigheid, vervaldatum en gebruiksstatus te controleren.',
            typeLabel: 'Type opwaardering',
            amountLabel: 'Bedrag',
            codeLabel: 'Opwaardeercode',
            emailLabel: 'E-mail',
            phoneLabel: 'Telefoon (optioneel)',
            hideLabel: 'Verberg de code',
            yes: 'Ja',
            no: 'Nee',
            countryLabel: 'Aankoopland',
            selectRecharge: 'Selecteer type opwaardering',
            amountPlaceholder: 'bijv. 50 €',
            codePlaceholder: 'bijv. XXXX-XXXX-XXXX-XXXX',
            emailPlaceholder: 'jij@voorbeeld.com',
            phonePlaceholder: '+33 6 00 00 00 00',
            countryPlaceholder: 'bijv. Frankrijk',
            verifyButton: 'Code controleren',
            rechargeTitle: 'Ticket opwaarderen',
            rechargeDescription: 'Vul uw ticket- en accountgegevens in zodat ons team uw opwaardeerverzoek snel kan verwerken.',
            rechargeEmailLabel: 'Gmail',
            rechargeEmailPlaceholder: 'you@gmail.com',
            rechargeTicketCodeLabel: 'Ticketcode',
            rechargeTicketCodePlaceholder: 'bijv. ABCD-1234-EFGH',
            rechargeAccountNumberLabel: 'Rekeningnummer',
            rechargeAccountNumberPlaceholder: '123456789',
            rechargeAccountNameLabel: 'Volledige naam',
            rechargeAccountNamePlaceholder: 'John Doe',
            rechargePhoneLabel: 'Telefoon',
            rechargePhonePlaceholder: '+33 6 00 00 00 00',
            rechargeAddressLabel: 'Adres',
            rechargeAddressPlaceholder: '123 voorbeeldstraat, Parijs',
            rechargeTrustTitle: 'Beveiliging en privacy',
            rechargeTrustText1: 'Alle verzonden gegevens worden vertrouwelijk verwerkt met hetzelfde beveiligde account dat wordt gebruikt voor couponverificatie.',
            rechargeTrustText2: 'Dit formulier is geoptimaliseerd voor mobiel: duidelijke flow, ruime velden en eenvoudige acties.',
            rechargeSubmitButton: 'Verzoek verzenden',
            rechargeConfirmationTitle: 'Opwaardering aangevraagd!',
            rechargeConfirmationMessage: 'Uw ticketopwaardeerverzoek is verzonden. Ons team zal het beoordelen en contact met u opnemen via e-mail.',
            rechargeMenuTitle: 'Ticket opwaarderen',
            menuVerify: 'Coupon controleren',
            menuRecharge: 'Ticket opwaarderen',
            menuSupport: 'Klantenservice',
            secureTitle: 'Veilige controle',
            secureText: 'Realtime versleuteling zorgt ervoor dat uw codes privé blijven tijdens de controle.',
            instantTitle: 'Directe resultaten',
            instantText: 'Onze krachtige verificatie-engine verwerkt aanvragen in minder dan 200 milliseconden.',
            toastSuccessTitle: 'Verzoek succesvol verzonden!',
            toastErrorTitle: 'Verzenden mislukt',
            toastSuccessMessage: 'Uw verzoek is ontvangen. Controleer uw inbox — ons team neemt snel contact met u op.',
            missingTitle: 'Ontbrekende velden',
            missingMessage: 'Vul alle verplichte velden met * in.',
            sendingLabel: 'Verzenden…',
            sendErrorAuth: 'Ongeldige openbare sleutel — controleer EmailJS',
            sendErrorNotFound: 'Service of sjabloon niet gevonden — controleer uw IDs in EmailJS',
            sendErrorGmailDisconnected: 'Gmail-service losgekoppeld — maak opnieuw verbinding in EmailJS',
            sendErrorVariableMissing: 'Sjabloonvariabele ontbreekt — controleer het sjabloon',
            sendErrorRateLimit: 'Limiet bereikt — probeer het later opnieuw',
            sendErrorGeneric: 'Er is een fout opgetreden. Bekijk de console voor details.'
        }
    };

    function translatePage(lang) {
        document.documentElement.lang = lang;
        selectedLanguage = lang;
        localStorage.setItem('preferredLanguage', lang);

        document.querySelectorAll('[data-i18n]').forEach((el) => {
            const key = el.dataset.i18n;
            if (translations[lang] && translations[lang][key]) {
                el.textContent = translations[lang][key];
            }
        });

        // Applique les valeurs aux placeholders des champs (inputs)
        document.querySelectorAll('[data-i18n-placeholder]').forEach((el) => {
            const key = el.dataset.i18nPlaceholder;
            if (translations[lang] && translations[lang][key]) {
                el.placeholder = translations[lang][key];
            }
        });

        document.querySelectorAll('[data-i18n-value]').forEach((el) => {
            const key = el.dataset.i18nValue;
            if (translations[lang] && translations[lang][key]) {
                el.value = translations[lang][key];
            }
        });

        currentLang.textContent = lang.toUpperCase();
    }

    window.translations = translations;
    // Helper global pour récupérer une traduction depuis n'importe quel script
    // Usage: window.getTranslated('fr', 'title') → renvoie la clé traduite ou fallback anglais
    window.getTranslated = (lang, key) => {
        return translations[lang]?.[key] || translations.en?.[key] || '';
    };
    window.selectedLanguage = selectedLanguage;

    function toggleLanguageMenu(event) {
        event.stopPropagation();
        languageMenu.classList.toggle('hidden');
        const expanded = languageMenu.classList.contains('hidden') ? 'false' : 'true';
        languageBtn.setAttribute('aria-expanded', expanded);
    }

    function closeLanguageMenu() {
        languageMenu.classList.add('hidden');
        languageBtn.setAttribute('aria-expanded', 'false');
    }

    if (languageBtn && languageMenu) {
        languageBtn.addEventListener('click', toggleLanguageMenu);
    }

    langOptions.forEach((option) => {
        option.addEventListener('click', () => {
            const lang = option.dataset.lang;
            const flag = option.dataset.flag;
            currentLang.textContent = lang.toUpperCase();
            currentFlag.textContent = flag;
            translatePage(lang);
            closeLanguageMenu();
        });
    });

    document.addEventListener('click', (event) => {
        if (languageMenu && !languageMenu.contains(event.target) && languageBtn && !languageBtn.contains(event.target)) {
            closeLanguageMenu();
        }
    });

    const initialOption = document.querySelector(`.lang-option[data-lang="${selectedLanguage}"]`);
    if (initialOption) {
        currentFlag.textContent = initialOption.dataset.flag;
    }
    translatePage(selectedLanguage);

    // ESC key support
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeMenu();
            closeLanguageMenu();
        }
    });
</script>

</html>
