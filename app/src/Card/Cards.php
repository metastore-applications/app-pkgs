<?php

namespace MetaStore\App\Packages\Card;

use MetaStore\App\Packages\GitHub\API;

/**
 * Class Cards
 * @package MetaStore\App\Packages\Card
 */
class Cards {

	/**
	 * @param $org
	 *
	 * @return string
	 */
	public static function outCards( $org ) {
		$api   = API::getAPI( $org );
		$out   = '';
		$count = 0;
		foreach ( $api as $entry ) {
			if ( $count % 2 == 0 ) {
				$out .= '<div class="columns">';
			}

			$out .= Card::outCard( $entry );

			if ( $count % 2 != 0 ) {
				$out .= '</div>';
			}

			$count ++;
		}

		if ( $count % 2 != 0 ) {
			$out .= '</div>';
		}

		return $out;
	}

}