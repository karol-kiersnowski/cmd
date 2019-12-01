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
	<meta name="keywords" content="cmd.sh,cmd_site,cmd,command,command-line interface,console,terminal,linux,bash,dos,windows,wiersz polecenia,konsola"/>
	<meta name="description" content="Learn commands from the GNU Linux and Windows"/>
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
				<li><a href="windows.php<?=$suffix?>"><i class="fab fa-windows"></i> <span>windows cmd</span></a></li>
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
	<nav>
		<hr style="margin-top: 0">
		<h2><a href="index.php<?=$suffix?>"><i class="fa fa-home fa-fw"></i> <?=$home?></a></h2>
		<hr>
		<ul>
			<li><a href="how-to.php<?=$suffix?>"><i class="far fa-lightbulb fa-fw"></i> <?=$howTo?></a></li>
			<li><a href="guest-book.php<?=$suffix?>"><i class="fa fa-address-book fa-fw"></i> <?=$guestBook?></a></li>
			<li><a href="about.php<?=$suffix?>"><i class="fa fa-info-circle fa-fw"></i> <?=$about?></a></li>
		</ul>

		<hr>
		<h2><a href="linux.php<?=$suffix?>"><i class="fab fa-linux fa-fw"></i> linux</a></h2>
		<hr>
		<ul>
			<li><a href="linux.php<?=$suffix?>#introduction"><i class="far fa-play-circle fa-fw"></i> <?=$introduction?></a></li>
			<li><a href="linux.php<?=$suffix?>#keyboard-shortcuts"><i class="far fa-keyboard fa-fw"></i> <?=$keyboardShortcuts?></a></li>
			<li><a href="linux.php<?=$suffix?>#disks-partitions"><i class="far fa-hdd fa-fw"></i> <?=$disksPartitions?></a></li>
			<li><a href="linux.php<?=$suffix?>#directory-structure"><i class="fas fa-sitemap fa-fw"></i> <?=$directoryStructure?></a></li>
			<li><a href="linux.php<?=$suffix?>#access-rights"><i class="fas fa-unlock-alt fa-fw"></i> <?=$accessRights?></a></li>
			<li><a href="linux.php<?=$suffix?>#pipelines-redirections"><i class="fas fa-directions fa-fw"></i> <?=$pipelinesRedirections?></a></li>
			<li><a href="linux.php<?=$suffix?>#commands"><i class="fa fa-question fa-fw"></i> <?=$commands?></a></li>
			<li><a href="linux.php<?=$suffix?>#browsing-directories"><i class="far fa-folder-open fa-fw"></i> <?=$browsingDirectories?></a></li>
			<li><a href="linux.php<?=$suffix?>#folders-files-manipulation"><i class="far fa-copy fa-fw"></i> <?=$foldersFilesManipulation?></a></li>
			<li><a href="linux.php<?=$suffix?>#reading-files"><i class="far fa-file-alt fa-fw"></i> <?=$readingFiles?></a></li>
			<li><a href="linux.php<?=$suffix?>#console"><i class="fa fa-terminal fa-fw"></i> <?=$console?></a></li>
			<li><a href="linux.php<?=$suffix?>#power-session"><i class="fa fa-power-off fa-fw"></i> <?=$powerSession?></a></li>
			<li><a href="linux.php<?=$suffix?>#file-system"><i class="far fa-hdd fa-fw"></i> <?=$fileSystem?></a></li>
			<li><a href="linux.php<?=$suffix?>#admin"><i class="fa fa-shield-alt fa-fw"></i> <?=$admin?></a></li>
			<li><a href="linux.php<?=$suffix?>#users"><i class="far fa-user fa-fw"></i> <?=$users?></a></li>
			<li><a href="linux.php<?=$suffix?>#users-admin"><i class="fa fa-user-shield fa-fw"></i> <?=$usersAdmin?></a></li>
			<li><a href="linux.php<?=$suffix?>#statistics"><i class="fa fa-chart-bar fa-fw"></i> <?=$statistics?></a></li>
			<li><a href="linux.php<?=$suffix?>#system"><i class="fa fa-laptop fa-fw"></i> system</a></li>
			<li><a href="linux.php<?=$suffix?>#hardware"><i class="fa fa-microchip fa-fw"></i> <?=$hardware?></a></li>
			<li><a href="linux.php<?=$suffix?>#network"><i class="fa fa-network-wired fa-fw"></i> <?=$network?></a></li>
			<li><a href="linux.php<?=$suffix?>#wireless"><i class="fa fa-wifi fa-fw"></i> <?=$wireless?></a></li>
			<li><a href="linux.php<?=$suffix?>#processes"><i class="fa fa-list-ol fa-fw"></i> <?=$processes?></a></li>
			<li><a href="linux.php<?=$suffix?>#package-managers"><i class="fa fa-cube fa-fw"></i> <?=$packageManagers?></a></li>
			<li><a href="linux.php<?=$suffix?>#search"><i class="fa fa-search fa-fw"></i> <?=$search?></a></li>
			<li><a href="linux.php<?=$suffix?>#text-manipulation"><i class="fa fa-search fa-fw"></i> <?=$textManipulation?></a></li>
			<li><a href="linux.php<?=$suffix?>#archive"><i class="far fa-file-archive fa-fw"></i> <?=$archive?></a></li>
			<li><a href="linux.php<?=$suffix?>#compilation"><i class="far fa-file-code fa-fw"></i> <?=$compilation?></a></li>
			<li><a href="linux.php<?=$suffix?>#text-editors"><i class="fa fa-align-left fa-fw"></i> <?=$textEditors?></a></li>
			<li><a href="linux.php<?=$suffix?>#useful-programs"><i class="far fa-window-maximize fa-fw"></i> <?=$usefulPrograms?></a></li>
			<li><a href="linux.php<?=$suffix?>#ncurses-programs"><i class="far fa-window-maximize fa-fw"></i> <?=$ncursesPrograms?></a></li>
			<li><a href="linux.php<?=$suffix?>#x-server"><i class="fa fa-desktop fa-fw"></i> <?=$xServer?></a></li>
			<li><a href="linux.php<?=$suffix?>#bash-scripts"><i class="fa fa-code fa-fw"></i> <?=$bashScripts?></a></li>
			<li><a href="linux.php<?=$suffix?>#ssh"><i class="fas fa-tty fa-fw"></i> telnet & ssh</a></li>
			<li><a href="linux.php<?=$suffix?>#wine"><i class="fas fa-wine-glass-alt fa-fw"></i> wine</a></li>
			<li><a href="linux.php<?=$suffix?>#xampp"><i class="fab fa-php fa-fw"></i> xampp</a></li>
			<li><a href="linux.php<?=$suffix?>#git"><i class="fab fa-git-alt fa-fw"></i> git</a></li>
		</ul>

		<hr>
		<h2><a href="windows.php<?=$suffix?>"><i class="fab fa-windows fa-fw"></i> windows cmd</a></h2>
		<hr>
		<ul>
			<li><a href="windows.php<?=$suffix?>"><i class="fa fa-question fa-fw"></i> <?=$commands?></a></li>
			<li><a href="windows.php<?=$suffix?>"><i class="far fa-folder-open fa-fw"></i> <?=$browsingDirectories?></a></li>
			<li><a href="windows.php<?=$suffix?>"><i class="far fa-copy fa-fw"></i> <?=$foldersFilesManipulation?></a></li>
			<li><a href="windows.php<?=$suffix?>"><i class="fa fa-terminal fa-fw"></i> <?=$console?></a></li>
			<li><a href="windows.php<?=$suffix?>"><i class="fa fa-globe fa-fw"></i> <?=$network?></a></li>
			<li><a href="windows.php<?=$suffix?>"><i class="fa fa-align-left fa-fw"></i> <?=$textEditors?></a>
			<li><a href="windows.php<?=$suffix?>"><i class="fa fa-save fa-fw"></i> <?=$batchFiles?></a></li>
			<li><a href="windows.php<?=$suffix?>"><i class="fa fa-save fa-fw"></i> dosbox></a></li>
		</ul>
	</nav>
	<main onclick="hideMenuByClickOutsideIt()">
