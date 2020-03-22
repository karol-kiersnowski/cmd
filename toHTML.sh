#!/bin/sh
php7.2 index.php > index.html
php7.2 how-to.php > how-to.html
php7.2 screenshots-img.php > screenshots-img.html
php7.2 screenshots-txt.php > screenshots-txt.html
php7.2 links.php > links.html
php7.2 guest-book.php > guest-book.html
php7.2 about.php > about.html
php7.2 linux.php > linux.html
php7.2 win-dos.php > win-dos.html
#grep '.php' index.html
sed -i 's/.php/.html/g' index.html
sed -i 's/.php/.html/g' linux.html
sed -i 's/.php/.html/g' win-dos.html