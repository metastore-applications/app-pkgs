<?php

namespace MetaStore\App\Packages;

require_once( __DIR__ . '/vendor/autoload.php' );

try {
	App::runApp();
} catch ( \Exception $e ) {
	echo 'Message: ' . $e->getMessage();
}
