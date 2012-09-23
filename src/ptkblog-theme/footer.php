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

	<div id="footer_line">
		<div class="footer_line"></div>
	</div>

	<div id="footer">
		<div class="footer_font2">| <a href="http://www.ptkweb.it/">PatrykWeb</a> | <a href="http://www.ptkdev.it/">PTKDev</a> | <a href="http://it.twitcrusader.org/">TwitCrusader</a> | </div>
		<div class="footer_font1">Patryk Rzucidlo Blog ~ Version 0.8.2</div>
		<div class="footer_font2">2010 ~ <?php echo date('Y')+1;?></div><br />
	</div>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-20028477-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<a href="https://github.com/PTKDev/"><img style="position: absolute; top: 0; right: 0; border: 0; z-index: 5;" src="<?php bloginfo('template_url'); ?>/img/desktop/forkme_github.png" alt="Fork me on GitHub"></a>
	<?php wp_footer(); ?>
</body>
</html>
