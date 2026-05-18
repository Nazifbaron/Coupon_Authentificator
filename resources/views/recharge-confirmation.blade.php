<x-layout>
    <div class="max-w-[640px] w-full text-center space-y-lg px-4 sm:px-0">
        <section class="space-y-sm py-xl">
            <div class="flex justify-center mb-base">
                <svg class="w-20 h-20 text-emerald-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                </svg>
            </div>
            <h1 class="text-headline-lg font-headline-lg text-on-surface tracking-tight" data-i18n="rechargeConfirmationTitle">Recharge demandée !</h1>
            <p class="text-body-lg font-body-lg text-on-surface-variant max-w-[520px] mx-auto" data-i18n="rechargeConfirmationMessage">
                Votre demande de recharge de ticket a bien été envoyée. Notre équipe traitera votre dossier rapidement et vous contactera par email.
            </p>
        </section>

        <div class="flex flex-col gap-md pt-md">
            <a href="/" class="inline-flex items-center justify-center h-14 px-lg bg-primary text-on-primary font-headline-md text-headline-md rounded-lg hover:bg-primary-container hover:text-on-primary-container transition-all" data-i18n="menuVerify">
                Retour à l'accueil
            </a>
            <a href="/recharge" class="inline-flex items-center justify-center h-14 px-lg bg-surface text-on-surface font-headline-md text-headline-md rounded-lg border border-outline-variant hover:bg-surface-container hover:text-on-surface transition-all" data-i18n="menuRecharge">
                Retour au formulaire
            </a>
        </div>
    </div>
</x-layout>
