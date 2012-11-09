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
<div id="content-width">
	<aside id="sidebar">
		<div class="align-left z-index0">
		</div><div class="sidebar-line"></div>
			<a href="http://www.facebook.com/ptkdev"><img src="<?php bloginfo('template_url'); ?>/img/desktop/fb.png" title="Patryk Rzucidlo Facebook" alt="Patryk Rzucidlo Facebook" /></a>
			<a href="http://twitter.com/ptkdev"><img src="<?php bloginfo('template_url'); ?>/img/desktop/tw.png" title="Patryk Rzucidlo Twitter" alt="Patryk Rzucidlo Twitter" /></a>
			<a href="http://www.google.com/profiles/ptkdev"><img src="<?php bloginfo('template_url'); ?>/img/desktop/google.png" title="Patryk Rzucidlo Google Profile" alt="Patryk Rzucidlo Google Profile" /></a>
			<a href="http://www.youtube.com/user/ptkdev"><img src="<?php bloginfo('template_url'); ?>/img/desktop/yt.png" title="Patryk Rzucidlo YouTube" alt="Patryk Rzucidlo YouTube" /></a>
			<a href="http://feeds.feedburner.com/PTKDevBlog"><img src="<?php bloginfo('template_url'); ?>/img/desktop/rss.png" title="Blog RSS" alt="Blog RSS" /></a>
			<br /><div class="height4"></div>

		<div class="align-left z-index0">
		</div><div class="sidebar-line"></div>
		<a href="<?php bloginfo('template_url'); ?>/img/patryk_rzucidlo_ptkdev_full<?php if($HTTPID == 1){ echo "1"; }else{ echo "2"; }?>.png" data-lightbox><img title="PTKDev" alt="PTKDev" src="<?php bloginfo('template_url'); ?>/img/patryk_rzucidlo_ptkdev<?php if($HTTPID == 1){ echo "1"; }else{ echo "2"; }?>.png" /></a>

		<div class="align-left z-index0">
		</div><div class="sidebar-line"></div>
				<a href="https://market.android.com/details?id=blog.ptkdev"><img src="<?php bloginfo('template_url'); ?>/img/desktop/available_on_android_market.png" title="PTKDev Blog App Android" alt="PTKDev Blog App Android" /></a><br />

		<div class="align-left z-index0">
		</div><div class="sidebar-line"></div>
			<nav class="clear style-list">
				<ul>
				<?php if($HTTPID == 1){ ?>
					<li class="cat-item"><a href="#">Portfolio:</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/">&raquo; Home Page</a></li> 
					<li class="cat-item"><a href="http://www.ptkdev.it/">&raquo; Blog</a></li> 
					<li class="cat-item"><a href="http://github.com/ptkdev">&raquo; GitHub</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/openftp/">&raquo; OpenFTP</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/hobby/">&raquo; Hobby</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/capacita-e-competenze/">&raquo; Capacità e Competenze</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/esperienze-professionali/">&raquo; Esperienze Professionali</a></li> 
					<li class="cat-item"><a href="http://portfolio.ptkdev.it/contatti/">&raquo; Contatti</a> (<a href="<?php echo site_url(); ?>/vcard/">vCard</a>)</li> 
					<li class="cat-item"><a href="http://cv.ptkdev.it/">&raquo; Curriculum Vitae</a></li> 
				<?php }else{ ?>
					<li class="cat-item"><a href="#">Blog:</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/">&raquo; Home Page</a></li>  
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/linux/">&raquo; Linux</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/android/">&raquo; Android</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/developing/">&raquo; Developing</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/tecnologia/">&raquo; Tecnologia</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/social-network/">&raquo; SocialNetwork</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/musicavideo/">&raquo; Musica/Video</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/pensieri/">&raquo; Pensieri</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/poesie/">&raquo; Poesie</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/citazioni/">&raquo; Citazioni</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/tanto-per-postare/">&raquo; Tanto Per Postare</a></li> 
					<li class="cat-item"><a href="<?php echo site_url(); ?>/menu/changelog/">&raquo; Changelog</a></li> 
					<li class="cat-item"><br /></li>
					<li class="cat-item"><a href="#">Portfolio:</a></li> 
					<li class="cat-item"><a href="http://portfolio.ptkdev.it/">&raquo; Chi Sono</a></li> 
					<li class="cat-item"><a href="http://portfolio.ptkdev.it/openftp/">&raquo; OpenFTP</a></li> 
					<li class="cat-item"><a href="http://portfolio.ptkdev.it/contatti/">&raquo; Contatti</a> (<a href="http://portfolio.ptkdev.it/vcard/">vCard</a>)</li> 
				<?php } ?>
				</ul><br />
			</nav>	
		<div class="align-left z-index0">
		</div><div class="sidebar-line"></div>
			<a href="<?php echo site_url(); ?>/sitemap.xml"><img src="<?php bloginfo('template_url'); ?>/img/desktop/sitemap.png" title="SiteMap" alt="SiteMap" /></a>
			<a href="http://www.w3.org/TR/html5/"><img src="<?php bloginfo('template_url'); ?>/img/desktop/html5.png" title="HTML5" alt="HTML5" /></a>
			<a href="http://www.opensource.org/"><img src="<?php bloginfo('template_url'); ?>/img/desktop/opensource.png" title="OpenSource" alt="OpenSource" /></a>
			<a href="http://github.com/"><img src="<?php bloginfo('template_url'); ?>/img/desktop/github.png" title="GitHub" alt="GitHub" /></a>
			<a href="http://www.kernel.org"><img src="<?php bloginfo('template_url'); ?>/img/desktop/linux.png" title="Kernel Linux" alt="Kernel Linux" /></a>
	</aside>
