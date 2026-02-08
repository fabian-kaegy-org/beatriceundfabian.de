<?php
/**
 * Demo Taxonomy
 *
 * @package FireflyPlugin
 */

namespace FireflyPlugin\Taxonomies;

use TenupFramework\Taxonomies\AbstractTaxonomy;

/**
 * Demo Taxonomy.
 */
class Demo extends AbstractTaxonomy {

	/**
	 * Get the taxonomy name.
	 *
	 * @return string
	 */
	public function get_name() {
		return 'tenup-tax-demo';
	}

	/**
	 * Get the singular taxonomy label.
	 *
	 * @return string
	 */
	public function get_singular_label() {
		return esc_html__( 'Demo Term', 'firefly-plugin' );
	}

	/**
	 * Get the plural taxonomy label.
	 *
	 * @return string
	 */
	public function get_plural_label() {
		return esc_html__( 'Demo Terms', 'firefly-plugin' );
	}

	/**
	 * Checks whether the Module should run within the current context.
	 *
	 * @return bool
	 */
	public function can_register() {
		return false;
	}
}
