#!/bin/sh
php7.4 index.php > index.html
php7.4 how-to.php > how-to.html
php7.4 screenshots-txt.php > screenshots-txt.html
php7.4 screenshots-img.php > screenshots-img.html
php7.4 links.php > links.html
php7.4 guestbook.php > guestbook.html
php7.4 theme.php > theme.html
php7.4 about.php > about.html
php7.4 linux.php > linux.html
php7.4 win-dos.php > win-dos.html
php7.4 powershell.php > powershell.html
#grep '.php' index.html
sed -i 's/\.php/\.html/g' index.html
sed -i 's/\.php/\.html/g' how-to.html
sed -i 's/\.php/\.html/g' screenshots-txt.html
sed -i 's/\.php/\.html/g' screenshots-img.html
sed -i 's/\.php/\.html/g' links.html
sed -i 's/\.php/\.html/g' guestbook.html
sed -i 's/\.php/\.html/g' theme.html
sed -i 's/\.php/\.html/g' about.html
sed -i 's/\.php/\.html/g' linux.html
sed -i 's/\.php/\.html/g' win-dos.html
sed -i 's/\.php/\.html/g' powershell.html
