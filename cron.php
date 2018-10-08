<?php

namespace MetaStore\App\Packages;

use MetaStore\App\Kernel\Config;

define( 'ABSPATH', __DIR__ );

require_once( __DIR__ . '/vendor/autoload.php' );

class Cron {

	/**
	 * @return string
	 */
	public static function getToken() {
		$argv = $_SERVER['argv'];
		$out  = $argv[1] ?? '' ?: '';

		return $out;
	}

	/**
	 * @return bool
	 */
	public function getAPI() {
		GitHub\API::getAPI( 'guilds', 60 * 60 );

		return true;
	}

	/**
	 * @return bool
	 */
	public function runCron() {
		$cfg   = Config::getFile( 'cron' );
		$token = $cfg['cron']['token'];

		switch ( self::getToken() ) {
			case $token:
				self::getAPI();
				break;
			default:
				return false;
		}

		return true;
	}
}

$cron = new Cron();
$cron->runCron();