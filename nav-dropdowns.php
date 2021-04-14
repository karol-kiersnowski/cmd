			</h2>
			<h2 class="float-left focusable" tabindex="0">
				<a>
					<i class="fa fa-home"></i>
					<span class="mobile-invisible"><?=$mainMenu?></span>
				</a>
				<ul class="dropdown-list" id="main-menu-list">
					<li>
						<a href="index.php<?=$suffix?>"><i class="fa fa-home fa-fw"></i> <?=$home?></a>
					</li>
					<li><a href="screenshots-txt.php<?=$suffix?>"><i class="fa fa-terminal fa-fw"></i> <?=$textScreenshots?></a></li>
					<li><a href="screenshots-img.php<?=$suffix?>"><i class="far fa-image fa-fw"></i> <?=$imageScreenshots?></a></li>
					<li><a href="links.php<?=$suffix?>"><i class="fa fa-link fa-fw"></i> <?=$links?></a></li>
					<li><a href="guestbook.php<?=$suffix?>"><i class="fa fa-address-book fa-fw"></i> <?=$guestbook?></a></li>
					<li><a href="about.php<?=$suffix?>"><i class="fa fa-info-circle fa-fw"></i> <?=$about?></a></li>
				</ul>
			</h2>
			<h2 class="float-left">
				<a href="how-to.php<?=$suffix?>">
					<i class="far fa-lightbulb"></i>
					<span class="mobile-invisible"><?=$howTo?></span>
				</a>
			</h2>
			<h2 class="float-left">
				<a href="linux.php<?=$suffix?>">
					<i class="fab fa-linux"></i>
					<span class="mobile-invisible">linux</span>
				</a>
			</h2>
			<h2 class="float-left">
				<a href="win-dos.php<?=$suffix?>">
					<i class="fab fa-windows"></i>
					<span class="mobile-invisible">win cmd / DOS</span>
				</a>
			</h2>
			<h2 class="float-left">
				<a href="powershell.php<?=$suffix?>">
					<i class="fa fa-terminal"></i>
					<span class="mobile-invisible">PowerShell</span>
				</a>
			</h2>
			<h2 class="float-left focusable" tabindex="0">
				<a>
					<i class="fa fa-adjust"></i>
					<span class="mobile-invisible"><?=$theme?></span>
				</a>
				<ul class="dropdown-list" id="theme-list">
					<li>
						<a href="?lang=<?=$lang?>&theme=light">
							<div style="background-color: #eee;"></div>
							<span><?=$typescriptLight?></span>
						</a>
					</li>
					<li>
						<a href="?lang=<?=$lang?>&theme=dark">
							<div style="background-color: #000; border-color: #fff;"></div>
							<span><?=$terminalDark?></span>
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
				</ul>
			</h2>
			<h2 class="float-left focusable" tabindex="0">
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
			</h2>
			<h2 class="float-right" onclick="switchScreenMode(this)">
				<a>
					<i class="fa fa-expand-alt"></i>
				</a>
			</h2>
			<div class="clear"></div>
		</div>
	</nav>
	<div class="wrapper">
		<main onclick="hideMenuByClickOutsideIt()">
