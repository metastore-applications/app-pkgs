<?php

namespace MetaStore\App\Packages\Card;

use MetaStore\App\Packages\GitHub\API;

/**
 * Class Card
 * @package MetaStore\App\Packages\Card
 */
class Card {

	/**
	 * @param $entry
	 *
	 * @return string
	 */
	public static function outCard( $entry ) {
		$out = '<div class="column"><div class="card" itemscope itemtype="http://schema.org/SoftwareApplication">';
		$out .= '<meta itemprop="operatingSystem" content="*">';
		$out .= '<link itemprop="applicationCategory" href="http://schema.org/WebApplication" />';
		$out .= '<div class="card-content">';
		$out .= '<div class="media">';
		$out .= '<div class="media-left">' . API::getOwnerAvatar( $entry['owner']['html_url'], $entry['owner']['avatar_url'] ) . '</div>';
		$out .= '<div class="media-content">';
		$out .= '<h4 class="title is-4">' . API::getRepo( $entry['name'], $entry['html_url'] ) . '</h4>';
		$out .= '<p class="subtitle is-6">' . API::getOwner( $entry['owner']['login'], $entry['owner']['html_url'] ) . '</p>';
		$out .= '</div>';
		$out .= '</div>';
		$out .= '<div class="content">' . API::getDescription( $entry['description'] ) . '</div>';
		$out .= '</div>';
		$out .= '<div class="card-footer is-hidden-touch">';
		$out .= '<div class="card-footer-item">' . API::getDateCreate( $entry['created_at'] ) . '</div>';
		$out .= '<div class="card-footer-item">' . API::getDateUpdate( $entry['updated_at'] ) . '</div>';
		$out .= '<div class="card-footer-item">' . API::getDatePush( $entry['pushed_at'] ) . '</div>';
		$out .= '</div>';
		$out .= '<div class="card-footer is-hidden-touch">';
		$out .= '<div class="card-footer-item">' . API::getCountWatchers( $entry['watchers_count'], $entry['html_url'] ) . '</div>';
		$out .= '<div class="card-footer-item">' . API::getCountStargazers( $entry['stargazers_count'], $entry['html_url'] ) . '</div>';
		$out .= '<div class="card-footer-item">' . API::getCountForks( $entry['forks_count'], $entry['html_url'] ) . '</div>';
		$out .= '</div>';
		$out .= '</div></div>';

		return $out;
	}

}