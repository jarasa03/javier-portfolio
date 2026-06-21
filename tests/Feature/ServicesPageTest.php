<?php

test('the services page renders service cards without a repeated label', function () {
    $response = $this->get(route('services'));

    $response->assertOk();

    $content = $response->getContent();

    expect($content)->toContain('Servicios');
    expect($content)->toContain('Catálogo');
    expect($content)->toContain('Ver trabajos');
    expect($content)->toContain('Desarrollo web');
    expect($content)->toContain('Google Business Profile');
    expect($content)->toContain('Modelo de colaboración');
    expect($content)->not->toContain('Servicio</p>');
});
