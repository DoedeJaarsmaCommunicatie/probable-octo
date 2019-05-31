<?php
namespace App\Controllers\Customizer;

use Kirki;

/**
 * Class NewsletterCustomizer
 *
 * @package App\Controllers\Customizer
 */
class NewsletterCustomizer extends Customizer {

	/**
	 * The current section
	 *
	 * @var array $section
	 */
	protected $section = [
		'id'          => 'newsletter',
		'title'       => 'Mailchimp instellingen',
		'description' => 'Mailchimp instellingen',
	];

	/**
	 * Add fields to the application
	 */
	public function add_fields() : void {
		Kirki::add_field(
			'tetterode',
			[
				'type'     => 'text',
				'section'  => $this->section['id'],
				'label'    => esc_html( 'Titel' ),
				'default'  => esc_html( 'Meld u aan voor de nieuwsbrief, dan houden we u op de hoogte.' ),
				'settings' => 'newsletter-title',
			]
		);

		Kirki::add_field(
			'tetterode',
			[
				'type'     => 'text',
				'section'  => $this->section['id'],
				'label'    => esc_html( 'Mailchimp API key' ),
				'settings' => 'newsletter-api-key',
			]
		);
	}

}
