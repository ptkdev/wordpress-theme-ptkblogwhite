<?php 
/*
 * PTKDevPortfolio (Wordpress Theme)
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
			</div><br />
			<?php if(is_single()) { ?>
				<div id="comments"></div>
			<?php } ?>
			<!-- Tabella per Fix indenseDebate del layout -->
			<table class="comments">
				<tr>
					<td><?php //comments_template(); ?> </td>
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
				<li class="cat-item"><a href="#">Portfolio:</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">&raquo; Home Page</a></li> 
					<li class="cat-item"><a href="http://www.ptkdev.it/">&raquo; Blog</a></li> 
					<li class="cat-item"><a href="http://github.com/ptkdev">&raquo; GitHub</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/openftp/">&raquo; OpenFTP</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/hobby/">&raquo; Hobby</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/capacita-e-competenze/">&raquo; Capacità e Competenze</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/esperienze-professionali/">&raquo; Esperienze Professionali</a></li> 
					<li class="cat-item"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/contatti/">&raquo; Contatti</a> (<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/vcard/">vCard</a>)</li> 
					<li class="cat-item"><a href="http://cv.ptkdev.it/">&raquo; Curriculum Vitae</a></li> 
			</ul><br />
		</div>
	<div class="clear"></div>
	</div>
