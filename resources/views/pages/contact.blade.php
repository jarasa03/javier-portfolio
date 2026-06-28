@extends('layouts.app')

@section('title', 'Contacto | ' . config('app.name', 'Laravel'))
@section('meta_description', 'Contacto para proyectos de desarrollo web, automatizaciones, APIs, agentes IA, agentes telefónicos y Google Business Profile.')

@section('content')
    <section class="full-bleed relative overflow-hidden border-y border-brand-soft/70 shadow-[0_18px_50px_rgba(15,23,42,0.08)]">
        <div class="absolute inset-0">
            <img
                src="{{ asset('images/contact/hero-contact.webp') }}"
                alt=""
                class="h-full w-full object-cover"
            >
            <div class="absolute inset-0 bg-slate-950/35"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/75 via-slate-950/45 to-slate-950/20"></div>
        </div>

            <div class="relative mx-auto grid max-w-7xl gap-8 px-4 py-8 sm:px-6 sm:py-10 lg:grid-cols-[1.08fr_0.92fr] lg:items-end lg:px-8 lg:py-12">
            <div class="max-w-3xl text-white" data-reveal>
                <p class="text-sm font-medium tracking-[0.24em] text-brand-warm uppercase">Contacto</p>
                <h1 class="mt-4 text-4xl font-semibold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Cuéntame qué quieres vender, automatizar o integrar.
                </h1>
                <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-100/90">
                    Si tienes una idea, una web que necesita más claridad o un proceso que ya no debería hacerse a mano, escríbeme y vemos la mejor forma de resolverlo.
                </p>
            </div>

            <div class="grid gap-3 sm:grid-cols-3 lg:grid-cols-1" data-reveal style="--reveal-delay: 120ms">
                <a href="mailto:hola@tudominio.com" class="group flex items-center justify-between rounded-2xl border border-white/15 bg-white/92 px-4 py-4 text-slate-900 shadow-[0_12px_30px_rgba(15,23,42,0.16)] backdrop-blur-md transition duration-200 ease-out hover:-translate-y-1 hover:border-brand-soft hover:bg-white hover:shadow-[0_18px_36px_rgba(15,23,42,0.2)]">
                        <span class="flex items-center gap-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-brand-soft/70 text-brand transition duration-200 ease-out group-hover:scale-105">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
                            <span class="text-sm font-medium text-slate-900">Email</span>
                        </span>
                    <span class="text-sm font-semibold text-brand transition duration-200 ease-out group-hover:text-brand-strong">hola@tudominio.com</span>
                </a>

                <a href="https://wa.me/34000000000" class="group flex items-center justify-between rounded-2xl border border-white/15 bg-white/92 px-4 py-4 text-slate-900 shadow-[0_12px_30px_rgba(15,23,42,0.16)] backdrop-blur-md transition duration-200 ease-out hover:-translate-y-1 hover:border-brand-soft hover:bg-white hover:shadow-[0_18px_36px_rgba(15,23,42,0.2)]">
                    <span class="flex items-center gap-3">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full bg-brand-warm-soft/90 text-amber-900 transition duration-200 ease-out group-hover:scale-105">
                            <svg class="h-5 w-5" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                <path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z" />
                                <path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-slate-900">WhatsApp</span>
                    </span>
                    <span class="text-sm font-semibold text-brand transition duration-200 ease-out group-hover:text-brand-strong">Abrir</span>
                </a>

                <a href="https://www.linkedin.com/in/javierarrua/" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between rounded-2xl border border-white/15 bg-white/92 px-4 py-4 text-slate-900 shadow-[0_12px_30px_rgba(15,23,42,0.16)] backdrop-blur-md transition duration-200 ease-out hover:-translate-y-1 hover:border-brand-soft hover:bg-white hover:shadow-[0_18px_36px_rgba(15,23,42,0.2)]">
                    <span class="flex items-center gap-3">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-900 text-white transition duration-200 ease-out group-hover:scale-105">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M6.94 7.5A1.94 1.94 0 1 1 3.06 7.5a1.94 1.94 0 0 1 3.88 0ZM3.4 9.8h3.1V20H3.4V9.8Zm5 0h2.97v1.42h.04c.41-.78 1.4-1.6 2.9-1.6 3.1 0 3.67 2.04 3.67 4.7V20h-3.1v-5.09c0-1.22-.03-2.8-1.7-2.8-1.7 0-1.96 1.33-1.96 2.7V20H8.4V9.8Z" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-slate-900">LinkedIn</span>
                    </span>
                    <span class="text-sm font-semibold text-brand transition duration-200 ease-out group-hover:text-brand-strong">Ver perfil</span>
                </a>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8" data-reveal style="--reveal-delay: 180ms">
        <div class="surface overflow-hidden">
            <div class="border-b border-slate-200 bg-white px-6 py-5 lg:px-8">
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Resumen de proyecto</p>
                <h2 class="mt-2 text-2xl font-semibold text-slate-900">Cuéntame lo justo y te respondo con contexto.</h2>
                <p class="mt-3 max-w-3xl text-sm leading-6 text-slate-600">
                    No hace falta escribir un texto largo. Con una idea general, el objetivo y lo que hoy te está frenando ya tengo base para orientarte bien.
                </p>
            </div>

            <div class="grid gap-0 lg:grid-cols-[1.1fr_0.9fr]">
                <form class="p-6 lg:p-8" data-reveal style="--reveal-delay: 240ms">
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-700" for="name">Nombre</label>
                            <input id="name" type="text" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-slate-400 focus:ring-2 focus:ring-slate-200" placeholder="Tu nombre">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-700" for="email">Email</label>
                            <input id="email" type="email" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-slate-400 focus:ring-2 focus:ring-slate-200" placeholder="tu@email.com">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="mb-2 block text-sm font-medium text-slate-700" for="message">Mensaje</label>
                        <textarea id="message" rows="8" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-slate-400 focus:ring-2 focus:ring-slate-200" placeholder="Explícame el proyecto, el resultado que buscas y el plazo ideal."></textarea>
                    </div>

                    <div class="mt-5 flex flex-col gap-3 sm:flex-row sm:items-center">
                        <button type="button" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">
                            Enviar
                        </button>
                    </div>
                </form>

                <aside class="border-t border-slate-200 bg-[#f8fbff] p-6 lg:border-l lg:border-t-0 lg:p-8" data-reveal style="--reveal-delay: 300ms">
                    <div class="rounded-[1.5rem] border border-brand-soft bg-white p-5 shadow-sm">
                        <p class="text-sm font-medium tracking-[0.22em] text-brand uppercase">Qué incluir</p>
                        <ul class="mt-4 space-y-3 text-sm leading-6 text-slate-600">
                            <li class="flex gap-3">
                                <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-brand"></span>
                                <span>Qué problema quieres resolver o qué venta quieres mejorar.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-brand-warm"></span>
                                <span>Qué herramientas usas hoy y dónde se atasca el proceso.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-slate-700"></span>
                                <span>Si hay una fecha, presupuesto o referencia que deba tener en cuenta.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4 rounded-[1.5rem] border border-slate-200 bg-brand-warm-soft/60 p-5">
                        <p class="text-sm font-medium tracking-[0.22em] text-amber-900 uppercase">Ideal para empezar</p>
                        <p class="mt-3 text-sm leading-6 text-slate-700">
                            Nuevas webs, mejoras de conversión, automatizaciones internas, integraciones entre herramientas o asistentes IA con un objetivo muy concreto.
                        </p>
                    </div>
                </aside>
            </div>
        </div>
    </section>

@endsection
