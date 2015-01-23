<?php


	class Tribe__Events__Asset__Admin_Ui extends Tribe__Events__Asset__Abstract_Asset {

		public function handle() {
			$path = Tribe_Template_Factory::getMinFile( $this->resources_url . 'events-admin.css', true );
			wp_enqueue_style( $this->prefix . '-admin-ui', $path, array(), TribeEvents::VERSION );
		}
	}