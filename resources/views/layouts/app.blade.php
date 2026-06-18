<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#050816">
    <meta
        name="description"
        content="@yield('meta_description', 'Portfolio freelance de desarrollo web, automatizaciones, APIs, agentes IA y Google Business Profile.')"
    >
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f7f7f5] text-slate-900 antialiased">
    <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-24 bg-[#f7f7f5]"></div>
        <div class="absolute inset-x-0 top-24 h-px bg-slate-200"></div>
    </div>

    @php
        $navigation = [
            ['name' => 'Inicio', 'route' => 'home'],
            ['name' => 'Servicios', 'route' => 'services'],
            ['name' => 'Trabajos', 'route' => 'work'],
            ['name' => 'Sobre mí', 'route' => 'about'],
            ['name' => 'Contacto', 'route' => 'contact'],
        ];
    @endphp

    <div class="relative">
        <header class="sticky top-0 z-40 border-b border-brand-soft/80 bg-[#f8fbff]/92 backdrop-blur-md shadow-[0_1px_0_rgba(29,78,216,0.05)]">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('home') }}" class="group inline-flex items-center gap-3">
                    @php($avatarPath = public_path('images/javier-portrait.PNG'))
                    @if (file_exists($avatarPath))
                        <img
                            src="{{ asset('images/javier-portrait.PNG') }}"
                            alt="Foto de Javier"
                            class="h-14 w-14 rounded-full border border-slate-200 object-cover shadow-sm lg:h-16 lg:w-16"
                            style="object-position: center 28%;"
                        >
                    @else
                        <span class="flex h-14 w-14 items-center justify-center rounded-full border border-slate-200 bg-slate-100 text-sm font-semibold text-slate-700 transition group-hover:bg-slate-200 lg:h-16 lg:w-16">
                            JV
                        </span>
                    @endif
                    <span>
                        <span class="block text-sm font-medium tracking-[0.22em] text-brand uppercase">Portfolio freelance</span>
                        <span class="block text-lg font-semibold text-slate-900">{{ config('app.name', 'Laravel') }}</span>
                    </span>
                </a>

                <button
                    type="button"
                    class="inline-flex items-center justify-center rounded-full border border-brand-soft bg-white p-3 text-brand-strong shadow-sm transition hover:border-brand-soft hover:bg-brand-soft/30 lg:hidden"
                    data-menu-button
                    aria-controls="primary-navigation"
                    aria-expanded="false"
                >
                    <span class="sr-only">Abrir menú</span>
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <nav id="primary-navigation" class="hidden items-center gap-1 rounded-full border border-brand-soft bg-white/90 p-1 shadow-sm lg:flex">
                    @foreach ($navigation as $item)
                        <a
                            href="{{ route($item['route']) }}"
                            @class([
                                'rounded-full px-4 py-2 text-sm font-medium transition',
                                'bg-brand text-white shadow-sm' => request()->routeIs($item['route']),
                                'text-slate-600 hover:bg-brand-soft/40 hover:text-brand-strong' => ! request()->routeIs($item['route']),
                            ])
                        >
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <div class="lg:hidden">
                <nav
                    id="mobile-navigation"
                    class="mx-4 mb-4 hidden rounded-[1.5rem] border border-brand-soft bg-[#f8fbff] p-3 shadow-lg"
                    data-menu-panel
                >
                    <div class="grid gap-1">
                        @foreach ($navigation as $item)
                            <a
                                href="{{ route($item['route']) }}"
                                @class([
                                    'rounded-2xl px-4 py-3 text-sm font-medium transition',
                                    'bg-brand text-white' => request()->routeIs($item['route']),
                                    'text-slate-600 hover:bg-brand-soft/40 hover:text-brand-strong' => ! request()->routeIs($item['route']),
                                ])
                            >
                                {{ $item['name'] }}
                            </a>
                        @endforeach
                    </div>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="border-t border-brand-soft/80 bg-[#f8fbff]/92 backdrop-blur-md shadow-[0_-1px_0_rgba(29,78,216,0.05)]">
            <div class="mx-auto flex max-w-7xl flex-col gap-6 px-4 py-10 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Disponible para proyectos selectos</p>
                    <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-600">
                        Desarrollo experiencias web, automatizaciones e integraciones que ahorran tiempo, convierten mejor y escalan con claridad.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 text-sm">
                    <a href="{{ route('services') }}" class="rounded-full border border-brand-soft bg-white px-4 py-2 text-brand transition hover:border-brand hover:bg-brand-soft/40">Ver servicios</a>
                    <a href="{{ route('contact') }}" class="rounded-full bg-brand px-4 py-2 font-medium text-white transition hover:bg-brand-strong">Hablemos</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
