<?php
/**
 * Adds fields for the footer
 *
 * @package App\Controllers\Customizer
 */
namespace App\Controllers\Customizer;

use Kirki;

/**
 * Class FooterCustomizer
 * @package App\Controllers\Customizer
 */
class FooterCustomizer extends Customizer {

	/**
	 * Holds the section information.
	 *
	 * @var array $section
	 */
	protected $section = [
		'id'          => 'footer-customizer',
		'title'       => 'Footer instellingen',
		'description' => 'Deze instellingen worden gebruikt in de footer',
	];


	/**
	 * Add fields to customizer
	 *
	 * @return void
	 */
	public function add_fields() : void {
		Kirki::add_field(
			'tetterode',
			[
				'settings' => 'footer-after-menu-text',
				'label'    => 'Text na menu',
				'type'     => 'text',
				'default'  => 'een project van wonenoptetterode.amsterdam',
				'section'  => $this->section['id'],
			]
		);
	}

}
