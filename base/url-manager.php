<?php
// What's the url?
$current_url 		= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$website_path_lenght 	= strlen(return_website_path());
$url 	  		= substr($current_url,$website_path_lenght);

// There are any variables?
$url_withvars 	= explode ( "?", $url);
$url 			= $url_withvars[0];

// If there is a slash I'll take it off
if (substr($url,-1,1) == '/')
	{ 
		$url = substr_replace($url, "", -1, 1);;
	}

// What's the page? And the lang?
$current_page = find_page_from_url($url,$page);
$current_lang = find_language_from_url($url,$page);
?>