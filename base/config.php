<?php
// First configuration
function return_website_path()
	{
	if (getenv("REMOTE_ADDR") == '127.0.0.1')
		{ 
			return "http://localhost/cherryCMS/";  
		}
	else 
		{	
			return "https://www.yourwebsite.com/"; 
		}
	}

?>