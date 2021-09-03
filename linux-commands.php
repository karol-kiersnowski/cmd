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
			<td>TUI</td>
		</tr>
		<tr>
			<td>info</td>
			<td><?=$commandInformation?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI</td>
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
			<td>n/a</td>
		</tr>
		<tr>
			<td>&lt;command&gt; --help</td>
			<td><?=$commandInformation?></td>
			<td>n/a</td>
			<td>n/a</td>
			<td>n/a</td>
			<td>n/a</td>
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
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
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
			<td>CLI</td>
		</tr>
		<tr>
			<td>less</td>
			<td><?=$readingFiles?></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>TUI</td>
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
	</table>
	
</section>

<?php include "footer.php"; ?>