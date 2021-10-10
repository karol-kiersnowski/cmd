<?php
	$currentDirectory = "linux";
	$mainDirectory = "";
	include "sys.php";
	$title = $cmd . " linux / commands";
	include "header.php";
	include "nav-linux.php";
	include "nav-dropdowns.php";
?>

<h2><i class="fab fa-linux"></i> GNU Linux (BASH) [Debian-based distros]</h2>
<section>
	<h3>list of commands</h3>
	<p><em>CLI</em> - Command-Line Interface</p>
	<p><em>TUI</em> - Text-based User Interface</p>
	<p><em>GUI</em> - Graphical User Interface</p>

	<p><em>CLI+</em> - not TUI yet, but also not CLI</p>
	<p><em>TUI+</em> - TUI with mouse support</p>

	<p><em>GUI</em> requires display server running (<em>Xorg</em> or <em>Wayland</em>)</p>

	<table id="linux-commands">
		<tr>
			<th onclick="sortTable(0, this)">command</th>
			<th onclick="sortTable(1, this)">category <i class="fa fa-caret"></i></th>
			<th onclick="sortTable(2, this)">gnu-utils</th>
			<th onclick="sortTable(3, this)">Linux Mint 20.2<br><small>installed</small></th>
			<th onclick="sortTable(4, this)">Linux Mint 20.2<br><small>to download<br>via apt</small></th>
			<th onclick="sortTable(5, this)">interface</th>
		</tr>
		<tr>
			<td>whatis</td>
			<td><?=$commandInformation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>apropos</td>
			<td><?=$commandInformation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>man</td>
			<td><?=$commandInformation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI+</td>
		</tr>
		<tr>
			<td>info</td>
			<td><?=$commandInformation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI+</td>
		</tr>
		<tr>
			<td>tldr</td>
			<td><?=$commandInformation?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>&lt;command&gt; -h</td>
			<td><?=$commandInformation?></td>
			<td>n/a</td>
			<td>n/a</td>
			<td>n/a</td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>&lt;command&gt; --help</td>
			<td><?=$commandInformation?></td>
			<td>n/a</td>
			<td>n/a</td>
			<td>n/a</td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>pwd</td>
			<td><?=$browsingDirectories?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>ls</td>
			<td><?=$browsingDirectories?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>dir</td>
			<td><?=$browsingDirectories?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>cd</td>
			<td><?=$browsingDirectories?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>tree</td>
			<td><?=$browsingDirectories?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>cp</td>
			<td><?=$fileManipulation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>mv</td>
			<td><?=$fileManipulation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>rm</td>
			<td><?=$fileManipulation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>ln</td>
			<td><?=$fileManipulation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>touch</td>
			<td><?=$fileManipulation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>mkdir</td>
			<td><?=$fileManipulation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>rmdir</td>
			<td><?=$fileManipulation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>install</td>
			<td><?=$fileManipulation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>more</td>
			<td><?=$readingFiles?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI+</td>
		</tr>
		<tr>
			<td>less</td>
			<td><?=$readingFiles?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI+</td>
		</tr>
		<tr>
			<td>head</td>
			<td><?=$readingFiles?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>tail</td>
			<td><?=$readingFiles?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>ufw</td>
			<td><?=$network?></td>
			<td><i class="fa fa-question fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI</td>
		</tr>
		<tr>
			<td>gufw</td>
			<td><?=$network?></td>
			<td><i class="fa fa-question fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>GUI</td>
		</tr>
		<tr>
			<td>vim (vi)</td>
			<td><?=$textEditors?></td>
			<td><i class="fa fa-question fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>CLI+</td>
		</tr>
		<tr>
			<td>nano (pico)</td>
			<td><?=$textEditors?></td>
			<td><i class="fa fa-question fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI</td>
		</tr>
		<tr>
			<td>mcedit</td>
			<td><?=$textEditors?></td>
			<td><i class="fa fa-question fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI+</td>
		</tr>
		<tr>
			<td>sublime-text (subl)</td>
			<td><?=$textEditors?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>GUI</td>
		</tr>
		<tr>
			<td>mc</td>
			<td><?=$fileManagers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI+</td>
		</tr>
		<tr>
			<td>ranger</td>
			<td><?=$fileManagers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI</td>
		</tr>
		<tr>
			<td>filezilla</td>
			<td><?=$fileManagers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>GUI</td>
		</tr>
		<tr>
			<td>doublecmd</td>
			<td><?=$fileManagers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>GUI</td>
		</tr>
		<tr>
			<td>moc (mocp)</td>
			<td><?=$musicPlayers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI</td>
		</tr>
		<tr>
			<td>lynx</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI</td>
		</tr>
		<tr>
			<td>links</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI+</td>
		</tr>
		<tr>
			<td>links2</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI+</td>
		</tr>
		<tr>
			<td>xlinks2 (from package elinks2)</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>GUI</td>
		</tr>
		<tr>
			<td>elinks</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI+</td>
		</tr>
		<tr>
			<td>firefox</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>GUI</td>
		</tr>
		<tr>
			<td>chromium</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>GUI</td>
		</tr>
		<tr>
			<td>midori</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>GUI</td>
		</tr>
		<tr>
			<td>opera</td>
			<td><?=$webBrowsers?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>GUI</td>
		</tr>
	</table>
	
</section>

<?php include "footer.php"; ?>