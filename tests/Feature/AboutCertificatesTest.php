<?php

test('the about page exposes the certificate lightbox and triggers', function () {
    $response = $this->get(route('about'));

    $response->assertOk();

    $content = $response->getContent();

    expect($content)->toContain('data-lightbox-modal');
    expect($content)->toContain('data-lightbox-iframe');
    expect($content)->toContain('h-[calc(100vh-2rem)]');
    expect($content)->toContain('data-lightbox-close');
    expect($content)->toContain('data-lightbox-zoom-in');
    expect($content)->toContain('data-lightbox-zoom-out');
    expect($content)->toContain('tech-marquee');
    expect($content)->toContain('tech-marquee-track');
    expect($content)->toContain('Google Business Profile');
    expect($content)->toContain('Disponible para proyectos selectos');
    expect(substr_count($content, 'data-lightbox-open'))->toBe(5);
    expect(substr_count($content, 'data-lightbox-type="pdf"'))->toBe(5);
    expect($content)->toContain('master-artificial-intelligence-big-school.pdf');
    expect($content)->toContain('master-artificial-intelligence-universidad-isabel-i.pdf');
    expect($content)->toContain('honors-diploma-daw.pdf');
    expect($content)->toContain('technician-diploma-it-systems-and-networks.pdf');
    expect($content)->toContain('diploma-erasmus.pdf');
});
