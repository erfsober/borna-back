@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | ارتباط با ما')
@section('description', 'با مرکز روانشناسی برنا در ارتباط باشید')

@section('content')
<!-- Contact Section -->
<section class="container flex flex-col lg:flex-row gap-10 lg:gap-28 xl:gap-36 2xl:gap-48 py-6">
    <!-- Contact Info -->
    <div class="w-full lg:w-8/12 flex flex-col gap-6">
        <h2 class="flex text-2xl md:text-3xl font-semibold">
            با ما در
            <span class="text-primary-dark">&nbspتماس&nbsp</span>
            باشید ...
        </h2>
        <p class="paragraph text-sm">
            در صورت نیاز به هرگونه راهنمایی، پیشنهاد یا انتقاد، از طریق اطلاعات تماس زیر با ما در ارتباط باشید.
            ما تلاش می‌کنیم که در کوتاه‌ترین زمان ممکن پاسخگوی پیام‌های شما باشیم. شما می‌توانید از طریق شماره
            تلفن، ایمیل یا فرم تماس با ما در ارتباط باشید.
        </p>

        <!-- Success Message -->
        @if(session('success'))
        <div class="bg-green-200 border text-green-500 px-6 py-4 rounded-lg" role="alert">
            <p class="font-medium">{{ session('success') }}</p>
        </div>
        @endif

        <!-- Error Message -->
        @if(session('error'))
        <div class="bg-red-50 border border-red-200 text-red-800 px-6 py-4 rounded-lg" role="alert">
            <p class="font-medium">{{ session('error') }}</p>
        </div>
        @endif

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Address Card -->
            @if($contactSetting?->address)
            <div class="flex items-center gap-2 bg-neutral-100 rounded-2xl p-4">
                <div class="bg-white rounded-lg p-3">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.8514 14.17C10.7214 14.17 8.98145 12.44 8.98145 10.3C8.98145 8.16 10.7214 6.44 12.8514 6.44C14.9814 6.44 16.7214 8.17 16.7214 10.31C16.7214 12.45 14.9814 14.17 12.8514 14.17ZM12.8514 7.94C11.5514 7.94 10.4814 9 10.4814 10.31C10.4814 11.62 11.5414 12.68 12.8514 12.68C14.1614 12.68 15.2214 11.62 15.2214 10.31C15.2214 9 14.1514 7.94 12.8514 7.94Z"
                            fill="#85858B" />
                        <path
                            d="M12.8513 22.76C11.3713 22.76 9.88125 22.2 8.72125 21.09C5.77125 18.25 2.51125 13.72 3.74125 8.33C4.85125 3.44 9.12125 1.25 12.8513 1.25C12.8513 1.25 12.8513 1.25 12.8613 1.25C16.5913 1.25 20.8612 3.44 21.9713 8.34C23.1912 13.73 19.9312 18.25 16.9812 21.09C15.8212 22.2 14.3313 22.76 12.8513 22.76ZM12.8513 2.75C9.94125 2.75 6.20125 4.3 5.21125 8.66C4.13125 13.37 7.09125 17.43 9.77125 20C11.5013 21.67 14.2113 21.67 15.9413 20C18.6113 17.43 21.5712 13.37 20.5112 8.66C19.5112 4.3 15.7613 2.75 12.8513 2.75Z"
                            fill="#85858B" />
                    </svg>
                </div>
                <div class="flex flex-col gap-1">
                    <h3 class="">آدرس</h3>
                    <p class="paragraph text-sm">{{ $contactSetting->address }}</p>
                </div>
            </div>
            @endif
            <!-- Phone Card -->
            @if($contactSetting?->phone)
            <div class="flex items-center gap-2 bg-neutral-100 rounded-2xl p-4">
                <div class="bg-white rounded-lg p-3">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.7117 22.75C16.5817 22.75 15.3917 22.48 14.1617 21.96C12.9617 21.45 11.7517 20.75 10.5717 19.9C9.40172 19.04 8.27172 18.08 7.20172 17.03C6.14172 15.96 5.18172 14.83 4.33172 13.67C3.47172 12.47 2.78172 11.27 2.29172 10.11C1.77172 8.87 1.51172 7.67 1.51172 6.54C1.51172 5.76 1.65172 5.02 1.92172 4.33C2.20172 3.62 2.65172 2.96 3.26172 2.39C4.03172 1.63 4.91172 1.25 5.85172 1.25C6.24172 1.25 6.64172 1.34 6.98172 1.5C7.37172 1.68 7.70172 1.95 7.94172 2.31L10.2617 5.58C10.4717 5.87 10.6317 6.15 10.7417 6.43C10.8717 6.73 10.9417 7.03 10.9417 7.32C10.9417 7.7 10.8317 8.07 10.6217 8.42C10.4717 8.69 10.2417 8.98 9.95172 9.27L9.27172 9.98C9.28172 10.01 9.29172 10.03 9.30172 10.05C9.42172 10.26 9.66172 10.62 10.1217 11.16C10.6117 11.72 11.0717 12.23 11.5317 12.7C12.1217 13.28 12.6117 13.74 13.0717 14.12C13.6417 14.6 14.0117 14.84 14.2317 14.95L14.2117 15L14.9417 14.28C15.2517 13.97 15.5517 13.74 15.8417 13.59C16.3917 13.25 17.0917 13.19 17.7917 13.48C18.0517 13.59 18.3317 13.74 18.6317 13.95L21.9517 16.31C22.3217 16.56 22.5917 16.88 22.7517 17.26C22.9017 17.64 22.9717 17.99 22.9717 18.34C22.9717 18.82 22.8617 19.3 22.6517 19.75C22.4417 20.2 22.1817 20.59 21.8517 20.95C21.2817 21.58 20.6617 22.03 19.9417 22.32C19.2517 22.6 18.5017 22.75 17.7117 22.75ZM5.85172 2.75C5.30172 2.75 4.79172 2.99 4.30172 3.47C3.84172 3.9 3.52172 4.37 3.32172 4.88C3.11172 5.4 3.01172 5.95 3.01172 6.54C3.01172 7.47 3.23172 8.48 3.67172 9.52C4.12172 10.58 4.75172 11.68 5.55172 12.78C6.35172 13.88 7.26172 14.95 8.26172 15.96C9.26172 16.95 10.3417 17.87 11.4517 18.68C12.5317 19.47 13.6417 20.11 14.7417 20.57C16.4517 21.3 18.0517 21.47 19.3717 20.92C19.8817 20.71 20.3317 20.39 20.7417 19.93C20.9717 19.68 21.1517 19.41 21.3017 19.09C21.4217 18.84 21.4817 18.58 21.4817 18.32C21.4817 18.16 21.4517 18 21.3717 17.82C21.3417 17.76 21.2817 17.65 21.0917 17.52L17.7717 15.16C17.5717 15.02 17.3917 14.92 17.2217 14.85C17.0017 14.76 16.9117 14.67 16.5717 14.88C16.3717 14.98 16.1917 15.13 15.9917 15.33L15.2317 16.08C14.8417 16.46 14.2417 16.55 13.7817 16.38L13.5117 16.26C13.1017 16.04 12.6217 15.7 12.0917 15.25C11.6117 14.84 11.0917 14.36 10.4617 13.74C9.97172 13.24 9.48172 12.71 8.97172 12.12C8.50172 11.57 8.16172 11.1 7.95172 10.71L7.83172 10.41C7.77172 10.18 7.75172 10.05 7.75172 9.91C7.75172 9.55 7.88172 9.23 8.13172 8.98L8.88172 8.2C9.08172 8 9.23172 7.81 9.33172 7.64C9.41172 7.51 9.44172 7.4 9.44172 7.3C9.44172 7.22 9.41172 7.1 9.36172 6.98C9.29172 6.82 9.18172 6.64 9.04172 6.45L6.72172 3.17C6.62172 3.03 6.50172 2.93 6.35172 2.86C6.19172 2.79 6.02172 2.75 5.85172 2.75ZM14.2117 15.01L14.0517 15.69L14.3217 14.99C14.2717 14.98 14.2317 14.99 14.2117 15.01Z"
                            fill="#85858B" />
                        <path
                            d="M18.7617 9.75C18.3517 9.75 18.0117 9.41 18.0117 9C18.0117 8.64 17.6517 7.89 17.0517 7.25C16.4617 6.62 15.8117 6.25 15.2617 6.25C14.8517 6.25 14.5117 5.91 14.5117 5.5C14.5117 5.09 14.8517 4.75 15.2617 4.75C16.2317 4.75 17.2517 5.27 18.1417 6.22C18.9717 7.11 19.5117 8.2 19.5117 9C19.5117 9.41 19.1717 9.75 18.7617 9.75Z"
                            fill="#85858B" />
                        <path
                            d="M22.2617 9.75C21.8517 9.75 21.5117 9.41 21.5117 9C21.5117 5.55 18.7117 2.75 15.2617 2.75C14.8517 2.75 14.5117 2.41 14.5117 2C14.5117 1.59 14.8517 1.25 15.2617 1.25C19.5317 1.25 23.0117 4.73 23.0117 9C23.0117 9.41 22.6717 9.75 22.2617 9.75Z"
                            fill="#85858B" />
                    </svg>
                </div>
                <div class="flex flex-col gap-1">
                    <h3 class="">تلفن</h3>
                    <p class="paragraph text-sm" dir="ltr">{{ $contactSetting->phone }}</p>
                </div>
            </div>
            @endif
            <!-- Email Card -->
            @if($contactSetting?->email)
            <div class="flex items-center gap-2 bg-neutral-100 rounded-2xl p-4">
                <div class="bg-white rounded-lg p-3">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.8223 21.25H7.82227C4.17227 21.25 2.07227 19.15 2.07227 15.5V8.5C2.07227 4.85 4.17227 2.75 7.82227 2.75H17.8223C21.4723 2.75 23.5723 4.85 23.5723 8.5V15.5C23.5723 19.15 21.4723 21.25 17.8223 21.25ZM7.82227 4.25C4.96227 4.25 3.57227 5.64 3.57227 8.5V15.5C3.57227 18.36 4.96227 19.75 7.82227 19.75H17.8223C20.6823 19.75 22.0723 18.36 22.0723 15.5V8.5C22.0723 5.64 20.6823 4.25 17.8223 4.25H7.82227Z"
                            fill="#85858B" />
                        <path
                            d="M12.822 12.87C11.982 12.87 11.132 12.61 10.482 12.08L7.35204 9.57997C7.03204 9.31997 6.97205 8.84997 7.23205 8.52997C7.49205 8.20997 7.96205 8.14997 8.28205 8.40997L11.412 10.91C12.172 11.52 13.462 11.52 14.222 10.91L17.352 8.40997C17.672 8.14997 18.152 8.19997 18.402 8.52997C18.662 8.84997 18.6121 9.32997 18.2821 9.57997L15.152 12.08C14.512 12.61 13.662 12.87 12.822 12.87Z"
                            fill="#85858B" />
                    </svg>
                </div>
                <div class="flex flex-col gap-1">
                    <h3 class="">ایمیل</h3>
                    <p class="paragraph text-sm" dir="ltr">{{ $contactSetting->email }}</p>
                </div>
            </div>
            @endif
            <!-- Working Hours Card -->
            @if($contactSetting?->work_hours)
            <div class="flex items-center gap-2 bg-neutral-100 rounded-2xl p-4">
                <div class="bg-white rounded-lg p-3">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.2324 22.75C6.30242 22.75 1.48242 17.93 1.48242 12C1.48242 6.07 6.30242 1.25 12.2324 1.25C18.1624 1.25 22.9824 6.07 22.9824 12C22.9824 17.93 18.1624 22.75 12.2324 22.75ZM12.2324 2.75C7.13242 2.75 2.98242 6.9 2.98242 12C2.98242 17.1 7.13242 21.25 12.2324 21.25C17.3324 21.25 21.4824 17.1 21.4824 12C21.4824 6.9 17.3324 2.75 12.2324 2.75Z"
                            fill="#85858B" />
                        <path
                            d="M15.9421 15.93C15.8121 15.93 15.6821 15.9 15.5621 15.82L12.4621 13.97C11.6921 13.51 11.1221 12.5 11.1221 11.61V7.51C11.1221 7.1 11.4621 6.76 11.8721 6.76C12.2821 6.76 12.6221 7.1 12.6221 7.51V11.61C12.6221 11.97 12.9221 12.5 13.2321 12.68L16.3321 14.53C16.6921 14.74 16.8021 15.2 16.5921 15.56C16.4421 15.8 16.1921 15.93 15.9421 15.93Z"
                            fill="#85858B" />
                    </svg>
                </div>
                <div class="flex flex-col gap-1">
                    <h3 class="">ساعت کاری</h3>
                    <p class="paragraph text-sm">{{ $contactSetting->work_hours }}</p>
                </div>
            </div>
            @endif
        </div>

        <!-- Social Media -->
        @if($contactSetting && ($contactSetting->telegram || $contactSetting->whatsapp || $contactSetting->instagram))
        <div class="flex flex-col gap-4 mt-5 lg:mt-auto">
            <h2 class="text-2xl">شبکه های اجتماعی</h2>
            <div class="flex items-center gap-4">
                <!-- Telegram -->
                @if($contactSetting->telegram)
                <a href="https://t.me/{{ ltrim($contactSetting->telegram, '@') }}" target="_blank" rel="noopener noreferrer"
                    class="rounded-lg p-3 border-2 border-primary-light hover:border-primary-dark transition-colors group">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.6239 2.04609C18.5271 1.96247 18.4093 1.90686 18.2832 1.88524C18.1571 1.86363 18.0275 1.87683 17.9083 1.92343L2.0755 8.11952C1.85112 8.20678 1.66115 8.36456 1.53419 8.56913C1.40724 8.77369 1.35018 9.01396 1.37159 9.25376C1.39301 9.49356 1.49174 9.71991 1.65294 9.89874C1.81413 10.0776 2.02905 10.1992 2.26535 10.2453L6.36769 11.0508V15.625C6.36688 15.8741 6.44092 16.1178 6.58022 16.3244C6.71952 16.531 6.91765 16.6909 7.14894 16.7836C7.37987 16.8779 7.63383 16.9005 7.8778 16.8486C8.12177 16.7966 8.34446 16.6724 8.51691 16.4922L10.495 14.4406L13.6333 17.1875C13.8597 17.3883 14.1518 17.4995 14.4544 17.5C14.587 17.4999 14.7188 17.4791 14.845 17.4383C15.0512 17.3728 15.2367 17.2545 15.383 17.0951C15.5292 16.9357 15.6312 16.7408 15.6786 16.5297L18.8497 2.73437C18.8781 2.60995 18.8721 2.48017 18.8323 2.35892C18.7925 2.23767 18.7205 2.12953 18.6239 2.04609ZM13.8474 4.85859L6.84816 9.87109L2.97316 9.11093L13.8474 4.85859ZM7.61769 15.625V11.9156L9.55441 13.6141L7.61769 15.625ZM14.456 16.25L7.9966 10.5859L17.2935 3.92265L14.456 16.25Z"
                            fill="#8AFFAD" class="group-hover:fill-primary-dark transition-colors" />
                    </svg>
                </a>
                @endif
                <!-- Whatsapp -->
                @if($contactSetting->whatsapp)
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contactSetting->whatsapp) }}" target="_blank" rel="noopener noreferrer"
                    class="rounded-lg p-3 border-2 border-primary-light hover:border-primary-dark transition-colors group">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.7432 20C16.266 20 20.7432 15.5229 20.7432 10C20.7432 4.47715 16.266 0 10.7432 0C5.22031 0 0.743164 4.47715 0.743164 10C0.743164 11.7935 1.21531 13.4767 2.04207 14.9321L0.743164 20L5.96806 18.7884C7.38702 19.561 9.01381 20 10.7432 20ZM10.7432 18.4616C15.4164 18.4616 19.2047 14.6732 19.2047 10C19.2047 5.32682 15.4164 1.53846 10.7432 1.53846C6.06999 1.53846 2.28163 5.32682 2.28163 10C2.28163 11.8044 2.84638 13.4768 3.80876 14.8501L3.05086 17.6923L5.94311 16.9692C7.30702 17.9104 8.96074 18.4616 10.7432 18.4616Z"
                            fill="#8AFFAD" class="group-hover:fill-primary-dark transition-colors" />
                        <path
                            d="M8.24316 5.35744C8.00545 4.87988 7.64066 4.92216 7.27224 4.92216C6.61374 4.92216 5.58691 5.71093 5.58691 7.17893C5.58691 8.382 6.11706 9.699 7.90345 11.669C9.62745 13.5703 11.8927 14.5538 13.7733 14.5204C15.6539 14.4869 16.0408 12.8686 16.0408 12.322C16.0408 12.0798 15.8905 11.9589 15.787 11.9261C15.1461 11.6186 13.9641 11.0455 13.6952 10.9378C13.4262 10.8301 13.2858 10.9758 13.1985 11.055C12.9547 11.2874 12.4712 11.9724 12.3057 12.1264C12.1402 12.2805 11.8934 12.2025 11.7907 12.1443C11.4127 11.9926 10.3881 11.5369 9.57138 10.7451C8.56124 9.76593 8.50195 9.42907 8.31166 9.12915C8.15945 8.88929 8.27116 8.74207 8.32688 8.67772C8.54452 8.42665 8.84502 8.03893 8.97981 7.84629C9.11452 7.65365 9.00759 7.36107 8.94338 7.17893C8.66731 6.39536 8.43338 5.7395 8.24316 5.35744Z"
                            fill="#8AFFAD" class="group-hover:fill-primary-dark transition-colors" />
                    </svg>
                </a>
                @endif
                <!-- Instagram -->
                @if($contactSetting->instagram)
                <a href="https://instagram.com/{{ ltrim($contactSetting->instagram, '@') }}" target="_blank" rel="noopener noreferrer"
                    class="rounded-lg p-3 border-2 border-primary-light hover:border-primary-dark transition-colors group">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.2435 18.9583H8.24349C3.71849 18.9583 1.78516 17.025 1.78516 12.5V7.50001C1.78516 2.97501 3.71849 1.04167 8.24349 1.04167H13.2435C17.7685 1.04167 19.7018 2.97501 19.7018 7.50001V12.5C19.7018 17.025 17.7685 18.9583 13.2435 18.9583ZM8.24349 2.29167C4.40182 2.29167 3.03516 3.65834 3.03516 7.50001V12.5C3.03516 16.3417 4.40182 17.7083 8.24349 17.7083H13.2435C17.0852 17.7083 18.4518 16.3417 18.4518 12.5V7.50001C18.4518 3.65834 17.0852 2.29167 13.2435 2.29167H8.24349Z"
                            fill="#8AFFAD" class="group-hover:fill-primary-dark transition-colors" />
                        <path
                            d="M10.7428 13.5417C8.79284 13.5417 7.20117 11.95 7.20117 9.99999C7.20117 8.05 8.79284 6.45833 10.7428 6.45833C12.6928 6.45833 14.2845 8.05 14.2845 9.99999C14.2845 11.95 12.6928 13.5417 10.7428 13.5417ZM10.7428 7.70833C9.47617 7.70833 8.45117 8.73333 8.45117 9.99999C8.45117 11.2667 9.47617 12.2917 10.7428 12.2917C12.0095 12.2917 13.0345 11.2667 13.0345 9.99999C13.0345 8.73333 12.0095 7.70833 10.7428 7.70833Z"
                            fill="#8AFFAD" class="group-hover:fill-primary-dark transition-colors" />
                        <path
                            d="M14.9095 6.25C14.8012 6.25 14.6928 6.225 14.5928 6.18333C14.4928 6.14166 14.4012 6.08333 14.3178 6.00833C14.2428 5.925 14.1762 5.83333 14.1345 5.73333C14.0928 5.63333 14.0762 5.525 14.0762 5.41666C14.0762 5.30833 14.0928 5.2 14.1345 5.1C14.1845 4.99166 14.2428 4.90833 14.3178 4.825C14.3595 4.79166 14.4012 4.75 14.4428 4.725C14.4928 4.69166 14.5428 4.66666 14.5928 4.65C14.6428 4.625 14.6928 4.60833 14.7512 4.6C15.0178 4.54166 15.3012 4.63333 15.5012 4.825C15.5762 4.90833 15.6345 4.99166 15.6762 5.1C15.7178 5.2 15.7428 5.30833 15.7428 5.41666C15.7428 5.525 15.7178 5.63333 15.6762 5.73333C15.6345 5.83333 15.5762 5.925 15.5012 6.00833C15.4178 6.08333 15.3262 6.14166 15.2262 6.18333C15.1262 6.225 15.0178 6.25 14.9095 6.25Z"
                            fill="#8AFFAD" class="group-hover:fill-primary-dark transition-colors" />
                    </svg>
                </a>
                @endif
            </div>
        </div>
        @endif
    </div>

    <!-- Contact Form -->
    <div class="w-full lg:w-4/12">
        <form action="{{ route('contact.store') }}" method="POST" class="flex flex-col gap-4 p-5 bg-white border rounded-2xl">
            @csrf
            <h2 class="text-lg font-semibold text-neutral-700">فرم ارتباط با ما</h2>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="نام و نام خانوادگی"
                class="rounded-lg border text-sm p-3 focus:outline-primary-dark @error('name') border-red-500 @enderror"
                required
            >
            @error('name')
                <p class="text-red-500 text-xs -mt-2">{{ $message }}</p>
            @enderror

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="ایمیل"
                class="rounded-lg border text-sm p-3 focus:outline-primary-dark @error('email') border-red-500 @enderror"
                required
                dir="ltr"
            >
            @error('email')
                <p class="text-red-500 text-xs -mt-2">{{ $message }}</p>
            @enderror

            <input
                type="tel"
                name="phone"
                value="{{ old('phone') }}"
                placeholder="شماره تماس (اختیاری)"
                class="rounded-lg border text-sm p-3 focus:outline-primary-dark @error('phone') border-red-500 @enderror"
                dir="ltr"
            >
            @error('phone')
                <p class="text-red-500 text-xs -mt-2">{{ $message }}</p>
            @enderror

            <input
                type="text"
                name="subject"
                value="{{ old('subject') }}"
                placeholder="موضوع"
                class="rounded-lg border text-sm p-3 focus:outline-primary-dark @error('subject') border-red-500 @enderror"
                required
            >
            @error('subject')
                <p class="text-red-500 text-xs -mt-2">{{ $message }}</p>
            @enderror

            <div class="relative">
                <textarea
                    id="message-textarea"
                    name="message"
                    rows="8"
                    maxlength="200"
                    placeholder="پیام خود را اینجا بنویسید..."
                    class="rounded-lg border text-sm p-3 focus:outline-primary-dark w-full @error('message') border-red-500 @enderror"
                    required
                >{{ old('message') }}</textarea>
                <div class="absolute left-3 bottom-5 flex justify-end text-xs text-secondary text-left">
                    <span class="text-neutral-400">۲۰۰/</span>
                    <span id="char-counter" class="text-neutral-400">۰</span>
                </div>
                @error('message')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="bg-primary-light py-3 rounded-lg hover:bg-primary-dark transition-colors">
                ارسال
            </button>
        </form>
    </div>
</section>

<!-- Map Section -->
<section class="container py-10 lg:py-20">
    @if($contactSetting && $contactSetting->lat && $contactSetting->lng && $contactSetting->hasMedia('map_image'))
    <a href="https://www.google.com/maps/search/?api=1&query={{ $contactSetting->lat }},{{ $contactSetting->lng }}" target="_blank" rel="noopener noreferrer">
        <img src="{{ $contactSetting->getFirstMediaUrl('map_image') }}" alt="map" class="w-full h-auto">
    </a>
    @else
    <img src="{{ asset('assets/images/map.png') }}" alt="map" class="w-full h-auto">
    @endif
</section>
@endsection

@push('scripts')
<script>
    // Character counter for message textarea
    const textarea = document.getElementById('message-textarea');
    const charCounter = document.getElementById('char-counter');

    if (textarea && charCounter) {
        textarea.addEventListener('input', function() {
            const count = this.value.length;
            // Convert to Persian numerals
            const persianCount = count.toString().replace(/\d/g, d => '۰۱۲۳۴۵۶۷۸۹'[d]);
            charCounter.textContent = persianCount;
        });

        // Initialize counter on page load
        const initialCount = textarea.value.length;
        const persianInitialCount = initialCount.toString().replace(/\d/g, d => '۰۱۲۳۴۵۶۷۸۹'[d]);
        charCounter.textContent = persianInitialCount;
    }
</script>
@endpush
