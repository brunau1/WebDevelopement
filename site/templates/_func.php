<?php

/**
 * Shared functions used by the beginner profile
 *
 * This file is included by the _init.php file, and is here just as an example. 
 * You could place these functions in the _init.php file if you prefer, but keeping
 * them in this separate file is a better practice. 
 *
 */

function renderSiteMap(PageArray $items, $maxDepth, $condition) {

	if(!$items->count()) return;

	// cycle through all the items
	foreach($items as $item) {
		// markup for the link
		if ($item->title != "Login") {
			echo "<a href='$item->url'>$item->title</a>";

			if ($item->title == "Conteúdo" && $item->hasChildren()) {
				$condition = 1;
				renderNavTree($item->children, $maxDepth, $condition);
			}
		}
	}
}


function renderChild(PageArray $items, $page){

// render an <li> for each top navigation item
	foreach($items as $item) {

		if ($item->title != "Login") {

			if($item->id == $page->rootParent->id) {
		// this $child page is currently being viewed (or one of it's children/descendents)
		// so we highlight it as the current page in the navigation
				echo "<li class='current' aria-current='true'><span class='visually-hidden'>Current page: </span><a href='$item->url'>$item->title</a></li>";
			} else {
				echo "<li><a href='$item->url'>$item->title</a></li>";
			}
		}
	}
}

/**
* Given a group of pages, render a simple <ul> navigation
	*
	* This is here to demonstrate an example of a simple shared function.
	* Usage is completely optional.
	*
	* @param PageArray $items
	*
	*/
	function renderNav(PageArray $items) {

		if(!$items->count()) return;

	// cycle through all the items
		echo "<ul>";
		foreach($items as $item) {
		// markup for the link
			if ($item->title != "Login") {
				echo "<a href='$item->url'>$item->title</a>";

				if ($item->hasChildren()) {
					renderNavTree($item->children, 3, 1);
				}
			}
		}
		echo "</ul>";
	}


/**
* Given a group of pages render a tree of navigation
*
* @param Page|PageArray $items Page to start the navigation tree from or pages to render
* @param int $maxDepth How many levels of navigation below current should it go?
*
*/
function renderNavTree($items, $maxDepth = 3, $condition) {

// if we've been given just one item, convert it to an array of items
	if($items instanceof Page) $items = array($items);

// if there aren't any items to output, exit now
	if(!count($items)) return;

// $out is where we store the markup we are creating in this function
// start our <ul> markup
	echo "<ul class='nav nav-tree' role='navigation'>";

		// cycle through all the items
	foreach($items as $item) {

		// markup for the list item...
		// if current item is the same as the page being viewed, add a "current" class and
		// visually hidden text for screen readers to it
		if($item->id == wire('page')->id) {
			echo "<li aria-current='true'><span class='visually-hidden'>Current page: </span>";
		} else {
			echo "<li>";
		}

		// markup for the link
		echo "<a href='$item->url'>$item->title</a>";

		// if the item has children and we're allowed to output tree navigation (maxDepth)
		// then call this same function again for the item's children 
		
		if($item->hasChildren() && $maxDepth) {

			if ($condition == 0) {
				if ($item->rootParent->title == "Home") {
					renderSiteMap($item->children, $maxDepth, $condition);
				}
			}
			else{
				if ($item->rootParent->title == "Home") {
					renderNav($item->children);
				}
			}
		}

// close the list item
		echo "</li>";
	}

// end our <ul> markup
	echo "</ul>";
}
