<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', static function () {
	Container::make('post_meta', __('Pagina indeling', 'tetterode'))
	         ->where('post_type', '=','page')
	         ->add_fields(
	         	[
	         		Field::make('complex', 'layout', __('Page layout'))
		            ->add_fields(
			            [
				            Field::make('text', 'title', __('Title')),
				            Field::make('rich_text', 'content', __('Content')),
				            Field::make('image', 'image', __('Thumbnail')),
				            Field::make('checkbox', 'gray_background', __('Gray background', 'tetterode')),
				            Field::make('checkbox', 'secondary_background', __('Image different background', 'tetterode')),
				            Field::make('checkbox', 'image_left', __('Image left', 'tetterode')),
			            ]
		            )
	            ]
	         );
});

