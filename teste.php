<?php
include_once './system/databases/DBConnection.class.php';


$teste = new DBConnection(); 

$SqlCommand = ('SELECT * FROM `lojinha`.usuarios');

$teste->query($SqlCommand);



?>