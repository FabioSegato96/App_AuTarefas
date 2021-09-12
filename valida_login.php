<?php

session_start();


//Variável que verifica se autenticação foi realizada
$usuario_autenticado = false;
$usuario_id = null;
$usuario_tipo = null;
$usuario_perfil = null;

$tipo = array(1 => 'Administrador', 2 => 'Pessoa Física', 3 => 'Pessoa Jurídica', 4 => 'Coletor');

$usuarios_app = array(

	array('id' => 1, 'nome' => 'Administrador' , 'email' => 'adm@teste.com.br', 'senha' => '123456' ),
	array('id' => 2, 'nome' => 'Nome Usuário', 'email' => 'user@teste.com.br', 'senha' => '123456' )


);

foreach ($usuarios_app as $user) {	

	if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
		$usuario_autenticado = true;
		$usuario_id = $user['id'];
		$usuario_nome = $user['nome'];
		$usuario_tipo = $user['tipo'];
		$usuario_perfil = $user['perfil'];
	}
}
	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['nome'] = $usuario_nome;
		$_SESSION['tipo'] = $usuario_tipo;
		$_SESSION['perfil'] = $usuario_perfil;
		header('Location: pendente_tarefa.php'); 
	}else{
		header('Location: login.php?login=erro');
		$_SESSION['autenticado'] = 'NÃO';
	}



?>