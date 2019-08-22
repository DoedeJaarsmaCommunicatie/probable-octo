<?php
$context = \Timber\Timber::get_context();
$context['post'] = new \App\Post();

\Timber\Timber::render( 'templates/front-page.twig', $context);
