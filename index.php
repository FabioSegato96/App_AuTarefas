<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Icones -->    
    <link href="icones/iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
   	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Estilo --> 
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Autarefa</title>
    <link rel="stylesheet" type="text/css" href="css/modelo.css">
    <style type="text/css">

    </style>
    <script>
      function alertLogin(){
      alert('Olá, seja bem vindo ao App AuTarefas! Buscando proporcionar a melhor experiência para o usuário, nossa equipe está desenvolvendo funcionalidades que permitem cadastrar logins automaticamente. Enquanto isso, vai lá dar uma conferida no app, use esse Login e Senha > Login: user@teste.com.br  Senha: 123456');
    }  
    </script>
  </head>
  <body>
    

	<nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: rgba(91, 146, 255, 0.3);">
        <a href="index.php" class="navbar-brand text-success display-2 font-weight-bold"><img src="img/logonew.png" width="150" height="80" class="d-inline-block align-items-center " id="nome_app" alt="">App Autarefa</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navtarget3">
          <span class="navbar-toggler-icon"></span>

        </button>
      
        <div class="collapse navbar-collapse" id="navtarget3">
          
          <ul class="navbar-nav ml-auto">
          

          <li class="nav-item dropdown" data-toggle="dropdown">
            <a href="" class="nav-link dropdown-toggle text-success display-5 font-weight-bold">App</a>
            <div class="dropdown-menu">
              <a href="" class="dropdown-item">Como Funciona</a>
              <a href="" class="dropdown-item">Beneficios</a>
              <a href="" class="dropdown-item">Facilidades</a>
            </div>
          </li>
          
          
          <li class="nav-item mr-5 "><a href="login.php" class="nav-link text-success display-5 font-weight-bold">Login</a></li>

          </ul>    
        </div>        
      </nav>	

      <div class="container ">

      	<div class="row justify-content-center ">

      	<div id="carousel-ctrl3" class="mt-3 carousel slide col-md-10 " data-ride="carousel">
              
            <ol class="carousel-indicators">
              
              <li class="active" data-target="carousel-ctrl2" data-slide-to="0"></li>
              <li data-target="carousel-ctrl2" data-slide-to="1"></li>
              <li data-target="carousel-ctrl2" data-slide-to="2"></li>
              <li data-target="carousel-ctrl2" data-slide-to="3"></li>

            </ol>  

            <div class="carousel-inner rounded">
              <div class="carousel-item active">
                <img src="img/foto3.png" class="img-fluid">  
              </div>
              <div class="carousel-item">
                <img src="img/foto1.png" class="img-fluid">
              </div>
              <div class="carousel-item">
                <img src="img/foto2.png" class="img-fluid"> 
              </div>
              <div class="carousel-item">
                <img src="img/foto4.png" class="img-fluid">
              </div>
            </div>
            <a href="#carousel-ctrl3" class="carousel-control-prev" data-slide="prev">
              <i class="fas fa-arrow-circle-left fa-3x"></i></a>
            <a href="#carousel-ctrl3" class="carousel-control-next" data-slide="next">
            	<i class="fas fa-arrow-circle-right fa-3x"></i>
            	</a>
          </div>
          </div>

          <!-- -->		
          
          <div class="row mt-3 justify-content-center">
            <div class="col-10">
              <div class="  jumbotron text-center mt-2" style="background-color: rgba(34, 93, 210, 0.5);">
              <h1 class="display-1">Controle suas tarefas</h1>
              <p class="lead">Esta aplicação web te permite de forma simples cadastrar tarefas para que seu dia a dia fique mais produtivo e controlado.</p>
              <hr>
              <p class="text-dark">Cadastre-se grátis!</p>
              <a class="btn btn-primary btn-lg text-white" href="cadastro.php" onclick="alertLogin()">Cadastrar</a>
             </div>
            </div>            
          </div>

      </div>

      <footer class="pb-3 justify-content-center display-5 text-center pt-3 font-weight-bold" style="background-color: rgba(91, 146, 255, 0.3);">
      		
      		<span class="text-dark">&lt;</span><span class="text-danger">Ad</span><span class="text-white"><span class="text-dark">_</span><span class="text-white">Tech</span><span class="text-dark">&gt;</span> <span class="text-dark"> &#169; 2021 - by Fabio Segato <span> 

      </footer>

    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>