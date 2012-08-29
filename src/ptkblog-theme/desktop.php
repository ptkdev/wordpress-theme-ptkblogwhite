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
			<div class="sidebar_txt">
				<div class="title-margin"><a class="menu" href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
			</div>
			<div class="sid_line"></div>
			<?php the_content(); ?>
			<div class="content_tags clear_left">
			<?php if(!is_page()) { ?>
			<?php if(is_single()) { ?>
			<table>
				<tr>
				<td><div class="g-plusone" data-size="medium" data-href="<?php the_permalink() ?>"></div>
					  <script type="text/javascript">
					  window.___gcfg = {lang: 'it'};

					  (function() {
						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						po.src = 'https://apis.google.com/js/plusone.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>
				</td>
				<td>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="PTKDev" data-lang="it">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</td>
				<td><div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div></td>
				</tr>
			</table><br />
			<?php } ?>
				<b>Tags:</b> <?php the_tags(""," &bullet; "," "); ?><br /><br />
			<?php } ?>
				<br /><div class="author">Scritto il <?php the_time('j/m/Y'); ?> da: <a class="author" href="<?php the_author_url(); ?>"><?php the_author_nickname(); ?></a> | <a class="author" href="<?php the_permalink() ?>#comments">Commenta</a></div>
			
			</div><br /> 
			<?php if(is_single()) { ?>
				<div id="comments"></div>
			<?php } ?>
			<!-- Tabella per Fix indenseDebate del layout -->
			<table class="comments">
				<tr>
					<td class="comments"><?php comments_template(); ?> </td>
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
		<div class="clear"></div>
	</div>
</div>
