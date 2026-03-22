<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стоматология — лечение и запись на прием</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-[#f5fbff] text-slate-900 selection:bg-cyan-400 selection:text-white">

    <div class="relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-[-120px] left-[-80px] h-80 w-80 rounded-full bg-cyan-200/50 blur-3xl"></div>
            <div class="absolute top-[120px] right-[-80px] h-80 w-80 rounded-full bg-sky-200/50 blur-3xl"></div>
            <div class="absolute bottom-[-120px] left-1/2 h-80 w-80 -translate-x-1/2 rounded-full bg-blue-100/60 blur-3xl"></div>
        </div>

        <header class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">
            <a href="{{ route('dental-landing') }}" class="text-xl font-bold tracking-wide text-slate-900">
                Dental<span class="text-cyan-600">Care</span>
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <a href="#services" class="text-sm text-slate-600 transition hover:text-slate-900">Услуги</a>
                <a href="#advantages" class="text-sm text-slate-600 transition hover:text-slate-900">Преимущества</a>
                <a href="#doctors" class="text-sm text-slate-600 transition hover:text-slate-900">Врачи</a>
                <a href="#reviews" class="text-sm text-slate-600 transition hover:text-slate-900">Отзывы</a>
                <a href="#contact" class="text-sm text-slate-600 transition hover:text-slate-900">Контакты</a>
            </nav>

            <a href="#contact"
                class="rounded-full border border-cyan-100 bg-white px-5 py-2.5 text-sm font-medium text-slate-800 shadow-sm transition hover:border-cyan-200 hover:bg-cyan-50">
                Записаться
            </a>
        </header>

        <section class="mx-auto grid max-w-7xl gap-14 px-6 pb-20 pt-8 lg:grid-cols-2 lg:px-8 lg:pb-24 lg:pt-10">
            <div class="reveal flex flex-col justify-center">
                <div class="mb-6 inline-flex w-fit items-center gap-2 rounded-full border border-cyan-200 bg-cyan-50 px-4 py-2 text-sm text-cyan-700">
                    <span class="h-2 w-2 rounded-full bg-cyan-500"></span>
                    Современная стоматология для всей семьи
                </div>

                <h1 class="max-w-3xl text-4xl font-black leading-tight sm:text-5xl lg:text-6xl">
                    Здоровая улыбка
                    <span class="bg-gradient-to-r from-cyan-600 via-sky-500 to-blue-500 bg-clip-text text-transparent">
                        с заботой и комфортом
                    </span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                    Лечение зубов, профессиональная чистка, имплантация и эстетическая стоматология.
                    Помогаем пройти лечение спокойно, понятно и без лишнего стресса.
                </p>

                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <a href="#contact"
                        class="shine-btn rounded-2xl bg-cyan-500 px-7 py-4 text-center font-semibold text-white shadow-lg shadow-cyan-200 transition hover:-translate-y-0.5 hover:bg-cyan-600">
                        Записаться на прием
                    </a>

                    <a href="#services"
                        class="rounded-2xl border border-slate-200 bg-white px-7 py-4 text-center font-semibold text-slate-800 shadow-sm transition hover:bg-slate-50">
                        Смотреть услуги
                    </a>
                </div>

                <div class="mt-10 grid max-w-xl grid-cols-3 gap-4">
                    <div class="rounded-3xl border border-white bg-white p-4 shadow-sm">
                        <div class="text-2xl font-bold text-cyan-600" data-counter="12" data-suffix="+">0+</div>
                        <div class="mt-1 text-sm text-slate-500">лет опыта</div>
                    </div>
                    <div class="rounded-3xl border border-white bg-white p-4 shadow-sm">
                        <div class="text-2xl font-bold text-cyan-600" data-counter="5000" data-suffix="+">0+</div>
                        <div class="mt-1 text-sm text-slate-500">пациентов</div>
                    </div>
                    <div class="rounded-3xl border border-white bg-white p-4 shadow-sm">
                        <div class="text-2xl font-bold text-cyan-600" data-counter="100" data-suffix="%">0%</div>
                        <div class="mt-1 text-sm text-slate-500">внимания к деталям</div>
                    </div>
                </div>
            </div>

            <div class="reveal relative flex items-center justify-center">
                <div class="absolute -inset-4 -z-10 rounded-[36px] bg-gradient-to-r from-cyan-100 to-sky-100 blur-2xl"></div>

                <div class="w-full max-w-xl overflow-hidden rounded-[32px] border border-white bg-white shadow-xl">
                    <div class="relative">
                        <img
                            src="https://parthadental.com/wp-content/uploads/2022/10/dental-care1.webp"
                            alt="Современная стоматология"
                            class="h-[260px] sm:h-[320px] w-full object-cover">

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/30 via-slate-900/5 to-transparent"></div>

                        <div class="absolute left-4 top-4 sm:left-6 sm:top-6 rounded-2xl bg-white/90 px-4 py-3 shadow-lg backdrop-blur max-w-[calc(100%-2rem)] sm:max-w-none">
                            <div class="text-sm text-slate-500">Первичный прием</div>
                            <div class="mt-1 text-base sm:text-lg font-bold text-slate-900">
                                Консультация и диагностика
                            </div>
                        </div>

                        <div class="hidden sm:grid absolute bottom-6 left-6 right-6 gap-4 sm:grid-cols-2">
                            <div class="rounded-2xl bg-white/90 p-4 shadow-lg backdrop-blur">
                                <div class="text-sm text-slate-500">Безопасность</div>
                                <div class="mt-1 text-base font-semibold text-slate-900">
                                    Современные стандарты стерильности
                                </div>
                            </div>

                            <div class="rounded-2xl bg-white/90 p-4 shadow-lg backdrop-blur">
                                <div class="text-sm text-slate-500">Комфорт</div>
                                <div class="mt-1 text-base font-semibold text-slate-900">
                                    Понятный план лечения и бережный подход
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-3 p-4 sm:hidden">
                        <div class="rounded-2xl bg-white p-4 shadow-sm border border-slate-100">
                            <div class="text-sm text-slate-500">Безопасность</div>
                            <div class="mt-1 text-base font-semibold text-slate-900">
                                Современные стандарты стерильности
                            </div>
                        </div>

                        <div class="rounded-2xl bg-white p-4 shadow-sm border border-slate-100">
                            <div class="text-sm text-slate-500">Комфорт</div>
                            <div class="mt-1 text-base font-semibold text-slate-900">
                                Понятный план лечения и бережный подход
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-4 p-6 sm:grid-cols-3">
                        <div class="rounded-2xl bg-cyan-50 p-4">
                            <div class="text-sm text-slate-500">Рейтинг</div>
                            <div class="mt-1 text-lg font-bold text-slate-900">4.9 / 5</div>
                        </div>

                        <div class="rounded-2xl bg-sky-50 p-4">
                            <div class="text-sm text-slate-500">Запись</div>
                            <div class="mt-1 text-lg font-bold text-slate-900">За 1 минуту</div>
                        </div>

                        <div class="rounded-2xl bg-blue-50 p-4">
                            <div class="text-sm text-slate-500">Подход</div>
                            <div class="mt-1 text-lg font-bold text-slate-900">Для взрослых и детей</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="services" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-600">Услуги</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Стоматологические услуги</h2>
            <p class="mt-4 text-slate-600">
                Комплексный подход к лечению, профилактике и восстановлению зубов.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="reveal rounded-3xl border border-slate-100 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <h3 class="text-xl font-bold">Лечение кариеса</h3>
                <p class="mt-3 text-slate-600">Аккуратное лечение с современными материалами и точной диагностикой.</p>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <h3 class="text-xl font-bold">Профессиональная чистка</h3>
                <p class="mt-3 text-slate-600">Удаление налета и камня, профилактика заболеваний десен и свежесть дыхания.</p>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <h3 class="text-xl font-bold">Имплантация</h3>
                <p class="mt-3 text-slate-600">Восстановление утраченных зубов с надежной фиксацией и эстетикой.</p>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <h3 class="text-xl font-bold">Эстетическая стоматология</h3>
                <p class="mt-3 text-slate-600">Отбеливание, реставрация и улучшение внешнего вида улыбки.</p>
            </div>
        </div>
    </section>

    <section id="advantages" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-600">Почему выбирают нас</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Комфорт, опыт и понятный подход</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
                <div class="text-lg font-bold">Опытные врачи</div>
                <p class="mt-3 text-sm text-slate-600">
                    Специалисты с практическим опытом, которые объясняют лечение простым языком.
                </p>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
                <div class="text-lg font-bold">Современное оборудование</div>
                <p class="mt-3 text-sm text-slate-600">
                    Диагностика и лечение с использованием современных технологий и материалов.
                </p>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
                <div class="text-lg font-bold">Прозрачный план лечения</div>
                <p class="mt-3 text-sm text-slate-600">
                    Перед началом лечения пациент понимает этапы, сроки и ожидаемый результат.
                </p>
            </div>
        </div>
    </section>

    <section id="doctors" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-600">Врачи</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Специалисты клиники</h2>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 text-center shadow-sm">
                <div class="mx-auto h-24 w-24 rounded-full bg-gradient-to-br from-cyan-100 to-sky-100"></div>
                <h3 class="mt-5 text-xl font-bold">Анна Сергеевна</h3>
                <p class="mt-2 text-sm text-cyan-600">Терапевт-стоматолог</p>
                <p class="mt-3 text-sm text-slate-600">Лечение кариеса, реставрация, профилактика.</p>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 text-center shadow-sm">
                <div class="mx-auto h-24 w-24 rounded-full bg-gradient-to-br from-cyan-100 to-sky-100"></div>
                <h3 class="mt-5 text-xl font-bold">Максим Олегович</h3>
                <p class="mt-2 text-sm text-cyan-600">Хирург-имплантолог</p>
                <p class="mt-3 text-sm text-slate-600">Имплантация, удаление, хирургическое лечение.</p>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 text-center shadow-sm">
                <div class="mx-auto h-24 w-24 rounded-full bg-gradient-to-br from-cyan-100 to-sky-100"></div>
                <h3 class="mt-5 text-xl font-bold">Екатерина Игоревна</h3>
                <p class="mt-2 text-sm text-cyan-600">Ортопед</p>
                <p class="mt-3 text-sm text-slate-600">Протезирование, эстетическое восстановление улыбки.</p>
            </div>
        </div>
    </section>

    <section id="reviews" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-600">Отзывы</p>
            <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Что говорят пациенты</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
                <p class="text-slate-700">
                    “Очень аккуратное лечение, все объяснили заранее. Понравилось отношение и спокойная атмосфера.”
                </p>
                <div class="mt-5 text-sm text-slate-500">— Марина К.</div>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
                <p class="text-slate-700">
                    “Долго откладывал имплантацию, но здесь подробно рассказали все этапы. В итоге остался доволен.”
                </p>
                <div class="mt-5 text-sm text-slate-500">— Александр Т.</div>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
                <p class="text-slate-700">
                    “Приятная клиника, вежливый персонал и удобная запись. Делала чистку и лечение — все отлично.”
                </p>
                <div class="mt-5 text-sm text-slate-500">— Алина С.</div>
            </div>
        </div>
    </section>

    <section id="about" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-600">О клинике</p>
                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">
                    Заботимся о здоровье зубов и комфорте каждого пациента
                </h2>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-8 text-slate-600 shadow-sm">
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
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-600">Запись</p>
                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">Запишитесь на консультацию</h2>
                <p class="mt-4 max-w-xl text-slate-600">
                    Оставьте заявку, и администратор свяжется с вами, чтобы подобрать удобное время приема.
                </p>

                <div class="mt-8 space-y-4 text-slate-700">
                    <div class="rounded-2xl border border-slate-100 bg-white p-4 shadow-sm">
                        <div class="text-sm text-slate-500">Телефон</div>
                        <div class="mt-1 text-lg font-semibold">+7 777 000 00 00</div>
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-white p-4 shadow-sm">
                        <div class="text-sm text-slate-500">Адрес</div>
                        <div class="mt-1 text-lg font-semibold">г. Алматы, ул. Примерная, 25</div>
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-white p-4 shadow-sm">
                        <div class="text-sm text-slate-500">График</div>
                        <div class="mt-1 text-lg font-semibold">Пн–Сб: 09:00–20:00</div>
                    </div>
                </div>
            </div>

            <div class="reveal rounded-3xl border border-slate-100 bg-white p-8 shadow-sm">
                @if(session('success'))
                <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('dental-landing.contact') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="mb-2 block text-sm text-slate-700">Ваше имя</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-cyan-500"
                            placeholder="Введите имя">
                        @error('name')
                        <p class="mt-1 text-sm text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm text-slate-700">Телефон</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-cyan-500"
                            placeholder="+7 777 000 00 00">
                        @error('phone')
                        <p class="mt-1 text-sm text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm text-slate-700">Что вас беспокоит</label>
                        <textarea name="message" rows="4"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-cyan-500"
                            placeholder="Например: боль в зубе, чистка, консультация, имплантация">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="mt-1 text-sm text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="shine-btn w-full rounded-2xl bg-cyan-500 px-6 py-4 font-semibold text-white transition hover:bg-cyan-600">
                        Записаться
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="border-t border-slate-200 px-6 py-8 lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 text-sm text-slate-500 md:flex-row md:items-center md:justify-between">
            <div>© {{ date('Y') }} DentalCare</div>
            <div>Стоматология • Диагностика • Лечение • Имплантация</div>
        </div>
    </footer>

    <button
        id="scrollTopBtn"
        type="button"
        aria-label="Наверх"
        class="fixed bottom-5 right-5 z-50 flex h-14 w-14 translate-y-4 items-center justify-center rounded-full border border-white/60 bg-white/90 text-cyan-600 shadow-[0_10px_30px_rgba(6,182,212,0.22)] backdrop-blur transition-all duration-300 hover:scale-105 hover:bg-cyan-500 hover:text-white opacity-0 pointer-events-none md:bottom-8 md:right-8 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 19V5"></path>
            <path d="m5 12 7-7 7 7"></path>
        </svg>
    </button>

</body>

</html>