<?php

//define usuario, servidor, clase
$host= "localhost";
$user= "root";
$password= "";
$db ="clase";

//conecta
$con= mysqli_connect($host,$user,$password,$db) or die("Error");

echo "base da datos conectada";

?>