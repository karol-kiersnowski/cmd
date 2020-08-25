<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png"/>
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="theme-<?=$theme?>.css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Mono"/>
	<script src="https://kit.fontawesome.com/63535dd4e0.js"></script>
	<script defer src="script.js"></script>

	<title><?=$title?></title>
	<meta name="keywords" content="cmd.sh,cmd_site,cmd,command-line interface,command prompt,console,terminal,shell,interpreter,gnu linux,linux,bash,windows,dos,ms-dos,pc-dos,freedos,dosbox,wiersz poleceń,konsola,powłoka"/>
	<meta name="description" content="Learn commands from the GNU Linux, Windows and DOS"/>
</head>
<body onscroll="markAnchor()">
	<header>
		<div id="header-content">
			<h1>
				<a id="menu" href="javascript:void(0);" title="Menu" onclick="changeMenu()">
				<i class="fa fa-list-ul fa-fw"></i></a>
			</h1>
			<h1><a href="index.php"><i class="fa fa-terminal"></i>cmd.sh</a></h1>
			<ul>
				<li><a href="linux.php<?=$suffix?>"><i class="fab fa-linux"></i> <span>linux</span></a></li>
				<li><a href="win-dos.php<?=$suffix?>"><i class="fab fa-windows"></i> <span>windows cmd</span></a></li>
				<li><a href="powershell.php<?=$suffix?>"><i class="fa fa-terminal"></i> <span>PowerShell</span></a></li>
				<li>
					<a href="?lang=<?=$lang?>&theme=<?=$notTheme?>" title="Motyw"><i class="fa fa-adjust"></i></a>
				</li>
				<li>
					<?php if ($lang == "pl") { ?>
						<a href="?lang=en&theme=<?=$theme?>" title="English version">
							<img src="img/uk.png" alt="UK"/>
						</a>
					<?php } else { ?>
						<a href="?lang=pl&theme=<?=$theme?>" title="wersja polska">
							<img src="img/polska.png" alt="Polska"/>
						</a>
					<?php } ?>
				</li>
			</ul>
			<div style="clear: both"></div>
		</div>
	</header>
	<div id="wrapper">
