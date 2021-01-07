<?php
	include "sys.php";
	$title = $cmd . $howTo;
	include "header.php";
	include "nav-how-to.php";
?>

<h2><i class="far fa-lightbulb"></i> <?=$howTo?></h2>
<hr>
<!-- <ul>
	<li><a href="#changeRootPassword">mass renaming of files</a></li>
	<li><a href="#changeRootPassword">sort photos by date - phockup</a></li>
	<li><a href="#changeRootPassword">resize images - imgp</a></li>
    <li><a href="#changeRootPassword">set the system start in console / CLI mode</a></li>
	<li><a href="#changeRootPassword">change root (superuser) password</a></li>
	<li><a href="#changeRootPassword">change timeout to choose operations system in the GRUB</a></li>
	<li><a href="#changeRootPassword">change font size in the command-line interface</a></li>
	<li><a href="#changeRootPassword">restore the GRUB after installing Windows</a></li>
	<li><a href="#changeRootPassword">hide the system menu in full-screen games and change the resolution to default</a></li>
</ul> -->















<article id="change-superuser-password">
	<h4><i class="fa fa-user-cog fa-fw"></i> <?=$changeSuperuserPassword?></h4>
	<code class="linux">sudo passwd root</code>
</article>
















<article id="change-the-timeout-in-GRUB">
	<h4><i class="fa fa-stopwatch fa-fw"></i> <?=$changeTheTimeoutInGRUB?></h4>

<code class="linux">sudo nano /etc/default/grub</code>

<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre><span style="background-color:#FFFFFF"><font color="#3F3F3F">  GNU nano 2.9.3                      grub                                      </font></span>

<font color="#06989A"># If you change this file, run &apos;update-grub&apos; afterwards to update</font>
<font color="#06989A"># /boot/grub/grub.cfg.</font>
<font color="#06989A"># For full documentation of the options in this file, see:</font>
<font color="#06989A">#   info -f grub -n &apos;Simple configuration&apos;</font>

GRUB_DEFAULT=0
GRUB_TIMEOUT_STYLE=hidden
GRUB_TIMEOUT=10
GRUB_DISTRIBUTOR=`lsb_release -i -s 2&gt; /dev/null || echo Debian`
GRUB_CMDLINE_LINUX_DEFAULT=&quot;quiet splash&quot;
GRUB_CMDLINE_LINUX=&quot;&quot;

<font color="#06989A"># Uncomment to enable BadRAM filtering, modify to suit your needs</font>
<font color="#06989A"># This works with Linux (no patch required) and with any kernel that obtains</font>
<font color="#06989A"># the memory map information from GRUB (GNU Mach, kernel of FreeBSD ...)</font>
<font color="#06989A">#GRUB_BADRAM=&quot;0x01234567,0xfefefefe,0x89abcdef,0xefefefef&quot;</font>

<font color="#06989A"># Uncomment to disable graphical terminal (grub-pc only)</font>
<font color="#06989A">#GRUB_TERMINAL=console</font>

<span style="background-color:#FFFFFF"><font color="#3F3F3F">^G</font></span> Pomoc     <span style="background-color:#FFFFFF"><font color="#3F3F3F">^O</font></span> Zapisz    <span style="background-color:#FFFFFF"><font color="#3F3F3F">^W</font></span> Wyszukaj  <span style="background-color:#FFFFFF"><font color="#3F3F3F">^K</font></span> Wytnij    <span style="background-color:#FFFFFF"><font color="#3F3F3F">^J</font></span> Wyjustuj  <span style="background-color:#FFFFFF"><font color="#3F3F3F">^C</font></span> Bież.poz.
<span style="background-color:#FFFFFF"><font color="#3F3F3F">^X</font></span> Wyjdź     <span style="background-color:#FFFFFF"><font color="#3F3F3F">^R</font></span> Wczyt.plik<span style="background-color:#FFFFFF"><font color="#3F3F3F">^\</font></span> Zastąp    <span style="background-color:#FFFFFF"><font color="#3F3F3F">^U</font></span> Odnów Teks<span style="background-color:#FFFFFF"><font color="#3F3F3F">^T</font></span> Pisownia  <span style="background-color:#FFFFFF"><font color="#3F3F3F">^_</font></span> Przejdź do l</pre>
</samp>

	<ol>
		<li>Change to <code class="linux">GRUB_TIMEOUT=10</code> - 10 means seconds.</li>
		<li>Save the file - <kbd>Ctrl</kbd> + <kbd>o</kbd>; exit from nano - <kbd>Ctrl</kbd> + <kbd>x</kbd></li>
		<li>Update GRUB <code class="linux">sudo update-grub</code></li>
	</ol>
</article>








<article id="restore-GRUB-after-installing-Windows">
	<h4><i class="fa fa-wrench fa-fw"></i> <?=$restoreGRUBAfterInstallingWindows?></h4>
	<h5><i class="fa fa-question"></i> Issue</h5>
	<p>
		If we install Windows after installing Linux, we can't run Linux.
	</p>
	<h5><i class="far fa-lightbulb"></i> Solution</h5>
	<p>
		Get an ISO (CD, DVD or USB) of Linux distribution. Run Linux as "Live CD" (without installation). Then run a terminal.
	</p>
<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre>
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ sudo fdisk -l
[sudo] password for karol: 
Disk /dev/sda: 55,9 GiB, 60022480896 bytes, 117231408 sectors
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: dos
Disk identifier: 0x31cafd91

Device     Boot     Start       End   Sectors Size Id Type
/dev/sda2            2048 113127423 113125376  54G 83 Linux
/dev/sda3       113127424 117229567   4102144   2G 82 Linux swap / Solaris
</pre>
</samp>
	<p>
		My system in installed on <var>/dev/sda2</var>.
	</p>

	<code class="linux">sudo mount /dev/sda2 /mnt</code><br>
	<code class="linux">sudo mount --bind /dev /mnt/dev</code><br>
	<code class="linux">sudo mount --bind /proc /mnt/proc</code><br>
	<code class="linux">chroot /mnt</code><br>
	<code class="linux">grub-install /dev/sda</code><br>
	<code class="linux">update-grub</code>

	<p>
		After executing <code class="linux">update-grub</code>, it may say: <code>Cannot find list of partitions! (Try mounting / sys.)</code>. Let's do it!
	</p>
	<code class="linux">exit</code> (from root)<br>
	<code class="linux">sudo mount --bind /sys /mnt/sys</code>
	<p>
		Repeat previous commands
	</p>
	<code class="linux">chroot /mnt</code><br>
	<code class="linux">grub-install /dev/sda</code><br>
	<code class="linux">update-grub</code>

<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre>
<font color="#8AE234"><b>mint@mint</b></font><font color="#729FCF"><b> ~ </b></font>$ sudo mount /dev/sda2 /mnt
<font color="#8AE234"><b>mint@mint</b></font><font color="#729FCF"><b> ~ </b></font>$ sudo mount --bind /dev /mnt/dev
<font color="#8AE234"><b>mint@mint</b></font><font color="#729FCF"><b> ~ </b></font>$ sudo mount --bind /proc /mnt/proc
<font color="#8AE234"><b>mint@mint</b></font><font color="#729FCF"><b> ~ </b></font>$ sudo chroot /mnt
<font color="red"><b>root@mint</b></font>:<font color="#729FCF"><b>/</b></font># grub-install /dev/sda
Installing for i386-pc platform.
Unknown device "/dev/sda2": No such device
(...
...
...)
Unknown device "/dev/sda2": No such device
<font color="red"><b>root@mint</b></font>:<font color="#729FCF"><b>/</b></font># update-grub
Sourcing file `/etc/default/grub'
Sourcing file `/etc/default/grub.d/50_linuxmint.cfg'
Sourcing file `/etc/default/grub.d/60_mint-theme.cfg'
Sourcing file `/etc/default/grub.d/init-select.cfg'
Generating grub configuration file ...
Unknown device "/dev/sda2": No such device
(...
...
...)
Cannot find list of partitions!  (Try mounting /sys.)
done
<font color="red"><b>root@mint</b></font>:<font color="#729FCF"><b>/</b></font># exit
exit
<font color="#8AE234"><b>mint@mint</b></font><font color="#729FCF"><b> ~ </b></font>$ sudo mount --bind /sys /mnt/sys
<font color="#8AE234"><b>mint@mint</b></font><font color="#729FCF"><b> ~ </b></font>$ sudo chroot /mnt
<font color="red"><b>root@mint</b></font>:<font color="#729FCF"><b>/</b></font># grub-install /dev/sda
Installing for i386-pc platform.
Installation finished. No error reported.
<font color="red"><b>root@mint</b></font>:<font color="#729FCF"><b>/</b></font># update-grub
Sourcing file `/etc/default/grub'
Sourcing file `/etc/default/grub.d/50_linuxmint.cfg'
Sourcing file `/etc/default/grub.d/60_mint-theme.cfg'
Sourcing file `/etc/default/grub.d/init-select.cfg'
Generating grub configuration file ...
Found theme: /boot/grub/themes/linuxmint/theme.txt
Found linux image: /boot/vmlinuz-5.4.0-58-generic
Found initrd image: /boot/initrd.img-5.4.0-58-generic
Found Windows 10 on /dev/sda1
Found Microsoft Windows XP Professional on /dev/sdb1
Found FreeDOS on /dev/sdb2
done
<font color="red"><b>root@mint</b></font>:<font color="#729FCF"><b>/</b></font>#
</pre>
</samp>

</article>








<article id="change-the-font-size-in-CLI">
	<h4><i class="fa fa-text-height fa-fw"></i> <?=$changeTheFontSizeInCLI?></a></h4>
	<h5><i class="fa fa-question"></i> Issue</h5>
	<p>
		In the CLI sometimes font size maybe to small or to big.
	</p>
	<h5><i class="far fa-lightbulb"></i> Solution</h5>
	<code class="linux">sudo dpkg-reconfigure console-setup</code>
	<p>
		In the two first steps choose the default options. Next, choose font family and font size.
	</p>
</article>











<article id="mass-rename-of-files">
	<h4><i class="fa fa-exchange-alt fa-fw"></i> <?=$massRenameOfFiles?></h4>
	<h5><i class="far fa-lightbulb"></i> Solution</h5>
	<p>
		Install <var>rename</var> program.
	</p>
	<code class="linux">sudo apt install rename</code>
	<h5>Example</h5>
	<code class="linux">rename 's/abc/xyz/' *</code><br>
	<code class="linux">rename -n 's/abc/xyz/' *</code>
</article>










<article id="sort-photos-by-date">
	<h4><i class="fa fa-sort-numeric-down fa-fw"></i> <?=$sortPhotosByDate?></h4>
	<h5><i class="far fa-lightbulb"></i> Solution</h5>
	<p>
		Install <a href="https://github.com/ivandokov/phockup"><var>phockup</var></a> program.
	</p>
</article>








<article id="mass-resize-of-images">
	<h4><i class="fa fa-expand-alt fa-fw"></i> <?=$massResizeOfImages?></h4>
	<h5><i class="far fa-lightbulb"></i> Solution</h5>
	<p>
		Install <a href="https://github.com/jarun/imgp"><var>imgp</var></a> program.
	</p>
</article>








<article id="set-system-boot-in-CLI-mode">
	<h4><i class="fa fa-terminal fa-fw"></i> <?=$setSystemBootInCLIMode?></h4>
	<div class="textToCopy">
		<input class="code" type="text" readonly value="systemctl set-default multi-user.target"/>
		<button class="btnCopyToClipboard" onclick="copyToClipboard(this)"><i class="far fa-copy"></i></button>
		<span class="clear"></span>
	</div>
	<code class="linux">systemctl set-default multi-user.target</code>
	<p>To get the start back system in GUI</p>
	<code class="linux">systemctl set-default graphical.target</code>
</article>













<article id="hide-the-system-menu-in-fullscreen-games-and-change-the-resolution-to-the-default">
	<h4><i class="fa fa-gamepad fa-fw"></i> <?=$hideTheSystemMenuInFullscreenGamesAndChangeTheResolutionToTheDefault?></h4>
	<h5><i class="fa fa-question"></i> Issue</h5>
	<p>
		We can play on Linux in Windows games thanks to <em>wine</em>. But in the some games in full-screen mode, the system menu is visible. Additionally when we leave the game, the resolution in the system can be change to games resolution.
	</p>
	<h5><i class="far fa-lightbulb"></i> Solution</h5>
	<p>
		Make a BASH script. It will automate hiding system menu moments before start the game and set visible menu moments after leave the game.
	</p>
	<p>
		Example for Cinnamon desktop environment (Linux Mint).
	</p>

	<ol>
		<li>
			Make a file<br><code class="linux">nano script.sh</code><br>
<code class="linux">
<pre>
#!/bin/bash
gsettings set org.cinnamon panels-autohide "['1:true']"
wine nfs.exe
xrandr -s 1024x768
gsettings set org.cinnamon panels-autohide "['1:false']"
</pre>
</code>
		</li>
		<li>Save the file <kbd>Ctrl</kbd> + <kbd>o</kbd> & exit from nano - <kbd>Ctrl</kbd> + <kbd>x</kbd></li>
		<li>Add execute right to this file<br><code class="linux">chmod u+x script.sh</code></li>
		<li>Run the script and play the game :)<br><code class="linux">./script.sh</code></li>
	</ol>
	
<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre>
karol@core2duo ~/Aplikacje/NFS Underground $ nano script.sh
karol@core2duo ~/Aplikacje/NFS Underground $ chmod u+x script.sh
karol@core2duo ~/Aplikacje/NFS Underground $ ./script.sh
</pre>
</samp>

</article>




<?php include "footer.php"; ?>
