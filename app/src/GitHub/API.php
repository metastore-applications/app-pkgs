<?php

namespace METASTORE\App\Packages\GitHub;

use METASTORE\App\Kernel\{Config, cURL, Date};

/**
 * Class API
 * @package METASTORE\App\Packages\GitHub
 */
class API {

	/**
	 * @param $org
	 *
	 * @return array
	 */
	public static function get( $org ) {
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
	public static function outOwner( $name, $url ) {
		$out = '<span itemprop="author"><a href="' . $url . '" target="_blank" itemprop="url"><span itemprop="name">@' . $name . '</span></a></span>';

		return $out;
	}

	/**
	 * @param $url
	 * @param $src
	 *
	 * @return string
	 */
	public static function outOwnerAvatar( $url, $src ) {
		$out = '<a href="' . $url . '" target="_blank"><figure class="image is-64x64"><img src="' . $src . '" alt="" itemprop="image" /></figure></a>';

		return $out;
	}

	/**
	 * @param $name
	 * @param $url
	 *
	 * @return string
	 */
	public static function outRepo( $name, $url ) {
		$out = '<a href="' . $url . '" target="_blank" itemprop="name">' . $name . '</a>';

		return $out;
	}

	/**
	 * @param $count
	 * @param $url
	 *
	 * @return string
	 */
	public static function outCountWatchers( $count, $url ) {
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
	public static function outCountStargazers( $count, $url ) {
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
	public static function outCountForks( $count, $url ) {
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
	public static function outHomePage( $url ) {
		$out = '<a href="' . $url . '" target="_blank"><i class="fas fa-home fa-fw"></i></a>';

		return $out;
	}

	/**
	 * @param $date
	 *
	 * @return string
	 */
	public static function outDateCreate( $date ) {
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
	public static function outDateUpdate( $date ) {
		$out = '<span class="tags has-addons">';
		$out .= '<span class="tag"><i class="fas fa-edit fa-fw"></i></span>';
		$out .= '<span class="tag" itemprop="dateModified">' . Date::convert( $date ) . '</span>';
		$out .= '</span>';

		return $out;
	}

	/**
	 * @param $date
	 *
	 * @return string
	 */
	public static function outDatePush( $date ) {
		$out = '<span class="tags has-addons">';
		$out .= '<span class="tag"><i class="fas fa-upload fa-fw"></i></span>';
		$out .= '<span class="tag" itemprop="datePublished">' . Date::convert( $date ) . '</span>';
		$out .= '</span>';

		return $out;
	}
}