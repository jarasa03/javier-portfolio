<?php

test('the about page renders the social links section', function () {
    $response = $this->get(route('about'));

    $response->assertOk();

    $content = $response->getContent();

    expect($content)->toContain('Francisco Javier Arruabarrena Sabroso');
    expect($content)->toContain('Redes sociales');
    expect($content)->toContain('https://www.linkedin.com/in/javierarrua/');
    expect($content)->toContain('https://github.com/jarasa03');
    expect($content)->toContain('https://www.instagram.com/jarasa03/');
});
