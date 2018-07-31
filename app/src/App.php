<?php

namespace MetaStore\App\Packages;

use MetaStore\App\Kernel\{Parser, Request, View};
use MetaStore\App\Packages\Card\Cards;

/**
 * Class App
 * @package MetaStore\App\Packages
 */
class App {

	/**
	 * @return string
	 */
	public static function getType() {
		$type = Request::getParam( 'type' );
		$out  = Parser::normalizeData( $type );

		return $out;
	}

	/**
	 * @param int $sep
	 *
	 * @return string
	 */
	public static function outCMS( $sep = 0 ) {
		$out = ( self::getType() && $sep ) ? '/ ' . strtoupper( self::getType() ) : strtoupper( self::getType() );

		return $out;
	}

	/**
	 * @return bool
	 */
	public static function getCards() {
		$cards = new Cards();

		switch ( self::getType() ) {
			case 'mediawiki';
				$out = $cards->outCards( 'metastore-mediawiki' );
				break;
			case 'xenforo';
				$out = $cards->outCards( 'metastore-xenforo' );
				break;
			case 'flarum';
				$out = $cards->outCards( 'metastore-flarum' );
				break;
			case 'wordpress';
				$out = $cards->outCards( 'metastore-wordpress' );
				break;
			default:
				return false;
		}

		return $out;
	}

	/**
	 *
	 */
	public static function Run() {
		$page = self::getCards() ? 'cards' : 'home';
		View::get( $page, 'pages' );
	}
}
