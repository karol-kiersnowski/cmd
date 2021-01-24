var nav = document.getElementsByTagName("nav")[0];
var main = document.getElementsByTagName("main")[0];
var footer = document.getElementsByTagName("footer")[0];

function changeMenu() {
	if (nav.offsetWidth == "0")
		showMenu();
	else
		hideMenu();
}

function hideMenuByClickOutsideIt() {
	if (window.innerWidth <= "1000")
		hideMenu();
}

function hideMenu() {
	nav.style.display = "none";
	main.style.marginLeft = "0px";
	footer.style.marginLeft = "0px";
}

function showMenu() {
	nav.style.display = "block";
	if (window.innerWidth > "1000") {
		main.style.marginLeft = "300px";
		footer.style.marginLeft = "300px";
	}
}

function markAnchor() { 
	var articles = document.getElementsByTagName("article");
	var articlesTop = new Array(articles.length);
	var articlesBottom = new Array(articles.length);
	var anchors = new Array(articles.length);

	for (var i=0; i<articles.length; i++) {
		articlesTop[i] = articles[i].getBoundingClientRect().top;
		articlesBottom[i] = articles[i].getBoundingClientRect().bottom;
		anchors[i] = document.querySelector("a[href*='#" + articles[i].id + "']");
		anchors[i].style.borderLeft = "none";
		if (articlesTop[i] <= 5 && articlesBottom[i] > 5) {
			//console.log(anchors[i].href);
			anchors[i].style.borderLeftWidth = "3px";
			anchors[i].style.borderLeftStyle = "solid";
		}
	}
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