@props([
    'title',
    'subtitle' => null,
    'ctaLabel' => null,
    'ctaUrl' => null,
    'items' => [],
    'emptyTitle' => 'Sube las capturas y aparecerán aquí automáticamente.',
    'emptyBody' => null,
    'emptyPath' => null,
    'emptyNames' => [],
])

<div class="surface p-6 lg:p-8" data-carousel>
    <div class="flex items-center justify-between gap-4">
        <div>
            @if ($subtitle)
                <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">{{ $subtitle }}</p>
            @endif
            <h3 class="mt-2 text-2xl font-semibold text-slate-900">{{ $title }}</h3>
        </div>
        @if ($ctaUrl && $ctaLabel)
            <a href="{{ $ctaUrl }}" target="_blank" rel="noopener noreferrer" class="hidden rounded-full border border-brand-soft bg-white px-4 py-2 text-sm font-semibold text-brand transition hover:border-brand hover:bg-brand-soft/40 sm:inline-flex">
                {{ $ctaLabel }}
            </a>
        @endif
    </div>

    @if (count($items) > 0)
        <div class="relative mt-6">
            <button type="button" data-carousel-prev class="absolute left-3 top-1/2 z-10 -translate-y-1/2 cursor-pointer rounded-full border border-brand-soft bg-white/95 p-3 text-brand transition hover:border-brand hover:bg-brand-soft/40" aria-label="Anterior">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 18l-6-6 6-6" />
                </svg>
            </button>
            <button type="button" data-carousel-next class="absolute right-3 top-1/2 z-10 -translate-y-1/2 cursor-pointer rounded-full border border-brand-soft bg-white/95 p-3 text-brand transition hover:border-brand hover:bg-brand-soft/40" aria-label="Siguiente">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6l6 6-6 6" />
                </svg>
            </button>

            <div class="overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white p-3">
                <div class="carousel-track flex overflow-x-auto pb-1" style="scrollbar-width:none;-ms-overflow-style:none; touch-action: none;" data-carousel-track>
                    @foreach ($items as $item)
                        <article class="w-full shrink-0 snap-start rounded-[1.5rem] bg-white p-3" data-carousel-slide>
                            <button
                                type="button"
                                class="block w-full cursor-pointer text-left"
                                data-lightbox-open
                                data-lightbox-src="{{ $item['src'] }}"
                                data-lightbox-title="{{ e($item['title']) }}"
                                data-lightbox-caption="{{ e($item['caption'] ?? '') }}"
                                aria-label="Abrir {{ $item['title'] }}"
                            >
                                <div class="aspect-[16/9] overflow-hidden rounded-[1.1rem] bg-slate-50">
                                    <img
                                        src="{{ $item['src'] }}"
                                        alt="{{ $item['alt'] ?? $item['title'] }}"
                                        class="h-full w-full object-contain"
                                    >
                                </div>
                            </button>
                            @if (!empty($item['label']) || !empty($item['caption']))
                                <div class="mt-4">
                                    @if (!empty($item['label']))
                                        <h4 class="font-semibold text-slate-900">{{ $item['label'] }}</h4>
                                    @endif
                                    @if (!empty($item['caption']))
                                        <p class="mt-1 text-sm leading-6 text-slate-600">{{ $item['caption'] }}</p>
                                    @endif
                                </div>
                            @endif
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="mt-6 rounded-[1.5rem] border border-dashed border-brand-soft bg-brand-soft/20 p-6">
            <p class="font-medium text-slate-900">{{ $emptyTitle }}</p>
            @if ($emptyBody)
                <p class="mt-2 text-sm leading-6 text-slate-600">{{ $emptyBody }}</p>
            @elseif ($emptyPath)
                <p class="mt-2 text-sm leading-6 text-slate-600">
                    Coloca las imágenes en <span class="font-mono text-brand">{{ $emptyPath }}</span>
                    @if (count($emptyNames) > 0)
                        con los nombres: <span class="font-mono">{{ implode(', ', $emptyNames) }}</span>.
                    @endif
                </p>
            @endif
        </div>
    @endif
</div>
