@extends('layouts.app')

@section('title', 'Inicio | ' . config('app.name', 'Laravel'))
@section('meta_description', 'Portfolio freelance de desarrollo web, automatizaciones, integraciones API, agentes IA, agentes telefónicos y Google Business Profile.')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-10 pt-10 sm:px-6 lg:px-8 lg:pb-14 lg:pt-10">
        <div class="grid items-start gap-12 lg:grid-cols-[1.05fr_0.95fr]">
            <div class="max-w-3xl">
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Portfolio freelance</p>
                <h1 class="mt-5 text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                    Desarrollo web y automatización para negocios que quieren vender con más claridad.
                </h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                    Ayudo a empresas y profesionales a construir una presencia digital seria: sitios web sólidos, integraciones bien resueltas, automatizaciones útiles y asistentes que mejoran la operación diaria.
                </p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-strong">
                        Reservar una llamada
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center rounded-full border border-brand-soft bg-white px-6 py-3 text-sm font-semibold text-brand transition hover:border-brand hover:bg-brand-soft/40">
                        Ver servicios
                    </a>
                </div>

            </div>

            <div class="surface overflow-hidden p-6">
                <div class="flex items-center justify-between gap-4 border-b border-slate-200 pb-5">
                    <div>
                        <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Áreas principales</p>
                        <h2 class="mt-2 text-2xl font-semibold text-slate-900">Tres capas que ordenan todo lo que ofrezco</h2>
                    </div>
                    <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">
                        Disponible
                    </span>
                </div>

                <div class="mt-6 grid gap-3">
                    @foreach ([
                        [
                            'label' => 'Presencia digital',
                            'value' => 'Webs corporativas, landings y portfolios que transmiten confianza y convierten mejor.',
                        ],
                        [
                            'label' => 'Automatización e integraciones',
                            'value' => 'Procesos, APIs y flujos que ahorran tiempo y conectan herramientas sin fricción.',
                        ],
                        [
                            'label' => 'IA y negocio local',
                            'value' => 'Agentes IA, atención telefónica y Google Business Profile para captar y atender mejor.',
                        ],
                    ] as $item)
                        <div class="rounded-2xl border border-slate-200 bg-brand-soft/20 p-4">
                            <p class="font-medium text-slate-900">{{ $item['label'] }}</p>
                            <p class="mt-1 text-sm leading-6 text-slate-600">{{ $item['value'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="grid gap-4 lg:grid-cols-3">
            @foreach ([
                ['title' => 'Web que transmite confianza', 'text' => 'Landings, portfolios y sitios corporativos con jerarquía visual limpia, mensajes claros y una presencia consistente.'],
                ['title' => 'Automatización práctica', 'text' => 'Flujos entre formularios, email, CRM y mensajería que quitan trabajo repetitivo sin añadir complejidad.'],
                ['title' => 'IA aplicada con criterio', 'text' => 'Agentes y asistentes para tareas concretas, sin humo, pensados para resolver procesos reales.'],
            ] as $card)
                <article class="surface p-6">
                    <h3 class="text-xl font-semibold text-slate-900">{{ $card['title'] }}</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600">{{ $card['text'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="surface p-6 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Caso destacado</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Automatización de reseñas para HRmotor</h2>
                    <p class="mt-4 text-sm leading-7 text-slate-600">
                        Automatización con IA para responder reseñas de Google Maps en varias delegaciones: las positivas se contestan automáticamente y las negativas pasan por una revisión humana antes de publicarse.
                    </p>
                </div>
                <div class="grid gap-3 sm:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-brand-soft/20 p-4">
                        <p class="text-sm font-medium text-brand">Entrada</p>
                        <p class="mt-2 text-sm leading-6 text-slate-600">Reseñas desde Google Maps</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-brand-soft/20 p-4">
                        <p class="text-sm font-medium text-brand">Proceso</p>
                        <p class="mt-2 text-sm leading-6 text-slate-600">IA + Google Sheets + revisión</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-brand-soft/20 p-4">
                        <p class="text-sm font-medium text-brand">Salida</p>
                        <p class="mt-2 text-sm leading-6 text-slate-600">Respuesta publicada con control</p>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Automatización e IA</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Google Maps</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Google Sheets</span>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-2 sm:px-6 lg:px-8">
        <div class="surface p-6">
            <div class="grid gap-6 lg:grid-cols-[1fr_auto] lg:items-center">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Otro proyecto</p>
                    <h2 class="mt-2 text-2xl font-semibold text-slate-900">Agible Capital, web corporativa desarrollada desde diseño gráfico</h2>
                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Implementación de una web institucional para una gestora de inversión, trasladando un diseño de una diseñadora gráfica a una experiencia web clara, bilingüe y orientada a credibilidad.
                    </p>
                </div>
                <a href="{{ route('work') }}" class="inline-flex items-center justify-center rounded-full border border-brand-soft bg-white px-5 py-3 text-sm font-semibold text-brand transition hover:border-brand hover:bg-brand-soft/40">
                    Ver casos de estudio
                </a>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr]">
            <div>
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Cómo trabajo</p>
                <h2 class="mt-4 text-3xl font-semibold text-slate-900 sm:text-4xl">Proceso claro, decisiones justificadas y entregas que no dejan dudas.</h2>
                <p class="mt-4 max-w-xl text-slate-600">
                    Empiezo por entender el negocio, priorizo lo importante y convierto la idea en un sistema fácil de usar, mantener y mejorar.
                </p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ([
                    ['step' => '01', 'title' => 'Descubrimiento', 'text' => 'Objetivos, fricciones, canales y métricas.'],
                    ['step' => '02', 'title' => 'Arquitectura', 'text' => 'Flujo, pantallas, integraciones y prioridades.'],
                    ['step' => '03', 'title' => 'Construcción', 'text' => 'Implementación limpia con entregas visibles.'],
                    ['step' => '04', 'title' => 'Lanzamiento', 'text' => 'Ajustes finales, soporte y siguientes pasos.'],
                ] as $step)
                    <div class="surface p-5">
                        <p class="text-sm font-medium tracking-[0.24em] text-slate-500">{{ $step['step'] }}</p>
                        <h3 class="mt-3 text-lg font-semibold text-slate-900">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
