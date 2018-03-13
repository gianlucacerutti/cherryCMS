<?php
	// Set link rel="alternate"
	$counter = 0;
	foreach ($page[$current_page]['url'] as $key_url_alt => $value_url_alt)
		{
?>
	<link rel="alternate" hreflang="<?php echo $key_url_alt; ?>" href="<?php echo return_website_path().$value_url_alt; ?>" />
<?php
		}
?>