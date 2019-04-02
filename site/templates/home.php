<?php

include('./_head.php'); // include header markup ?>

<div id='content'><?php

echo "<h1>" . $page->get('headline|title') . "</h1>";

echo $page->body;

if(count($page->images)) {

	$image = $page->images->getRandom();

	echo "<img src='$image->url' alt='$image->description' />";
	
}

?></div><!-- end content -->

<!--<div id='sidebar'><?php

/*if(count($page->images)) {
	
			// if the page has images on it, grab one of them randomly... 
	$image = $page->images->getRandom();

			// resize it to 400 pixels wide
	$image = $image->width(400);

			// output the image at the top of the sidebar...
	echo "<img src='$image->url' alt='$image->description' />";
}*/

		// output sidebar text if the page has it
//echo $page->sidebar;

?></div> --> <!-- end sidebar -->


<?php include('./_foot.php'); // include footer markup ?>


