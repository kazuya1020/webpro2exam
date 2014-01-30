<?php
	require_once 'dispatcher.php';
	require_once 'util.php';
	$dispatcher=new Dispatcher();
	IncludePathSetting($dispatcher);
	$dispatcher->setPramlevel(0);
	$dispatcher->dispatch();
?>