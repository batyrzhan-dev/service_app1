<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стоматология — лечение и запись на прием</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-white selection:bg-cyan-400 selection:text-slate-950">

    <div class="relative overflow-hidden hero-grid">
        <div class="absolute inset-0 -z-10">
            <div class="glow-orb absolute top-[-120px] left-[-100px] h-80 w-80 rounded-full bg-cyan-500/20 blur-3xl"></div>
            <div class="glow-orb-delay absolute top-[120px] right-[-80px] h-80 w-80 rounded-full bg-fuchsia-500/20 blur-3xl"></div>
            <div class="glow-orb-slow absolute bottom-[-100px] left-1/2 h-80 w-80 -translate-x-1/2 rounded-full bg-indigo-500/20 blur-3xl"></div>
        </div>

        <header class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">
            <a href="{{ route('dental-landing') }}" class="text-xl font-bold tracking-wide">
                Dental<span class="text-cyan-400">Care</span>
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <a href="#services" class="text-sm text-slate-300 transition hover:text-white">Услуги</a>
                <a href="#advantages" class="text-sm text-slate-300 transition hover:text-white">Преимущества</a>
                <a href="#doctors" class="text-sm text-slate-300 transition hover:text-white">Врачи</a>
                <a href="#reviews" class="text-sm text-slate-300 transition hover:text-white">Отзывы</a>
                <a href="#contact" class="text-sm text-slate-300 transition hover:text-white">Контакты</a>
            </nav>

            <a href="#contact"
               class="shine-btn rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium backdrop-blur transition hover:bg-white/10">
                Записаться
            </a>
        </header>

        <section class="mx-auto grid max-w-7xl gap-14 px-6 pb-20 pt-10 lg:grid-cols-2 lg:px-8 lg:pb-28 lg:pt-16">
            <div class="reveal flex flex-col justify-center">
                <div class="mb-6 inline-flex w-fit items-center gap-2 rounded-full border border-cyan-400/20 bg-cyan-400/10 px-4 py-2 text-sm text-cyan-300 backdrop-blur">
                    <span class="h-2 w-2 rounded-full bg-cyan-400"></span>
                    Современная стоматология в вашем городе
                </div>

                <h1 class="max-w-3xl text-4xl font-black leading-tight sm:text-5xl lg:text-6xl">
                    Здоровая улыбка
                    <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-fuchsia-400 bg-clip-text text-transparent">
                        без страха и боли
                    </span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Лечение зубов, профессиональная чистка, имплантация и эстетическая стоматология.
                    Запишитесь на первичную консультацию и получите персональный план лечения.
                </p>

                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <a href="#contact"
                       class="shine-btn rounded-2xl bg-cyan-400 px-7 py-4 text-center font-semibold text-slate-950 shadow-lg shadow-cyan-500/20 transition hover:-translate-y-0.5 hover:bg-cyan-300">
                        Записаться на прием
                    </a>

                    <a href="#services"
                       class="rounded-2xl border border-white/10 bg-white/5 px-7 py-4 text-center font-semibold text-white backdrop-blur transition hover:bg-white/10">
                        Смотреть услуги
                    </a>
                </div>

                <div class="mt-10 grid max-w-xl grid-cols-3 gap-4">
                    <div class="premium-card rounded-3xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                        <div class="number-glow text-2xl font-bold" data-counter="12" data-suffix="+">0+</div>
                        <div class="mt-1 text-sm text-slate-400">лет опыта</div>
                    </div>
                    <div class="premium-card rounded-3xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                        <div class="number-glow text-2xl font-bold" data-counter="5000" data-suffix="+">0+</div>
                        <div class="mt-1 text-sm text-slate-400">довольных пациентов</div>
                    </div>
                    <div class="premium-card rounded-3xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                        <div class="number-glow text-2xl font-bold" data-counter="100" data-suffix="%">0%</div>
                        <div class="mt-1 text-sm text-slate-400">индивидуальный подход</div>
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
                                <div class="text-sm text-cyan-300">Первичный прием</div>
                                <div class="mt-2 text-2xl font-bold">Консультация и диагностика</div>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                    <div class="text-sm text-slate-400">Безопасность</div>
                                    <div class="mt-2 text-lg font-semibold">Современные стандарты стерильности</div>
                                </div>

                                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                    <div class="text-sm text-slate-400">Комфорт</div>
                                    <div class="mt-2 text-lg font-semibold">Бережное лечение и понятный план</div>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-cyan-400/20 bg-cyan-400/10 p-5">
                                <div class="text-sm text-cyan-300">Запись онлайн</div>
                                <div class="mt-2 text-lg font-semibold">Оставьте заявку и администратор свяжется с вами</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="services" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Услуги</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Стоматологические услуги</h2>
            <p class="mt-4 text-slate-400">
                Комплексный подход к лечению, профилактике и восстановлению зубов.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                <h3 class="text-xl font-bold">Лечение кариеса</h3>
                <p class="mt-3 text-slate-400">Аккуратное лечение с современными материалами и точной диагностикой.</p>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                <h3 class="text-xl font-bold">Профессиональная чистка</h3>
                <p class="mt-3 text-slate-400">Удаление налета и камня, профилактика заболеваний десен и свежесть дыхания.</p>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                <h3 class="text-xl font-bold">Имплантация</h3>
                <p class="mt-3 text-slate-400">Восстановление утраченных зубов с надежной фиксацией и эстетикой.</p>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                <h3 class="text-xl font-bold">Эстетическая стоматология</h3>
                <p class="mt-3 text-slate-400">Отбеливание, реставрация и улучшение внешнего вида улыбки.</p>
            </div>
        </div>
    </section>

    <section id="advantages" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Почему выбирают нас</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Комфорт, опыт и понятный подход</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6">
                <div class="text-lg font-bold">Опытные врачи</div>
                <p class="mt-3 text-sm text-slate-400">
                    Специалисты с практическим опытом, которые объясняют лечение простым языком.
                </p>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6">
                <div class="text-lg font-bold">Современное оборудование</div>
                <p class="mt-3 text-sm text-slate-400">
                    Диагностика и лечение с использованием современных технологий и материалов.
                </p>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6">
                <div class="text-lg font-bold">Прозрачный план лечения</div>
                <p class="mt-3 text-sm text-slate-400">
                    Перед началом лечения пациент понимает этапы, сроки и ожидаемый результат.
                </p>
            </div>
        </div>
    </section>

    <section id="doctors" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Врачи</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Специалисты клиники</h2>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6 text-center">
                <div class="mx-auto h-24 w-24 rounded-full bg-gradient-to-br from-cyan-400/30 to-fuchsia-400/20"></div>
                <h3 class="mt-5 text-xl font-bold">Анна Сергеевна</h3>
                <p class="mt-2 text-sm text-cyan-300">Терапевт-стоматолог</p>
                <p class="mt-3 text-sm text-slate-400">Лечение кариеса, реставрация, профилактика.</p>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6 text-center">
                <div class="mx-auto h-24 w-24 rounded-full bg-gradient-to-br from-cyan-400/30 to-fuchsia-400/20"></div>
                <h3 class="mt-5 text-xl font-bold">Максим Олегович</h3>
                <p class="mt-2 text-sm text-cyan-300">Хирург-имплантолог</p>
                <p class="mt-3 text-sm text-slate-400">Имплантация, удаление, хирургическое лечение.</p>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6 text-center">
                <div class="mx-auto h-24 w-24 rounded-full bg-gradient-to-br from-cyan-400/30 to-fuchsia-400/20"></div>
                <h3 class="mt-5 text-xl font-bold">Екатерина Игоревна</h3>
                <p class="mt-2 text-sm text-cyan-300">Ортопед</p>
                <p class="mt-3 text-sm text-slate-400">Протезирование, эстетическое восстановление улыбки.</p>
            </div>
        </div>
    </section>

    <section id="reviews" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Отзывы</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Что говорят пациенты</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6">
                <p class="text-slate-300">
                    “Очень аккуратное лечение, все объяснили заранее. Понравилось отношение и спокойная атмосфера.”
                </p>
                <div class="mt-5 text-sm text-slate-400">— Марина К.</div>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6">
                <p class="text-slate-300">
                    “Долго откладывал имплантацию, но здесь подробно рассказали все этапы. В итоге остался доволен.”
                </p>
                <div class="mt-5 text-sm text-slate-400">— Александр Т.</div>
            </div>

            <div class="reveal premium-card rounded-3xl border border-white/10 bg-white/5 p-6">
                <p class="text-slate-300">
                    “Приятная клиника, вежливый персонал и удобная запись. Делала чистку и лечение — все отлично.”
                </p>
                <div class="mt-5 text-sm text-slate-400">— Алина С.</div>
            </div>
        </div>
    </section>

    <section id="about" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">О клинике</p>
                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">
                    Заботимся о здоровье зубов и комфорте каждого пациента
                </h2>
            </div>

            <div class="reveal rounded-3xl border border-white/10 bg-white/5 p-8 text-slate-300 backdrop-blur">
                <p class="leading-8">
                    Мы объединяем опыт врачей, современные методы лечения и внимательное отношение к пациенту.
                    Наша задача — не просто устранить проблему, а помочь сохранить здоровье зубов надолго.
                </p>
            </div>
        </div>
    </section>

    <section id="contact" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Запись</p>
                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Запишитесь на консультацию</h2>
                <p class="mt-4 max-w-xl text-slate-400">
                    Оставьте заявку, и администратор свяжется с вами, чтобы подобрать удобное время приема.
                </p>

                <div class="mt-8 space-y-4 text-slate-300">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <div class="text-sm text-slate-400">Телефон</div>
                        <div class="mt-1 text-lg font-semibold">+7 777 000 00 00</div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <div class="text-sm text-slate-400">Адрес</div>
                        <div class="mt-1 text-lg font-semibold">г. Алматы, ул. Примерная, 25</div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <div class="text-sm text-slate-400">График</div>
                        <div class="mt-1 text-lg font-semibold">Пн–Сб: 09:00–20:00</div>
                    </div>
                </div>
            </div>

            <div class="reveal rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                @if(session('success'))
                    <div class="mb-5 rounded-2xl border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-emerald-300">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('dental-landing.contact') }}" method="POST" class="space-y-5">
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
                        <label class="mb-2 block text-sm text-slate-300">Что вас беспокоит</label>
                        <textarea name="message" rows="4"
                                  class="w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white outline-none transition focus:border-cyan-400"
                                  placeholder="Например: боль в зубе, чистка, консультация, имплантация">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                            class="shine-btn w-full rounded-2xl bg-cyan-400 px-6 py-4 font-semibold text-slate-950 transition hover:bg-cyan-300">
                        Записаться
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="border-t border-white/10 px-6 py-8 lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 text-sm text-slate-400 md:flex-row md:items-center md:justify-between">
            <div>© {{ date('Y') }} DentalCare</div>
            <div>Стоматология • Диагностика • Лечение • Имплантация</div>
        </div>
    </footer>

</body>
</html>