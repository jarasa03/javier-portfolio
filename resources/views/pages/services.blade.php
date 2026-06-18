@extends('layouts.app')

@section('title', 'Servicios | ' . config('app.name', 'Laravel'))
@section('meta_description', 'Servicios de desarrollo web, automatizaciones, integraciones API, agentes IA, agentes telefónicos y Google Business Profile.')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-10 pt-14 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Servicios</p>
            <h1 class="mt-4 text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl">Soluciones concretas, bien explicadas y con una ejecución sobria.</h1>
            <p class="mt-5 text-lg leading-8 text-slate-600">
                Trabajo contigo para elegir la pieza correcta, construirla con criterio y dejarla preparada para crecer sin tener que rehacerla cada pocos meses.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="grid gap-4 lg:grid-cols-2">
            @foreach ([
                [
                    'title' => 'Desarrollo web',
                    'text' => 'Sitios corporativos, landings y portfolios con Blade, Tailwind y Vite. Diseño limpio, rápido y orientado a conversión.',
                    'items' => ['Diseño responsive', 'Arquitectura clara', 'SEO técnico base'],
                ],
                [
                    'title' => 'Automatizaciones',
                    'text' => 'Sustituyo tareas repetitivas por flujos automáticos entre formularios, email, CRM, hojas de cálculo y mensajería.',
                    'items' => ['Ahorro de tiempo', 'Menos errores', 'Procesos repetibles'],
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
                <article class="surface p-6">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Servicio</p>
                    <h2 class="mt-3 text-2xl font-semibold text-slate-900">{{ $service['title'] }}</h2>
                    <p class="mt-3 text-sm leading-6 text-slate-600">{{ $service['text'] }}</p>
                    <ul class="mt-5 grid gap-2 text-sm text-slate-700">
                        @foreach ($service['items'] as $item)
                            <li class="flex items-center gap-3">
                                <span class="h-2 w-2 rounded-full bg-slate-900"></span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="surface p-8">
            <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Modelo de colaboración</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Proyectos cerrados o acompañamiento continuo.</h2>
                    <p class="mt-4 max-w-2xl text-slate-600">
                        Podemos trabajar por entrega concreta, por bloques de mejora o en una retención ligera para iterar el sistema junto con tu negocio.
                    </p>
                </div>
                <div class="grid gap-3 sm:grid-cols-2">
                    @foreach ([
                        'Sprint de lanzamiento',
                        'Automatización puntual',
                        'Integración entre herramientas',
                        'Soporte evolutivo',
                    ] as $mode)
                        <div class="rounded-2xl border border-brand-soft bg-brand-soft/20 px-4 py-5 text-sm font-medium text-brand-strong">
                            {{ $mode }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
