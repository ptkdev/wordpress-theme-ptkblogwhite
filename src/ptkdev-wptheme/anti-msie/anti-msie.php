<?php
/*
 * Anti-MSIE (jQuery Popup)
 *   Copyright (C) 2012  PTKDev
 *
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU Affero General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU Affero General Public License for more details.
 *
 *   You should have received a copy of the GNU Affero General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<!--[if IE]>
	<?php 
		include_once("jquery.php");
		$browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if(file_exists("anti-msie/po/$browser_lang.php"))
			include_once("anti-msie/po/$browser_lang.php"); 
		else
			include_once("anti-msie/po/en.php"); 
	?>
	<div id="anti-msie" data-role="popup" data-history="false" >
		<p>
			<div id="anti-msie_ie"></div>
			<div id="anti-msie_body"><?php echo $msie_lang; ?></div>
			<a href="<?php echo $msie_url1; ?>"><div id="anti-msie_browser1"></div></a>
			<a href="<?php echo $msie_url2; ?>"><div id="anti-msie_browser2"></div></a>
			<a href="<?php echo $msie_url3; ?>"><div id="anti-msie_browser3"></div></a>
		
		</p>
	</div>
	<script type="text/javascript" language="JavaScript">
		$("#anti-msie").css("width", "300px");
		$("#anti-msie").css("height", "480px");
		$(":jqmData(role='page'):last").on("pageshow", function(event) {
		  $("#anti-msie", $(this)).popup("open");
		});
	</script>
<![endif]-->
