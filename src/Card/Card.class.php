<?php

namespace METASTORE\App\Packages\Card;

use METASTORE\App\Packages\GitHub\API;

class Card {
	public static function outCard( $entry ) {
		$out = '<div class="column"><div class="card">';
		$out .= '<div class="card-content">';
		$out .= '<div class="media">';
		$out .= '<div class="media-left">' . API::outOwnerAvatar( $entry['owner']['html_url'], $entry['owner']['avatar_url'] ) . '</div>';
		$out .= '<div class="media-content">';
		$out .= '<h4 class="title is-4">' . API::outRepo( $entry['name'], $entry['html_url'] ) . '</h4>';
		$out .= '<p class="subtitle is-6">' . API::outOwner( $entry['owner']['login'], $entry['owner']['html_url'] ) . '</p>';
		$out .= '</div>';
		$out .= '</div>';
		$out .= '<div class="content">' . $entry['description'] . '</div>';
		$out .= '</div>';
		$out .= '<div class="card-footer is-hidden-touch">';
		$out .= '<div class="card-footer-item">' . API::outDateCreate( $entry['created_at'] ) . '</div>';
		$out .= '<div class="card-footer-item">' . API::outDateUpdate( $entry['updated_at'] ) . '</div>';
		$out .= '<div class="card-footer-item">' . API::outDatePush( $entry['pushed_at'] ) . '</div>';
		$out .= '</div>';
		$out .= '<div class="card-footer is-hidden-touch">';
		$out .= '<div class="card-footer-item">' . API::outCountWatchers( $entry['watchers_count'], $entry['html_url'] ) . '</div>';
		$out .= '<div class="card-footer-item">' . API::outCountStargazers( $entry['stargazers_count'], $entry['html_url'] ) . '</div>';
		$out .= '<div class="card-footer-item">' . API::outCountForks( $entry['forks_count'], $entry['html_url'] ) . '</div>';
		//$out .= '<div class="card-footer-item">' . self::getHomePage( $entry['homepage'] ) . '</div>';
		$out .= '</div>';
		$out .= '</div></div>';

		return $out;
	}
}