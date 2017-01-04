<?php
    
	require_once("../database.php");
    require_once("../models/articles.php");

	$link = db_connect();
	
	if(isset($_GET['action'])) $action = $_GET['action'];
	else $action = '';
	
	//--- добавляем новую статью ---
	if($action == "add"){
		if(! empty($_POST) ){
			articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
			header("Location: index.php");
		}		
		include("../views/article_admin.php");
	} 
	
	//--- редактируем статью ---
	else if($action == 'edit'){
		
		if(! isset($_GET['id']) ) header("Location: index.php");
				
		$id = intval($_GET['id']);		
		
		//--- переход уже после внесения изменений ---
		if(! empty($_POST) && $id > 0 ) {
			articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
			header("Location: index.php");
		} 
		
		//--- перешли на страницу редактирования
		// до внесения изменений ---
		$article = articles_get($link, $id);
		include("../views/article_admin.php");
	} 
	
	else {
		$articles = articles_all($link);			
		include("../views/articles_admin.php");
	}
?>

