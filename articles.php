<?php
    require_once("database.php");
    require_once("models/articles.php");

    $articles = articles_get($_GET['id']);
    
    include("views/articles.php");
?>
