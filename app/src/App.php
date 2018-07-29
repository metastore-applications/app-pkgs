<?php

namespace METASTORE\App\Packages;

use METASTORE\App\Kernel\{Parser, Request, View};
use METASTORE\App\Packages\Card\Cards;

class App {

	/**
	 * @return string
	 */
	public static function getType() {
		$valid = [
			'xenforo',
			'flarum',
			'wordpress',
			'mediawiki',
		];

		$type = Request::get( $_GET['type'] ?? '' ?: '' );
		$out  = Parser::normalize( $type );

		if ( ! in_array( $out, $valid ) ) {
			return false;
		}

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
	public static function Run() {
		$cards = new Cards();

		switch ( self::getType() ) {
			case 'mediawiki';
				$outCards = $cards->outCards( 'metastore-mediawiki' );
				break;
			case 'xenforo';
				$outCards = $cards->outCards( 'metastore-xenforo' );
				break;
			case 'flarum';
				$outCards = $cards->outCards( 'metastore-flarum' );
				break;
			case 'wordpress';
				$outCards = $cards->outCards( 'metastore-wordpress' );
				break;
			default:
				$outCards = 0;
		}

		$page = $outCards ? 'cards' : 'home';

		View::get( $page, 'pages' );

		return true;
	}
}
