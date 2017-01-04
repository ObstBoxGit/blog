<?php
function articles_all($link){

    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);
    
    if(!$result) die (mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $articles = array();
    
    for ($i = 0; $i < $n; $i++)	{
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}
	
	return $articles;    
}

function articles_get($id){

    return ["id" => 1, "title" => "Это простой заголовок", "date" => "04-01-2017", "content" => "Здесь когда-нибудь будет статья, братюни"];
}

function articles_new($content, $title, $date){

}

function articles_edit($id, $title, $date, $content){

}

function articles_delete($id){

}

?>
