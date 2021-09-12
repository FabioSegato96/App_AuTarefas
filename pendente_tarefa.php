<?php
	$acao = 'recuperarTarefasPendentes';
	require "tarefa_controler.php";
	require "validador_acesso.php";	
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/modelo.css">
		<script>
			function editar(id, txt_tarefa) {
				let form = document.createElement('form')
				form.action = 'pendente_tarefa.php?pag=pendente_tarefa&acao=atualizar'
				form.method = 'post'
				form.className = 'row'
				let inputTarefa = document.createElement('input')
				inputTarefa.type = 'text'
				inputTarefa.name = 'tarefa'
				inputTarefa.className = 'form-control col-md-9'
				inputTarefa.value = txt_tarefa

				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'btn btn-info col-md-3'
				button.innerHTML = 'Atualizar'

				form.appendChild(inputTarefa)

				form.appendChild(inputId)

				form.appendChild(button)

				let tarefa = document.getElementById('tarefa_'+id)

				tarefa.innerHTML = ''

				tarefa.insertBefore(form, tarefa[0])
			}

			function remover(id) {

				location.href = 'pendente_tarefa.php?pag=pendente_tarefa&acao=remover&id=' + id;
			}
			function marcarRealizada(id) {

				location.href = 'pendente_tarefa.php?pag=pendente_tarefa&acao=marcarRealizada&id=' + id;	
			}
		</script>
	</head>

	<body>
		<nav class="navbar navbar-light" style="background-color: rgba(91, 146, 255, 0.3);">
			<div class="container">
				<a href="#" class="navbar-brand text-success display-2 font-weight-bold"><img src="img/logonew.png" width="150" height="80" class="d-inline-block align-items-center" id="nome_app" alt="">App Autarefa</a>

				<ul class="navbar-nav">
					<li class="text-primary nav-item ml-5 font-weight-bold">
						<?php echo '<span>Usuário: ' . $_SESSION['nome'] . ' </span>'; ?>
												
					</li> 
				</ul>
				<ul class="navbar-nav">  
			        <li class="nav-item">
			          <a href="logoff.php" class="nav-link text-white btn btn-danger btn-block m-1">Sair</a>
			        </li>
				</ul>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4 class="text-warning">Tarefas Pendentes</h4>
								<hr />
								

							<?php foreach ($tarefas as $key => $value) { ?>

								<?php if ($value['id_user'] == $_SESSION['id']) { ?>
									
								

									
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9" id="tarefa_<?=$value['id']?>"><?= $value['tarefa'] ?> | <?php 
									
									if ($value['id_status'] == 1) {
										echo '<p class="text-warning d-inline">Pendente</p>';
									} elseif ($value['id_status'] == 2) {
										echo '<p class="text-success d-inline">Concluído</p>';
									}
									?>
										
									</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $value['id'] ?>)"></i>

										<?php if ($value['id_status'] == 1) {?>								
										<i class="fas fa-edit fa-lg text-info" onclick="editar(<?=$value['id']?>, '<?=$value['tarefa']?>')"></i>
										<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $value['id'] ?>)"></i>

										<?php } ?>
									</div>
								</div>
								<?php } ?>
							<?php } ?>		
								
												
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</body>
</html>