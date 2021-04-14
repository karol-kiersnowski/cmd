<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/theme-<?=$th?>.css"/>
	<link rel="stylesheet" href="css/all.css"><!--Font Awesome v.5.12.0-->
	<script defer src="script.js"></script>

	<title><?=$title?></title>
	<meta name="description" content="Let's learn the Command-Line Interface! Learn commands from the GNU Linux, Windows command prompt, MS-DOS prompt and PowerShell"/>
	<meta name="keywords" content="cmd_site, cmd, 
	console, terminal, shell, interface, interpreter, prompt,
	cli, command, command line, command interface, command interpreter, command-line interface, command line interface, command-line interpreter, command line interpreter,
	bash, command prompt, ms-dos prompt, dos prompt, command.com, freecom.com, cmd.exe, powershell,
	gnu linux, gnu, linux, windows, dos, ms-dos, pc-dos, freedos, dosbox,
	computer, pc, personal computer, x86,
	konsola, powłoka, interfejs, tryb ms-dos,
	komenda, polecenie, wiersz poleceń, wiersz polecenia, interfejs poleceń, interpreter poleceń, interfejs wiersza poleceń, interpreter wiersza poleceń,
	komputer, komputer osobisty"/>
	<meta name="author" content="Karol Kiersnowski"/>
</head>
<body onscroll="markAnchor()">
	<div class="wrapper">
		<header>
			<h1>C:\&gt;<a href="index.html">cmd-line.com</a></h1>
			<p class="mobile-invisible">
<?php if ($lang == "en") { ?>
				"Let's learn the Command-Line Interface!"
<?php } else { ?>
				"Zacznijmy naukę wiersza poleceń!"
<?php } ?>
			</p>
		</header>
	</div>
	<nav>
		<div id="nav-content">
			<h2 class="float-left" style="width: 40px; height: 40px;">
				<a id="menu" title="Menu" onclick="switchMenu()">
					<i class="fa fa-bars fa-fw"></i>
				</a>
