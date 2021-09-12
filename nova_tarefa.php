<?php
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
	</head>

	<body>
		<nav class="navbar navbar-light" style="background-color: rgba(91, 146, 255, 0.3);">
			<div class="container">
				<a href="#" class="navbar-brand text-success display-2 font-weight-bold"><img src="img/logonew.png" width="150" height="80" class="d-inline-block align-items-center" id="nome_app" alt="">App Autarefa</a>
			    
			    
				<ul class="navbar-nav">
					<li class="text-primary nav-item ml-5 font-weight-bold">
						<?php echo '<span>Usuário: ' . $_SESSION['nome'] . '</span>'; ?>						
					</li> 
				</ul>
				<ul class="navbar-nav">  
			        <li class="nav-item">
			          <a href="logoff.php" class="nav-link text-white btn btn-danger btn-block m-1">Sair</a>
			        </li>
				</ul>
			</div>
		</nav>

		<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
			<div class="bg-success pt-2 text-light d-flex justify-content-center">
				<h5>Tarefa inserida com sucesso!</h5>
			</div>
		<?php } ?>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="pendente_tarefa.php">Tarefas pendentes</a></li>
						<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4 class="text-info">Nova tarefa</h4>
								<hr />

								<form method="post" action="tarefa_controler.php?acao=inserir">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" class="form-control" name="tarefa" placeholder="Exemplo: Lavar o carro">
										<input type="hidden" name="id_user" value="<?= $_SESSION['id'] ?>">
									</div>

									<button class="btn btn-info">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>