<?php
/**
 * Provides service for additional customizer fields.
 *
 * @author Mitch Hijlkema <mail@mitchhijlkema.nl>
 * @package App\Providers
 */

namespace App\Providers;

use App\Controllers\Customizer\FooterCustomizer;
use App\Controllers\Customizer\NewsletterCustomizer;
use Kirki;

/**
 * Class CustomizerServiceProvider
 *
 * @package App\Providers
 */
class CustomizerServiceProvider {

	/**
	 * CustomizerServiceProvider constructor.
	 */
	public function __construct() {
		$this->boot();
	}

	/**
	 * Boots the customizer
	 *
	 * @return void
	 */
	public function boot(): void {
		Kirki::add_config(
			'tetterode',
			[
				'capability'  => 'edit_theme_options',
				'option_type' => 'theme_mod',
			]
		);

		new NewsletterCustomizer();
		new FooterCustomizer();
	}
}
