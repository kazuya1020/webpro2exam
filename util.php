<?php

function IncludePathSetting($dispatcher){
	$path = 'C://xampp/htdocs/webpro2exam/';
	$dispatcher->setSystemRoot($path);
	set_include_path(get_include_path().PATH_SEPARATOR.$path);
}