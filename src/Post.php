<?php
namespace App;

class Post extends \Timber\Post {
	/**
	 * Get a carbon field
	 *
	 * @param string $field_name
	 *
	 * @return array|mixed|\Timber\mix|\WP_Post
	 */
	public function get_field( $field_name ) {
		$value = carbon_get_post_meta($this->id, $field_name);
		return $this->convert($value);
	}
}
