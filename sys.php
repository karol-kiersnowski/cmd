<?php
	if( isset($_GET['lang']) )
		$lang = $_GET['lang'];
	else
		$lang = "en";
	include $lang . '.php';

	if( isset($_GET['theme']) ) 
		$theme = $_GET['theme'];
	else
		$theme = "bright";

	if ($theme =="bright")
		$notTheme = "dark";
	else
		$notTheme = "bright";

	$cmd = "cmd:/> ";
	$suffix = "?lang=$lang&theme=$theme";
?>