<?php 
/*
 *	PTKDev Blog - Wordpress Theme
 *		Copyright (C) 2011  PTKDev
 *
 *		This program is free software: you can redistribute it and/or modify
 *		it under the terms of the GNU General Public License as published by
 *		the Free Software Foundation, either version 3 of the License, or
 *		(at your option) any later version.
 *
 *		This program is distributed in the hope that it will be useful,
 *		but WITHOUT ANY WARRANTY; without even the implied warranty of
 *		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *		GNU General Public License for more details.
 *
 *		You should have received a copy of the GNU General Public License
 *		along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *		Author: Patryk Rzucidlo (PTKDev)
 *		Twitter: @ptkdev
 *		WebSite: http://www.ptkdev.it/
 * 		IRC: chat.freenode.net at #ptkdev
 */
?>	

<!DOCTYPE html> 
<html dir="ltr" lang="it-IT"> 
<head> 
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="generator" content="Geany IDE" />
	<meta name="author" content="PTKDev - http://www.ptkdev.it/" />
	<meta name="copyright" content="Creative Commons IT" />
	<meta name="distribution" content="global" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="3 days" />
	<meta name="rating" content="general" />
	<meta name="language" content="it" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> - Feed RSS" href="http://feeds.feedburner.com/tuo_nick" />
	<link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.png" type="image/png" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" type="image/ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/header.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/body.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/link.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/css/lightbox.css" rel="stylesheet" type="text/css" media="screen" /> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/prototype.js" type="text/javascript"></script> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/lightbox.js" type="text/javascript"></script>
	<!--[if lt IE 7.]>
	<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pngfix.js"></script>
	<![endif]-->
	<?php
		wp_head();
	?>
</head>

<body>
<div id="header_line"></div>
<div id="logo">
	<a class="title_blog" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">
		<div class="logo_font1">TUO</div> 
		<div class="logo_font2">NOME</div>
		<div class="logo_separator"></div>
		<div class="logo_font3">~ Blog</div>
	</a>
</div>
<div class="clear"></div>
<div id="menu">
	<div class="menu_line_sx">
		<div class="menu_txt">
			&nbsp;&nbsp;<a class="menu" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">Benvenuti</a>&nbsp;&nbsp;
		</div>
		<div class="height4"></div>
	</div>
</div>
<div id="menu_line"></div>
