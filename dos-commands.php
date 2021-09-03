<?php
	$currentDirectory = "dos";
	$mainDirectory = "";
	include "sys.php";
	$title = $cmd . " dos / commands";
	include "header.php";
	include "nav-win-dos.php";
	include "nav-dropdowns.php";
?>

<h2>MS-DOS / PC-DOS & FreeDOS & DOSBox</h2>
<section>
	<h3>list of commands</h3>
	<p><em>Internal</em> commands are related to <em>COMMAND.COM</em> & don't need other files to work.</p>
	<p><em>External</em> commands require existing files to work.</p>

	<table class="sortable" id="dos-commands">
		<tr>
			<th onclick="sortTable(0, this)">command</th>
			<th onclick="sortTable(1, this)">category</i></th>
			<th onclick="sortTable(2, this)">MS-DOS<br>version</th>
			<th onclick="sortTable(3, this)">FreeDOS</th>
			<th onclick="sortTable(4, this)">DOSBox</th>
			<th onclick="sortTable(5, this)">type</th>
		</tr>
		<tr>
			<td>help</td>
			<td><?=$commandInformation?></td>
			<td>6.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>&lt;command&gt; /?</td>
			<td><?=$commandInformation?></td>
			<td>n/a</td>
			<td>n/a</td>
			<td>n/a</td>
			<td>n/a</td>
		</tr>
		<tr>
			<td>&lt;letter&gt;:</td>
			<td><?=$browsingDirectories?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>dir</td>
			<td><?=$browsingDirectories?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>cd / chdir</td>
			<td><?=$browsingDirectories?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>tree</td>
			<td><?=$browsingDirectories?></td>
			<td>3.2</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>copy</td>
			<td><?=$fileManipulation?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>diskcopy</td>
			<td><?=$fileManipulation?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>xcopy</td>
			<td><?=$fileManipulation?></td>
			<td>3.2</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>move</td>
			<td><?=$fileManipulation?></td>
			<td>6.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>ren</td>
			<td><?=$fileManipulation?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>del / erase</td>
			<td><?=$fileManipulation?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>deltree</td>
			<td><?=$fileManipulation?></td>
			<td>6.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>undelete</td>
			<td><?=$fileManipulation?></td>
			<td>5.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>md / mkdir</td>
			<td><?=$fileManipulation?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>rm / rmdir</td>
			<td><?=$fileManipulation?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>type</td>
			<td><?=$readingFiles?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>more</td>
			<td><?=$readingFiles?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>cls</td>
			<td><?=$console?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>prompt</td>
			<td><?=$console?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>mode</td>
			<td><?=$console?></td>
			<td>3.2</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>history</td>
			<td><?=$console?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>alias</td>
			<td><?=$console?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>exit</td>
			<td><?=$powerSession?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i><sup>[1]</sup></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>shutdown</td>
			<td><?=$powerSession?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>alias</td>
		</tr>
		<tr>
			<td>poweroff</td>
			<td><?=$powerSession?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>alias</td>
		</tr>
		<tr>
			<td>reset</td>
			<td><?=$powerSession?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>alias</td>
		</tr>
		<tr>
			<td>reboot</td>
			<td><?=$powerSession?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>alias</td>
		</tr>
		<tr>
			<td>ver</td>
			<td>system</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>date</td>
			<td>system</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i><sup>[2]</sup></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>time</td>
			<td>system</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i><sup>[2]</sup></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>set</td>
			<td>system</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>path</td>
			<td>system</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>attrib</td>
			<td><?=$fileSystem?></td>
			<td>3.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i><sup>[3]</sup></td>
			<td>external</td>
		</tr>
		<tr>
			<td>vol</td>
			<td><?=$fileSystem?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>format</td>
			<td><?=$fileSystem?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>fdisk</td>
			<td><?=$fileSystem?></td>
			<td>3.2</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>chkdsk</td>
			<td><?=$fileSystem?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>scandisk</td>
			<td><?=$fileSystem?></td>
			<td>6.2</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>mount</td>
			<td><?=$fileSystem?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>-</td>
		</tr>
		<tr>
			<td>imgmount</td>
			<td><?=$fileSystem?></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>-</td>
		</tr>
		<tr>
			<td>mem</td>
			<td><?=$memory?></td>
			<td>4.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>lh / loadhigh</td>
			<td><?=$memory?></td>
			<td>5.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>edlin</td>
			<td><?=$textEditors?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>edit</td>
			<td><?=$textEditors?></td>
			<td>5.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>pause</td>
			<td><?=$batchFiles?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>echo</td>
			<td><?=$batchFiles?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>rem</td>
			<td><?=$batchFiles?></td>
			<td>?</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>call</td>
			<td><?=$batchFiles?></td>
			<td>3.3</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>choice</td>
			<td><?=$batchFiles?></td>
			<td>6.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td>goto</td>
			<td><?=$batchFiles?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>:&lt;label&gt;</td>
			<td><?=$batchFiles?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>if</td>
			<td><?=$batchFiles?></td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>for</td>
			<td><?=$batchFiles?></td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
	</table>
	
</section>

<?php include "footer.php"; ?>