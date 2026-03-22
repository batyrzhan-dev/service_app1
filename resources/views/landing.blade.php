<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разработка сайтов под ключ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-white selection:bg-cyan-400 selection:text-slate-950">

    <div class="relative overflow-hidden">
        <!-- Background glow -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-[-120px] left-[-100px] h-80 w-80 rounded-full bg-cyan-500/20 blur-3xl"></div>
            <div class="absolute top-[120px] right-[-80px] h-80 w-80 rounded-full bg-fuchsia-500/20 blur-3xl"></div>
            <div class="absolute bottom-[-100px] left-1/2 h-80 w-80 -translate-x-1/2 rounded-full bg-indigo-500/20 blur-3xl"></div>
        </div>

        <!-- Header -->
        <header class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">
            <a href="{{ route('landing') }}" class="text-xl font-bold tracking-wide">
                Batyrzhan<span class="text-cyan-400">.dev</span>
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <a href="#services" class="text-sm text-slate-300 transition hover:text-white">Услуги</a>
                <a href="#cases" class="text-sm text-slate-300 transition hover:text-white">Кейсы</a>
                <a href="#about" class="text-sm text-slate-300 transition hover:text-white">Обо мне</a>
                <a href="#contact" class="text-sm text-slate-300 transition hover:text-white">Контакты</a>
            </nav>

            <a href="#contact"
                class="rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium backdrop-blur transition hover:bg-white/10">
                Оставить заявку
            </a>
        </header>

        <!-- Hero -->
        <section class="mx-auto grid max-w-7xl gap-14 px-6 pb-20 pt-10 lg:grid-cols-2 lg:px-8 lg:pb-28 lg:pt-16">
            <div class="reveal flex flex-col justify-center">
                <div class="mb-6 inline-flex w-fit items-center gap-2 rounded-full border border-cyan-400/20 bg-cyan-400/10 px-4 py-2 text-sm text-cyan-300 backdrop-blur">
                    <span class="h-2 w-2 rounded-full bg-cyan-400"></span>
                    Разработка сайтов для бизнеса
                </div>

                <h1 class="max-w-3xl text-4xl font-black leading-tight sm:text-5xl lg:text-6xl">
                    Создаю
                    <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-fuchsia-400 bg-clip-text text-transparent">
                        красивые и продающие
                    </span>
                    сайты на Laravel
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Лендинги, корпоративные сайты и каталоги с современным дизайном,
                    адаптивной версткой и удобной логикой для заявок.
                </p>

                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <a href="#contact"
                        class="shine-btn rounded-2xl bg-cyan-400 px-7 py-4 text-center font-semibold text-slate-950 shadow-lg shadow-cyan-500/20 transition hover:-translate-y-0.5 hover:bg-cyan-300">
                        Обсудить проект
                    </a>

                    <a href="#cases"
                        class="rounded-2xl border border-white/10 bg-white/5 px-7 py-4 text-center font-semibold text-white backdrop-blur transition hover:bg-white/10">
                        Смотреть примеры
                    </a>
                </div>

                <div class="mt-10 grid max-w-xl grid-cols-3 gap-4">
                    <div class="premium-card rounded-3xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                        <div class="number-glow text-2xl font-bold" data-counter="3" data-suffix="+">0+</div>
                        <div class="mt-1 text-sm text-slate-400">демо-кейса</div>
                    </div>
                    <div class="premium-card rounded-3xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                        <div class="number-glow text-2xl font-bold" data-counter="100" data-suffix="%">0%</div>
                        <div class="mt-1 text-sm text-slate-400">адаптивность</div>
                    </div>
                    <div class="premium-card rounded-3xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                        <div class="number-glow text-2xl font-bold" data-counter="14">0</div>
                        <div class="mt-1 text-sm text-slate-400">дней на запуск</div>
                    </div>
                </div>
            </div>

            <div class="reveal relative flex items-center justify-center">
                <div class="absolute -inset-6 -z-10 rounded-[40px] bg-gradient-to-r from-cyan-500/10 via-fuchsia-500/10 to-indigo-500/10 blur-2xl"></div>

                <div class="w-full max-w-xl rounded-[32px] border border-white/10 bg-white/5 p-4 shadow-2xl backdrop-blur-xl">
                    <div class="rounded-[28px] border border-white/10 bg-slate-900/80 p-6">
                        <div class="mb-6 flex items-center gap-2">
                            <span class="h-3 w-3 rounded-full bg-rose-400"></span>
                            <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                            <span class="h-3 w-3 rounded-full bg-emerald-400"></span>
                        </div>

                        <div class="space-y-4">
                            <div class="rounded-2xl bg-gradient-to-r from-cyan-500/20 to-fuchsia-500/20 p-5">
                                <div class="text-sm text-cyan-300">Главная страница</div>
                                <div class="mt-2 text-2xl font-bold">Сайт, который выглядит дорого</div>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                    <div class="text-sm text-slate-400">Скорость</div>
                                    <div class="mt-2 text-lg font-semibold">Быстрый старт проекта</div>
                                </div>

                                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                    <div class="text-sm text-slate-400">Доверие</div>
                                    <div class="mt-2 text-lg font-semibold">Чистая структура и UI</div>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-cyan-400/20 bg-cyan-400/10 p-5">
                                <div class="text-sm text-cyan-300">Конверсия</div>
                                <div class="mt-2 text-lg font-semibold">Кнопки, формы, CTA и сценарий заявки</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Services -->
    <section id="services" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Услуги</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Что я могу сделать для бизнеса</h2>
            <p class="mt-4 text-slate-400">
                Не просто страницу, а понятный инструмент для заявок, доверия и продаж.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                <h3 class="text-xl font-bold">Лендинг</h3>
                <p class="mt-3 text-slate-400">Одна сильная страница под конкретную услугу или продукт.</p>
                <ul class="mt-5 space-y-2 text-sm text-slate-300">
                    <li>— современный дизайн</li>
                    <li>— адаптивная верстка</li>
                    <li>— форма заявки</li>
                    <li>— CTA блоки</li>
                </ul>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                <h3 class="text-xl font-bold">Корпоративный сайт</h3>
                <p class="mt-3 text-slate-400">Для компании, которая хочет выглядеть профессионально.</p>
                <ul class="mt-5 space-y-2 text-sm text-slate-300">
                    <li>— услуги и страницы</li>
                    <li>— контакты и карта</li>
                    <li>— блок доверия</li>
                    <li>— удобная структура</li>
                </ul>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                <h3 class="text-xl font-bold">Каталог / заявки</h3>
                <p class="mt-3 text-slate-400">Для товаров и услуг, где нужна структура и фильтрация.</p>
                <ul class="mt-5 space-y-2 text-sm text-slate-300">
                    <li>— карточки и список</li>
                    <li>— фильтры</li>
                    <li>— заявки</li>
                    <li>— Laravel логика</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Cases -->
    <section id="cases" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Кейсы</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Демо-проекты и концепты</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <a href="{{ route('dental-landing') }}" class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-5">
                <div class="rounded-2xl bg-gradient-to-br from-cyan-400/20 to-sky-500/10 p-10">
                    <div class="text-lg font-bold">Стоматология</div>
                    <div class="mt-2 text-sm text-slate-300">Запись, услуги, цены, доверие</div>
                </div>
                <p class="mt-4 text-sm text-slate-400">
                    Демо-лендинг для медицинской услуги с акцентом на конверсию.
                </p>
            </a>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-5">
                <div class="rounded-2xl bg-gradient-to-br from-fuchsia-400/20 to-indigo-500/10 p-10">
                    <div class="text-lg font-bold">Учебный центр</div>
                    <div class="mt-2 text-sm text-slate-300">Курсы, расписание, заявки</div>
                </div>
                <p class="mt-4 text-sm text-slate-400">
                    Концепт сайта для курсов и образовательных программ.
                </p>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-5">
                <div class="rounded-2xl bg-gradient-to-br from-emerald-400/20 to-cyan-500/10 p-10">
                    <div class="text-lg font-bold">Автосервис</div>
                    <div class="mt-2 text-sm text-slate-300">Услуги, заявка, контакты</div>
                </div>
                <p class="mt-4 text-sm text-slate-400">
                    Сайт для локального бизнеса с быстрым обращением в WhatsApp.
                </p>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Обо мне</p>
                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">
                    Делаю сайты, которые выглядят современно и решают задачу бизнеса
                </h2>
            </div>

            <div class="rounded-3xl border border-white/10 bg-white/5 p-8 text-slate-300 backdrop-blur">
                <p class="leading-8">
                    Работаю с Laravel, продумываю структуру страниц, формы заявок,
                    адаптивность и визуальную подачу. Моя цель — чтобы сайт не просто
                    существовал, а помогал вызывать доверие и получать обращения.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Контакты</p>
                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Обсудим ваш проект</h2>
                <p class="mt-4 max-w-xl text-slate-400">
                    Оставьте заявку, и я помогу понять, какой сайт подойдет именно под вашу задачу.
                </p>
            </div>

            <div class="reveal rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                @if(session('success'))
                <div class="mb-5 rounded-2xl border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-emerald-300">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('landing.contact') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="mb-2 block text-sm text-slate-300">Ваше имя</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white outline-none transition focus:border-cyan-400"
                            placeholder="Введите имя">
                        @error('name')
                        <p class="mt-1 text-sm text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm text-slate-300">Телефон</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                            class="w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white outline-none transition focus:border-cyan-400"
                            placeholder="+7 777 000 00 00">
                        @error('phone')
                        <p class="mt-1 text-sm text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm text-slate-300">Комментарий</label>
                        <textarea name="message" rows="4"
                            class="w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white outline-none transition focus:border-cyan-400"
                            placeholder="Кратко опишите задачу">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="mt-1 text-sm text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full rounded-2xl bg-cyan-400 px-6 py-4 font-semibold text-slate-950 transition hover:bg-cyan-300">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/10 px-6 py-8 lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 text-sm text-slate-400 md:flex-row md:items-center md:justify-between">
            <div>© {{ date('Y') }} Batyrzhan.dev</div>
            <div>Laravel • Tailwind • Landing pages • Business websites</div>
        </div>
    </footer>

</body>

</html>