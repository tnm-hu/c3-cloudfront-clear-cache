<?php
require_once( __DIR__ . '/classes/Class_Loader.php' );
new C3_CloudFront_Cache_Controller\Class_Loader( dirname( __FILE__ ) . '/classes' );
new C3_CloudFront_Cache_Controller\Class_Loader( dirname( __FILE__ ) . '/classes/WP' );
new C3_CloudFront_Cache_Controller\Class_Loader( dirname( __FILE__ ) . '/classes/AWS' );
new C3_CloudFront_Cache_Controller\Class_Loader( dirname( __FILE__ ) . '/classes/Views' );