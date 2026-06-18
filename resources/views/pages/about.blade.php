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

            <div class="grid gap-4 sm:grid-cols-2">
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
