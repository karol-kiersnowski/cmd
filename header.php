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
	<header id="horizontal">
		<div id="header-content">
			<div class="float-left">
				<h1>
					<a id="menu" title="Menu" onclick="changeMenu()">
						<i class="fa fa-bars fa-fw"></i>
					</a>
				</h1>
				<nav id="vertical">
					<h2><a href="index.php<?=$suffix?>"><i class="fa fa-home fa-fw"></i> <?=$home?></a></h2>
					<hr>
					<ul>
						<li><a href="screenshots-txt.php<?=$suffix?>"><i class="fa fa-terminal fa-fw"></i> <?=$textScreenshots?></a></li>
						<li><a href="screenshots-img.php<?=$suffix?>"><i class="far fa-image fa-fw"></i> <?=$imageScreenshots?></a></li>
						<li><a href="links.php<?=$suffix?>"><i class="fa fa-link fa-fw"></i> <?=$links?></a></li>
						<li><a href="guestbook.php<?=$suffix?>"><i class="fa fa-address-book fa-fw"></i> <?=$guestbook?></a></li>
						<li><a href="about.php<?=$suffix?>"><i class="fa fa-info-circle fa-fw"></i> <?=$about?></a></li>
					</ul>
					<hr>
					<h2><a href="how-to.php<?=$suffix?>"><i class="far fa-lightbulb fa-fw"></i> <?=$howTo?></a></h2>
					<hr>
					<h2><a href="linux.php<?=$suffix?>"><i class="fab fa-linux fa-fw"></i> linux</a></h2>
					<hr>
					<h2><a href="win-dos.php<?=$suffix?>"><i class="fab fa-windows fa-fw"></i> win cmd / DOS</a></h2>
					<hr>
					<h2><a href="powershell.php<?=$suffix?>"><i class="fa fa-terminal fa-fw"></i> PowerShell</a></h2>
					<hr>
				</nav>
			</div>
			<h1>
				<a href="index.php">
					<span style="font-family: 'Perfect DOS VGA 437'">&gt;</span>_cmd<span class="mobile-invisible">-line.com</span>
				</a>
			</h1>
			<!-- <i class="fa fa-terminal"></i> -->
			<ul>
				<li>
					<a href="how-to.php<?=$suffix?>">
						<i class="far fa-lightbulb"></i>
						<span class="mobile-invisible"><?=$howTo?></span>
					</a>
				</li><li>
					<a href="linux.php<?=$suffix?>">
						<i class="fab fa-linux"></i>
						<span class="mobile-invisible">linux</span>
					</a>
				</li><li>
					<a href="win-dos.php<?=$suffix?>">
						<i class="fab fa-windows"></i>
						<span class="mobile-invisible">win cmd / DOS</span>
					</a>
				</li><li>
					<a href="powershell.php<?=$suffix?>">
						<i class="fa fa-terminal"></i>
						<span class="mobile-invisible">PowerShell</span>
					</a>
				</li><li class="focusable" tabindex="0">
					<a>
						<i class="fa fa-adjust"></i>
						<span class="mobile-invisible"><?=$theme?></span>
					</a>
					<ul class="dropdown-list" id="theme-list">
						<li>
							<a href="?lang=<?=$lang?>&theme=light">
								<div style="background-color: #eee;"></div>
								<span><?=$modernLight?></span>
							</a>
						</li>
						<li>
							<a href="?lang=<?=$lang?>&theme=blue">
								<div style="background-color: #00a;"></div>
								<span><?=$dosBlueGray?></span>
							</a>
						</li>
						<li>
							<a href="?lang=<?=$lang?>&theme=gray">
								<div style="background-color: #aaa;"></div>
								<span><?=$dosGrayBlue?></span>
							</a>
						</li>
						<li>
							<a href="?lang=<?=$lang?>&theme=dark">
								<div style="background-color: #000; border-color: #fff;"></div>
								<span><?=$terminalDark?></span>
							</a>
						</li>
					</ul>
				</li><li class="focusable" tabindex="0">
					<a>
						<i class="fa fa-globe-americas"></i>
						<span class="mobile-invisible"><?=$language?></span>
					</a>
					<ul class="dropdown-list" id="language-list">
						<li>
							<a href="?lang=en&theme=<?=$th?>">
								<img src="img/uk.png" alt="UK"/>
								<span>English</span>
							</a>
						</li>
						<li>
							<a href="?lang=pl&theme=<?=$th?>">
								<img src="img/polska.png" alt="Polska"/>
								<span>polski</span>
							</a>
						</li>
					</ul>
				</li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
		</div>
	</header>
	<div id="wrapper">
