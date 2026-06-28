# Javier Arruabarrena Sabroso Portfolio

Portfolio personal desarrollado con Laravel, Blade y Tailwind CSS para mostrar proyectos, servicios, experiencia y vías de contacto de forma clara, moderna y responsive.

## Qué incluye

- Página de inicio con propuesta de valor y proyectos destacados.
- Sección de servicios orientada a desarrollo web, automatización e integraciones.
- Página de trabajos con casos de estudio y material visual.
- Página de sobre mí con formación, redes sociales y contexto profesional.
- Página de contacto con hero visual, accesos directos y formulario de presentación.

## Stack

- Laravel 13
- Blade
- Tailwind CSS 4
- Vite
- JavaScript ligero para navegación, carruseles, lightbox y animaciones

## Requisitos

- PHP 8.3 o superior
- Node.js 20 o superior
- Composer

## Instalación local

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build
```

## Desarrollo

```bash
composer run dev
```

Ese comando levanta el servidor de Laravel, la cola local y Vite en paralelo.

## Estructura principal

- `resources/views/pages` para las páginas públicas del portfolio.
- `resources/views/layouts/app.blade.php` para la estructura general del sitio.
- `resources/css/app.css` para estilos globales y componentes.
- `resources/js/app.js` para interacciones del frontend.
- `public/images` para imágenes, iconos y recursos visuales.

## Objetivo

La idea de este portfolio es presentar el trabajo con una estética sobria pero más expresiva que una web corporativa estándar, dejando claro qué hago, cómo trabajo y cómo contactar conmigo.
