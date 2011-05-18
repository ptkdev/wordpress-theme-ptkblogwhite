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

<div id="container">
	<div id="sidebar">
		<div class="sidebar_txt">
			&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">SOCIAL</a>&nbsp;&nbsp;
		</div><div class="sid_line"></div>
			<a href="http://www.facebook.com/tuo_nick"><img src="<?php bloginfo('template_url'); ?>/img/desktop/fb.png" title="Patryk Rzucidlo Facebook" alt="Patryk Rzucidlo Facebook" /></a>
			<a href="http://twitter.com/tuo_nick"><img src="<?php bloginfo('template_url'); ?>/img/desktop/tw.png" title="Patryk Rzucidlo Twitter" alt="Patryk Rzucidlo Twitter" /></a>
			<a href="http://www.google.com/profiles/tuo_nick"><img src="<?php bloginfo('template_url'); ?>/img/desktop/google.png" title="Patryk Rzucidlo Google Profile" alt="Patryk Rzucidlo Google Profile" /></a>
			<a href="http://www.youtube.com/user/tuo_nick"><img src="<?php bloginfo('template_url'); ?>/img/desktop/yt.png" title="Patryk Rzucidlo YouTube" alt="Patryk Rzucidlo YouTube" /></a>
			<a href="http://feeds.feedburner.com/tuo_nick"><img src="<?php bloginfo('template_url'); ?>/img/desktop/rss.png" title="Blog RSS" alt="Blog RSS" /></a>
			<br /><div class="height4"></div>
		
		<!-- sep -->
		<div class="sidebar_txt">
			&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">ANDROID MARKET</a>&nbsp;&nbsp;
		</div><div class="sid_line"></div>
				<a href="https://market.android.com/details?id=blog.tuo_nick"><img src="<?php bloginfo('template_url'); ?>/img/desktop/available_on_android_market.png" title="tuo_nick Blog App Android" alt="tuo_nick Blog App Android" /></a><br />
		
		<!-- sep -->
		<div class="sidebar_txt">
			&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">MENU</a>&nbsp;&nbsp;
		</div><div class="sid_line"></div>
			<div class="clear style-list">
				<ul>
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">Home:</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/chi-sono/">&raquo; Chi Sono</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/contatti/">&raquo; Contatti</a></li> 
					<li class="cat-item"><a href="http://labs.tuo_nick.it/">&raquo; My Labs</a></li> 
					<li class="cat-item"><br /></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">I Miei Post:</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/linux/">&raquo; Linux</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/android/">&raquo; Android</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/developing/">&raquo; Developing</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/tecnologia/">&raquo; Tecnologia</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/social-network/">&raquo; SocialNetwork</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/musicavideo/">&raquo; Musica/Video</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/pensieri/">&raquo; Pensieri</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/poesie/">&raquo; Poesie</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/tanto-per-postare/">&raquo; Tanto Per Postare</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/changelog/">&raquo; Changelog</a></li> 
					<?php //wp_list_categories('orderby=name&title_li='); ?>
				</ul><br />
			</div>
		
		<!-- sep -->	
		<div class="sidebar_txt">
			&nbsp;&nbsp;<a class="menu" href="http://twitter.com/tuo_nick">TWITTER</a>&nbsp;&nbsp;
		</div><div class="sid_line"></div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'profile',
				  rpp: 7,
				  interval: 6000,
				  width: 250,
				  height: 400,
				  theme: {
					shell: {
					  background: '#1c84ce',
					  color: '#ffffff'
					},
					tweets: {
					  background: '#ffffff',
					  color: '#000000',
					  links: '#000000'
					}
				  },
				  features: {
					scrollbar: false,
					loop: false,
					live: false,
					hashtags: true,
					timestamp: true,
					avatars: true,
					behavior: 'all'
				  }
				}).render().setUser('tuo_nick').start();
				</script>
			</div><br />
		
		<!-- sep -->	
		<div class="sidebar_txt">
			&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">LATITUDE</a>&nbsp;&nbsp;
		</div><div class="sid_line"></div>
			<iframe src="http://www.google.com/latitude/apps/badge/api?user=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX&amp;type=iframe&amp;maptype=roadmap&amp;hl=it" class="iframe"></iframe><br />
		
		<!-- sep -->
		<div class="sidebar_txt">
			&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">BLOGROLL</a>&nbsp;&nbsp;
		</div><div class="sid_line"></div>
			<ul class="blogroll">
				<?php wp_list_bookmarks('orderby=name&categorize=0&title_before=&title_after=&title_li='); ?>
			</ul><br />
		
		<!-- sep -->	
		<div class="sidebar_txt">
			&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">VALIDATOR</a>&nbsp;&nbsp;
		</div><div class="sid_line"></div>
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/sitemap.xml"><img src="<?php bloginfo('template_url'); ?>/img/desktop/sitemap.png" title="SiteMap" alt="SiteMap" /></a>
	</div>

