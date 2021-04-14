<?php
	include "sys.php";
	$title = $cmd . " dos / commands";
	include "header.php";
	include "nav-win-dos.php";
	include "header2.php";
?>

<h2><i class="fa fa-terminal"></i> DOS</h2>
<section>
	<article id="command-information">
		<hr>
		<h3><i class="fa fa-question fa-fw"></i> commands</h3>
		<hr>

		<table>
			<tr>
				<th>category</th>
				<th>command</th>
				<th>MS-DOS version</th>
				<th>type</th>
			</tr>
			<tr>
				<td><?=$commandInformation?></td>
				<td>help</td>
				<td>6.0</td>
				<td>external</td>
			</tr>
			<tr>
				<td><?=$commandInformation?></td>
				<td>&lt;command&gt; /?</td>
				<td>n/a</td>
				<td>n/a</td>
			</tr>
			<tr>
				<td><?=$browsingDirectories?></td>
				<td>&lt;letter&gt;:</td>
				<td>1.0</td>
				<td>internal</td>
			</tr>
			<tr>
				<td><?=$browsingDirectories?></td>
				<td>dir</td>
				<td>1.0</td>
				<td>internal</td>
			</tr>
			<tr>
				<td><?=$browsingDirectories?></td>
				<td>cd / chdir</td>
				<td>2.0?</td>
				<td>internal</td>
			</tr>
			<tr>
				<td><?=$browsingDirectories?></td>
				<td>tree</td>
				<td>?</td>
				<td>external</td>
			</tr>
		</table>
	</article>

	<article id="file-manipulation">
		<hr>
		<h3><i class="far fa-copy fa-fw"></i> <?=$fileManipulation?></h3>
		<hr>
		<!--<ul>
			<li>copy</li>
			<li>diskcopy</li>
			<li>xcopy</li>
			<li>move</li>
			<li>ren</li>
			<li>del</li>
			<li>deltree</li>
			<li>undelete</li>
			<li>md / mkdir</li>
			<li>rd / rmdir</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>copy</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>diskcopy</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>xcopy</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>move</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>ren / rename</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>del / erase</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>deltree</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>undelete</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>md / mkdir</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>rd / rmdir</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>

	<article id="reading-files">
		<hr>
		<h3><i class="far fa-file-alt"></i> <?=$readingFiles?></h3>
		<hr>
		<!--<ul>
			<li>type</li>
			<li>more</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>type</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>more</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
	</article>

	<article id="console">
		<hr>
		<h3><i class="fa fa-terminal fa-fw"></i> <?=$console?></h3>
		<hr>
		<!--<ul>
			<li>cls</li>
			<li>prompt</li>
			<li>mode</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>FreeDOS<br><em><small>FREECOM.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>cls</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>prompt</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>mode</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>alias</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>

		<code class="dos">mode 80</code><br>
		<code class="dos">mode 40</code><br>
		<code class="dos">mode con cols=80</code><br>
		<code class="dos">mode con cols=40</code><br>
		<code class="dos">mode con lines=25</code><br>
		<code class="dos">mode con lines=28</code><br>
		<code class="dos">mode con lines=43</code><br>
		<code class="dos">mode con lines=50</code>

	</article>

	<article id="power-session">
		<hr>
		<h3><i class="fa fa-power-off"></i> <?=$powerSession?></h3>
		<hr>
		<!--<ul>
			<li>exit</li>
			<li>reset</li>
			<li>reboot</li>
			<li>poweroff</li>
			<li>halt</li>
			<li>shutdown</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>FreeDOS<br><em><small>FREECOM.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>exit</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>shutdown</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>halt</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>reboot</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>reset</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>	
		</table>
	</article>

	<article id="system">
		<hr>
		<h3><i class="fa fa-laptop"></i> system</h3>
		<hr>
		<!--<ul>
			<li>ver</li>
			<li>date</li>
			<li>time</li>
			<li>mem</li>
			<li>path</li>
			<li>set</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>ver</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>date</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>time</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>path</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>set</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>

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