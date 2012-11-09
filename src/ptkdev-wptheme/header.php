<?php 
/*
 * PTKDev.it (Wordpress Theme)
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
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="it-IT"> 
<head> 
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<!--
	<meta name="author" content="Patryk Rzucidlo" />
	<meta name="author-mail" content="ptkdev[at]gmail[dot]com" />
	<meta name="author-msn" content="ptkdev[at]gmail[dot]com" />
	<meta name="author-skype" content="ptkdev" />
	<meta name="author-twitter" content="@PTKDev" />
	<meta name="author-irc" content="chat.freenode.net #ptkdev" />
	<meta name="author-gadu_gadu" content="2825253" />
	<meta name="author-phone_wind" content="+39 3281759093" />
	
	<meta name="copyright" content="GNU Affero General Public License" />
	<meta name="source-code" content="https://github.com/PTKDev/WordpressTheme-PTKDevBlog" />
	-->
	
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="3 days" />
	<meta name="rating" content="general" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> - Feed RSS" href="http://feeds.feedburner.com/ptkdevblog" />
	<link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico" />
	<link rel="icon" href="<?php echo site_url(); ?>/favicon.png" type="image/png" />
	<link rel="icon" href="<?php echo site_url(); ?>/favicon.ico" type="image/ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/desktop.css" />
	<?php if($HTTPID == 1){ ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/red.css" />
	<?php }else{ ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/blue.css" />
	<?php } ?>
	
	<link href="<?php echo content_url(); ?>/plugins/lightbox/css/lightbox.css" rel="stylesheet" />
	<?php
		wp_head();
	?>
</head>

<body>
<div id="container">
	<header>
		<div id="header_line"></div>
		<div id="logo">
			<a class="title-blog" href="<?php echo site_url(); ?>/">
				<div class="logo_font1">Patryk</div> 
				<div class="logo_font2">Rzucidlo</div>
				<div class="logo_separator"></div>
				<div class="logo_font3">~ <?php if($HTTPID == 1){ echo "Portfolio"; }else{ echo "Blog"; }?></div>
			</a>
		</div>
		<div class="clear"></div>
		<div id="menu">
			<div class="menu_line_sx">
				<div class="bgcolor-white align-left">
					&nbsp;&nbsp;<a class="hello" href="<?php echo site_url(); ?>/">Benvenuti</a>&nbsp;&nbsp;
				</div>
				<div class="height4"></div>
			</div>
		</div>
		<div id="menu_line"></div>
	</header>
