<nav>
	<hr>
	<h2><a href="index.php<?=$suffix?>" onclick="changeMainMenu()"><i class="fa fa-home fa-fw"></i> <?=$home?></a></h2>
	<hr>
	<h2><a href="linux.php<?=$suffix?>" onclick="changeLinuxMenu()"><i class="fab fa-linux fa-fw"></i> linux</a></h2>
	<hr>
	<h2><a href="win-dos.php<?=$suffix?>" onclick="changeWinDosMenu()"><i class="fab fa-windows fa-fw"></i> win cmd / dos</a></h2>
	<hr>
	<ul>
		<li><a href="win-dos.php<?=$suffix?>#introduction"><i class="far fa-play-circle fa-fw"></i> <?=$introduction?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#keyboard-shortcuts"><i class="far fa-keyboard fa-fw"></i> <?=$keyboardShortcuts?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#partitions-drives"><i class="far fa-hdd fa-fw"></i> <?=$partitionsDrives?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#mounting-partitions-drives"><i class="fa fa-eject fa-fw"></i> DOSBox - <?=$mounting?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#directory-structure"><i class="fas fa-sitemap fa-fw"></i> <?=$directoryStructure?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#commands"><i class="fa fa-question fa-fw"></i> <?=$commands?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#browsing-directories"><i class="far fa-folder-open fa-fw"></i> <?=$browsingDirectories?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#folders-files-manipulation"><i class="far fa-copy fa-fw"></i> <?=$foldersFilesManipulation?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#reading-files"><i class="far fa-file-alt fa-fw"></i> <?=$readingFiles?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#console"><i class="fa fa-terminal fa-fw"></i> <?=$console?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#powerSession"><i class="fa fa-power-off fa-fw"></i> <?=$powerSession?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#file-system"><i class="far fa-hdd fa-fw"></i> <?=$fileSystem?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#system"><i class="fa fa-laptop fa-fw"></i> system</a></li>
		<li><a href="win-dos.php<?=$suffix?>#network"><i class="fa fa-globe fa-fw"></i> <?=$network?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#text-editors"><i class="fa fa-align-left fa-fw"></i> <?=$textEditors?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#file-managers"><i class="far fa-copy fa-fw"></i> <?=$fileManagers?></a></li>
		<li><a href="win-dos.php<?=$suffix?>#batch-files"><i class="fa fa-code fa-fw"></i> <?=$batchFiles?></a></li>
	</ul>
</nav>
<main onclick="hideMenuByClickOutsideIt()">
