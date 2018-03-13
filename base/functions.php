<?php

// Find page from url
function find_page_from_url($url,$pages_array)
	{
		foreach ($pages_array as $key => $val)
			{
				// what's the page?
				if (in_array("$url", $val['url'])) 
					{
						return $key;
					}
			}
	}

// Find language from url
function find_language_from_url($url,$pages_array)
	{
		foreach ($pages_array as $key => $val)
			{
				// in what language?
				foreach ($pages_array[$key]['url'] as $key2 => $val2)
					{
						if ($url === $val2)
							{
								return $key2;
							}
					}
			}
	}

?>