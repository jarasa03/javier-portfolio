<div
    class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/85 px-4 py-4"
    data-lightbox-modal
    aria-hidden="true"
>
    <button type="button" class="absolute inset-0 cursor-zoom-out" data-lightbox-backdrop aria-label="Cerrar visor"></button>

    <div class="relative z-10 flex h-[calc(100vh-2rem)] w-full max-w-[96vw] flex-col overflow-hidden rounded-[1.75rem] border border-white/10 bg-white shadow-2xl">
        <div class="flex items-center justify-between border-b border-slate-200 bg-white px-5 py-4">
            <div>
                <h3 class="text-lg font-semibold text-slate-900" data-lightbox-title>Imagen</h3>
                <p class="text-sm text-slate-500" data-lightbox-caption></p>
            </div>
            <button type="button" class="inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-slate-200 bg-white text-slate-700 transition hover:border-brand hover:text-brand" data-lightbox-close aria-label="Cerrar visor">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18" />
                </svg>
            </button>
        </div>

        <div class="min-h-0 flex-1 overflow-hidden bg-slate-50 p-4">
            <div class="flex h-full min-h-0 flex-col gap-4">
                <div class="min-h-0 flex-1 overflow-auto cursor-grab rounded-[1rem] bg-slate-100 p-4" data-lightbox-viewport>
                    <div class="relative mx-auto overflow-hidden rounded-[0.85rem] bg-white shadow-sm" data-lightbox-stage>
                        <img
                            src=""
                            alt=""
                            class="block h-full w-full origin-center object-contain cursor-grab select-none transition-transform duration-200 ease-out"
                            data-lightbox-image
                            draggable="false"
                        >
                        <iframe
                            src=""
                            title="Documento ampliado"
                            class="hidden h-full w-full border-0 bg-white"
                            data-lightbox-iframe
                        ></iframe>
                    </div>
                </div>

                <div class="flex items-center justify-between gap-4 rounded-[1rem] border border-slate-200 bg-white px-4 py-3">
                    <button type="button" class="inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-slate-200 bg-white text-slate-700 transition hover:border-brand hover:text-brand" data-lightbox-zoom-out aria-label="Alejar">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M10 17C13.866 17 17 13.866 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.9992 21L14.9492 14.95" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6 10H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <div class="min-w-0 text-center">
                        <p class="text-xs font-medium tracking-[0.24em] text-brand uppercase">Zoom</p>
                        <p class="text-sm font-semibold text-slate-900" data-lightbox-zoom-label>100%</p>
                    </div>

                    <button type="button" class="inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-slate-200 bg-white text-slate-700 transition hover:border-brand hover:text-brand" data-lightbox-zoom-in aria-label="Ampliar">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M10 17C13.866 17 17 13.866 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.9992 21L14.9492 14.95" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6 10H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 6V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
