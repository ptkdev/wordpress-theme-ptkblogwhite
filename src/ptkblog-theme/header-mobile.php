<?php 
/*
 * PTKDevBlog (Wordpress Theme)
 *   Copyright (C) 2011  PTKDev
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *  
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *  
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
*/
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="generator" content="Geany IDE" />
	<meta name="author" content="Patryk Rzucidlo" />
	<meta name="copyright" content="Creative Commons IT" />
	<meta name="distribution" content="global" />
	<meta name="author-mail" content="ptkdev[at]gmail[dot]com" />
	<meta name="author-msn" content="ptkdev[at]gmail[dot]com" />
	<meta name="author-skype" content="ptkdev" />
	<meta name="author-gadu_gadu" content="2825253" />
	<meta name="author-phone_wind" content="+39 3281759093" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="3 days" />
	<meta name="rating" content="general" />
	<meta name="language" content="it" />
	<meta name="google-site-verification" content="DXFk9SpcypfhF_hUfRxQ7kxd6Y8Pd2HPY0s4T_3RSUk" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> - Feed RSS" href="http://feeds.feedburner.com/ptkdevblog" />
	<link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.png" type="image/png" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" type="image/ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile/header.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile/body.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile/footer.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile/link.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		wp_head();
	?>
</head>

<body>
<div id="header_line"></div>
<div id="logo">
	<a class="title_blog" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">
		<div class="logo_font1">Patryk</div> 
		<div class="logo_font2">Rzucidlo</div>
		<div class="logo_separator"></div>
		<div class="logo_font3">~ Blog</div>
	</a>
</div>
<div class="clear"></div>
<div id="menu">
	<div class="menu_line">
		<div class="menu_txt">
			&nbsp;&nbsp;<a class="menu" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">Home</a>&nbsp;&nbsp;
		</div>
		<div class="height4"></div>
	</div>
	<div class="menu_line">
		<div class="menu_txt">
			&nbsp;&nbsp;<a class="menu" href="http://twitter.com/ptkdev">Twitter</a>&nbsp;&nbsp;
		</div>
		<div class="height4"></div>
	</div>
	<div class="menu_line">
		<div class="menu_txt">
			&nbsp;&nbsp;<a class="menu" href="http://feeds.feedburner.com/ptkdevblog">RSS</a>&nbsp;&nbsp;
		</div>
		<div class="height4"></div>
	</div>
</div>
<div id="menu_line"></div>
