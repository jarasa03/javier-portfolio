<?php

test('the work page renders the chatbot project without a header', function () {
    $response = $this->get(route('work'));

    $response->assertOk();

    $content = $response->getContent();
    $categoryCardsPosition = strpos($content, 'Desarrollo web');
    $filterBarPosition = strpos($content, 'Filtrar trabajos');
    $hrmotorSectionPosition = strpos($content, 'Automatización de respuestas a reseñas en delegaciones');
    $hrmotorSection = $hrmotorSectionPosition === false ? '' : substr($content, $hrmotorSectionPosition, 2500);

    expect($content)->toContain('data-carousel');
    expect($content)->toContain('data-lightbox-open');
    expect($content)->toContain('!border-0 !shadow-none !px-0 !pb-0');
    expect($content)->not->toContain('subtitle="Capturas"');
    expect($content)->not->toContain('cta-label="Ver web en vivo"');
    expect($content)->not->toContain('Agible Capital en im?genes');
    expect($content)->toContain('Automatización e IA');
    expect($content)->toContain('Automatización de respuestas a reseñas en delegaciones');
    expect($content)->toContain('más de 30 delegaciones');
    expect($content)->toContain('4 o 5 estrellas');
    expect($content)->toContain('Hace falta que alguien entre constantemente a responder reseña por reseña a mano');
    expect($content)->toContain('Chatbot de postventa para atender casos desde la web');
    expect($content)->toContain('OpenAI API');
    expect($content)->toContain('n8n');
    expect($content)->toContain('Salesforce');
    expect($content)->toContain('Google My Business API');
    expect($content)->toContain('Entrada y gestión de reseñas');
    expect($content)->toContain('Revisión y validación manual');
    expect($content)->toContain('Orquestación');
    expect($content)->toContain('Consulta y gestión');
    expect($hrmotorSectionPosition)->not->toBeFalse();
    expect($hrmotorSection)->not->toContain('Ã');
    expect($hrmotorSection)->not->toContain('reseÃ');
    expect($hrmotorSection)->not->toContain('vehÃ');
    expect($hrmotorSection)->not->toContain('revisiÃ');
    expect($hrmotorSection)->not->toContain('matrÃ');
    expect($categoryCardsPosition)->not->toBeFalse();
    expect($filterBarPosition)->not->toBeFalse();
    expect($categoryCardsPosition)->toBeLessThan($filterBarPosition);
});
