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
	<meta name="description" content="Learn commands from the GNU Linux, Windows command prompt, MS-DOS prompt and PowerShell"/>
	<meta name="keywords" content="cmd.sh, cmd_site, cmd, 
	command-line interface, cli, console, terminal, shell, interpreter,
	bash, command prompt, cmd.exe, ms-dos prompt, command.com, powershell,
	gnu linux, linux, windows, dos, ms-dos, pc-dos, freedos, dosbox,
	wiersz poleceń, konsola, powłoka, tryb ms-dos"/>
</head>
<body onscroll="markAnchor()">
	<header>
		<div id="header-content">
			<h1>
				<a id="menu" href="javascript:void(0);" title="Menu" onclick="changeMenu()">
					<i class="fa fa-list-ul fa-fw"></i>
				</a>
			</h1>
			<h1>
				<a href="index.php">
					<span style="font-family: 'Perfect DOS VGA 437'">&gt;</span>_cmd
				</a>
			</h1>
			<!-- <i class="fa fa-terminal"></i> -->
			<ul>
				<li>
					<a href="how-to.php<?=$suffix?>">
						<i class="far fa-lightbulb"></i>
						<span>how to...</span>
					</a>
				</li>
				<li>
					<a href="linux.php<?=$suffix?>">
						<i class="fab fa-linux"></i>
						<span>linux</span>
					</a>
				</li>
				<li>
					<a href="win-dos.php<?=$suffix?>">
						<i class="fab fa-windows"></i>
						<span>win cmd / DOS</span>
					</a>
				</li>
				<li>
					<a href="powershell.php<?=$suffix?>">
						<i class="fa fa-terminal"></i>
						<span>PowerShell</span>
					</a>
				</li>
				<li>
					<a href="theme.php<?=$suffix?>">
						<i class="fa fa-adjust"></i>
						<span><?=$theme?></span>
					</a>
				</li>
				<li>
					<?php if ($lang == "pl") { ?>
						<a href="?lang=en&th=<?=$th?>" title="English version">
							<img src="img/uk.png" alt="UK"/>
							<span>English version</span>
						</a>
					<?php } else { ?>
						<a href="?lang=pl&th=<?=$th?>" title="wersja polska">
							<img src="img/polska.png" alt="Polska"/>
							<span>wersja polska</span>
						</a>
					<?php } ?>
				</li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
		</div>
	</header>
	<div id="wrapper">
