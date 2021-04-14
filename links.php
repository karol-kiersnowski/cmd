<?php
	include "sys.php";
	$title = $cmd . $links;
	include "header.php";
	include "nav-main.php";
	include "nav-dropdowns.php";
?>

<h2><i class="fa fa-link"></i> <?=$links?></h2>
<hr>
<section id="links">
	<h3>where to get ...?</h3>
	<div class="card-container col-25">
		<div class="card-content padding-5">
			<a target="_blank" href="https://www.linuxmint.com">
				<div>
					<img alt="Linux Mint" src="img/logo/linux-mint.png"/>
					<div class="card-caption">
						<h3>Linux Mint</h3>
						<p>distro of GNU Linux</p>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a target="_blank" href="https://ubuntu.com/download/desktop">
				<div>
					<img alt="Ubuntu" src="img/logo/ubuntu.png"/>
					<div class="card-caption">
						<h3>Ubuntu</h3>
						<p>distro of GNU Linux</p>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a target="_blank" href="https://www.debian.org">
				<div>
					<img alt="Debian" src="img/logo/debian.png"/>
					<div class="card-caption">
						<h3>Debian</h3>
						<p>distro of GNU Linux</p>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a target="_blank" href="https://www.microsoft.com/en-us/software-download/windows10ISO">
				<div>
					<img alt="Windows 10" src="img/logo/windows10.png"/>
					<div class="card-caption">
						<h3>Windows 10</h3>
						<p>the most popular PC OS</p>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content">
			<a target="_blank" href="https://www.dosbox.com">
				<div>
					<img alt="DOSBox" src="img/logo/dosbox.png"/>
					<div class="card-caption">
						<h3>DOSBox</h3>
						<p>x86 PC emulator with DOS</p>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a target="_blank" href="https://www.freedos.org">
				<div>
					<img alt="FreeDOS" src="img/logo/freedos.png"/>
					<div class="card-caption">
						<h3>FreeDOS</h3>
						<p>open-source OS compatible with MS-DOS</p>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a target="_blank" href="https://github.com/microsoft/MS-DOS">
				<div>
					<img alt="MS-DOS" src="img/logo/msdos.png"/>
					<div class="card-caption">
						<h3>MS-DOS 1.25 & 2.0</h3>
						<p>OS for x86 PC</p>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a target="_blank" href="https://www.gog.com">
				<div>
					<img alt="GOG" src="img/logo/gog.png"/>
					<div class="card-caption">
						<h3>GOG.com</h3>
						<p>DOS games</p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="clear"></div>
	<!--<ul>
		<li><a target="_blank" href="https://ubuntu.com/download/desktop">Ubuntu</a></li>
		<li><a target="_blank" href="https://www.linuxmint.com/download.php">Linux Mint</a></li>
		<li><a target="_blank" href="https://www.microsoft.com/en-us/software-download/windows10ISO">Windows 10</a></li>
		<li><a target="_blank" href="https://www.dosbox.com">DOSBox</a></li>
		<li><a target="_blank" href="https://www.freedos.org/download">FreeDOS</a></li>
		<li><a target="_blank" href="https://github.com/microsoft/MS-DOS">MS-DOS 1.25 & 2.0</a></li>
	</ul>-->
</section>

<?php include "footer.php"; ?>
