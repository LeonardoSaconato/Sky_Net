

<?php

//--*------------------------------------------*--
//--* dir parent	: php	     	   	 	   *--
//--* File name		: conexao.php     	   	   *--
//--* Created by 	: Ricardo Italo		       *--
//--* Discord		: ShadowJr#5627			   *--
//--*------------------------------------------*--



define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'Project');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
?>