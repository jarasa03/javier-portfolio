@extends('layouts.app')

@section('title', 'Contacto | ' . config('app.name', 'Laravel'))
@section('meta_description', 'Contacto para proyectos de desarrollo web, automatizaciones, APIs, agentes IA, agentes telefónicos y Google Business Profile.')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-10 pt-14 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr]">
            <div>
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Contacto</p>
                <h1 class="mt-4 text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl">Cuéntame qué quieres vender, automatizar o integrar.</h1>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Si tienes una idea, una web que necesita mejorar o un proceso que ya no debería hacerse a mano, escríbeme y vemos la mejor forma de resolverlo.
                </p>

                <div class="mt-8 space-y-4">
                    <a href="mailto:hola@tudominio.com" class="flex items-center justify-between rounded-3xl border border-slate-200 bg-white px-5 py-4 text-slate-900 transition hover:border-slate-300 hover:bg-slate-50">
                        <span>
                        <span class="block text-sm text-brand">Email</span>
                            <span class="block text-base font-medium">hola@tudominio.com</span>
                        </span>
                        <span class="text-brand">Enviar</span>
                    </a>
                    <a href="https://wa.me/34000000000" class="flex items-center justify-between rounded-3xl border border-slate-200 bg-white px-5 py-4 text-slate-900 transition hover:border-slate-300 hover:bg-slate-50">
                        <span>
                        <span class="block text-sm text-brand">WhatsApp</span>
                            <span class="block text-base font-medium">Mensaje directo</span>
                        </span>
                        <span class="text-brand">Abrir</span>
                    </a>
                </div>
            </div>

            <div class="surface p-6">
                    <h2 class="text-2xl font-semibold text-slate-900">Resumen de proyecto</h2>
                <p class="mt-3 text-sm leading-6 text-slate-600">
                    Dime en pocas líneas qué estás buscando, cuál es el objetivo y qué herramienta o proceso hoy te está frenando.
                </p>

                <form class="mt-6 grid gap-4">
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700" for="name">Nombre</label>
                        <input id="name" type="text" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-slate-400 focus:ring-2 focus:ring-slate-200" placeholder="Tu nombre">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700" for="email">Email</label>
                        <input id="email" type="email" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-slate-400 focus:ring-2 focus:ring-slate-200" placeholder="tu@email.com">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700" for="message">Mensaje</label>
                        <textarea id="message" rows="6" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-slate-400 focus:ring-2 focus:ring-slate-200" placeholder="Explícame el proyecto, el resultado que buscas y el plazo ideal."></textarea>
                    </div>
                    <button type="button" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">
                        Preparar mensaje
                    </button>
                    <p class="text-xs leading-5 text-slate-500">
                        Este formulario es una base visual para el portfolio. Cuando quieras, podemos conectarlo a correo, CRM o automatización.
                    </p>
                </form>
            </div>
        </div>
    </section>
@endsection
