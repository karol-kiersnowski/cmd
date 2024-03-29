<?php
	include "sys.php";
	$title = $cmd . " windows cmd | dos";
	include "header.php";
	include "nav-win-dos.php";
	include "nav-dropdowns.php";
?>

<h2><i class="fab fa-windows"></i> Windows cmd / DOS</h2>
<section>

	<article id="introduction">
		<hr>
		<h3><i class="far fa-play-circle"></i> <?=$introduction?></h3>
		<hr>

		<h4>What is Windows?</h4>
		<p>
			<a target="_blank" href="https://www.microsoft.com/en-us/windows">Windows</a> is the most popular operating system on x86 PC (Personal Computer with x86 CPU). Unlike GNU Linux, Windows does not have a CLI mode that works without a GUI. But we can use the command interpreter in the GUI.
		</p>
			
		</p>
		<h4>Command interpreter in Windows interface</h4>
		<p>
			Cmd.exe is a command interpreter in Windows. Cmd.exe is derived from COMMAND.COM - a MS-DOS interpreter. Because of this, many cmd.exe commands are compatible with MS-DOS commands.
		</p>

		<h4>How to run command prompt in Windows NT?</h4>
		<ol>
			<li>Start > write <em>command prompt</em> or <em>cmd.exe</em></li>
			<li>Start > Programs > System tools > Command prompt</li>
			<li>Start > Programs > Accessories > Command prompt</li>
			<li>Start > Run > <em>cmd.exe</em></li>
		</ol>

		<h4>How to run MS-DOS prompt in Windows NT (only 32-bit)?</h4>
		<ol>
			<li>Start > write <em>command.com</em></li>
			<li>Start > Run > <em>command.com</em></li>
		</ol>

		<h4>How to run MS-DOS prompt in Windows 9x?</h4>
		<ol>
			<li>Start > Programs > MS-DOS prompt</li>
			<li>Start > Run > <em>command.com</em></li>
		</ol>

		<h4>What is MS-DOS / PC-DOS?</h4>
		<p>
			<a target="_blank" href="https://github.com/microsoft/MS-DOS">MS-DOS</a> / PC-DOS (Disk Operating System) is a text-based & single-tasking operating system for PC with x86 CPU. It was popular in the 80s and early 90s. It doesn't have GUI, so we can use DOS only in Command-Line Interface. Nowadays, DOS is practically not used as the primary operating system.
		</p>

		<h4>What is FreeDOS?</h4>
		<p>
			<a target="_blank" href="http://www.freedos.org">FreeDOS</a> is an open-source operating system compatible with MS-DOS.
		</p>

		<h4>How to run DOS on modern computer?</h4>
		<p>
			On modern computers, we will not run the original DOS versions (MS-DOS / PC-DOS) as the plain operating system. 
		</p>
		<p>
			Ways to use DOS:
		</p>
		<ol>
			<li>emulator, e.g. <a target="_blank" href="https://www.dosbox.com">DOSBox</a></li>
			<li>virtual machine, e.g. <a target="_blank" href="https://www.virtualbox.org/">VirtualBox</a></li>
			<li>"modern DOS" - <a target="_blank" href="http://freedos.org/">FreeDOS</a></li>
		</ol>
	</article>

	<article id="dos-based-windows-vs-windows-nt">
		<hr>
		<h3><i class="fas fa-not-equal"></i> DOS-based Windows vs Windows NT</h3>
		<hr>
		<table class="normal">
			<tr>
				<th>class</th>
				<td rowspan="2">DOS</td>
				<td colspan="2">DOS-based Windows</td>
				<td rowspan="3" colspan="2">Windows NT family</td>
			</tr>
			<tr>
				<th>operating system</th>
				<td>DOS</td>
				<td>DOS / Windows 9x</td>
			</tr>
			<tr>
				<th>graphical environment</th>
				<td>-</td>
				<td>Windows 1-3</td>
				<td>Windows 9x</td>
			</tr>
			<tr>
				<th>x-bit OS</th>
				<td>16</td>
				<td>16</td>
				<td>16/32</td>
				<td>32</td>
				<td>64</td>
			</tr>
			<tr>
				<th>x-bit programs run</th>
				<td>16</td>
				<td>16<sup>[1]</sup></td>
				<td>16/32</td>
				<td>16/32</td>
				<td>32/64</td>
			</tr>
			<tr>
				<th>command interpreter</th>
				<td colspan="3">COMMAND.COM</td>
				<td>COMMAND.COM<br>cmd.exe<br>PowerShell<sup>[2]</sup></td>
				<td>cmd.exe<br>PowerShell<sup>[2]</sup></td>
			</tr>
			<tr>
				<th>DOS programs run in</th>
				<td>real mode</td>
				<td>real / virtual mode<sup>[3]</sup></td>
				<td>virtual mode<sup>[4]</sup></td>
				<td>virtual machine - <a target="_blank" href="https://en.wikipedia.org/wiki/Virtual_DOS_machine#Windows_NTVDM">NTVDM</a></td>
				<td>-</td>
			</tr>
			<tr>
				<th>multitasking</th>
				<td>-</td>
				<td>cooperative</td>
				<td>16-bit - cooperative<br>32-bit - preemptive</td>
				<td colspan="2">preemptive</td>
			</tr>
			<tr>
				<th>file system</th>
				<td colspan="2">FAT12<br>FAT16</td>
				<td>FAT16<br>VFAT<br>FAT32<sup>[5]</sup></td>
				<td colspan="2">NTFS</td>
			</tr>
			<tr>
				<th>file name length</th>
				<td colspan="2">8 + 3</td>
				<td>255</td>
				<td colspan="2">255</td>
			</tr>
		</table>
		<p>
			* Windows 1-3: 1.x, 2.x, 3.x<br>
			* Windows 9x: 95, 98, Me<br>
			* DOS-based Windows: 1.x, 2.x, 3.x, 95, 98, Me<br>
			* Windows NT family: NT, 2000, XP, Vista, 7, 8, 10, Server
		</p>
		<ol>
			<li>Windows 3.1 / 3.11: there is an additional Win32s API which allows to run some 32-bit programs</li>
			<li>PowerShell: in Windows 7 and later</li>
			<li>From <em>Windows /386 2.1</em>, DOS programs can run in virtual mode</li>
			<li>In Windows 95/98 it is possible to run pure DOS in real mode without Windows</li>
			<li>FAT32: supported in Windows 95 OSR2 and later Win9x</li>
		</ol>

		<h4>cmd.exe vs COMMAND.COM vs FREECOM.COM</h4>
		<table class="normal">
			<tr>
				<th>command interpreter</th>
				<td>cmd.exe</td>
				<td>COMMAND.COM</td>
				<td>FREECOM.COM</td>
			</tr>
			<tr>
				<th>operating system</th>
				<td>Windows NT</td>
				<td>MS-DOS<br>DOS-based Windows<br>Windows NT 32-bit</td>
				<td>FreeDOS</td>
			</tr>
			<tr>
				<th>autocomplete</th>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<th>file name length</th>
				<td>255</td>
				<td>8 + 3</td>
				<td>255</td>
			</tr>
		</table>

		<h4>MS-DOS 6.22 vs FreeDOS 1.2</h4>
		<table class="normal">
			<tr>
				<th>operating system</th>
				<td>MS-DOS 6.22</td>
				<td>FreeDOS 1.2</td>
			</tr>
			<tr>
				<th>command interpreter</th>
				<td>COMMAND.COM</td>
				<td>FREECOM.COM</td>
			</tr>
			<tr>
				<th>supported file systems</th>
				<td>FAT12<br>FAT16</td>
				<td>FAT16<br>VFAT<br>FAT32</td>
			</tr>
			<tr>
				<th>disk size</th>
				<td>up to 2GB</td>
				<td>up to 128GB / 2TB</td>
			</tr>
			<tr>
				<th>memory manager</th>
				<td>HIMEM<br>EMM386</td>
				<td>HIMEMX<br>JEMM386</td>
			</tr>
			<tr>
				<th>multi-boot</th>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<th>advanced power managment</th>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<th>release year</th>
				<td>1994</td>
				<td>2016</td>
			</tr>
			<tr>
				<th>source model</th>
				<td>closed source</td>
				<td>open source (GNU GPL)</td>
			</tr>
		</table>

		<h4>MS-DOS versions</h4>
		<table class="normal">
			<tr>
				<th>version</th>
				<th>supported file systems</th>
				<th>HDD maximum size</th>
				<th>5.25" floppy disk support</th>
				<th>3.5" floppy disk support</th>
				<th>year</th>
			</tr>
			<tr>
				<td>1.1</td>
				<td>FAT12</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>360KB</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1982</td>
			</tr>
			<tr>
				<td>2.0</td>
				<td>FAT12</td>
				<td>10MB</td>
				<td>360KB</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1983</td>
			</tr>
			<tr>
				<td>3.0</td>
				<td>FAT12</td>
				<td>32MB</td>
				<td>360KB 1.2MB</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1984</td>
			</tr>
			<tr>
				<td>4.0 (multitasking - abandoned)</td>
				<td>FAT12 FAT16</td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td>360KB 1.2MB</td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td>1986</td>
			</tr>
			<tr>
				<td>3.2</td>
				<td>FAT12</td>
				<td>32MB</td>
				<td>360KB 1.2MB</td>
				<td>360KB</td>
				<td>1986</td>
			</tr>
			<tr>
				<td>3.3</td>
				<td>FAT12</td>
				<td>32MB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB</td>
				<td>1987</td>
			</tr>
			<tr>
				<td>4.0</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB</td>
				<td>1988</td>
			</tr>
			<tr>
				<td>5.0</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1991</td>
			</tr>
			<tr>
				<td>6.0</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1994</td>
			</tr>
			<tr>
				<td>6.2</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1994</td>
			</tr>
			<tr>
				<td>6.22</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1994</td>
			</tr>
			<tr>
				<td>7.0 (Windows 95, 95A)</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1995</td>
			</tr>
			<tr>
				<td>7.1x (Windows 95B, 95C, 98, 98SE)</td>
				<td>FAT12 FAT16 FAT32</td>
				<td>124.55GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1996</td>
			</tr>
			<tr>
				<td>8.0 (Windows Me)</td>
				<td>FAT12 FAT16 FAT32</td>
				<td>124.55GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>2000</td>
			</tr>
		</table>

		<h4>Windows 1.x - 3.x versions</h4>
		<table class="normal">
			<tr rowspan="2">
				<th rowspan="2">version</th>
				<th rowspan="2">name</th>
				<th rowspan="2">minimal<br>MS-DOS<sup>[1]</sup></th>
				<th colspan="3">mode<sup>[3]</sup></th>
				<th rowspan="2">registry</th>
				<th rowspan="2">year</th>
			</tr>
			<tr>
				<th>real</th>
				<th>standard</th>
				<th>enhanced</th>
			</tr>
			<tr>
				<td>1.01</td>
				<td>Windows 1.01</td>
				<td>2.0</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1985</td>
			</tr>
			<tr>
				<td>2.03</td>
				<td>Windows 2.03</td>
				<td>2.0</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1987</td>
			</tr>
			<tr>
				<td>2.1</td>
				<td>Windows/286 2.1</td>
				<td>2.0</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1988</td>
			</tr>
			<tr>
				<td>2.1</td>
				<td>Windows/386 2.1</td>
				<td>2.0</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1988</td>
			</tr>
			<tr>
				<td>3.0</td>
				<td>Windows 3.0</td>
				<td>3.1</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1990</td>
			</tr>
			<tr>
				<td>3.1</td>
				<td>Windows 3.1</td>
				<td>3.3</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>1992</td>
			</tr>
			<tr>
				<td>3.1</td>
				<td>Windows for Workgroups 3.1</td>
				<td>3.3</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>1992</td>
			</tr>
			<tr>
				<td>3.11</td>
				<td>Windows 3.11</td>
				<td>3.3</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>1993</td>
			</tr>
			<tr>
				<td>3.11</td>
				<td>Windows for Workgroups 3.11</td>
				<td>3.3</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>1993</td>
			</tr>
		</table>

		<h4>Windows 9x versions</h4>
		<table>
			<tr>
				<th>version</th>
				<th>name</th>
				<th>included<br>MS-DOS<sup>[2]</sup></th>
				<th>FAT32</th>
				<th>IE</th>
				<th>DirectX</th>
				<th>year</th>
			</tr>
			<tr>
				<td>4.0<br><small>[950]</small></td>
				<td>Windows 95</td>
				<td>7.0</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1995</td>
			</tr>
			<tr>
				<td>4.0<br><small>[950a]</small></td>
				<td>Windows 95 SP1</td>
				<td>7.0</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>2.0</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1996</td>
			</tr>
			<tr>
				<td>4.0<br><small>[950A]</small></td>
				<td>Windows 95 OSR1</td>
				<td>7.0</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>2.0</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1996</td>
			</tr>
			<tr>
				<td>4.0<br><small>[950B]</small></td>
				<td>Windows 95 OSR2</td>
				<td>7.1</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>3.0</td>
				<td>2.0a</td>
				<td>1996</td>
			</tr>
			<tr>
				<td>4.0<br><small>[950B]</small></td>
				<td>Windows 95 OSR2.1</td>
				<td>7.1</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>3.0</td>
				<td>2.0a</td>
				<td>1997</td>
			</tr>
			<tr>
				<td>4.0<br><small>[950C]</small></td>
				<td>Windows 95 OSR2.5</td>
				<td>7.1</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>4.0</td>
				<td>5.0</td>
				<td>1997</td>
			</tr>
			<tr>
				<td>4.1<br><small>[1998]</small></td>
				<td>Windows 98</td>
				<td>7.1</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>4.01</td>
				<td>5.2</td>
				<td>1998</td>
			</tr>
			<tr>
				<td>4.1<br><small>[2222A]</small></td>
				<td>Windows 98 SE</td>
				<td>7.1</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>5.0</td>
				<td>6.1a</td>
				<td>1999</td>
			</tr>
			<tr>
				<td>4.9<br><small>[3000]</small></td>
				<td>Windows Me</td>
				<td>8.0</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>5.5</td>
				<td>7.1</td>
				<td>2000</td>
			</tr>
		</table>

		<ol>
			<li>
				Windows 1.x - 3.x are only programs that run in DOS. They need DOS in version written above.
			</li>
			<li>
				Windows 9x are installed with DOS. They are complete operating systems.
			</li>
			<li>
				Windows real mode works in processor real mode (need 8086 CPU)<br>
				Windows standard mode can work in processor protected and real mode (need 80286 CPU)<br>
				Windows enhanced 386 mode can work in protected, virtual and real mode (need 80386 CPU)<br>
				Real / Standard mode: possible run DOS program in fullscreen, but programs in background are stopped<br>
				Enhanced mode: possible run mulitple DOS programs, in window, programs in background can work
			</li>
			<li>
				Windows 95, 98, 98SE can boot in DOS real mode without Windows system extenders (GUI, etc)
			</li>
		</ol>
		<div class="clear"></div>

		<h4>Windows NT versions</h4>
		<table class="normal">
			<tr rowspan="2">
				<th rowspan="2">version</th>
				<th rowspan="2">name</th>
				<th colspan="3">architecture</th>
				<th rowspan="2">year</th>
			</tr>
			<tr>
				<th>IA-32<br><small>x86-32</small></th>
				<th>AMD64<br><small>x86-64</small></th>
				<th>other</th>
			</tr>
			<tr>
				<td>3.1<br><small>[528]</small></td>
				<td>Windows NT 3.1</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>Alpha, MIPS</td>
				<td>1993</td>
			</tr>
			<tr>
				<td>3.5<br><small>[807]</small></td>
				<td>Windows NT 3.5</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>Alpha, MIPS, PowerPC</td>
				<td>1994</td>
			</tr>
			<tr>
				<td>3.51<br><small>[1057]</small></td>
				<td>Windows NT 3.51</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>Alpha, MIPS, PowerPC</td>
				<td>1995</td>
			</tr>
			<tr>
				<td>4.0<br><small>[1381]</small></td>
				<td>Windows NT 4.0</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>Alpha, MIPS, PowerPC</td>
				<td>1996</td>
			</tr>
			<tr>
				<td>5.0<br><small>[2195]</small></td>
				<td>Windows 2000</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td></td>
				<td>2000</td>
			</tr>
			<tr>
				<td>5.1<br><small>[2600]</small></td>
				<td>Windows XP</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td></td>
				<td>2001</td>
			</tr>
			<tr>
				<td>5.2</td>
				<td>Windows XP 64-bit Edition</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>IA-64</td>
				<td>2005</td>
			</tr>
			<tr>
				<td>5.2<br><small>[3790]</small></td>
				<td>Windows Server 2003</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>IA-64</td>
				<td>2003</td>
			</tr>
			<tr>
				<td>5.2<br><small>[3790]</small></td>
				<td>Windows XP Professional x64 Edition</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2005</td>
			</tr>
			<tr>
				<td>5.2<br><small>[3790]</small></td>
				<td>Windows Server 2003 R2</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>IA-64</td>
				<td>2005</td>
			</tr>
			<tr>
				<td>6.0<br><small>[6002]</small></td>
				<td>Windows Vista</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2006</td>
			</tr>
			<tr>
				<td>6.0<br><small>[6003]</small></td>
				<td>Windows Server 2008</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>IA-64</td>
				<td>2008</td>
			</tr>
			<tr>
				<td>6.1<br><small>[7601]</small></td>
				<td>Windows 7</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2009</td>
			</tr>
			<tr>
				<td>6.1<br><small>[7601]</small></td>
				<td>Windows Server 2008 R2</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td>IA-64</td>
				<td>2009</td>
			</tr>
			<tr>
				<td>6.2<br><small>[9200]</small></td>
				<td>Windows 8</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2012</td>
			</tr>
			<tr>
				<td>6.2<br><small>[9200]</small></td>
				<td>Windows Server 2012</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2012</td>
			</tr>
			<tr>
				<td>6.3<br><small>[9600]</small></td>
				<td>Windows RT</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>ARMv7 (32-bit)</td>
				<td>2012</td>
			</tr>
			<tr>
				<td>6.3<br><small>[9600]</small></td>
				<td>Windows 8.1</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2013</td>
			</tr>
			<tr>
				<td>6.3<br><small>[9600]</small></td>
				<td>Windows Server 2012 R2</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2013</td>
			</tr>
			<tr>
				<td>10.0<br><small>[10240]</small></td>
				<td>Windows 10</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2015</td>
			</tr>
			<tr>
				<td>10.0<br><small>[14393]</small></td>
				<td>Windows 10</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2016</td>
			</tr>
			<tr>
				<td>10.0<br><small>[14393]</small></td>
				<td>Windows Server 2016</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2016</td>
			</tr>
			<tr>
				<td>10.0<br><small>[17763]</small></td>
				<td>Windows 10</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2018</td>
			</tr>
			<tr>
				<td>10.0<br><small>[17763]</small></td>
				<td>Windows Server 2019</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td></td>
				<td>2018</td>
			</tr>
		</table>
	</article>

	<article id="keyboard-shortcuts">
		<hr>
		<h3><i class="far fa-keyboard"></i> <?=$keyboardShortcuts?></h3>
		<hr>
		<ul>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>del</kbd> - reboot the system</li>
			<li><kbd>ctrl</kbd> + <kbd>c</kbd> - cancel the current task</li>
			<li><kbd>ctrl</kbd> + <kbd>s</kbd> - stop the text</li>
		</ul>
	</article>

	<article id="wildcard-characters">
		<hr>
		<h3><i class="fa fa-asterisk fa-fw"></i> <?=$wildcardCharacters?></h3>
		<hr>
		<ul>
			<li>? - replace one character</li>
			<li>* - replace many characters or none</li>
			<h4>examples</h4>
			<p>
				<code class="dos">dir *.exe</code> - display all files with the extension <em>exe</em> 
			</p>
			<p>
				<code class="dos">del *.*</code> - delete all files in current directory
			</p>
		</ul>
	</article>

	<article id="partitions-drives">
		<hr>
		<h3><i class="far fa-hdd"></i> <?=$partitionsDrives?></h3>
		<hr>
<?php if ($lang == "en") { ?>
		<p>Sample numbering of partitions and drives</p>
		<ul>
			<li>A - floppy disk drive no. 1</li>
			<li>B - floppy disk drive no. 2</li>
			<li>C - partition no. 1</li>
			<li>D - partition no. 2</li>
			<li>E - CD / DVD drive</li>
			<li>F - removable drive</li>
		</ul>
<?php } else { ?>
		<p>Przykładowa numeracja partycji i napędów</p>
		<ul>
			<li>A - stacja dyskietek nr 1</li>
			<li>B - stacja dyskietek nr 2</li>
			<li>C - partycja nr 1</li>
			<li>D - partycja nr 2</li>
			<li>E - partycja nr 3</li>
			<li>F - napęd CD / DVD</li>
			<li>G - napęd wymienny</li>
		</ul>
<?php } ?>
	</article>
	
	<article id="mounting-partitions-drives">
		<hr>
		<h3><i class="fa fa-eject fa-fw"></i> DOSBox - <?=$mountingPartitionsDrives?></h3>
		<hr>
		<h4>Mount directories</h4>
		<p><code class="dos">mount c ~/Apps</code> - Linux</p>
		<p><code class="dos">mount c c:/Apps</code> - Windows</p>
		<h4>Mount CD-ROM drive</h4>
		<p><code class="dos">mount d /media -t cdrom</code> - Linux</p>
		<p><code class="dos">mount d d: -t cdrom</code> - Windows</p>
		<h4>Mount virtual drive - iso file</h4>
		<p><code class="dos">imgmount d ~/DOS/WORMS.DAT -t iso</code> - Linux</p>
		<p><code class="dos">imgmount d c:/DOS/WORMS.DAT -t iso</code> - Windows</p>
	</article>

	<article id="directory-structure">
		<hr>
		<h3><i class="fas fa-sitemap"></i> <?=$directoryStructure?></h3>
		<hr>
		<h4>Windows 10 64-bit (NT 10.0)</h4>
<pre>
C:
├── Program Files
├── Program Files (x86)
├── ProgramData
├── Users
└── Windows
</pre>
		<h4>Windows XP 32-bit (NT 5.1)</h4>
<pre>
C:
├── Documents and Settings
├── Program Files
└── WINDOWS
</pre>
		<h4>MS-DOS 6.22</h4>
<pre>
C:
├── DOS
├── COMMAND.COM
├── WINA20.386
├── CONFIG.SYS
└── AUTOEXEC.BAT
</pre>
		<h4>FreeDOS 1.2</h4>
<pre>
C:
├── FDOS
├── AUTOEXEC.BAT
├── COMMAND.COM
├── CONFIG.SYS
├── FDCONFIG.SYS
└── KERNEL.SYS
</pre>
	</article>

	<article id="system-files">
		<hr>
		<h3><i class="fas fa-file-invoice fa-fw"></i> <?=$systemFiles?></h3>
		<hr>
		<h4>MS-DOS</h4>
		<h5>Hidden system files on the startup disk</h5>
		<dl>
			<dt>IO.SYS</dt>
			<dd>
				system initialization code and builtin device drivers
			</dd>
			<dt>MSDOS.SYS</dt>
			<dd>
				contains system kernel; in Windows 95 and later DOS-based Windows, the entire kernel was moved to IO.SYS and the MS-DOS.SYS is a text configuration file
			</dd>
		</dl>
		<h5>Command-line interpreter</h5>
		<dl>
			<dt>COMMAND.COM</dt>
			<dd>
				default command intepreter and interface for DOS; it's first program run after system boot; includes some internal commands
			</dd>
		</dl>
		<h5>User configuration files</h5>
		<dl>
			<dt>CONFIG.SYS</dt>
			<dd>
				contains statements to configure DOS and load device drivers; the syntax is similar to that used Windows <em>.ini</em> files
			</dd>
			<dt>AUTOEXEC.BAT</dt>
			<dd>
				batch file run by the COMMAND.COM to execute commands at startup
			</dd>
		</dl>

		<h5>Boot order</h5>
		<p>IO.SYS &gt; MSDOS.SYS &gt; CONFIG.SYS &gt; COMMAND.COM &gt; AUTOEXEC.BAT</p>

		<h5>Standard DOS device drivers</h5>
		<dl>
			<dt>ANSI.SYS</dt>
			<dd>
				ANSI console driver
			</dd>
			<dt>EMM386.EXE</dt>
			<dd>
				Expanded Memory Manager
			</dd>
			<dt>HIMEM.SYS</dt>
			<dd>
				Extended Memory Manager
			</dd>
			<dt>RAMDRIVE.SYS</dt>
			<dd>
				RAM disk
			</dd>
		</dl>

		<h5>Standard DOS utility programs</h5>

	</article>

	<article id="file-extensions">
		<hr>
		<h3><i class="far fa-file-excel"></i> <?=$fileExtensions?></h3>
		<hr>
		<ul>
			<li>EXE (executive) - executable file</li>
			<li>COM (command) - executable file; precursor of exe extension</li>
			<li>BAT (batch) - plain text file with DOS commands</li>
			<li>SYS (system) - system file</li>
			<li>TXT (text) - plain text file</li>
			<li>HLP (help)</li>
			<li>DOC (document) - rich text file</li>
			<li>DAT (data)</li>
			<li>LIB (library)</li>
		</ul>
	</article>

	<article id="environment-variables">
		<hr>
		<h3><i class="fa fa-percent"></i> <?=$environmentVariables?></h3>
		<hr>

		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>set</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>set VARIABLE</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>

		<p>
			<var>COMSPEC</var>
			<var>PATH</var>
			<var>BLASTER</var>
			<var>TEMP</var>
		</p>

		<?php include "screenshots-txt/dosbox-set.html"; ?>

		<?php include "screenshots-txt/freedos-set.html"; ?>
		
	</article>

	<article id="command-information">
		<hr>
		<h3><i class="fa fa-question fa-fw"></i> <?=$commandInformation?></h3>
		<hr>
		<!--<ul>
			<li>help</li>
			<li>&lt;command&gt; /?</li>
			<li>&lt;command&gt; /h</li>
			<li>&lt;command&gt; /help</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>help</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>&lt;command&gt; /?</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>

	<article id="browsing-directories">
		<hr>
		<h3><i class="far fa-folder-open fa-fw"></i> <?=$browsingDirectories?></h3>
		<hr>
		<!--<ul>
			<li>dir</li>
			<li>cd / chdir</li>
			<li>tree</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win NT 5.1<br><em><small>cmd.exe</small></em></th>
				<th>MS-DOS<br><em><small>COMMAND.COM</small></em></th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>&lt;letter&gt;:</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>dir</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>cd / chdir</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>tree</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
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