<?php
	include "sys.php";
	$title = $cmd . $download;
	include "header.php";
	include "nav-main.php";
	include "nav-dropdowns.php";
?>

<h2><i class="fa fa-download"></i> <?=$download?></h2>
<hr>
<section id="links">
	<h3>files to download</h3>
	<table class="sortable" id="files-to-download">
		<tr>
			<th onclick="sortTable(0, this)">name</th>
			<th onclick="sortTable(1, this)">category</i></th>
			<th onclick="sortTable(2, this)">version</th>
			<th onclick="sortTable(3, this)">license</th>
			<th onclick="sortTable(4, this)">date</th>
			<th onclick="sortTable(4, this)">source</th>
		</tr>
		<tr>
			<td><a href="download/Linux 0.01.7z">Linux Kernel</a></td>
			<td><?=$operatingSystem?></td>
			<td>0.0.1</td>
			<td>GNU GPL</td>
			<td>1991</td>
			<td><a target="_blank" href="https://winworldpc.com/product/linux-kernel/0x">WinWorld</a></td>
		</tr>
		<tr>
			<td><a href="download/MS-DOS.zip">MS-DOS / PC-DOS</a></td>
			<td><?=$operatingSystem?></td>
			<td>1.25</td>
			<td>MIT</td>
			<td>1982 (2014)</td>
			<td><a target="_blank" href="https://github.com/microsoft/MS-DOS">GitHub</a></td>
		</tr>
		<tr>
			<td><a href="download/MS-DOS.zip">MS-DOS / PC-DOS</a></td>
			<td><?=$operatingSystem?></td>
			<td>2.0</td>
			<td>MIT</td>
			<td>1983 (2014)</td>
			<td><a target="_blank" href="https://github.com/microsoft/MS-DOS">GitHub</a></td>
		</tr>
		<tr>
			<td>DOS Navigator</td>
			<td><?=$fileManager?></td>
			<td>2.14</td>
			<td>OpenSource</td>
			<td>2012</td>
			<td><a target="_blank" href="http://www.ibiblio.org/pub/micro/pc-stuff/freedos/files/repositories/1.3/pkg-html/dn2.html">ibiblio</a> <a target="_blank" href="http://www.dnosp.com">DNOSP</a></td>
		</tr>
		<tr>
			<td>DOS Navigator</td>
			<td><?=$fileManager?></td>
			<td>1.51</td>
			<td>MIT</td>
			<td>1999</td>
			<td><a target="_blank" href="http://www.ibiblio.org/pub/micro/pc-stuff/freedos/files/repositories/1.3/pkg-html/dn2.html">ibiblio</a> <a target="_blank" href="http://www.dnosp.com">DNOSP</a></td>
		</tr>
		<tr>
			<td>mks_vir</td>
			<td><?=$antivirus?></td>
			<td>?</td>
			<td>Freeware - demo</td>
			<td>199x</td>
			<td>-</td>
		</tr>
	</table>
</section>

<?php include "footer.php"; ?>
