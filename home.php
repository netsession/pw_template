<?php
include("inc/head.php"); 
?>
		<h1><?php echo $page->title; ?></h1>
		<?php if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>";

include("inc/foot.php"); 
 ?>
