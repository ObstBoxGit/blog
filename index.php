<?php
    require_once("database.php");
    require_once("models/articles.php");

	
	$link = db_connect();
    $articles = articles_all($link);
    
    //~ echo "<pre>";
    //~ var_dump($article);
	//~ echo "</pre>";
    
    include("views/article.php");
?>
