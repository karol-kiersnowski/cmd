#!/bin/sh
php index.php > index.html
php how-to.php > how-to.html
php screenshots-txt.php > screenshots-txt.html
php screenshots-img.php > screenshots-img.html
php links.php > links.html
php guestbook.php > guestbook.html
php theme.php > theme.html
php about.php > about.html
php linux.php > linux.html
php win-dos.php > win-dos.html
php powershell.php > powershell.html
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
