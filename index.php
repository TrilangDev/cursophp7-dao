<?php

require_once('config.php');


//CARREGA UM USUÁRIO
/*$root = new Usuario();

$root->loadbyId(3);

echo $root;*/

//CARREGA UMA LISTA DE USUÁRIOS
/*$lista = Usuario::getList();

echo json_encode($lista);*/

//CARREGA LISTA USUARIO BUSCANDO PELO LOGIN
/*$search = Usuario::search('Us');

echo json_encode($search);*/

//CARREGA UM USUÁRIO USANDO LOGIN/SENHA
/*$usuario = new Usuario();

$usuario->login('geral', '12348765');

echo $usuario;*/

//INSERIR USUARIO NO BD
/*
$aluno = new Usuario('aluno','124');

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update('novo', '12348765');

echo $usuario;

?>