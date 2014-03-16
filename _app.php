<?php

$config = array(
	'api' => 'http://ip-193-187-64-122.e24cloud.com'
);

function api($method)
{
	global $config; 
	
	$url = $config['api'] . $method;
	$result = file_get_contents($url);
	return json_decode($result, 1);
}