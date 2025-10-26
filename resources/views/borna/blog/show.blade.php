@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | مقاله')

@section('description', 'مقاله مرکز روانشناسی برنا')

@section('keywords', 'روانشناسی، برنا، مقاله')

@section('content')
    <div class="py-8 md:py-12">
        <div class="container">
            <!-- Article Layout -->
            <div class="flex flex-col lg:flex-row gap-10 md:gap-14">
                <!-- Main Content -->
                <div class="w-full lg:w-8/12 xl:w-9/12 flex flex-col gap-4 md:gap-8">
                    <!-- Article Header -->
                    <h1 class="text-2xl md:text-4xl font-medium text-black">خودشناسی</h1>

                    <!-- Article Featured Image -->
                    <div class="w-full h-auto rounded-2xl overflow-hidden">
                        <img src="{{ asset('assets/images/article/main-article-image.png') }}" alt="" class="w-full h-auto">
                    </div>

                    <!-- Article Content -->
                    <div class="prose max-w-none space-y-4">
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            خودشناسی از جمله‌ حوزه‌هایی است که برای بسیاری از انسان‌ها جذاب و دوست‌داشتنی است. نگاهی به
                            تاریخ مکتوب انسان هم نشان می‌دهد که معمولاً دانشمندان، حکیمان و سخن‌ورانی که می‌توانسته‌اند
                            از انسان برای انسان بگویند، یا ویژگی‌های هر فرد را در پیش چشمانش تجزیه و تحلیل کنند، از
                            اقبال عمومی بهره‌مند بوده‌اند.
                        </p>

                        <h2 class="text-xl md:text-2xl text-black">۱. هدف از خودشناسی در روانشناسی چیست؟</h2>
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            ما در متمم، عموماً از زاویه‌ی روانشناسی به بحث خودشناسی نگاه می‌کنیم. روانشناسان، الگوهای
                            بسیار متنوعی برای سنجش صفات شخصیتی و ویژگی های شخصیتی و ساختار شخصیت ارائه کرده‌اند که هر
                            کدام، مزیت‌ها، محدودیت‌ها و کاربردهای خاص خود را داراست.
                        </p>
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            معمولاً وقتی از خودشناسی صحبت می‌کنیم، قصد داریم با استفاده از این الگوها و مدل‌ها، صفات و
                            ویژگی‌های ذهنی و رفتاری خود را بهتر درک و تحلیل کنیم.
                        </p>

                        <h2 class="text-xl md:text-2xl text-black">
                            ۲. رویکرد متمم به بحث خودشناسی چیست؟
                        </h2>
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            متمم در بخش بزرگی از مباحث خودشناسی و شخصیت شناسی خود به سراغ رویکرد صفاتی رفته و از آن
                            استفاده کرده است. این را هم بگوییم که حتی اگر شخصیت شناسی صفاتی به گوش‌تان نخورده باشد،‌
                            هم‌چنان بخش زیادی از آن‌چه به عنوان خودشناسی شنیده‌اید زیرمجموعه‌ی این رویکرد محسوب می‌شود
                            (حتماً شما هم اصطلاحاتی مانند درونگرا، برونگرا، هیجان‌طلب، جزء‌نگر، احساسی و منطقی را در
                            توصیف خود و دیگران به کار برده‌اید و می‌برید).
                        </p>

                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            طبیعی است وقتی از خودشناسی حرف می‌زنیم، از خود بپرسید «چرا باید برای خودشناسی وقت بگذارم؟» و
                            «نتیجه خودشناسی چیست؟»
                        </p>
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            خودشناسی مزایای بسیار زیادی دارد که در این‌جا به برخی از آن‌ها اشاره می‌کنیم. توجه به این
                            موارد می‌تواند ضرورت خودشناسی را برای ما شفاف‌تر کند:
                        </p>

                        <h2 class="text-xl md:text-2xl text-black">۳. اهمیت خودشناسی در چیست؟</h2>

                        <h3 class="text-lg md:text-xl text-black">تصمیم گیری بهتر</h3>
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            کسی که برای خودشناسی وقت می‌گذارد، کیفیت تصمیم‌ها و انتخاب‌هایش افزایش خواهد یافت. از
                            ساده‌ترین تصمیم‌های زندگی تا تصمیم‌های بسیار پیچیده همگی به خودشناسی نیاز دارند.
                        </p>
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            وقتی خودمان را می‌شناسیم و به صفات شخصیتی و سلسله مراتب ارزشهایمان توجه داریم، گزینه‌های
                            مناسب‌تری را انتخاب می‌کنیم و احتمال این‌که بعداً پشیمانی را تجربه کنیم کاهش خواهد یافت.
                        </p>

                        <h3 class="text-xl md:text-xl text-black">زمینه‌سازی برای تغییر و توسعه فردی</h3>
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            نخستین گام در تغییر و بهبود این است که خودمان و ویژگیهایمان را بشناسیم. ما تا وقتی «وضعیت
                            موجود» را ندانیم و به رسمیت نشناسیم، چگونه می‌توانیم حرکت به سمت «وضعیت مطلوب» را آغاز کنیم؟
                        </p>
                        <p class="text-sm md:text-base text-secondary text-justify leading-loose">
                            هیچ‌کس نمی‌تواند ادعا کند که مجموعه‌ای از بهترین عادات، رفتار و ویژگیهای شخصیتی را دارد. به
                            همین علت بسیاری از ما علاقه داریم همواره در مسیر مسیر بهبود و توسعه فردی قدم برداریم. اما تا
                            زمانی که خود را به خوبی نشناسیم، تلاش‌هایی که در این زمینه انجام می‌دهیم کم‌اثر یا بی‌اثر
                            خواهد بود.
                        </p>
                    </div>

                    <!-- Article Meta Info -->
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="flex items-center gap-2 text-text-gray text-sm">
                            <span>آرزو محمدعلیزاده</span>
                            <span>|</span>
                            <span>۱۴ شهریور</span>
                            <span>|</span>
                            <span>۱۰ دقیقه</span>
                        </div>

                        <div class="flex items-center gap-4 mt-4 md:mt-0">
                            <button
                                class="flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-50 transition-colors">
                                <img src="{{ asset('assets/images/article/copy-icon.svg') }}" alt="Copy" class="w-5 h-5">
                                <span class="text-sm md:text-base">کپی لینک پست</span>
                            </button>
                            <button
                                class="flex items-center gap-2 px-4 py-2 border rounded-lg bg-[#23242E] text-white hover:bg-opacity-90 transition-colors">
                                <img src="{{ asset('assets/images/article/share-icon.svg') }}" alt="Share" class="w-5 h-5">
                                <span class="text-sm md:text-base">اشتراک گذاری</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="w-full lg:w-4/12 xl:w-3/12 flex flex-col md:flex-row lg:flex-col gap-8">
                    <!-- Related Articles -->
                    <div class="flex flex-col gap-4 pt-6 w-full md:w-1/2 lg:w-full">
                        <h3 class="text-xl md:text-2xl font-medium text-black">مقالات مرتبط</h3>
                        <div class="space-y-4">
                            <!-- Related Article 1 -->
                            <a href="#"
                                class="bg-white border border-gray-200 rounded-xl overflow-hidden flex hover:border-primary-dark transition-colors">
                                <div class="w-1/3">
                                    <img src="{{ asset('assets/images/article/article-image-1.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="w-2/3 p-3">
                                    <h4 class="text-sm text-secondary font-medium mb-2">اضطراب اجتماعی یا فوبی اجتماعی
                                    </h4>
                                    <p class="text-xs text-text-gray">یکی از اختلالات رایج در جامعه ایران است و افراد
                                        زیادی نادانسته به آن مبتلا هستند.</p>
                                </div>
                            </a>
                            <!-- Related Article 2 -->
                            <a href="#"
                                class="bg-white border border-gray-200 rounded-xl overflow-hidden flex hover:border-primary-dark transition-colors">
                                <div class="w-1/3">
                                    <img src="{{ asset('assets/images/article/article-image-2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="w-2/3 p-3">
                                    <h4 class="text-sm text-secondary font-medium mb-2">استرس و تیپ های شخصیتی</h4>
                                    <p class="text-xs text-text-gray">استرس و تیپ های شخصیتی یکی از مواردی هستند که در
                                        جلسات مشاوره برای استرس ...</p>
                                </div>
                            </a>
                            <!-- Related Article 3 -->
                            <a href="#"
                                class="bg-white border border-gray-200 rounded-xl overflow-hidden flex hover:border-primary-dark transition-colors">
                                <div class="w-1/3">
                                    <img src="{{ asset('assets/images/article/article-image-3.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="w-2/3 p-3">
                                    <h4 class="text-sm text-secondary font-medium mb-2">تاثیر غم و غصه بر قلب چیست؟</h4>
                                    <p class="text-xs text-text-gray">تاثیر غم و غصه بر قلب خیلی فراتر از تصورات ما است!
                                        تاثیر غم بر قلب نه با حساس درد بلکه با تاثیرات روانی ناشی از بیشتر در ارتباط
                                        است.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Featured Post -->
                    <div class="flex flex-col gap-4 pt-6 w-full md:w-1/2 lg:w-full">
                        <h3 class="text-xl md:text-2xl font-medium text-black">مطلب برگزیده هفته</h3>
                        <div class="space-y-4">
                            <!-- Featured Post Item 1 -->
                            <div class="flex flex-col gap-3 bg-bg-light p-4 rounded-xl">
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-1 text-xs text-text-gray">
                                        <img src="{{ asset('assets/images/article/folder-icon.svg') }}" alt="Folder" class="w-4 h-4">
                                        <span>روانکاوی</span>
                                    </div>
                                    <div class="flex items-center gap-1 text-xs text-text-gray">
                                        <img src="{{ asset('assets/images/article/clock-icon.svg') }}" alt="Clock" class="w-4 h-4">
                                        <span>چهار روز قبل</span>
                                    </div>
                                </div>
                                <h4 class="text-lg text-secondary">رابطه سیگار و افسردگی چیست؟</h4>
                                <p class="text-sm text-text-gray">نیکوتین ترشح هورمون دوپامین شیمیایی را در مغز
                                    تحریک می‌کند.</p>
                                <a href="#"
                                    class="inline-flex items-center gap-1 text-secondary text-sm group">
                                    <span class="group-hover:text-primary transition-colors">بیشتر بخوانید</span>
                                    <img src="{{ asset('assets/images/article/arrow-left.svg') }}" alt="Arrow" class="w-4 h-4">
                                </a>
                            </div>
                            <!-- Featured Post Item 2 -->
                            <div class="flex flex-col gap-3 bg-bg-light p-4 rounded-xl">
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-1 text-xs text-text-gray">
                                        <img src="{{ asset('assets/images/article/folder-icon.svg') }}" alt="Folder" class="w-4 h-4">
                                        <span>روانکاوی</span>
                                    </div>
                                    <div class="flex items-center gap-1 text-xs text-text-gray">
                                        <img src="{{ asset('assets/images/article/clock-icon.svg') }}" alt="Clock" class="w-4 h-4">
                                        <span>چهار روز قبل</span>
                                    </div>
                                </div>
                                <h4 class="text-lg text-secondary">رابطه سیگار و افسردگی چیست؟</h4>
                                <p class="text-sm text-text-gray">نیکوتین ترشح هورمون دوپامین شیمیایی را در مغز
                                    تحریک می‌کند.</p>
                                <a href="#"
                                    class="inline-flex items-center gap-1 text-secondary text-sm group">
                                    <span class="group-hover:text-primary transition-colors">بیشتر بخوانید</span>
                                    <img src="{{ asset('assets/images/article/arrow-left.svg') }}" alt="Arrow" class="w-4 h-4">
                                </a>
                            </div>
                            <!-- Featured Post Item 3 -->
                            <div class="flex flex-col gap-3 bg-bg-light p-4 rounded-xl">
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-1 text-xs text-text-gray">
                                        <img src="{{ asset('assets/images/article/folder-icon.svg') }}" alt="Folder" class="w-4 h-4">
                                        <span>روانکاوی</span>
                                    </div>
                                    <div class="flex items-center gap-1 text-xs text-text-gray">
                                        <img src="{{ asset('assets/images/article/clock-icon.svg') }}" alt="Clock" class="w-4 h-4">
                                        <span>چهار روز قبل</span>
                                    </div>
                                </div>
                                <h4 class="text-lg text-secondary">رابطه سیگار و افسردگی چیست؟</h4>
                                <p class="text-sm text-text-gray">نیکوتین ترشح هورمون دوپامین شیمیایی را در مغز
                                    تحریک می‌کند.</p>
                                <a href="#"
                                    class="inline-flex items-center gap-1 text-secondary text-sm group">
                                    <span class="group-hover:text-primary transition-colors">بیشتر بخوانید</span>
                                    <img src="{{ asset('assets/images/article/arrow-left.svg') }}" alt="Arrow" class="w-4 h-4">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
