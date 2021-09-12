<?php


require "tarefa_model.php";
require "tarefa_service.php";
require "conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;


if ($acao == 'inserir') {
$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);
$tarefa->__set('id_user', $_POST['id_user']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);
$tarefaService->inserir();

header('Location: nova_tarefa.php?inclusao=1');
} else if ($acao == 'recuperar') {
	$tarefa = new Tarefa();
	$conexao = new Conexao();
	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefas_bd = $tarefaService->recuperar();
} elseif ($acao == 'atualizar') {
	
	$tarefa = new Tarefa();
	$tarefa->__set('id', $_POST['id']);
	$tarefa->__set('tarefa', $_POST['tarefa']);

	$conexao = new Conexao();
	$tarefaService = new TarefaService($conexao, $tarefa);
	if ($tarefaService->atualizar()) {

		if(isset($_GET['pag']) && $_GET['pag'] == 'pendente_tarefa'){
		header('Location: pendente_tarefa.php');
	} else {
		header('Location: todas_tarefas.php');
	}
	}
} elseif ($acao == 'remover') {

	$tarefa = new Tarefa();
	$tarefa->__set('id', $_GET['id']);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->remover();

	if(isset($_GET['pag']) && $_GET['pag'] == 'pendente_tarefa'){
		header('Location: pendente_tarefa.php');
	} else {
		header('Location: todas_tarefas.php');
	}
	
} elseif ($acao == 'marcarRealizada') {
	
	$tarefa = new Tarefa();
	$tarefa->__set('id', $_GET['id']);
	$tarefa->__set('id_status', 2);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->marcarRealizada();
	if(isset($_GET['pag']) && $_GET['pag'] == 'pendente_tarefa'){
		header('Location: pendente_tarefa.php');
	} else {
		header('Location: todas_tarefas.php');
	}

	
} elseif ($acao == 'recuperarTarefasPendentes') {
	
	
	$tarefa = new Tarefa();
	
	$tarefa->__set('id_status', 1);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefas = $tarefaService->recuperarTarefasPendentes();
} 	
?>