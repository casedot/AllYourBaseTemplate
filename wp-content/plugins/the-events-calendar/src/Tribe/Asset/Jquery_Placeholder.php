<?php


	class Tribe__Events__Asset__Jquery_Placeholder extends Tribe__Events__Asset__Abstract_Asset {

		public function handle() {
			$deps = array_merge( $this->deps, array( 'jquery' ) );
			$path = Tribe__Events__Template_Factory::getMinFile( $this->vendor_url . 'jquery-placeholder/jquery.placeholder.js', true );
			$placeholder_handle = Tribe__Events__Template_Factory::get_placeholder_handle();
			wp_enqueue_script( $placeholder_handle, $path, $deps, '2.0.7', false );
			Tribe__Events__Template_Factory::add_vendor_script( $placeholder_handle );
		}
	}