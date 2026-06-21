@extends('layouts.app')

@section('title', 'Trabajos | ' . config('app.name', 'Laravel'))
@section('meta_description', 'Casos de estudio y proyectos de desarrollo web, automatizaciones, integraciones API e IA.')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-10 pt-14 sm:px-6 lg:px-8 lg:pb-14">
        <div class="grid gap-8 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">
            <div class="max-w-4xl">
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Trabajos</p>
                <h1 class="mt-4 text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                    Casos de estudio que muestran cómo aporto valor.
                </h1>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    En vez de listar servicios sueltos, prefiero explicar proyectos reales por bloques: qué problema había, qué construí y qué gana el negocio.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-strong">
                        Hablemos del proyecto
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center rounded-full border border-brand-soft bg-white px-6 py-3 text-sm font-semibold text-brand transition hover:border-brand hover:bg-brand-soft/40">
                        Ver servicios
                    </a>
                </div>
            </div>

            <div class="surface overflow-hidden p-5 lg:p-5">
                <div class="flex items-center justify-between gap-4 border-b border-slate-200 pb-3">
                    <div>
                        <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Cómo trabajo</p>
                        <h2 class="mt-2 text-lg font-semibold text-slate-900">Un proceso claro para avanzar sin perder tiempo.</h2>
                    </div>
                    <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-[11px] font-medium text-brand">
                        Simple
                    </span>
                </div>

                <div class="mt-4 space-y-2">
                    @foreach ([
                        ['step' => '01', 'title' => 'Entiendo el problema'],
                        ['step' => '02', 'title' => 'Construyo la solución'],
                        ['step' => '03', 'title' => 'Entrego algo usable'],
                    ] as $item)
                        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3 py-2.5 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-xs font-medium tracking-[0.2em] text-brand">{{ $item['step'] }}</p>
                            <p class="text-sm font-medium text-slate-900">Qué resuelve ahora</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="mx-auto max-w-7xl px-4 py-2 sm:px-6 lg:px-8">
        <div class="grid gap-4 lg:grid-cols-3">
            @foreach ([
                [
                    'title' => 'Desarrollo web',
                    'text' => 'Webs corporativas, landings y portfolios que ordenan el mensaje y refuerzan la confianza.',
                ],
                [
                    'title' => 'Automatizaciones e integraciones',
                    'text' => 'Flujos entre herramientas, CRM, hojas de cálculo y APIs para ahorrar tiempo y reducir errores.',
                ],
                [
                    'title' => 'IA aplicada al negocio',
                    'text' => 'Agentes IA, asistencia telefónica y procesos inteligentes para responder, filtrar y atender mejor.',
                ],
            ] as $index => $category)
                <article class="surface relative overflow-hidden p-6 lg:p-7">
                    <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
                    <div class="flex items-start gap-4">
                        <span class="mt-1 inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-brand-soft bg-brand-soft/60 text-sm font-semibold text-brand">
                            0{{ $index + 1 }}
                        </span>
                        <div class="min-w-0">
                            <h2 class="text-2xl font-semibold text-slate-900">{{ $category['title'] }}</h2>
                            <p class="mt-3 text-sm leading-6 text-slate-600">{{ $category['text'] }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-2 sm:px-6 lg:px-8">
        <div class="surface overflow-hidden p-0" data-work-filter-bar>
            <div class="grid gap-0 lg:grid-cols-[1fr_auto] lg:items-stretch">
                <div class="relative overflow-hidden bg-brand-soft/25 p-6 lg:p-7">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Filtrar trabajos</p>
                    <h2 class="mt-3 text-2xl font-semibold text-slate-900">Selecciona el tipo de proyecto que te interesa.</h2>
                    <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-600">
                        Así puedes recorrer los casos de estudio por categoría sin perder el contexto de cada uno.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-2 p-6 lg:p-7">
                    <button type="button" data-work-filter="all" class="cursor-pointer rounded-full border border-brand-soft bg-brand px-4 py-2 text-sm font-medium text-white transition">Todos</button>
                    <button type="button" data-work-filter="web" class="cursor-pointer rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-600 transition">Web</button>
                    <button type="button" data-work-filter="automation" class="cursor-pointer rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-600 transition">Automatizaciones</button>
                    <button type="button" data-work-filter="integrations" class="cursor-pointer rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-600 transition">Integraciones</button>
                    <button type="button" data-work-filter="ai" class="cursor-pointer rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-600 transition">IA</button>
                </div>
            </div>

            <div class="border-t border-slate-200 px-6 py-4 lg:px-7">
                <p class="text-sm text-slate-500" data-work-filter-status>Mostrando todos los trabajos.</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation,ai,integrations">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Automatización e IA</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Google Maps</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Google Sheets</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Marketing review</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HRmotor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Automatización de respuestas a reseñas en delegaciones</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        En HRmotor, empresa de compra y venta de vehículos usados, desarrollé una automatización para gestionar las reseñas que llegan a más de 30 delegaciones a través de Google Maps. La reseña entra en el flujo, se valora si tiene 4 o 5 estrellas para tratarla como positiva, o si tiene menos para marcarla como negativa, y a partir de ahí se genera una respuesta con IA. Si es positiva, se publica directamente. Si es negativa, se envía a Google Sheets para que marketing la revise, haga el ajuste necesario y marque <span class="font-medium text-slate-900">OK</span> en la celda de al lado, momento en el que la respuesta queda lista para publicarse.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Qué hacía antes</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Hace falta que alguien entre constantemente a responder reseña por reseña a mano, con el coste de tiempo y la falta de consistencia que eso implica.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Qué resuelve ahora</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Las reseñas positivas se responden y publican automáticamente. Las negativas se mandan a Google Sheets para que marketing las revise, ajuste el texto y confirme con un <span class="font-medium text-slate-900">OK</span> en la celda de al lado.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Flujo</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                        ['step' => '01', 'title' => 'Entra la reseña'],
                        ['step' => '02', 'title' => 'Se clasifica por estrellas'],
                        ['step' => '03', 'title' => 'Se genera la respuesta con IA'],
                        ['step' => '04', 'title' => 'Se publica o pasa a Google Sheets'],
                        ] as $item)
                            <div class="flex items-center gap-4 rounded-2xl border border-slate-200 bg-slate-50/70 px-4 py-3">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-white text-sm font-semibold text-brand shadow-[0_1px_0_rgba(15,23,42,0.04)]">
                                    {{ $item['step'] }}
                                </div>
                                <p class="text-sm font-medium text-slate-900">{{ $item['title'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <x-project-stack :items="config('portfolio.projects.hrmotor.stack', [])" />
            </div>

        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation,ai,integrations">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Chatbot</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">OpenAI API</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">n8n</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Salesforce</span>
                            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HRmotor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Chatbot de postventa para atender casos desde la web</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        En el apartado de contacto de HRmotor integré un chatbot para postventa que responde con la API de OpenAI, se orquesta con n8n y consulta Salesforce para sacar contexto de los casos.
                        El bot puede crear un caso nuevo pidiendo los datos necesarios, evitar duplicados si el cliente ya tiene un caso abierto y consultar información usando el número de caso o el DNI junto con la matrícula.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Crea casos nuevos</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Pide los datos del cliente, comprueba si el coche y la persona existen en Salesforce y abre el caso solo cuando toca.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Evita duplicados</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Revisa si ese cliente ya tiene un caso abierto antes de crear uno nuevo, para mantener el seguimiento ordenado.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Consulta información</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Permite consultar datos del caso con el número de caso o con el DNI y la matrícula del vehículo.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Instalado en la web</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Está incrustado con estilos personalizados para encajar con la web de HRmotor.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    @php
                        $hrmotorChatbotShots = array_values(array_filter([
                            [
                                'file' => 'images/projects/hrmotor-postventa/01-chatbot-contact.webp',
                                'src' => asset('images/projects/hrmotor-postventa/01-chatbot-contact.webp'),
                                'title' => 'Chatbot en contacto',
                                'caption' => 'El chatbot incrustado en el apartado de contacto de HRmotor con estilos adaptados a la web.',
                                'label' => 'Contacto',
                                'alt' => 'Chatbot de postventa de HRmotor en la página de contacto',
                            ],
                            [
                                'file' => 'images/projects/hrmotor-postventa/02-open-case.webp',
                                'src' => asset('images/projects/hrmotor-postventa/02-open-case.webp'),
                                'title' => 'Apertura de caso',
                                'caption' => 'Flujo guiado para recopilar datos del cliente y abrir un caso nuevo sin duplicados.',
                                'label' => 'Alta de caso',
                                'alt' => 'Cliente abriendo un caso de postventa con el chatbot de HRmotor',
                            ],
                            [
                                'file' => 'images/projects/hrmotor-postventa/03-case-query.webp',
                                'src' => asset('images/projects/hrmotor-postventa/03-case-query.webp'),
                                'title' => 'Consulta de caso',
                                'caption' => 'Consulta del estado y la información del caso usando el número de caso o los datos del vehículo.',
                                'label' => 'Consulta de caso',
                                'alt' => 'Cliente consultando información de un caso con el chatbot de HRmotor',
                            ],
                        ], fn ($shot) => file_exists(public_path($shot['file']))));
                    @endphp

                    <x-project-carousel
                        surface-class="!border-0 !shadow-none !px-0 !pb-0"
                        :items="$hrmotorChatbotShots"
                        empty-path="public/images/projects/hrmotor-postventa/"
                        :empty-names="['01-chatbot-contact.webp', '02-open-case.webp', '03-case-query.webp']"
                    />
                </div>
            </div>

            <div class="mt-8">
                <x-project-stack :items="config('portfolio.projects.hrmotor_chatbot.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="web">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Desarrollo web</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Corporativo</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Bilingüe</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Confianza y conversión</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Fénix Byte</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Web corporativa para Agible Capital a partir de un diseño de dirección creativa</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        En mi etapa en Fénix Byte desarrolló la web de Agible Capital a partir de la propuesta visual planteada por una diseñadora gráfica, trabajando con WordPress y Elementor Pro para trasladar ese diseño a una experiencia web sólida, limpia y orientada a transmitir credibilidad.
                    </p>
                    <div class="mt-5">
                        <a href="https://agiblecapital.es/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-strong">
                            Ver web en vivo
                        </a>
                    </div>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Qué había detrás</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Una firma de inversión necesitaba una web con tono institucional, clara en su propuesta y capaz de sostener bastante contenido de confianza.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Qué desarrolló</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Una implementación cuidada del diseño con navegación clara, secciones de estrategia, equipo, portfolio, testimonios y contacto.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Puntos clave</p>
                    <div class="mt-5 space-y-3">
                        @foreach ([
                            ['title' => 'Web institucional', 'text' => 'Enfocada a una empresa de inversión con tono serio y confianza visual.'],
                            ['title' => 'Arquitectura de contenido', 'text' => 'Secciones de quiénes somos, estrategia, portfolio y contacto.'],
                            ['title' => 'Contenido bilingüe', 'text' => 'Versión en español e inglés para llegar a distintos públicos.'],
                            ['title' => 'Sistema de credibilidad', 'text' => 'Equipo, testimonios y legal para reforzar la percepción de marca.'],
                        ] as $item)
                            <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                                <p class="font-medium text-slate-900">{{ $item['title'] }}</p>
                                <p class="mt-1 text-sm leading-6 text-slate-600">{{ $item['text'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <x-project-stack :items="config('portfolio.projects.agible.stack', [])" />
            @php
                $agibleShots = array_values(array_filter([
                    [
                        'file' => 'images/projects/agible-capital/01-home-1.webp',
                        'src' => asset('images/projects/agible-capital/01-home-1.webp'),
                        'title' => 'Home',
                        'caption' => 'Página principal con propuesta de valor, métricas y navegación institucional.',
                        'label' => 'Home',
                        'alt' => 'Home de Agible Capital',
                    ],
                    [
                        'file' => 'images/projects/agible-capital/02-home-2.webp',
                        'src' => asset('images/projects/agible-capital/02-home-2.webp'),
                        'title' => 'Ficha ampliable',
                        'caption' => 'Componente de home que despliega la ficha de un trabajador con más detalle al ampliarlo.',
                        'label' => 'Ficha ampliable',
                        'alt' => 'Componente ampliable de la home de Agible Capital para mostrar la ficha de un trabajador',
                    ],
                    [
                        'file' => 'images/projects/agible-capital/03-about.webp',
                        'src' => asset('images/projects/agible-capital/03-about.webp'),
                        'title' => 'Quiénes somos',
                        'caption' => 'Bloque de credibilidad con equipo, trayectoria y posicionamiento.',
                        'label' => 'Quiénes somos',
                        'alt' => 'Sección quiénes somos de Agible Capital',
                    ],
                    [
                        'file' => 'images/projects/agible-capital/04-strategy.webp',
                        'src' => asset('images/projects/agible-capital/04-strategy.webp'),
                        'title' => 'Estrategia',
                        'caption' => 'Sección de modelo de inversión y explicación de la estrategia.',
                        'label' => 'Estrategia',
                        'alt' => 'Sección estrategia de Agible Capital',
                    ],
                    [
                        'file' => 'images/projects/agible-capital/05-contact.webp',
                        'src' => asset('images/projects/agible-capital/05-contact.webp'),
                        'title' => 'Contacto',
                        'caption' => 'Cierre con formulario y vías de contacto para colaboración.',
                        'label' => 'Contacto',
                        'alt' => 'Sección contacto de Agible Capital',
                    ],
                ], fn ($shot) => file_exists(public_path($shot['file']))));
            @endphp

            <x-project-carousel
                surface-class="!border-0 !shadow-none !px-0 !pb-0"
                :items="$agibleShots"
                empty-path="public/images/projects/agible-capital/"
                :empty-names="['01-home-1.webp', '02-home-2.webp', '03-about.webp', '04-strategy.webp', '05-contact.webp']"
            />
        </div>
    </section>

<section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="surface p-8">
            <div class="grid gap-6 lg:grid-cols-[1fr_auto] lg:items-center">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Siguiente paso</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Cada proyecto nuevo puede entrar en una de estas tres líneas.</h2>
                    <p class="mt-4 max-w-2xl text-slate-600">
                        Así tu portfolio crece sin desorden: cada caso de estudio queda explicado por categoría y con una narrativa clara de problema, solución y valor.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-strong">
                    Cuéntame el siguiente
                </a>
            </div>
        </div>
    </section>
@endsection
