<?php namespace MetaStore\App\Packages;

use MetaStore\App\Kernel\Route; ?>

<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head prefix="og: http://ogp.me/ns#">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="" />
	<meta name="description" content="Приложения и расширения для CMS <?php echo App::outCMS(); ?> от METADATA." />
	<meta name="copyright" content="METADATA / FOUNDATION" />
	<title>METASTORE / APPS <?php echo App::outCMS( 1 ); ?></title>

	<!-- open graph -->
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="METASTORE / APPS <?php echo App::outCMS( 1 ) ?>" />
	<meta property="og:title" content="METASTORE / APPS <?php echo App::outCMS( 1 ) ?>" />
	<meta property="og:description" content="Приложения и расширения для CMS <?php echo App::outCMS(); ?> от METADATA." />
	<meta property="og:image" content="" />
	<meta property="og:url" content="https://<?php echo Route::HTTP_HOST() ?>" />
	<!-- / open graph -->

	<!-- twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="METASTORE / APPS <?php echo App::outCMS( 1 ) ?>" />
	<meta name="twitter:description" content="Приложения и расширения для CMS <?php echo App::outCMS(); ?> от METADATA." />
	<meta name="twitter:image" content="" />
	<meta name="twitter:site" content="@metadatafdn" />
	<meta name="twitter:creator" content="@metadatafdn" />
	<!-- / twitter -->

	<!-- styles -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i|Roboto:400,400i,700,700i|Fira+Mono:400,700&amp;subset=cyrillic" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma/css/bulma.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" />
	<link type="text/css" rel="stylesheet" href="/resources/assets/styles/theme.css" />
	<!-- / styles -->

	<!-- favicon -->
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<!-- / favicon -->
</head>
<body itemscope itemtype="http://schema.org/WebPage">
