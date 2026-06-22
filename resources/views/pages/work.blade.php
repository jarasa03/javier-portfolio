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
                            <p class="text-sm font-medium text-slate-900">{{ $item['title'] }}</p>
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
                    <button type="button" data-work-filter="automation-integrations" class="cursor-pointer rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-600 transition">Automatización e integraciones</button>
                    <button type="button" data-work-filter="ai" class="cursor-pointer rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-600 transition">IA</button>
                </div>
            </div>

            <div class="border-t border-slate-200 px-6 py-4 lg:px-7">
                <p class="text-sm text-slate-500" data-work-filter-status>Mostrando todos los trabajos.</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations,ai,web">
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
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Automatización de respuestas a reseñas en Google Maps</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        En HR Motor, empresa de compra y venta de vehículos usados, desarrollé una automatización para gestionar las reseñas que llegan a más de 30 delegaciones a través de Google Maps. La reseña entra en el flujo, se valora si tiene 4 o 5 estrellas para tratarla como positiva, o si tiene menos para marcarla como negativa, y a partir de ahí se genera una respuesta con IA. Si es positiva, se publica directamente. Si es negativa, se envía a Google Sheets para que marketing la revise, haga el ajuste necesario y marque <span class="font-medium text-slate-900">OK</span> en la celda de al lado, momento en el que la respuesta queda lista para publicarse.
                    </p>

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
            <div class="mt-8 grid gap-4 lg:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                    <p class="text-sm font-medium text-slate-900">Qué hacía antes</p>
                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Hacía falta que alguien entre constantemente a responder reseña por reseña a mano, con el coste de tiempo y la falta de consistencia que eso implica.
                    </p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                    <p class="text-sm font-medium text-slate-900">Qué resuelve ahora</p>
                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Las reseñas positivas se responden y publican automáticamente. Las negativas se mandan a Google Sheets para que marketing las revise, ajuste el texto y confirme con un <span class="font-medium text-slate-900">OK</span> en la celda de al lado.
                    </p>
                </div>
            </div>

            <div class="mt-8">
                <x-project-stack :items="config('portfolio.projects.hrmotor.stack', [])" />
            </div>

        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Automatización e integraciones</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">n8n</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Salesforce</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Integración entre formularios web y CRM</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        En varias ocasiones integré formularios personalizados de la web de HR Motor con Salesforce a través de n8n. El formulario entraba vía webhook tras su envío desde la web y n8n recibía la información para decidir qué crear en CRM según la necesidad de cada caso.
                        Dependiendo de lo que hiciera falta, podía crear un lead, un lead bruto, una tarea, un evento o todo lo necesario para dejar el registro bien preparado.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Formulario totalmente personalizado</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Cada formulario se adaptaba a la información que necesitaba capturar según el tipo de campaña o contacto.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Entrada por webhook</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Al enviarse en la web, el dato llegaba directamente a n8n para procesarlo sin pasos manuales intermedios.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Creación flexible</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Según el caso, se creaba un lead, un lead bruto, una tarea, un evento o la combinación necesaria.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">CRM conectado</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Salesforce quedaba alimentado con información útil y totalmente personalizada para el seguimiento comercial.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Funcionamiento</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                            ['step' => '01', 'title' => 'El usuario envía el formulario'],
                            ['step' => '02', 'title' => 'Llega por webhook a n8n'],
                            ['step' => '03', 'title' => 'Se decide qué crear en Salesforce'],
                            ['step' => '04', 'title' => 'Se registra la actividad en CRM'],
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
                <x-project-stack :items="config('portfolio.projects.web_forms_crm.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Automatización e integraciones</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">n8n</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Salesforce</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Supabase</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Incluir precio medio de mercado de vehículos en Salesforce</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        A partir de una base de datos de vehículos scrapeada por un compañero y almacenada en Supabase, monté un flujo que, cuando se creaba un vehículo en Salesforce, tomaba la marca, el modelo, el año, los caballos, el combustible y la caja de cambios para calcular una media con los registros equivalentes.
                        Una vez calculado el precio medio de mercado, lo guardaba en un campo del vehículo en Salesforce y además construía la URL del front de esa base de datos para incluirla también en otro campo del mismo registro.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Datos normalizados</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                El cálculo se apoyaba en atributos clave del vehículo para comparar unidades equivalentes de forma consistente.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Precio medio en CRM</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                El valor medio de mercado quedaba escrito directamente en un campo del vehículo en Salesforce.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">URL de referencia</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Además, se generaba la URL del front de esa base de datos para guardarla en otro campo del mismo vehículo.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Base en Supabase</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                La información histórica de comparación vivía en Supabase, preparada para consultas y cálculos automatizados.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Funcionamiento</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                            ['step' => '01', 'title' => 'Se crea el vehículo en Salesforce'],
                            ['step' => '02', 'title' => 'Se leen marca, modelo, año y motorización'],
                            ['step' => '03', 'title' => 'Se calcula la media en Supabase'],
                            ['step' => '04', 'title' => 'Se actualizan los campos de mercado y URL'],
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
                <x-project-stack :items="config('portfolio.projects.vehicle_market_price.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Automatización e integraciones</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">n8n</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">SMTP</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Avisador de errores por correo electrónico para flujos de n8n</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        Diseñé un sistema para HR Motor que vigilaba todos los flujos de n8n de la empresa y, cuando alguno fallaba, enviaba automáticamente un correo a una dirección concreta con la información del error.
                        El aviso se presentaba de forma cuidada, con los datos clave del fallo y con la URL exacta de la ejecución que había dado problema, para poder ir directo a depurar.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Cobertura total</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Estaba conectado a todos los flujos existentes para detectar fallos sin depender de una revisión manual.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Correo visualmente limpio</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                El email incluía la información del error de forma clara y ordenada, para leerlo rápido de un vistazo.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">URL de ejecución</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Cada aviso incorporaba la URL concreta de la ejecución fallida para abrir el caso exacto en n8n.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Depuración más rápida</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                La información llegaba ya lista para investigar el fallo sin tener que reconstruir el contexto a mano.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Funcionamiento</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                            ['step' => '01', 'title' => 'Un flujo de n8n falla'],
                            ['step' => '02', 'title' => 'Se captura el detalle del error'],
                            ['step' => '03', 'title' => 'Se construye el email de aviso'],
                            ['step' => '04', 'title' => 'Se envía con la URL de la ejecución'],
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
                @php
                    $hrmotorErrorNotifierShots = array_values(array_filter([
                        [
                            'file' => 'images/projects/hrmotor-n8n-errors/01-email-error.webp',
                            'src' => asset('images/projects/hrmotor-n8n-errors/01-email-error.webp'),
                            'title' => 'Correo de error 01',
                            'caption' => 'Ejemplo de email con el resumen principal del fallo y la información clave para revisarlo.',
                            'label' => 'Email de error 1',
                            'alt' => 'Captura de un correo de error de n8n con el resumen del fallo',
                        ],
                        [
                            'file' => 'images/projects/hrmotor-n8n-errors/02-email-error.webp',
                            'src' => asset('images/projects/hrmotor-n8n-errors/02-email-error.webp'),
                            'title' => 'Correo de error 02',
                            'caption' => 'Ejemplo de email con el detalle técnico del error y los datos necesarios para depurarlo.',
                            'label' => 'Email de error 2',
                            'alt' => 'Captura de un correo de error de n8n con detalle técnico',
                        ],
                        [
                            'file' => 'images/projects/hrmotor-n8n-errors/03-email-error.webp',
                            'src' => asset('images/projects/hrmotor-n8n-errors/03-email-error.webp'),
                            'title' => 'Correo de error 03',
                            'caption' => 'Ejemplo de email donde se ve la URL exacta de la ejecución fallida para abrirla directamente.',
                            'label' => 'Email de error 3',
                            'alt' => 'Captura de un correo de error de n8n con URL de ejecución',
                        ],
                    ], fn ($shot) => file_exists(public_path($shot['file']))));
                @endphp

                <x-project-carousel
                    surface-class="!border-0 !shadow-none !px-0 !pb-0"
                    :items="$hrmotorErrorNotifierShots"
                    empty-path="public/images/projects/hrmotor-n8n-errors/"
                    :empty-names="['01-email-error.webp', '02-email-error.webp', '03-email-error.webp']"
                />
            </div>

            <div class="mt-8">
                <x-project-stack :items="config('portfolio.projects.error_notifier.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Automatización e integraciones</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">n8n</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Google Sheets</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Salesforce</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Leads modificados por equipo externo</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        Desarrollé un flujo para HR Motor basado en Google Sheets, n8n y Salesforce. Cada día cargaba nuevos leads en una hoja compartida con varios datos del lead, y al terminar la carga se ejecutaba un Apps Script que ordenaba la hoja completa por fecha dejando arriba los leads más nuevos, pero siempre priorizando primero los que tenían marcada la casilla de recontacto.
                        El equipo externo llamaba al cliente y actualizaba su interés en la propia hoja. Si marcaban cita y completaban el resto de campos, esa cita se creaba en Salesforce. Si marcaban no quiere, el lead se descartaba. Si marcaban más tarde, el flujo movía el lead a una segunda hoja y, tres días después, volvía a la primera hoja en la parte superior para volver a contactarlo.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Carga diaria de leads</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Un flujo de n8n volcaba los leads nuevos en la hoja con toda la información necesaria.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Ordenación inteligente</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                El Apps Script ordenaba la hoja por fecha y daba prioridad a los leads marcados para recontacto.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Cita o descarte</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Si había interés en cita se creaba la cita en Salesforce; si no quería, el lead se descartaba.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Reintento a los 3 días</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Los leads marcados como más tarde pasaban a una segunda hoja y regresaban a la primera tres días después.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Funcionamiento</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                            ['step' => '01', 'title' => 'N8n carga leads nuevos en la hoja'],
                            ['step' => '02', 'title' => 'Apps Script ordena por fecha y recontacto'],
                            ['step' => '03', 'title' => 'El equipo externo actualiza interés y estado'],
                            ['step' => '04', 'title' => 'Salesforce crea cita, descarta o reprograma'],
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
                @php
                    $konectaLeadsShots = array_values(array_filter([
                        [
                            'file' => 'images/projects/konecta-leads/01-google-sheet-skeleton.webp',
                            'src' => asset('images/projects/konecta-leads/01-google-sheet-skeleton.webp'),
                            'title' => 'Hoja base',
                            'caption' => 'Esqueleto del Google Sheets sin datos, preparado para la carga diaria de leads.',
                            'label' => 'Sheet base',
                            'alt' => 'Esqueleto del Google Sheets para la gestión de leads de HR Motor',
                        ],
                        [
                            'file' => 'images/projects/konecta-leads/02-appointment-email.webp',
                            'src' => asset('images/projects/konecta-leads/02-appointment-email.webp'),
                            'title' => 'Correo de cita',
                            'caption' => 'Ejemplo del correo de cita que llega al jefe de tienda de la delegación elegida.',
                            'label' => 'Email de cita',
                            'alt' => 'Correo de cita enviado al jefe de tienda de la delegación',
                        ],
                    ], fn ($shot) => file_exists(public_path($shot['file']))));
                @endphp

                <x-project-carousel
                    surface-class="!border-0 !shadow-none !px-0 !pb-0"
                    :items="$konectaLeadsShots"
                    empty-path="public/images/projects/konecta-leads/"
                    :empty-names="['01-google-sheet-skeleton.webp', '02-appointment-email.webp']"
                />
            </div>

            <div class="mt-8">
                <x-project-stack :items="config('portfolio.projects.konecta_leads.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Automatización e integraciones</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">n8n</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Salesforce</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">SMTP</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Envío de informes por Excel de CRM a correo electrónico</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        Monté un flujo de n8n que, cada día, consultaba en Salesforce las reservas de vehículos del día anterior y, una vez que ya habían salido, transformaba esos datos en un archivo Excel (XLSX).
                        Después, el informe se enviaba automáticamente por correo a una empresa externa para que pudiera trabajar con esos registros sin entrar en Salesforce.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Consulta diaria</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                El flujo revisaba cada día las reservas del día anterior en Salesforce para preparar el informe.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Generación XLSX</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Los datos se convertían en un Excel listo para ser consumido por la empresa receptora.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Envío por email</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                El archivo se enviaba por correo de forma automática a la dirección externa definida.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Operativa diaria</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Permitía sacar la información del CRM en el formato que necesitaba el tercero, sin trabajo manual.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Funcionamiento</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                            ['step' => '01', 'title' => 'n8n consulta las reservas del día anterior'],
                            ['step' => '02', 'title' => 'Se genera un archivo Excel con los datos'],
                            ['step' => '03', 'title' => 'Se adjunta al correo automático'],
                            ['step' => '04', 'title' => 'Se envía a la empresa externa'],
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
                <x-project-stack :items="config('portfolio.projects.crm_excel_reports.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations,ai,web">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Formación interna</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Moodle</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">HeyGen</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">YouTube</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">HTTPS</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Formador comerciales</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        Desarrollé un Moodle en un servidor propio de la empresa para centralizar la formación interna de los comerciales. Las lecciones incluían vídeos generados con HeyGen a partir de contenido preparado para explicar procesos internos y después editados por marketing con las imágenes y ajustes necesarios.
                        Para evitar sobrecargar el servidor, los vídeos se subían a YouTube como privados y se embebían en las lecciones de Moodle. Tras cada vídeo había preguntas tipo test y era necesario aprobarlas todas para avanzar a la siguiente lección.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Moodle propio</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                El portal se desplegó en un servidor propio con dominio público y HTTPS en `https://formacion.hrmotor.com/`.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Vídeos con IA</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Los vídeos se generaban con HeyGen y explicaban procesos internos con un formato más didáctico.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Evaluación por test</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Después de cada vídeo había preguntas tipo test y había que aprobarlas para desbloquear la siguiente lección.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Vídeos privados</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Se subieron a YouTube como privados para embeberlos sin cargar el servidor interno.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Funcionamiento</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                            ['step' => '01', 'title' => 'El usuario entra en Moodle'],
                            ['step' => '02', 'title' => 'Ve el vídeo embebido de YouTube'],
                            ['step' => '03', 'title' => 'Responde el test de la lección'],
                            ['step' => '04', 'title' => 'Aprueba y avanza a la siguiente lección'],
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
                @php
                    $commercialsTrainingShots = array_values(array_filter([
                        [
                            'file' => 'images/projects/hrmotor-formacion/01-login.webp',
                            'src' => asset('images/projects/hrmotor-formacion/01-login.webp'),
                            'title' => 'Login',
                            'caption' => 'Pantalla de acceso al Moodle público de formación para comerciales.',
                            'label' => 'Login',
                            'alt' => 'Pantalla de login de la plataforma Moodle de formación',
                        ],
                        [
                            'file' => 'images/projects/hrmotor-formacion/02-lessons.webp',
                            'src' => asset('images/projects/hrmotor-formacion/02-lessons.webp'),
                            'title' => 'Lecciones',
                            'caption' => 'Vista de las lecciones tras entrar al login con vídeos, texto y tests asociados.',
                            'label' => 'Lecciones',
                            'alt' => 'Vista de las lecciones del curso de formación en Moodle',
                        ],
                        [
                            'file' => 'images/projects/hrmotor-formacion/03-youtube-playlist.webp',
                            'src' => asset('images/projects/hrmotor-formacion/03-youtube-playlist.webp'),
                            'title' => 'Playlist de vídeos',
                            'caption' => 'Lista de reproducción privada de YouTube con los vídeos de IA usados en el curso.',
                            'label' => 'YouTube',
                            'alt' => 'Lista de reproducción privada de YouTube con vídeos de IA',
                        ],
                    ], fn ($shot) => file_exists(public_path($shot['file']))));
                @endphp

                <x-project-carousel
                    surface-class="!border-0 !shadow-none !px-0 !pb-0"
                    :items="$commercialsTrainingShots"
                    empty-path="public/images/projects/hrmotor-formacion/"
                    :empty-names="['01-login.webp', '02-lessons.webp', '03-youtube-playlist.webp']"
                />
            </div>

            <div class="mt-8">
                <x-project-stack :items="config('portfolio.projects.commercials_training.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations,web">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Chatbot web</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">JavaScript</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">WordPress</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Salesforce</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Chatbot captación leads</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        Incorporé un chatbot en la parte inferior derecha de la web de HR Motor para incentivar la conversación con los visitantes y convertirla en leads directos en Salesforce. El flujo estaba hecho con JavaScript y guiaba al usuario con preguntas y clics según si quería comprar o vender su coche.
                        Cuando el formulario conversacional llegaba al final, el lead se registraba en el CRM. Si el cliente estaba dentro de un vehículo concreto, el chatbot detectaba ese contexto y guardaba también el vehículo de interés en Salesforce sin pedirlo de nuevo.
                    </p>

                    <div class="mt-5">
                        <a
                            href="https://www.hrmotor.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-strong"
                        >
                            Ir a la web de HR Motor
                        </a>
                    </div>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Flujo guiado</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                El chat iba avanzando por pasos y preguntas en función de los clics del usuario.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Lead directo al CRM</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                La información se registraba directamente en Salesforce al completar el flujo.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Contexto del vehículo</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Si el usuario estaba en un vehículo concreto, el chatbot heredaba ese dato como vehículo de interés.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Plugin de WordPress</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Se incrustó en la web mediante un plugin propio para conectar la interfaz del chat con Salesforce.
                            </p>
                        </div>
                    </div>
                </div>

                @php
                    $leadCaptureChatbotShots = array_values(array_filter([
                        [
                            'file' => 'images/projects/hrmotor-lead-capture/01-chat-closed.webp',
                            'src' => asset('images/projects/hrmotor-lead-capture/01-chat-closed.webp'),
                            'title' => 'Chat cerrado',
                            'caption' => 'Estado inicial del chatbot en la esquina inferior derecha al cargar la web.',
                            'label' => 'Inicio',
                            'alt' => 'Chatbot de captación de leads cerrado en la web',
                        ],
                        [
                            'file' => 'images/projects/hrmotor-lead-capture/02-chat-flow.webp',
                            'src' => asset('images/projects/hrmotor-lead-capture/02-chat-flow.webp'),
                            'title' => 'Flujo abierto',
                            'caption' => 'Ejemplo del flujo conversacional con preguntas y clics para ir avanzando.',
                            'label' => 'Flujo',
                            'alt' => 'Chatbot de captación de leads con conversación en curso',
                        ],
                        [
                            'file' => 'images/projects/hrmotor-lead-capture/03-lead-created.webp',
                            'src' => asset('images/projects/hrmotor-lead-capture/03-lead-created.webp'),
                            'title' => 'Lead creado',
                            'caption' => 'Pantalla final tras registrar el lead correctamente en Salesforce.',
                            'label' => 'Lead creado',
                            'alt' => 'Chatbot mostrando que el lead ha sido creado en Salesforce',
                        ],
                        [
                            'file' => 'images/projects/hrmotor-lead-capture/04-vehicle-detected.webp',
                            'src' => asset('images/projects/hrmotor-lead-capture/04-vehicle-detected.webp'),
                            'title' => 'Vehículo detectado',
                            'caption' => 'Vista del chatbot reconociendo el vehículo desde la página en la que estaba el usuario.',
                            'label' => 'Vehículo',
                            'alt' => 'Chatbot detectando el vehículo de interés del usuario en la web',
                        ],
                    ], fn ($shot) => file_exists(public_path($shot['file']))));
                @endphp

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <x-project-carousel
                        surface-class="!border-0 !shadow-none !px-0 !pb-0"
                        :items="$leadCaptureChatbotShots"
                        empty-path="public/images/projects/hrmotor-lead-capture/"
                        :empty-names="['01-chat-closed.webp', '02-chat-flow.webp', '03-lead-created.webp', '04-vehicle-detected.webp']"
                    />
                </div>
            </div>

            <div class="mt-8">
                <x-project-stack :items="config('portfolio.projects.lead_capture_chatbot.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations,ai">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Agente de voz</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">ElevenLabs</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">OpenAI API</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">n8n</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Salesforce</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Agente de voz de compra venta de vehículos</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        Desarrollé un agente de voz para HR Motor que atendía llamadas de clientes con ElevenLabs como motor de voz y OpenAI como motor de razonamiento. El objetivo era identificar si la persona quería comprar, vender o cambiar de vehículo y, a partir de ahí, conducir la conversación hacia la mejor solución.
                        El agente preguntaba por las necesidades del cliente, ofrecía coches del stock de Salesforce y seguía alternando opciones hasta dar con un vehículo que encajara con lo que buscaba.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Clasificación de intención</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Determinaba si el cliente quería comprar, vender o hacer un cambio de vehículo.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Oferta de stock</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Buscaba vehículos del stock de Salesforce y proponía alternativas hasta encontrar una que encajara.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Citas en delegación</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Agendaba citas en Salesforce según la delegación elegida y los horarios en los que estaba abierta.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Datos y duplicados</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Antes de crear un lead comprobaba si ya existía un lead o una account con esos datos para reutilizarla o crear una nueva.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Funcionamiento</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                            ['step' => '01', 'title' => 'El cliente llama al agente'],
                            ['step' => '02', 'title' => 'Se detecta intención y necesidades'],
                            ['step' => '03', 'title' => 'Se ofrece stock y se completan datos'],
                            ['step' => '04', 'title' => 'Se agenda o crea el lead en Salesforce'],
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

            <div class="mt-6 rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                <p class="text-sm font-medium text-slate-900">Pronunciación cuidada</p>
                <p class="mt-2 text-sm leading-6 text-slate-600">
                    Incluí un diccionario de pronunciación <span class="font-medium text-slate-900">.pls</span> para marcas, modelos y versiones de vehículos, de forma que el agente pronunciara correctamente cada nombre de la empresa.
                </p>
            </div>

            <div class="mt-8">
                <x-project-stack :items="config('portfolio.projects.voice_sales_agent.stack', [])" />
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations,ai">
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
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Chatbot de postventa para atender casos desde la web</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        En el apartado de contacto de HR Motor integré un chatbot para postventa que responde con la API de OpenAI, se orquesta con n8n y consulta Salesforce para sacar contexto de los casos.
                        El bot puede crear un caso nuevo pidiendo los datos necesarios, evitar duplicados si el cliente ya tiene un caso abierto y consultar información usando el número de caso o el DNI junto con la matrícula.
                    </p>

                    <div class="mt-5">
                        <a
                            href="https://www.hrmotor.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-strong"
                        >
                            Ir a la web de HR Motor
                        </a>
                    </div>

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
                                Está incrustado con estilos personalizados para encajar con la web de HR Motor.
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
                                'caption' => 'El chatbot incrustado en el apartado de contacto de HR Motor con estilos adaptados a la web.',
                                'label' => 'Contacto',
                                'alt' => 'Chatbot de postventa de HR Motor en la página de contacto',
                            ],
                            [
                                'file' => 'images/projects/hrmotor-postventa/02-open-case.webp',
                                'src' => asset('images/projects/hrmotor-postventa/02-open-case.webp'),
                                'title' => 'Apertura de caso',
                                'caption' => 'Flujo guiado para recopilar datos del cliente y abrir un caso nuevo sin duplicados.',
                                'label' => 'Alta de caso',
                                'alt' => 'Cliente abriendo un caso de postventa con el chatbot de HR Motor',
                            ],
                            [
                                'file' => 'images/projects/hrmotor-postventa/03-case-query.webp',
                                'src' => asset('images/projects/hrmotor-postventa/03-case-query.webp'),
                                'title' => 'Consulta de caso',
                                'caption' => 'Consulta del estado y la información del caso usando el número de caso o los datos del vehículo.',
                                'label' => 'Consulta de caso',
                                'alt' => 'Cliente consultando información de un caso con el chatbot de HR Motor',
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

    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" data-work-card data-work-categories="automation-integrations,ai">
        <div class="surface relative overflow-hidden p-6 lg:p-8">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="flex flex-wrap items-center gap-3">
                <span class="rounded-full border border-brand-soft bg-brand-soft px-3 py-1 text-xs font-medium text-brand">Chatbot interno</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">OpenAI API</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">n8n</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Slack</span>
                <span class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-600">Pinecone</span>
            </div>

            <div class="mt-6 grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-start">
                <div>
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">HR Motor</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-900">Chatbot de ayuda a comerciales</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">
                        Diseñé un chatbot interno para que el equipo comercial pudiera consultar procedimientos y resolver dudas operativas desde Slack. Estaba orquestado con n8n, motorizado con la API de OpenAI y conectado a una base de conocimiento en markdown indexada en Pinecone.
                        Además de texto, podía devolver imágenes asociadas a los procedimientos para dar respuestas más claras y accionables.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Acceso por Slack</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Los comerciales preguntaban directamente desde Slack, sin salir de su flujo de trabajo habitual.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Orquestado con n8n</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                n8n coordinaba la entrada, la búsqueda de contexto y la entrega de la respuesta al canal correspondiente.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Base de conocimiento vectorial</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Pinecone almacenaba la documentación en markdown para recuperar los procedimientos internos más relevantes.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_1px_0_rgba(15,23,42,0.02)]">
                            <p class="text-sm font-medium text-slate-900">Respuestas con imágenes</p>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                También devolvía imágenes asociadas a los procesos para explicar mejor cada paso interno.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]">
                    <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">Funcionamiento</p>
                    <div class="mt-5 grid gap-3">
                        @foreach ([
                            ['step' => '01', 'title' => 'El comercial pregunta en Slack'],
                            ['step' => '02', 'title' => 'n8n enruta la consulta'],
                            ['step' => '03', 'title' => 'Pinecone recupera el contexto'],
                            ['step' => '04', 'title' => 'OpenAI responde con texto e imágenes'],
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
                <x-project-stack :items="config('portfolio.projects.commercials_chatbot.stack', [])" />
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

@endsection
