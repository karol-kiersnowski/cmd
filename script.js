var sideMenu = document.getElementById("side-menu");
var main = document.getElementsByTagName("main")[0];
var footer = document.getElementsByTagName("footer")[0];
var isFullscreen = false;

function switchMenu() {
	if (sideMenu.offsetWidth == "0")
		showMenu();
	else
		hideMenu();
}

function hideMenuByClickOutsideIt() {
	if (window.innerWidth <= "1000")
		hideMenu();
}

function hideMenu() {
	sideMenu.style.display = "none";
	main.style.marginLeft = "0px";
	footer.style.marginLeft = "0px";
}

function showMenu() {
	sideMenu.style.display = "block";
	if (window.innerWidth > "1000") {
		main.style.marginLeft = "300px";
		footer.style.marginLeft = "300px";
	}
}

function switchScreenMode(caller) {
	if (!isFullscreen) {
		document.documentElement.requestFullscreen();
		isFullscreen = true;
		caller.children[0].children[0].className = "fa fa-compress-alt";
	}
	else {
		document.exitFullscreen();
		isFullscreen = false;
		caller.children[0].children[0].className = "fa fa-expand-alt";
	}
}

function markAnchor() { 
	// var articles = document.getElementsByTagName("article");
	// var articlesTop = new Array(articles.length);
	// var articlesBottom = new Array(articles.length);
	// var anchors = new Array(articles.length);

	// for (var i=0; i<articles.length; i++) {
	// 	articlesTop[i] = articles[i].getBoundingClientRect().top;
	// 	articlesBottom[i] = articles[i].getBoundingClientRect().bottom;
	// 	anchors[i] = document.querySelector("a[href*='#" + articles[i].id + "']");
	// 	anchors[i].style.borderLeft = "none";
	// 	if (articlesTop[i] <= 5 && articlesBottom[i] > 5) {
	// 		//console.log(anchors[i].href);
	// 		anchors[i].style.borderLeftWidth = "3px";
	// 		anchors[i].style.borderLeftStyle = "solid";
	// 	}
	// }
}

// function copyToClipboard(thisElement) {
// 	var text = thisElement.parentElement.children[0];
// 	text.select();
// 	document.execCommand("copy");
// }

async function writeToClipboard(codeElement) {
	try {
		await navigator.clipboard.writeText(codeElement.previousSibling.innerHTML);
		codeElement.firstElementChild.style.display = "block";
		setTimeout(function() {
			codeElement.firstElementChild.style.display = "none";
		}, 1000);
	} catch (error) {
		console.error(error);
	}
}

function sortTable(n, thisElement) {
	//var table = thisElement.parentElement;
	var rows = document.getElementsByTagName("TR");
	var switching = true;
	var i;
	var x;
	var y;
	var shouldSwitch;
	var direction = "asc"; 
	var switchCount = 0; 
	
	/*Make a loop that will continue until
	no switching has been done:*/
	while (switching) {
		//start by saying: no switching is done:
		switching = false;
		
		/*Loop through all table rows (except the
		first, which contains table headers):*/
		for (i = 1; i < (rows.length - 1); i++) {
			//start by saying there should be no switching:
			shouldSwitch = false;
			/*Get the two elements you want to compare,
			one from current row and one from the next:*/
			//alert(rows[i].getElementsByTagName("div")[1].innerHTML);
			x = rows[i].getElementsByTagName("TD")[n];
			y = rows[i + 1].getElementsByTagName("TD")[n];
			/*check if the two rows should switch place,
			based on the direction, asc or desc:*/
			if (direction == "asc") {
				if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
					//if so, mark as a switch and break the loop:
					shouldSwitch= true;
					break;
				}
			} else if (direction == "desc") {
				if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
					//if so, mark as a switch and break the loop:
					shouldSwitch = true;
					break;
				}
			}
		}
		if (shouldSwitch) {
			/*If a switch has been marked, make the switch
			and mark that a switch has been done:*/
			rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			switching = true;
			//Each time a switch is done, increase this count by 1:
			switchCount++;      
		} else {
			/*If no switching has been done AND the direction is "asc",
			set the direction to "desc" and run the while loop again.*/
			if (switchCount == 0 && direction == "asc") {
				direction = "desc";
				switching = true;
			}
		}
	}

	// if (thisElement != null) {
	// 	if (direction == "asc") {
	// 		if (thisElement.innerHTML == "command")
	// 		thisElement.innerHTML = 'command <i class="fa fa-sort-down"></i>';
	// 	}
	// 	else if (direction == "desc") {
	// 		if (thisElement.innerHTML == "command")
	// 		thisElement.innerHTML = 'command <i class="fa fa-sort-up"></i>';
	// 	}
	// }
}