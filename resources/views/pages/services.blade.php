@extends('layouts.app')

@section('title', 'Servicios | ' . config('app.name', 'Laravel'))
@section('meta_description', 'Servicios de desarrollo web, automatizaciones, integraciones API, agentes IA, agentes telefónicos y Google Business Profile.')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-10 pt-14 sm:px-6 lg:px-8 lg:pb-14">
        <div class="grid gap-8 lg:grid-cols-[0.98fr_1.02fr] lg:items-start">
            <div class="max-w-3xl">
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Servicios</p>
                <h1 class="mt-4 text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                    Soluciones claras, bien resueltas y pensadas para aportar valor real.
                </h1>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Trabajo contigo para elegir la pieza correcta, construirla con criterio y dejarla preparada para crecer sin rehacer la base cada pocos meses.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-strong">
                        Hablemos del proyecto
                    </a>
                    <a href="{{ route('work') }}" class="inline-flex items-center justify-center rounded-full border border-brand-soft bg-white px-6 py-3 text-sm font-semibold text-brand transition hover:border-brand hover:bg-brand-soft/40">
                        Ver trabajos
                    </a>
                </div>
            </div>

            <div class="surface overflow-hidden p-6 lg:p-7">
                <div class="flex items-start justify-between gap-4 border-b border-slate-200 pb-5">
                    <div>
                        <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Lo que incluye</p>
                        <h2 class="mt-2 text-2xl font-semibold text-slate-900">Una mezcla de estrategia, ejecución y criterio técnico.</h2>
                    </div>
                    <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">
                        Disponible
                    </span>
                </div>

                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['label' => 'Webs claras', 'value' => 'Presencia digital limpia, rápida y orientada a convertir mejor.'],
                        ['label' => 'Automatización', 'value' => 'Procesos que ahorran tiempo y reducen tareas repetitivas.'],
                        ['label' => 'Integración', 'value' => 'Herramientas conectadas para que tus datos fluyan sin fricción.'],
                        ['label' => 'IA aplicada', 'value' => 'Asistentes y agentes para tareas concretas con criterio de negocio.'],
                    ] as $item)
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">{{ $item['label'] }}</p>
                            <p class="mt-1 text-sm leading-6 text-slate-600">{{ $item['value'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="mb-5 flex items-end justify-between gap-4">
            <div>
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Catálogo</p>
                <h2 class="mt-2 text-3xl font-semibold text-slate-900">Servicios pensados para verse bien y funcionar mejor.</h2>
            </div>
        </div>

        <div class="grid gap-4 lg:grid-cols-2">
            @foreach ([
                [
                    'title' => 'Automatizaciones',
                    'text' => 'Sustituyo tareas repetitivas por flujos automáticos entre formularios, email, CRM, hojas de cálculo y mensajería.',
                    'items' => ['Ahorro de tiempo', 'Menos errores', 'Procesos repetibles'],
                ],
                [
                    'title' => 'Desarrollo web',
                    'text' => 'Sitios corporativos, landings y portfolios con Blade, Tailwind y Vite. Diseño limpio, rápido y orientado a conversión.',
                    'items' => ['Diseño responsive', 'Arquitectura clara', 'SEO técnico base'],
                ],
                [
                    'title' => 'Integraciones API',
                    'text' => 'Conecto herramientas para que tus datos viajen entre sistemas sin copiar y pegar ni depender de procesos manuales.',
                    'items' => ['Sincronización de datos', 'Webhooks', 'Normalización de información'],
                ],
                [
                    'title' => 'Agentes IA',
                    'text' => 'Asistentes orientados a negocio para responder consultas, clasificar leads, generar resúmenes y activar procesos.',
                    'items' => ['Atención asistida', 'Clasificación de leads', 'Respuestas contextuales'],
                ],
                [
                    'title' => 'Agentes telefónicos',
                    'text' => 'Soluciones para atender llamadas, capturar información clave y derivar oportunidades con una experiencia clara.',
                    'items' => ['Recepción 24/7', 'Cualificación de leads', 'Seguimiento automatizado'],
                ],
                [
                    'title' => 'Google Business Profile',
                    'text' => 'Optimización de la ficha local para mejorar visibilidad, reforzar confianza y convertir búsquedas en contacto real.',
                    'items' => ['Perfil optimizado', 'Acciones locales', 'Mayor presencia en mapas'],
                ],
            ] as $service)
                <article class="surface relative overflow-hidden p-6 lg:p-7">
                    <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>

                    <div class="min-w-0">
                        <h3 class="text-2xl font-semibold text-slate-900">{{ $service['title'] }}</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">{{ $service['text'] }}</p>
                    </div>

                    <ul class="mt-5 grid gap-2 text-sm text-slate-700">
                        @foreach ($service['items'] as $item)
                            <li class="flex items-center gap-3">
                                <span class="h-1.5 w-1.5 rounded-full bg-slate-700/70"></span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
    <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="surface overflow-hidden p-0">
            <div class="grid gap-0 lg:grid-cols-[1fr_0.92fr] lg:items-stretch">
                <div class="relative overflow-hidden bg-brand-soft/30 p-6 lg:p-8">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Modelo de colaboración</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Proyectos cerrados o acompañamiento continuo.</h2>
                    <p class="mt-4 max-w-2xl text-slate-600">
                        Podemos trabajar por entrega concreta, por bloques de mejora o en una retención ligera para iterar el sistema junto con tu negocio.
                    </p>

                    <div class="mt-6 grid gap-3 sm:grid-cols-2">
                        @foreach ([
                            'Sprint de lanzamiento',
                            'Automatización puntual',
                            'Integración entre herramientas',
                            'Soporte evolutivo',
                        ] as $mode)
                            <div class="rounded-2xl border border-brand-soft bg-white px-4 py-4 text-sm font-medium text-brand-strong shadow-sm">
                                {{ $mode }}
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col justify-between gap-6 p-6 lg:p-8">
                    <div>
                        <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Por qué funciona</p>
                        <div class="mt-4 space-y-4 text-sm leading-6 text-slate-600">
                            <p>
                                Porque aquí entiendes rápido qué necesitas, cómo lo vamos a resolver y qué vas a conseguir con cada paso.
                            </p>
                            <p>
                                Así avanzas con claridad, sin dar vueltas, y puedes decidir con más seguridad qué servicio encaja mejor en tu negocio.
                            </p>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="inline-flex w-fit items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-strong">
                        Cuéntame lo que necesitas
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
