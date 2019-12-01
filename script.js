var nav = document.getElementsByTagName("nav")[0];
var main = document.getElementsByTagName("main")[0];
var footer = document.getElementsByTagName("footer")[0];

function changeMenu() {
  if (nav.offsetWidth == "250")
    hideMenu();
  else if (nav.offsetWidth == "50")
  	showMenu();
}

function hideMenuByClickOutsideIt() {
  if (window.innerWidth <= "1000")
    hideMenu();
}

function hideMenu() {
  nav.style.width = "50px";
  main.style.marginLeft = "50px";
  footer.style.marginLeft = "50px";
}

function showMenu() {
  nav.style.width = "250px";
  if (window.innerWidth > "1000") {
    main.style.marginLeft = "250px";
    footer.style.marginLeft = "250px";
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
		if (articlesTop[i] <= 0 && articlesBottom[i] > 0)
			anchors[i].style.borderLeft = "3px solid rgb(26, 54, 101)";
	}
	//document.getElementById("demo").innerHTML = anchors[2];
}

function copyToClipboard(textId) {
	var textToCopy = document.getElementById(textId);
	textToCopy.focus();
	textToCopy.select();
	document.execCommand("copy");
}