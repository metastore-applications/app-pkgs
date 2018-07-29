<?php

namespace METASTORE\App\Packages;

use METASTORE\App\Kernel\{Parser, Request, Route};
use METASTORE\App\Packages\Card\Cards;

class App {
	public static function Run() {
		$cards = new Cards();
		$type  = Parser::normalize( $_GET['type'] ?? '' ?: '' );

		switch ( Request::get( $type ) ) {
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

		require_once( Route::DOCUMENT_ROOT() . 'engine/themes/default/templates/pages/' . $page . '.php' );

		return true;
	}
}