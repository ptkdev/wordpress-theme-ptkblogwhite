<?php 
/*
 * PTKDev Blog (Wordpress Theme)
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
	<div class="footer-push"></div>
</div>

	<div id="footer_line">
		<div class="footer_line"></div>
	</div>

	<div id="footer">
		<div class="footer_font1">| <a href="http://www.ptkweb.it/">PatrykWeb</a> | <a href="<?php echo site_url(); ?>/disclaimer.txt">Disclaimer</a> | <a href="<?php echo site_url(); ?>/privacy.txt">Privacy</a> | <a href="<?php echo site_url(); ?>/license.txt">License</a> |</div>
		<div class="footer_font2">Patryk Rzucidlo <?php if($HTTPID == 1){ echo "Portfolio"; }else{ echo "Blog"; }?> (Mobile) ~ v0.9.1</div>
		<div class="footer_font3">2010 ~ <?php echo date('Y')+1;?></div><br />
	</div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?php if($HTTPID == 1){ echo "UA-35915665-1"; }else{ echo "UA-20028477-1"; }?>']);
	  _gaq.push(['_setDomainName', '<?php if($HTTPID == 1){ echo "portfolio.ptkdev.it"; }else{ echo "www.ptkdev.it"; }?>']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<?php wp_footer(); ?>
	
</body>
</html>
