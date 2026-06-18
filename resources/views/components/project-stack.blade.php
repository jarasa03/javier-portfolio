@props([
    'title' => 'Stack utilizado',
    'subtitle' => 'Herramientas y tecnologías empleadas en el proyecto.',
    'items' => [],
])

<section class="mt-8 rounded-[1.75rem] border border-slate-200 bg-white p-5 lg:p-6">
    <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-sm font-medium tracking-[0.24em] text-brand uppercase">{{ $title }}</p>
            <p class="mt-1 text-sm leading-6 text-slate-600">{{ $subtitle }}</p>
        </div>
    </div>

    <div class="mt-5 grid gap-3 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ($items as $item)
            @php
                $name = is_array($item) ? ($item['name'] ?? '') : (string) $item;
                $note = is_array($item) ? ($item['note'] ?? null) : null;
                $icon = is_array($item) ? ($item['icon'] ?? null) : null;
                $iconPath = $icon ? public_path('images/stacks/' . $icon) : null;
                $hasIcon = $iconPath ? file_exists($iconPath) : false;
                $badge = strtoupper(mb_substr($name, 0, 1, 'UTF-8'));
            @endphp
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <div class="flex items-start gap-3">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center overflow-hidden rounded-full border border-slate-200 bg-white">
                        @if ($hasIcon)
                            <img src="{{ asset('images/stacks/' . $icon) }}" alt="" class="h-6 w-6 object-contain">
                        @else
                            <span class="text-sm font-semibold text-brand-strong">{{ $badge }}</span>
                        @endif
                    </div>
                    <div class="min-w-0">
                        <p class="font-medium text-slate-900">{{ $name }}</p>
                        @if ($note)
                            <p class="mt-1 text-xs leading-5 text-slate-500">{{ $note }}</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
