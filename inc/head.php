<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $page->title; ?>" />
	<meta name="keywords" content="<?php //foreach ($page->tags as $tag) {echo $tag->title . ', ';}$output = ob_get_clean();echo rtrim($output, ', '); ?>" />
	<title><?php echo $page->get("headline|title"); ?></title>
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>assets/css/style.min.css">
	<link rel="icon" href="<?php echo $config->urls->templates; ?>favicon.ico" type="image/x-icon">
</head>
<body>
<div id="main">

<header id="header" class="header">
<?php
if(class_exists("MarkupSimpleNavigation", true)) {
include("nav.php");
}
//include("search.php");
?>
</header>
