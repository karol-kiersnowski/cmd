<?php
	if( isset($_GET['lang']) )
		$lang = $_GET['lang'];
	else
		$lang = "en";
	include $lang . '.php';

	if( isset($_GET['theme']) ) 
		$theme = $_GET['theme'];
	else
		$theme = "light";

	if ($theme =="light")
		$notTheme = "blue";
	else
		$notTheme = "light";

	$cmd = "cmd:/> ";
	$suffix = "?lang=$lang&theme=$theme";
?>