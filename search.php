<?php

/**
 * Search template
 *
 */

$out = "\t\t<div class='content wrap'>\n\t\t\t<h1>{$page->title}</h1>";

if($q = $sanitizer->selectorValue($input->get->q)) {

	// Send our sanitized query 'q' variable to the whitelist where it will be
	// picked up and echoed in the search box by the head.inc file.
	$input->whitelist('q', $q); 

	// Search the title, body and sidebar fields for our query text.
	// Limit the results to 50 pages. 
	// Exclude results that use the 'admin' template. 
	$matches = $pages->find("title|body|aside~=$q, limit=50"); 

	$count = count($matches); 

	if($count) {
		$out .= "<h2> $count Seiten gefunden mit Ihrer Anfrage:</h2>" . 
			"<ul class='nav'>";

		foreach($matches as $m) {
			$out .= "<li><p><a href='{$m->url}'>{$m->title}</a><br />{$m->summary}</p></li>";
		}

		$out .= "</ul>";

	} else {
		$out .= "<h2>Sorry, keine Resultate gefunden.</h2>";
	}
} else {
	$out .= "<h2>Bitte geben Sich eine Suchanfrage ein.</h2>";
}
$out.="</div>";
// Note that we stored our output in $out before printing it because we wanted to execute
// the search before including the header template. This is because the header template 
// displays the current search query in the search box (via the $input->whitelist) and 
// we wanted to make sure we had that setup before including the header template. 

include("./inc/head.inc"); 

echo $out; 
include("./inc/foot.inc"); 

