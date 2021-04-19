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
	<p><em>Internal</em> commands are related to <em>COMMAND.COM</em> & don't need other files to work</p>
	<p><em>External</em> commands require existing files to work</p>

	<table id="dos-commands">
		<tr>
			<th>category</th>
			<th>command</th>
			<th>MS-DOS<br>version</th>
			<th>FreeDOS</th>
			<th>DOSBox</th>
			<th>type</th>
		</tr>
		<tr>
			<td><?=$commandInformation?></td>
			<td><a href="dos/help.php">help</a></td>
			<td>6.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$commandInformation?></td>
			<td>&lt;command&gt; /?</td>
			<td>n/a</td>
			<td>n/a</td>
			<td>n/a</td>
			<td>n/a</td>
		</tr>
		<tr>
			<td><?=$browsingDirectories?></td>
			<td>&lt;letter&gt;:</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$browsingDirectories?></td>
			<td>dir</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$browsingDirectories?></td>
			<td>cd / chdir</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$browsingDirectories?></td>
			<td>tree</td>
			<td>3.2</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>copy</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>diskcopy</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>xcopy</td>
			<td>3.2</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>move</td>
			<td>6.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>ren</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>del / erase</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>deltree</td>
			<td>6.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>undelete</td>
			<td>5.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>md / mkdir</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$fileManipulation?></td>
			<td>rm / rmdir</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$readingFiles?></td>
			<td>type</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$readingFiles?></td>
			<td>more</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$console?></td>
			<td>cls</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$console?></td>
			<td>prompt</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$console?></td>
			<td>mode</td>
			<td>3.2</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>external</td>
		</tr>
		<tr>
			<td><?=$console?></td>
			<td>history</td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$console?></td>
			<td>alias</td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$powerSession?></td>
			<td>exit</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i><sup>[1]</sup></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$powerSession?></td>
			<td>shutdown</td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td></td>
		</tr>
		<tr>
			<td><?=$powerSession?></td>
			<td>poweroff</td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>alias</td>
		</tr>
		<tr>
			<td><?=$powerSession?></td>
			<td>reset</td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>alias</td>
		</tr>
		<tr>
			<td><?=$powerSession?></td>
			<td>reboot</td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i></td>
			<td>alias</td>
		</tr>
		<tr>
			<td>system</td>
			<td>ver</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>system</td>
			<td>date</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i><sup>[2]</sup></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>system</td>
			<td>time</td>
			<td>1.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-times fa-fw"></i><sup>[2]</sup></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>system</td>
			<td>set</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td>system</td>
			<td>path</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
		<tr>
			<td><?=$fileSystem?></td>
			<td>attrib</td>
			<td>2.0</td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td><i class="fa fa-check fa-fw"></i></td>
			<td>internal</td>
		</tr>
	</table>

	<article id="file-system">
		<hr>
		<h3><i class="far fa-hdd fa-fw"></i> <?=$fileSystem?></h3>
		<hr>
		<!--<ul>
			<li>attrib</li>
			<li>vol</li>
			<li>label</li>
			<li>chkdsk</li>
			<li>fdisk</li>
			<li>format</li>
			<li>mount</li>
			<li>imgmount</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>attrib</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>vol</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>label</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>chkdsk</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>fdisk</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>format</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>bootrec</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>mount</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>imgmount</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>

	<article id="memory">
		<hr>
		<h3><i class="fa fa-memory fa-fw"></i> <?=$memory?></h3>
		<hr>
		<!--<ul>
			<li>mem</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>mem</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>lh / loadhigh</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
		<h4>types of memory</h4>
		<ul>
			<li>conventional</li>
			<li>upper (UMA - Upper Memory Area)</li>
			<li>high (HMA - High Memory Area)</li>
			<li>extended (XMS - eXtended Memory Specification)</li>
			<li>expanded (EMS - Expanded Memory Specification)</li>
		</ul>
		<h4>popular extenders</h4>
		<ul>
			<li>DOS/4G</li>
			<li>DOS/4GW</li>
		</ul>
		<h4>TSR (Terminate and Stay Resident) programs</h4>
		<h4>DPMI - DOS Protected Mode Interface</h4>
	</article>

	<article id="processes">
		<hr>
		<h3><i class="fa fa-list-ul"></i> <?=$processes?></h3>
		<hr>
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>tasklist</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>taskkill</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
	</article>

	<article id="boot-management">
		<hr>
		<h3><i class="fa fa-plug"></i> <?=$bootManagement?></h3>
		<hr>
		<table>
			<tr>
				<th></th>
				<th>Win NT 10<br><em><small>cmd.exe</small></em></th>
			</tr>
			<tr>
				<td>bootrec</td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>bootsect</td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>bcdedit</td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>

	<article id="network">
		<hr>
		<h3><i class="fa fa-globe fa-fw"></i> <?=$network?></h3>
		<hr>
		<!--<ul>
			<li>ipconfig</li>
			<li>ping</li>
			<li>tracert</li>
			<li>route</li>
			<li>netstat</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>ipconfig</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>ping</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>tracert</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>route</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>netstat</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
	</article>

	<article id="text-editors">
		<hr>
		<h3><i class="fa fa-align-left fa-fw"></i> <?=$textEditors?></h3>
		<hr>
		<!--<ul>
			<li>edlin</li>
			<li>edit</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>edlin</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>edit</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
	</article>

	<article id="file-managers">
		<hr>
		<h3><i class="far fa-copy fa-fw"></i> <?=$fileManagers?></h3>
		<hr>
		<ul>
			<li>DOS Shell</li>
			<li>Norton Commander</li>
			<li>DOS Navigator</li>
		</ul>
	</article>

	<article id="useful-programs">
		<hr>
		<h3><i class="far fa-window-maximize"></i> <?=$usefulPrograms?></h3>
		<hr>
		<ul>
			<li>MPXPlayer</li>
			<li>Arachne</li>
		</ul>
	</article>

	<article id="batch-files">
		<hr>
		<h3><i class="fa fa-save fa-fw"></i> <?=$batchFiles?></h3>
		<hr>
		<!--<ul>
			<li>.bat</li>
			<li>.cmd</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Windows<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>batch files extension</td>
				<td>.bat .cmd</td>
				<td>.BAT</td>
				<td>.BAT</td>
			</tr>
			<tr>
				<td>echo</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>pause</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>rem</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>call</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>choice</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>goto</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>:&lt;label&gt;</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>if</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>for</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>
	
</section>

<?php include "footer.php"; ?>