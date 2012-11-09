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
	<div class="font-dejavu size13px color-black align-left z-index1">	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="align-left z-index0">
				<div class="title-margin"><a class="title-post" href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
			</div>
			<div class="sidebar-line"></div>
			<?php the_content(); ?>
			<div class="size11px">
				<?php if(!is_page()) { ?>
				<b>Tags:</b> <?php the_tags(""," • "," "); ?>
				<?php } ?>
			</div><br />
			<?php if(is_single()) { ?>
				<div id="comments"></div>
			<?php } ?>
			<table class="comments">
				<tr>
					<td><?php if($HTTPID != 1){ comments_template(); }?></td>
				</tr>
			</table>
		<?php endwhile; else: endif; ?>	

		<?php if(!is_single()) { ?>
			<div class="bold align-center"><?php posts_nav_link(' | ','&laquo; Pagina Precedente','Pagina Successiva &raquo;'); ?> </div><br />
		<?php }?>
		
			<div class="align-left z-index0">
				<div class="title-margin"><a class="title-post" href="#">Menu:</a></div>
			</div>
			<div class="sidebar-line"></div>
		<div class="clear style-list">
			<ul>
				<?php if($HTTPID == 1){ ?>
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">&raquo; Home Page</a></li> 
					<li class="cat-item"><a href="http://www.ptkdev.it/">&raquo; Blog</a></li> 
					<li class="cat-item"><a href="http://github.com/ptkdev">&raquo; GitHub</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/openftp/">&raquo; OpenFTP</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/hobby/">&raquo; Hobby</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/capacita-e-competenze/">&raquo; Capacità e Competenze</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/esperienze-professionali/">&raquo; Esperienze Professionali</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/contatti/">&raquo; Contatti</a> (<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/vcard/">vCard</a>)</li> 
					<li class="cat-item"><a href="http://cv.ptkdev.it/">&raquo; Curriculum Vitae</a></li> 
				<?php }else{ ?>
					<li class="cat-item"><a href="#">Blog:</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">&raquo; Home Page</a></li>  
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/linux/">&raquo; Linux</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/android/">&raquo; Android</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/developing/">&raquo; Developing</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/tecnologia/">&raquo; Tecnologia</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/social-network/">&raquo; SocialNetwork</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/musicavideo/">&raquo; Musica/Video</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/pensieri/">&raquo; Pensieri</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/poesie/">&raquo; Poesie</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/citazioni/">&raquo; Citazioni</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/tanto-per-postare/">&raquo; Tanto Per Postare</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/menu/changelog/">&raquo; Changelog</a></li> 
					<li class="cat-item"><br /></li>
					<li class="cat-item"><a href="#">Portfolio:</a></li> 
					<li class="cat-item"><a href="http://portfolio.ptkdev.it/">&raquo; Chi Sono</a></li> 
					<li class="cat-item"><a href="http://portfolio.ptkdev.it/openftp/">&raquo; OpenFTP</a></li> 
					<li class="cat-item"><a href="http://portfolio.ptkdev.it/contatti/">&raquo; Contatti</a> (<a href="http://portfolio.ptkdev.it/vcard/">vCard</a>)</li> 
				<?php } ?>
			</ul><br />
		</div>
	</div>
</div>
