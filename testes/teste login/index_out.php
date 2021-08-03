<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>INTRANET_SDB</title>
    <meta charset="utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="\intranetSDB\images\favicon.png">
    <link href="\intranetSDB\bootstrap-3.3.7\dist\css\bootstrap.min.css" rel="stylesheet">
    <link href="\intranetSDB\bootstrap-3.3.7\docs\assets\css\ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="dashboard/dashboard.css" rel="stylesheet">   
     <script src="\intranetSDB\bootstrap-3.3.7\docs\assets\js\ie-emulation-modes-warning.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='http://code.jquery.com/jquery-1.5.1.min.js'></script>
    <script type='text/javascript'>
    $(document).ready(function(){
// Executa o evento CLICK em todos os links do menu
    $('#menu a').live('click',function(){
 // Faz o carregamento da página de acordo com o COD da página, que vai pegar os valores da página page.php.
    $('#conteudo').load($(this).attr('href'));
    return false;

});

});
    </script>
     </head>
      <!--.navbar-collapse -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
  <img class="img-responsive" src="/intranetSDB/images/logo-sanrio-top.png" width="175" height="26" >
</div>
        <div id="navbar" class="navbar-collapse collapse">
                    <form method="post" action="index.php" name="loginform" class="navbar-form navbar-right">
            <div class="form-group">
              <input id="login_input_username" type="text" placeholder="Usuário" class="form-control login_input" name="user_name" required>
            </div>
            <div class="form-group">
              <input id="login_input_password" type="password" placeholder="Senha" class="form-control login_input" name="user_password" autocomplete="off" required>
            </div>
           <button type="submit" class="btn btn-success" name="login" value="Log in">Acesso Restrito</button>
<div class="login_input">

                       <?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>  
</div>
            </form>
           </div><!--/.navbar-collapse -->
   </div>
       
           <!--/.navbar-collapse -->
         </nav>
 

<div id='menu' class="col-sm-3 col-sm-2 sidebar">
          <ul class="nav nav-sidebar">
           <li><a href='page.php?cod=1'>INSTITUCIONAL</a></li>
            <li><a href='page.php?cod=2'>FORMULÁRIOS</a></li>
             <li class="disabled"><a href="#">FORMULÁRIO PAR</a></li>
            <li><a href='page.php?cod=4'>POLITICAS & PROCEDIMENTOS</a></li>    
             <li><a href='page.php?cod=5'>LISTA DE COLABORADORES</a></li>
            <li><a href='page.php?cod=6'>AGENDA</a></li>
            <li><a href='page.php?cod=7'>UTILIDADES</a></li>
               <li><a href='page.php?cod=8'>GALERIA DE FOTOS</a></li>  
          </ul>                          
        </div>
<!-- Aqui serão mostrados os conteúdos -->
<div id='conteudo'>

</div>

      <!-- Container (Footer Section) -->
<div class="container">
<div class="row text-center">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<footer><a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; 1976, 2016 SANRIO CO., LTD. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</div>
</div>
</div>


</body>
</html>
