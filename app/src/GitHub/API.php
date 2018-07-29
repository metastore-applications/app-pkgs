<?php

namespace METASTORE\App\Packages\GitHub;

use METASTORE\App\Kernel\{Cache, Date};

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
		$api = 'https://api.github.com/orgs/' . $org . '/repos?access_token=a7a2df1bf5a5a336f22369ecabc922a6cf00e3b8';
		$out = Cache::json( $api );

		return $out;
	}

	/**
	 * @param $name
	 * @param $url
	 *
	 * @return string
	 */
	public static function outOwner( $name, $url ) {
		$out = '<a href="' . $url . '" target="_blank">@' . $name . '</a>';

		return $out;
	}

	/**
	 * @param $url
	 * @param $src
	 *
	 * @return string
	 */
	public static function outOwnerAvatar( $url, $src ) {
		$out = '<a href="' . $url . '" target="_blank"><figure class="image is-64x64"><img src="' . $src . '" alt=""></figure></a>';

		return $out;
	}

	/**
	 * @param $name
	 * @param $url
	 *
	 * @return string
	 */
	public static function outRepo( $name, $url ) {
		$out = '<a href="' . $url . '" target="_blank">' . $name . '</a>';

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
		$out .= '<span class="tag">' . Date::convert( $date ) . '</span>';
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
		$out .= '<span class="tag">' . Date::convert( $date ) . '</span>';
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
		$out .= '<span class="tag">' . Date::convert( $date ) . '</span>';
		$out .= '</span>';

		return $out;
	}
}