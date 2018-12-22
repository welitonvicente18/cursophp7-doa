<?php 


require_once("config.php");

/////////////////////////////////////////////////
/* exemplo da 1ª aula DOA
$sql = new Sql();

$usuarios = $sql->select(" SELECT *FROM tb_usuarios");

echo json_encode($usuarios); */

////////////////////////////////////////////////////




/*
////////////////////////////////////////////////////
//////////segunda aula

$root = new Usuario();

$root->loadById(4);

echo $root;
//  fim segunda aula
///////////////////////////////// */

/// terceira aula exemplo 1///
/*$lista = Usuario::getList();

echo json_encode($lista);*/
//// fim terceira aula exemplo 1

$search = Usuario::search(" jo");

echo json_encode($search);




 ?>