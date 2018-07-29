<?php

namespace METASTORE\App\Packages;

require_once( __DIR__ . '/vendor/autoload.php' );

try {
	App::Run();
} catch ( \Exception $e ) {
	echo 'Message: ' . $e->getMessage();
}
