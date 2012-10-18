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

	<div id="content">	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="sidebar_line">
				<div class="sidebar_txt">
					<div class="title-margin"><a class="menu" href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
				</div>
				<div class="height4"></div>
			</div>
			<div class="post_separator"> <hr /></div>
			<?php the_content(); ?>
			<div class="content_small">
				<?php if(!is_page()) { ?>
				<b>Tags:</b> <?php the_tags(""," • "," "); ?><br /><br />
				<?php } ?>
				<br /><div class="author">Scritto il <?php the_time('j/m/Y'); ?> da: <a class="author" href="<?php the_author_url(); ?>"><?php the_author_nickname(); ?></a> | <a class="author" href="<?php the_permalink() ?>#comments">Commenta</a></div>
			</div><br />
			<?php if(is_single()) { ?>
				<div id="comments"></div>
			<?php } ?>
			<!-- Tabella per Fix indenseDebate del layout -->
			<table class="comments">
				<tr>
					<td><?php comments_template(); ?> </td>
				</tr>
			</table>
		<?php endwhile; else: endif; ?>	
		<table class="width">
			<tr>
				<td class="clear_center">
					<?php if(!is_single()) { ?>
						<div class="switch_page"><?php posts_nav_link(' | ','&laquo; Pagina Precedente','Pagina Successiva &raquo;'); ?> </div><br />
					<?php }?>
				</td>
			</tr>
		</table>
		
		<div class="sidebar_line">
			<div class="sidebar_txt">
				<div class="title-margin"><a class="menu" href="#">Menu:</a></div>
			</div>
			<div class="height4"></div>
		</div>
		<div class="post_separator"> <hr /></div>
		<div class="clear style-list">
			<ul>
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
				<?php //wp_list_categories('orderby=name&title_li='); ?>
				<li class="cat-item"><br /></li>
				<li class="cat-item"><a href="#">Portfolio:</a></li> 
				<li class="cat-item"><a href="http://portfolio.ptkdev.it/">&raquo; Chi Sono</a></li> 
				<li class="cat-item"><a href="http://portfolio.ptkdev.it/openftp/">&raquo; OpenFTP</a></li> 
				<li class="cat-item"><a href="http://portfolio.ptkdev.it/contatti/">&raquo; Contatti</a> (<a href="http://portfolio.ptkdev.it/vcard/">vCard</a>)</li> 
			</ul><br />
		</div>
	<div class="clear"></div>
	</div>
