<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER','root');
define('MYSQL_PASSWORD','root');
define('MYSQL_DB','blog');
function db_connect(){
	$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
				or die("Error: " . mysqli_errno($link));
	
	/*
	$link = mysqli_connect('localhost', 'root', 'root', 'blog');
	if (mysqli_errno($link)) {
		die("failed to connect to mysql: " . mysqli_connect_error() );
	}
	*/
	
	if(!mysqli_set_charset($link, 'utf8')){
		printf("Error: " . mysql_error($link));
	}
	
	// это должно быть не здесь!
	// ыmysqli_close($link);
	
	return $link;
}

?>
