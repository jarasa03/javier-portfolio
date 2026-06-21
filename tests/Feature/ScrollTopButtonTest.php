<?php

it('shows the floating scroll to top button on all main pages', function (string $routeName) {
    $response = $this->get(route($routeName));

    $response->assertOk();
    expect($response->getContent())->toContain('data-scroll-top');
})->with(['home', 'services', 'work', 'about', 'contact']);
