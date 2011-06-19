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
<!DOCTYPE html> 
<html dir="ltr" lang="it-IT"> 
<head> 
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="generator" content="Geany IDE" />
	
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
	
	<meta name="distribution" content="global" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="3 days" />
	<meta name="rating" content="general" />
	<meta name="language" content="it" />
	<meta name="google-site-verification" content="DXFk9SpcypfhF_hUfRxQ7kxd6Y8Pd2HPY0s4T_3RSUk" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> - Feed RSS" href="http://feeds.feedburner.com/ptkdevblog" />
	<link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.png" type="image/png" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" type="image/ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/header.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/body.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/link.css" />
	
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
		<div class="logo_font1">Patryk</div> 
		<div class="logo_font2">Rzucidlo</div>
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
