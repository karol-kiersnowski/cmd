<?php
	if( isset($_GET['lang']) )
		$lang = $_GET['lang'];
	else
		$lang = "en";
	include $lang . '.php';

	if( isset($_GET['th']) ) 
		$th = $_GET['th'];
	else
		$th = "light";

	if ($th =="light")
		$notTheme = "blue";
	else
		$notTheme = "light";

	$cmd = "cmd:/> ";
	$suffix = "?lang=$lang&th=$th";
?>