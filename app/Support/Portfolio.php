<?php

namespace App\Support;

final class Portfolio
{
    public static function projectStack(string $key): array
    {
        return config("portfolio.projects.$key.stack", []);
    }

    public static function marqueeItems(): array
    {
        $items = [];

        foreach (config('portfolio.projects', []) as $project) {
            foreach (($project['stack'] ?? []) as $item) {
                $key = ($item['icon'] ?? '') . '|' . ($item['name'] ?? '');

                $items[$key] = $item;
            }
        }

        return array_values($items);
    }
}
