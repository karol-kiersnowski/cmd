<nav>
	<hr>
<<<<<<< HEAD
	<h2><a href="index.php<?=$suffix?>"><i class="fa fa-home fa-fw"></i> <?=$home?></a></h2>
=======
	<h2><a href="index.php<?=$suffix?>" onclick="changeMainMenu()"><i class="fa fa-home fa-fw"></i> <?=$home?></a></h2>
>>>>>>> 2ff6a09712c7ee4bff906a78ef522297b1fde0a3
	<hr>
	<ul>
		<li><a href="how-to.php<?=$suffix?>"><i class="far fa-lightbulb fa-fw"></i> <?=$howTo?></a></li>
		<li><a href="screenshots-txt.php<?=$suffix?>"><i class="fa fa-terminal fa-fw"></i> <?=$textScreenshots?></a></li>
		<li><a href="screenshots-img.php<?=$suffix?>"><i class="far fa-image fa-fw"></i> <?=$imageScreenshots?></a></li>
		<li><a href="links.php<?=$suffix?>"><i class="fa fa-link fa-fw"></i> <?=$links?></a></li>
		<li><a href="guest-book.php<?=$suffix?>"><i class="fa fa-address-book fa-fw"></i> <?=$guestBook?></a></li>
		<li><a href="about.php<?=$suffix?>"><i class="fa fa-info-circle fa-fw"></i> <?=$about?></a></li>
	</ul>
	<hr>
<<<<<<< HEAD
	<h2><a href="linux.php<?=$suffix?>"><i class="fab fa-linux fa-fw"></i> linux</a></h2>
	<hr>
	<h2><a href="win-dos.php<?=$suffix?>"><i class="fab fa-windows fa-fw"></i> win cmd / dos</a></h2>
=======
	<h2><a href="linux.php<?=$suffix?>" onclick="changeLinuxMenu()"><i class="fab fa-linux fa-fw"></i> linux</a></h2>
	<hr>
	<h2><a href="win-dos.php<?=$suffix?>" onclick="changeWinDosMenu()"><i class="fab fa-windows fa-fw"></i> win cmd / dos</a></h2>
>>>>>>> 2ff6a09712c7ee4bff906a78ef522297b1fde0a3
	<hr>
</nav>
<main onclick="hideMenuByClickOutsideIt()">