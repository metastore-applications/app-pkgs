<?php

namespace MetaStore\App\Packages\GitHub;

use MetaStore\App\Kernel\{Config, cURL, Date};

/**
 * Class API
 * @package MetaStore\App\Packages\GitHub
 */
class API {

	/**
	 * @param $org
	 *
	 * @return array
	 */
	public static function getAPI( $org = '' ) {
		$token = Config::getFile( 'api' );
		$token = $token['api']['github']['token'];
		$api   = 'https://api.github.com/orgs/' . $org . '/repos?access_token=' . $token;
		$out   = cURL::getJSON( $api );

		return $out;
	}

	/**
	 * @param $name
	 * @param $url
	 *
	 * @return string
	 */
	public static function getOwner( $name = '', $url = '' ) {
		$out = '<a href="' . $url . '" target="_blank"><span itemprop="author">@' . $name . '</span></a>';

		return $out;
	}

	/**
	 * @param $url
	 * @param $src
	 *
	 * @return string
	 */
	public static function getOwnerAvatar( $url = '', $src = '' ) {
		$out = '<a href="' . $url . '" target="_blank">';
		$out .= '<figure class="image is-64x64"><img src="' . $src . '" alt="" itemprop="image" /></figure>';
		$out .= '</a>';

		return $out;
	}

	/**
	 * @param $name
	 * @param $url
	 *
	 * @return string
	 */
	public static function getRepo( $name = '', $url = '' ) {
		$out = '<a href="' . $url . '" target="_blank" itemprop="url"><span itemprop="name">' . $name . '</span></a>';

		return $out;
	}

	/**
	 * @param string $entry
	 *
	 * @return string
	 */
	public static function getDescription( $entry = '' ) {
		$out = '<div itemprop="headline">' . $entry . '</div>';

		return $out;
	}

	/**
	 * @param $count
	 * @param $url
	 *
	 * @return string
	 */
	public static function getCountWatchers( $count = '', $url = '' ) {
		$out = '<span class="tags has-addons">';
		$out .= '<span class="tag"><i class="far fa-eye fa-fw"></i></span>';
		$out .= '<a class="tag" href="' . $url . '/watchers">' . $count . '</a>';
		$out .= '</span>';

		return $out;
	}

	/**
	 * @param $count
	 * @param $url
	 *
	 * @return string
	 */
	public static function getCountStargazers( $count = '', $url = '' ) {
		$out = '<span class="tags has-addons">';
		$out .= '<span class="tag"><i class="fas fa-star fa-fw"></i></span>';
		$out .= '<a class="tag" href="' . $url . '/stargazers">' . $count . '</a>';
		$out .= '</span>';

		return $out;
	}

	/**
	 * @param $count
	 * @param $url
	 *
	 * @return string
	 */
	public static function getCountForks( $count = '', $url = '' ) {
		$out = '<span class="tags has-addons">';
		$out .= '<span class="tag"><i class="fas fa-code-branch fa-fw"></i></span>';
		$out .= '<a class="tag" href="' . $url . '/network">' . $count . '</a>';
		$out .= '</span>';

		return $out;
	}

	/**
	 * @param $url
	 *
	 * @return string
	 */
	public static function getHomePage( $url = '' ) {
		$out = '<a href="' . $url . '" target="_blank"><i class="fas fa-home fa-fw"></i></a>';

		return $out;
	}

	/**
	 * @param $date
	 *
	 * @return string
	 */
	public static function getDateCreate( $date = '' ) {
		$out = '<span class="tags has-addons">';
		$out .= '<span class="tag"><i class="fas fa-plus-square fa-fw"></i></span>';
		$out .= '<span class="tag" itemprop="dateCreated">' . Date::convert( $date ) . '</span>';
		$out .= '</span>';

		return $out;
	}

	/**
	 * @param $date
	 *
	 * @return string
	 */
	public static function getDateUpdate( $date = '' ) {
		$out = '<span class="tags has-addons">';
		$out .= '<span class="tag"><i class="fas fa-edit fa-fw"></i></span>';
		$out .= '<span class="tag" itemprop="dateModified">' . Date::convert( $date ) . '</span>';
		$out .= '</span>';

		return $out;
	}

	/**
	 * @param string $date
	 *
	 * @return string
	 */
	public static function getDatePush( $date = '' ) {
		$out = '<span class="tags has-addons">';
		$out .= '<span class="tag"><i class="fas fa-upload fa-fw"></i></span>';
		$out .= '<span class="tag" itemprop="datePublished">' . Date::convert( $date ) . '</span>';
		$out .= '</span>';

		return $out;
	}

}