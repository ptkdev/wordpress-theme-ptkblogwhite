<!--[if IE]>
<link rel="stylesheet" href="<?php echo $antimsie_path; ?>anti-msie/css/anti-msie.css" />
<script type="text/javascript" src="<?php echo $antimsie_path; ?>anti-msie/js/anti-msie.js"></script>
<div id="anti-msie_popup">
	<?php 
		$browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if(file_exists("po/$browser_lang.php"))
			include_once("po/$browser_lang.php"); 
		else
			include_once("po/en.php"); 
	?>
	<div id="anti-msie">
		<div id="anti-msie_ie"></div>
		<div id="anti-msie_body"><?php echo $msie_lang; ?></div>
		<a href="<?php echo $msie_url1; ?>"><div id="anti-msie_browser1"></div></a>
		<a href="<?php echo $msie_url2; ?>"><div id="anti-msie_browser2"></div></a>
		<a href="<?php echo $msie_url3; ?>"><div id="anti-msie_browser3"></div></a>
	</div>
</div>
<![endif]-->
