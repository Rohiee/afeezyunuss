<?php
/**
 * Progress Bar Elementor Class
 *
 * @package jeg-elementor-kit
 * @author Jegstudio
 * @since 1.0.0
 */

namespace Jeg\Elementor_Kit\Elements\Elementor;

/**
 * Class Progress_Bar_Elementor
 *
 * @package Jeg\Elementor_Kit\Elements\Elementor
 */
class Progress_Bar_Elementor extends Elementor_Kit_Abstract {
	/**
	 * Element ID
	 *
	 * @return string
	 */
	public function get_elementor_id() {
		return 'jkit_progress_bar';
	}

	/**
	 * Enqueue custom styles.
	 *
	 * @return array
	 */
	public function get_script_depends() {
		return array( 'jkit-element-progressbar' );
	}
}
