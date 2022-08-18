<?php
 
    
    $id_tipo_usuario   = (isset($_POST['id_tipo_usuario']) )?$_POST["id_tipo_usuario"]: 2;
    $senha             = (isset($_POST['senha']) )?$_POST["senha"]: null;
    $nome              = (isset($_POST['nome']) )?$_POST["nome"]: null;
    $prontuario        = (isset($_POST['prontuario']) )?$_POST["prontuario"]: null;
    $corpo_academico   = (isset($_POST ['corpo_academico']) )?$_POST["corpo_academico"]: null;
    echo (" Esse é o seu nome ".$nome);
  
  require_once ".:/opt/cpanel/ea-php56/root/usr/share/pear/system/models/Usuarios.class.php";
    
    $usuario = new Usuarios($id_tipo_usuario, $nome, $prontuario, $senha, $corpo_academico);
    echo ("1 Passei");
    $usuario->insert();
 
   echo ("2 Passei");
 
?>
