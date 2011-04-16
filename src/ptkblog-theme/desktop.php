	<div id="content">	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="sidebar_txt">
				&nbsp;&nbsp;<a class="menu" href="<?php the_permalink() ?>"><?php the_title(); ?></a>&nbsp;&nbsp;
			</div>
			<div class="sid_line"></div>
			<?php the_content(); ?>
			<div class="content_small clear_left">
			<?php if(!is_page()) { ?>
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
		<div class="clear"></div>
	</div>
</div>
