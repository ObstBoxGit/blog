<?php
function articles_all(){
    $art1 = ["id" => 1, "title" => "Title 1", "date" => "04-01-2017", "content" => "Content1"];
    $art2 = ["id" => 2, "title" => "Title 2", "date" => "04-01-2017", "content" => "Content2"];

    $arr[0] = $art1;
    $arr[1] = $art2;
    return $arr;
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
