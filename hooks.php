<?php

use  WHMCS\Module\Addon\Setting;

add_hook( 'AdminAreaFooterOutput', 1, function ( $vars ) {
	$config = [];
	$result = Setting::Module( 'ScrollUp' )->get()->toArray();

	array_walk( $result, function ( $val, $key ) use ( &$config ) {
		$config[ $val['setting'] ] = $val['value'];
	} );

	if ( $config['AdminArea'] != 'on' ) {
		return;
	}

	$js = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/js/init.js' );

	switch ( $config['Style'] ) {
		case 'Image':
			$css = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/css/image.css' );
			switch ( $config['Image'] ) {
				case 'Стиль 1':
					$image = '/modules/addons/ScrollUp/includes/html/img/up0.png';
					break;
				case 'Стиль 2':
					$image = '/modules/addons/ScrollUp/includes/html/img/up1.png';
					break;
				case 'Стиль 3':
					$image = '/modules/addons/ScrollUp/includes/html/img/up2.png';
					break;
				case 'Стиль 4':
					$image = '/modules/addons/ScrollUp/includes/html/img/up3.png';
					break;
				case 'Стиль 5':
					$image = '/modules/addons/ScrollUp/includes/html/img/up4.png';
					break;
				case 'Стиль 6':
					$image = '/modules/addons/ScrollUp/includes/html/img/up5.png';
					break;
				case 'Свое изображение':
					$image = $config['ImageURL'];
					break;
			}
			$css = str_replace( '{img}', $image, $css );
			$js  = str_replace( '{imgType}', 'true', $js );
			$js  = str_replace( '{TextButton}', '"' . $config['TextButton'] . '"', $js );
			break;
		case 'Tab':
			$css = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/css/tab.css' );
			$js  = str_replace( '{imgType}', 'false', $js );
			$js  = str_replace( '{TextButton}', '"' . $config['TextButton'] . '"', $js );
			break;
		case 'Pill':
			$css = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/css/pill.css' );
			$js  = str_replace( '{imgType}', 'false', $js );
			$js  = str_replace( '{TextButton}', '"' . $config['TextButton'] . '"', $js );
			break;
		case 'Link':
			$css = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/css/link.css' );
			$js  = str_replace( '{imgType}', 'false', $js );
			$js  = str_replace( '{TextButton}', '"' . $config['TextButton'] . '"', $js );
			break;
	}

	$string = '<script type="text/javascript" src="/modules/addons/ScrollUp/includes/html/js/jquery.easing.min.js"></script>';
	$string .= '<script type="text/javascript" src="/modules/addons/ScrollUp/includes/html/js/jquery.scrollUp.js"></script>';
	$string .= '<script type="text/javascript">';
	$string .= $js;
	$string .= '</script>';
	$string .= '<style>';
	$string .= $css;
	$string .= '</style>';

	return $string;
} );
add_hook( 'ClientAreaFooterOutput', 1, function ( $vars ) {
	$config = [];
	$result = Setting::Module( 'ScrollUp' )->get()->toArray();

	array_walk( $result, function ( $val, $key ) use ( &$config ) {
		$config[ $val['setting'] ] = $val['value'];
	} );

	if ( $config['ClientArea'] != 'on' ) {
		return;
	}

	$js = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/js/init.js' );

	switch ( $config['Style'] ) {
		case 'Image':
			$css = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/css/image.css' );
			switch ( $config['Image'] ) {
				case 'Стиль 1':
					$image = '/modules/addons/ScrollUp/includes/html/img/up0.png';
					break;
				case 'Стиль 2':
					$image = '/modules/addons/ScrollUp/includes/html/img/up1.png';
					break;
				case 'Стиль 3':
					$image = '/modules/addons/ScrollUp/includes/html/img/up2.png';
					break;
				case 'Стиль 4':
					$image = '/modules/addons/ScrollUp/includes/html/img/up3.png';
					break;
				case 'Стиль 5':
					$image = '/modules/addons/ScrollUp/includes/html/img/up4.png';
					break;
				case 'Стиль 6':
					$image = '/modules/addons/ScrollUp/includes/html/img/up5.png';
					break;
				case 'Свое изображение':
					$image = $config['ImageURL'];
					break;
			}
			$css = str_replace( '{img}', $image, $css );
			$js  = str_replace( '{imgType}', 'true', $js );
			$js  = str_replace( '{TextButton}', '"' . $config['TextButton'] . '"', $js );
			break;
		case 'Tab':
			$css = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/css/tab.css' );
			$js  = str_replace( '{imgType}', 'false', $js );
			$js  = str_replace( '{TextButton}', '"' . $config['TextButton'] . '"', $js );
			break;
		case 'Pill':
			$css = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/css/pill.css' );
			$js  = str_replace( '{imgType}', 'false', $js );
			$js  = str_replace( '{TextButton}', '"' . $config['TextButton'] . '"', $js );
			break;
		case 'Link':
			$css = file_get_contents( ROOTDIR . '/modules/addons/ScrollUp/includes/html/css/link.css' );
			$js  = str_replace( '{imgType}', 'false', $js );
			$js  = str_replace( '{TextButton}', '"' . $config['TextButton'] . '"', $js );
			break;
	}

	$string = '<script type="text/javascript" src="/modules/addons/ScrollUp/includes/html/js/jquery.easing.min.js"></script>';
	$string .= '<script type="text/javascript" src="/modules/addons/ScrollUp/includes/html/js/jquery.scrollUp.js"></script>';
	$string .= '<script type="text/javascript">';
	$string .= $js;
	$string .= '</script>';
	$string .= '<style>';
	$string .= $css;
	$string .= '</style>';

	return $string;
} );
