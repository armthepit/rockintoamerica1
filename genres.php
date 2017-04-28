<?php
	$genre = $_GET['genre'];
    $page_title  = "Rockin To America - $genre";
    $page_description = "Rockin To America invites you to check out $genre releases.";
    $content_title = $genre;    
    $main_content = "assets/includes/genrescontent.php";    
?>

<?php include("assets/includes/layout.php");?>