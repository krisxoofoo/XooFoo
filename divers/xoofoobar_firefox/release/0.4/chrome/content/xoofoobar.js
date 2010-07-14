/* $Id $ */
/* forwards document to new URL */
function xo_loadURL(url)
{
    window._content.document.location = url;
    window.content.focus();
}

/* executes the search */
function xo_searchBlog()
{
	var term = document.getElementById('xoofoobar-search-toolbar-box').value;
	if(term.length > 0 && term != 'Search the website ...') xo_loadURL('http://labs.xoofoo.org/search.php?query=' + encodeURIComponent(term));
}

/* listen for focus/blur on the search box */
function xo_focus(state)
{
	var box = document.getElementById('xoofoobar-search-toolbar-box');
	if(state) { //focus
		if(box.value == 'Search the website ...') box.value = '';
		box.select();
      box.style.color = '#000000';
	}
	else {
		if(box.value == '') {
			box.value = 'Search the website ...';
			box.style.color = '#666666';
		}
	}
}

/* listen for search commit via keyboard */
function xo_keypress(event)
{
	if (event.keyCode == event.DOM_VK_RETURN) xo_searchBlog();
}
