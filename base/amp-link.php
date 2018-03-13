<?php
	// set AMP version if you have set the url
	if ((isset($page[$current_page]['ampurl'][$current_lang])) and ($page[$current_page]['ampurl'][$current_lang] != ''))
		{
?>
	<link rel="amphtml" href="<?php echo return_website_path().$page[$current_page]['ampurl'][$current_lang]; ?>" />
<?php
		}
?>