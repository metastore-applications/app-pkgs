<?php

namespace METASTORE\App\Packages;

use METASTORE\App\Kernel\{Parser, Request, View};
use METASTORE\App\Packages\Card\Cards;

/**
 * Class App
 * @package METASTORE\App\Packages
 */
class App {

	/**
	 * @return string
	 */
	public static function getType() {
		$type = Request::get( 'type' );
		$out  = Parser::normalize( $type );

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
