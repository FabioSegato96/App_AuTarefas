<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/modelo.css">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }      
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

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Cadastro
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="cadastro_nome" type="nome" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group">
                  <input name="cadastro_email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="cadastro_senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-success btn-block disabled" type="submit" onclick="alertLogin()">Pronto</button>
                
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>