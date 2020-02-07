<?php
	include "sys.php";
	$title = $cmd . $howTo;
	include "header.php";
	include "nav-main.php";
?>

<h2><i class="far fa-lightbulb"></i> <?=$howTo?></h2>
<hr>
<ul>
	<li><a href="#changeRootPassword">sort photos by date - phockup</a></li>
	<li><a href="#changeRootPassword">resize images - imgp</a></li>
    <li><a href="#changeRootPassword">set the system start in console / CLI mode</a></li>
	<li><a href="#changeRootPassword">change root (superuser) password</a></li>
	<li><a href="#changeRootPassword">change timeout to choose operations system in the GRUB</a></li>
	<li><a href="#changeRootPassword">change font size in the command-line interface</a></li>
	<li><a href="#changeRootPassword">restore the GRUB after installing Windows</a></li>
	<li><a href="#changeRootPassword">hide the system menu in full-screen games and change the resolution to default</a></li>
</ul>


<article id="startSystemInCLI">
	<h4>set the system start in console / CLI mode</h4>
	<div class="textToCopy">
		<input class="code" type="text" readonly id="startSystemInCLI1" value="systemctl set-default multi-user.target"/>
		<button class="btnCopyToClipboard" onclick="copyToClipboard('startSystemInCLI1')"><i class="far fa-copy"></i></button>
		<span class="clear"></span>
	</div>
	<pre>systemctl set-default multi-user.target</pre>
	<p>To get the start back system in GUI</p>
	<pre>systemctl set-default graphical.target</pre>
</article>


<article id="changeRootPassword">
	<h4>change root (superuser) password</h4>
	<pre>sudo passwd root</pre>
</article>



<article>
	<h4>change timeout to choose operations system in the GRUB</h4>
<pre><font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>~</b></font>$ cd /etc/default
<font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>/etc/default</b></font>$ sudo nano grub
</pre>







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




	<p>
		Now we need to change <code>GRUB_TIMEOUT=10</code>. 10 means seconds.
		After this, save file and exit from nano. In the end, update grub.
	</p>
<pre>
sudo update-grub
</pre>
</article>
<article>
	<h4>change font size in the command-line interface</h4>
	<h5><i class="fa fa-question"></i> Issue</h5>
	<p>
		In the CLI sometimes font size maybe to small or to big.
	</p>
	<h5><i class="far fa-lightbulb"></i> Solution</h5>
<pre>
sudo dpkg-reconfigure console-setup
</pre>
	<p>
		In the two first steps choose the default options. Next, choose font family and font size.
	</p>
</article>





<article>
	<h4>Restore the GRUB after installing Windows</h4>
	<h5><i class="fa fa-question"></i> Issue</h5>
	<p>
		If we install Windows after installing Linux, we can't run Linux.
	</p>
	<h5><i class="far fa-lightbulb"></i> Solution</h5>
	<p>
		Need an ISO (CD, DVD or USB) of Linux distribution. Run Linux as "Live CD" (without installation). Then run a terminal.
	</p>
<pre>
karol@aspireOne:~$ sudo fdisk -l
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
	<p>
		My system in installed on /dev/sda2.
	</p>
<pre>
.
.
.
</pre>

	<p>
		In the end, update GRUB.
	</p>
<pre>
karol@aspireOne:~$ sudo update-grub
</pre>
</article>

<article>
	<h4>Hide the system menu in full-screen games and change the resolution to default</h4>
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
<pre>
#!/bin/bash
gsettings set org.cinnamon panels-autohide "['1:true']"
wine nfs.exe
xrandr -s 1024x768
gsettings set org.cinnamon panels-autohide "['1:false']"
</pre>
	<p>
		Save the file - script.sh. Then, have to add execute right to this file.
	</p>
<pre>
karol@core2duo ~/Aplikacje/NFS Underground $ chmod u+x script.sh
</pre>
	<p>
		Run the script and play the game :)
	</p>
<pre>
karol@core2duo ~/Aplikacje/NFS Underground ./script.sh
</pre>
</article>

<?php include "footer.php"; ?>
