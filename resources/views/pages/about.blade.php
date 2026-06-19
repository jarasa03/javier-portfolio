@extends('layouts.app')

@section('title', 'Sobre mí | ' . config('app.name', 'Laravel'))
@section('meta_description', 'Conoce el enfoque, la forma de trabajar y la propuesta de valor de este portfolio freelance.')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-10 pt-14 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.92fr_1.08fr] lg:items-start">
            <div>
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Sobre mí</p>
                <h1 class="mt-4 text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl">Me gusta construir sistemas sencillos que resuelven problemas reales.</h1>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Mi trabajo une desarrollo web, automatización e IA aplicada para que empresas pequeñas y marcas personales puedan vender y operar con más inteligencia.
                </p>
            </div>

            <div class="space-y-4">
                @php($portraitPath = public_path('images/javier-portrait.PNG'))
                @if (file_exists($portraitPath))
                    <div class="surface overflow-hidden">
                        <div class="grid gap-0 lg:grid-cols-[0.78fr_1.22fr] lg:items-stretch">
                            <div class="flex items-start justify-center bg-brand-soft/30 p-5 sm:p-6 lg:justify-start">
                                <img
                                    src="{{ asset('images/javier-portrait.PNG') }}"
                                    alt="Foto de Javier"
                                    class="block h-auto w-full max-w-[260px] rounded-[1.25rem] shadow-sm"
                                >
                            </div>
                            <div class="flex flex-col justify-between p-6 sm:p-7 lg:p-8">
                                <div>
                                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Sobre mí</p>
                                    <p class="mt-3 text-xl font-semibold text-slate-900">Desarrollador web</p>
                                </div>
                                <ul class="mt-6 space-y-3 text-sm leading-7 text-slate-600">
                                    <li>Experto en inteligencia artificial</li>
                                    <li>Especialista en automatizaciones</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['label' => 'Foco', 'value' => 'Negocio y producto'],
                ['label' => 'Estilo', 'value' => 'Directo y ordenado'],
                ['label' => 'Entrega', 'value' => 'Práctica y medible'],
                ['label' => 'Prioridad', 'value' => 'Impacto sostenible'],
            ] as $fact)
                <div class="surface p-6">
                    <p class="text-sm text-brand">{{ $fact['label'] }}</p>
                    <p class="mt-3 text-xl font-semibold text-slate-900">{{ $fact['value'] }}</p>
                </div>
            @endforeach
        </div>

        <style>
            .about-tech-marquee-mask {
                mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent);
                -webkit-mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent);
            }
        </style>

        <section class="full-bleed mt-12 border-y border-slate-200 bg-white/80 py-6 shadow-[0_1px_0_rgba(255,255,255,0.9)_inset]">
            <div class="mx-auto max-w-none px-0">
                <div class="about-tech-marquee tech-marquee tech-marquee-mask about-tech-marquee-mask overflow-hidden" data-tech-marquee>
                    <div class="about-tech-marquee-track tech-marquee-track flex items-center gap-8" data-tech-marquee-track>
                        <div class="tech-marquee-group flex flex-none items-center gap-8" data-tech-marquee-group>
                            @foreach (\App\Support\Portfolio::marqueeItems() as $item)
                                <div class="tech-marquee-item flex shrink-0 items-center gap-3 border-0 bg-transparent px-0 py-0 shadow-none">
                                    <div class="flex h-9 w-9 items-center justify-center overflow-hidden rounded-full bg-transparent">
                                        <img src="{{ asset('images/stacks/' . $item['icon']) }}" alt="" class="h-6 w-6 object-contain opacity-90">
                                    </div>
                                    <div class="whitespace-nowrap">
                                        <p class="text-sm font-medium tracking-wide text-slate-700">{{ $item['name'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tech-marquee-group flex flex-none items-center gap-8" aria-hidden="true">
                            @foreach (\App\Support\Portfolio::marqueeItems() as $item)
                                <div class="tech-marquee-item flex shrink-0 items-center gap-3 border-0 bg-transparent px-0 py-0 shadow-none">
                                    <div class="flex h-9 w-9 items-center justify-center overflow-hidden rounded-full bg-transparent">
                                        <img src="{{ asset('images/stacks/' . $item['icon']) }}" alt="" class="h-6 w-6 object-contain opacity-90">
                                    </div>
                                    <div class="whitespace-nowrap">
                                        <p class="text-sm font-medium tracking-wide text-slate-700">{{ $item['name'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mt-12">
            <div class="flex items-end justify-between gap-4">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Estudios</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Formación técnica y especializada</h2>
                </div>
            </div>

            <div class="mt-6 space-y-4">
                <article class="surface p-6">
                    <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                        <div>
                            <p class="text-sm font-medium tracking-[0.22em] text-brand uppercase">Ene 2026 - Abr 2026</p>
                            <h3 class="mt-3 text-xl font-semibold text-slate-900">Máster en Inteligencia Artificial</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">BIG School</p>
                        </div>
                    </div>
                    <p class="mt-5 text-sm leading-7 text-slate-600">
                        Programa especializado en IA orientado a modelos, herramientas y aplicaciones reales. Reforcé competencias en automatización, análisis de datos, aprendizaje automático y uso estratégico de tecnologías emergentes para impulsar transformación digital y resolver problemas con una visión práctica e innovadora.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        @if (file_exists(public_path('certificates/thumbs/master-artificial-intelligence-big-school.png')) && file_exists(public_path('certificates/master-artificial-intelligence-big-school.pdf')))
                            <button type="button" data-lightbox-open data-lightbox-type="pdf" data-lightbox-src="{{ asset('certificates/master-artificial-intelligence-big-school.pdf') }}" data-lightbox-title="Título BIG School" data-lightbox-caption="Máster en Inteligencia Artificial" class="group inline-flex w-fit max-w-full cursor-pointer flex-col overflow-hidden rounded-[1.2rem] border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-soft hover:shadow-md sm:max-w-[13rem]">
                                <img src="{{ asset('certificates/thumbs/master-artificial-intelligence-big-school.png') }}" alt="Miniatura del título de BIG School" class="block h-auto w-full max-w-full object-contain bg-slate-50 p-1">
                                <div class="border-t border-slate-200 px-2 py-2">
                                    <p class="text-sm font-medium text-slate-900">Título BIG School</p>
                                    <p class="text-xs text-slate-500">Abrir PDF</p>
                                </div>
                            </button>
                        @endif
                        @if (file_exists(public_path('certificates/thumbs/master-artificial-intelligence-universidad-isabel-i.png')) && file_exists(public_path('certificates/master-artificial-intelligence-universidad-isabel-i.pdf')))
                            <button type="button" data-lightbox-open data-lightbox-type="pdf" data-lightbox-src="{{ asset('certificates/master-artificial-intelligence-universidad-isabel-i.pdf') }}" data-lightbox-title="Título Universidad Isabel I" data-lightbox-caption="Máster en Inteligencia Artificial" class="group inline-flex w-fit max-w-full cursor-pointer flex-col overflow-hidden rounded-[1.2rem] border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-soft hover:shadow-md sm:max-w-[13rem]">
                                <img src="{{ asset('certificates/thumbs/master-artificial-intelligence-universidad-isabel-i.png') }}" alt="Miniatura del título de la Universidad Isabel I" class="block h-auto w-full max-w-full object-contain bg-slate-50 p-1">
                                <div class="border-t border-slate-200 px-2 py-2">
                                    <p class="text-sm font-medium text-slate-900">Título Universidad Isabel I</p>
                                    <p class="text-xs text-slate-500">Abrir PDF</p>
                                </div>
                            </button>
                        @endif
                    </div>
                </article>

                <article class="surface p-6">
                    <p class="text-sm font-medium tracking-[0.22em] text-brand uppercase">Sept 2023 - Jun 2025</p>
                    <h3 class="mt-3 text-xl font-semibold text-slate-900">Grado Superior en Desarrollo de Aplicaciones Web</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">IES Virgen de la Paloma</p>
                    <dl class="mt-5 grid gap-4 sm:grid-cols-3 text-sm">
                        <div>
                            <dt class="text-slate-500">Nota media</dt>
                            <dd class="mt-1 font-semibold text-slate-900">8,69</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">Rol</dt>
                            <dd class="mt-1 font-semibold text-slate-900">Delegado</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">Reconocimiento</dt>
                            <dd class="mt-1 font-semibold text-slate-900">Certificado de aprovechamiento de la Comunidad de Madrid por altas notas</dd>
                        </div>
                    </dl>
                    <div class="mt-6">
                        @if (file_exists(public_path('certificates/thumbs/honors-diploma-daw.png')) && file_exists(public_path('certificates/honors-diploma-daw.pdf')))
                            <button type="button" data-lightbox-open data-lightbox-type="pdf" data-lightbox-src="{{ asset('certificates/honors-diploma-daw.pdf') }}" data-lightbox-title="Certificado de aprovechamiento" data-lightbox-caption="Grado Superior en Desarrollo de Aplicaciones Web" class="group inline-flex w-fit max-w-full cursor-pointer flex-col overflow-hidden rounded-[1.2rem] border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-soft hover:shadow-md sm:max-w-[11rem]">
                                <img src="{{ asset('certificates/thumbs/honors-diploma-daw.png') }}" alt="Miniatura del certificado de aprovechamiento" class="block h-auto w-full max-w-full object-contain bg-slate-50 p-1">
                                <div class="border-t border-slate-200 px-2 py-2">
                                    <p class="text-sm font-medium text-slate-900">Certificado de aprovechamiento</p>
                                    <p class="text-xs text-slate-500">Abrir PDF</p>
                                </div>
                            </button>
                        @endif
                    </div>
                </article>

                <article class="surface p-6">
                    <p class="text-sm font-medium tracking-[0.22em] text-brand uppercase">Sept 2021 - Jun 2023</p>
                    <h3 class="mt-3 text-xl font-semibold text-slate-900">Grado Medio en Sistemas Microinformáticos y Redes</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Salesianas Plaza Castilla</p>
                    <dl class="mt-5 grid gap-4 sm:grid-cols-3 text-sm">
                        <div>
                            <dt class="text-slate-500">Nota media</dt>
                            <dd class="mt-1 font-semibold text-slate-900">8,64</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">Rol</dt>
                            <dd class="mt-1 font-semibold text-slate-900">Delegado</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">Experiencia destacada</dt>
                            <dd class="mt-1 font-semibold text-slate-900">Prácticas Erasmus en Irlanda</dd>
                        </div>
                    </dl>
                    <div class="mt-6 flex flex-wrap gap-2">
                        @if (file_exists(public_path('certificates/thumbs/technician-diploma-it-systems-and-networks.png')) && file_exists(public_path('certificates/technician-diploma-it-systems-and-networks.pdf')))
                            <button type="button" data-lightbox-open data-lightbox-type="pdf" data-lightbox-src="{{ asset('certificates/technician-diploma-it-systems-and-networks.pdf') }}" data-lightbox-title="Título oficial" data-lightbox-caption="Grado Medio en Sistemas Microinformáticos y Redes" class="group inline-flex w-fit max-w-full cursor-pointer flex-col overflow-hidden rounded-[1.2rem] border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-soft hover:shadow-md sm:max-w-[13rem]">
                                <img src="{{ asset('certificates/thumbs/technician-diploma-it-systems-and-networks.png') }}" alt="Miniatura del título de grado medio" class="block h-auto w-full max-w-full object-contain bg-slate-50 p-1">
                                <div class="border-t border-slate-200 px-2 py-2">
                                    <p class="text-sm font-medium text-slate-900">Título oficial</p>
                                    <p class="text-xs text-slate-500">Abrir PDF</p>
                                </div>
                            </button>
                        @endif
                        @if (file_exists(public_path('certificates/thumbs/diploma-erasmus.png')) && file_exists(public_path('certificates/diploma-erasmus.pdf')))
                            <button type="button" data-lightbox-open data-lightbox-type="pdf" data-lightbox-src="{{ asset('certificates/diploma-erasmus.pdf') }}" data-lightbox-title="Diploma Erasmus" data-lightbox-caption="Grado Medio en Sistemas Microinformáticos y Redes" class="group inline-flex w-fit max-w-full cursor-pointer flex-col overflow-hidden rounded-[1.2rem] border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-soft hover:shadow-md sm:max-w-[11rem]">
                                <img src="{{ asset('certificates/thumbs/diploma-erasmus.png') }}" alt="Miniatura del diploma Erasmus" class="block h-auto w-full max-w-full object-contain bg-slate-50 p-1">
                                <div class="border-t border-slate-200 px-2 py-2">
                                    <p class="text-sm font-medium text-slate-900">Diploma Erasmus</p>
                                    <p class="text-xs text-slate-500">Abrir PDF</p>
                                </div>
                            </button>
                        @endif
                    </div>
                </article>
            </div>
        </div>

    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="grid gap-4 lg:grid-cols-3">
            @foreach ([
                ['title' => 'Pensamiento comercial', 'text' => 'No construyo solo pantallas bonitas; busco que cada sección ayude a vender, filtrar o ahorrar tiempo.'],
                ['title' => 'Implementación limpia', 'text' => 'Prefiero sistemas sencillos, mantenibles y bien nombrados antes que soluciones frágiles difíciles de escalar.'],
                ['title' => 'Acompañamiento', 'text' => 'Me interesa dejarte con claridad sobre lo que está hecho, lo que sigue y cómo evolucionar el proyecto.'],
            ] as $point)
                <article class="surface p-6">
                    <h2 class="text-xl font-semibold text-slate-900">{{ $point['title'] }}</h2>
                    <p class="mt-3 text-sm leading-6 text-slate-600">{{ $point['text'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
