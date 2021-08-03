<!DOCTYPE html>
<html lang="pt-br" class="no-js">
  <head>
    <title>INTRANET_SDB</title>
     <meta name="description" content="PROJETO INTRANETSDB">
    <meta name="author" content="TI SANRIO"> 
    <meta charset="UTF-8">
    <meta charset="ISO-8859-1">
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="views/images/favicon.gif">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="views/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="views/css/album.css"> 
    <link rel="stylesheet" type="text/css" href="views/css/lightbox.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="views/js/lightbox-2.6.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.13.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type='text/javascript' src='http://code.jquery.com/jquery-1.5.1.min.js'></script>
      <script type='text/javascript'>
    $(document).ready(function(){
// Executa o evento CLICK em todos os links do menu
    $('#menu a').live('click',function(){

 // Faz o carregamento da pÃƒÂ¡gina de acordo com o COD da pÃƒÂ¡gina, que vai pegar os valores da pÃƒÂ¡gina page.php.
    $('#conteudo').load($(this).attr('href'));
    return false;
});

});
    </script>
     </head>
      <!--.navbar-collapse -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="col-lg12 col-sm-12 col-md-12">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
  <img class="img-responsive" src="/intranetSDB/images/logo-sanrio-top.png" width="120" height="26" style="position: absolute; left: 40px; top: 10px;" >
</div>
    <div class="navbar-collapse" id="mynavbar">

    <ul class="nav navbar-nav navbar-right">    

        
        <span class="navbar-brand">Olá: <?php echo $_SESSION['user_firstname']; ?></span><span class="navbar-brand">|</span>
 <li><a href="index.php?logout"><span class="glyphicon glyphicon-off"></span>LogOut</a></li>
     </ul>
   </div>
   </div>       
     </nav>
 

<div id='menu' class="col-sm-2 sidebar">
          <ul class="nav nav-sidebar">
           <li><a href='controller/instancias.php?cod=1'>INSTITUCIONAL</a></li>
           <li><a href='controller/instancias.php?cod=2'>FORMULÁRIOS</a></li>
           <li><a href='index.php?cod=2.1'>FORMULÁRIO PAR</a></li>
           <li><a href='controller/instancias.php?cod=4'>POLITICAS & PROCEDIMENTOS</a></li>    
           <li><a href='controller/instancias.php?cod=5.1'>LISTA DE COLABORADORES</a></li>
           <li><a href='controller/instancias.php?cod=6'>AGENDA</a></li>
           <li><a href='controller/instancias.php?cod=7'>UTILIDADES</a></li>
           <li><a href='controller/instancias.php?cod=8'>GALERIA DE FOTOS</a></li>
           <li><a href='controller/instancias.php?cod=9'>NEW CADASTRO</a></li>
          </ul>                          
        </div>
<!-- Aqui serÃƒÂ£o mostrados os conteÃƒÂºdos -->
<div id='conteudo'>

</div>

</body>
 
      <!-- Container (Footer Section) 
<div class="container-fluid">
<div class="row text-center">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">   
<footer style="position: absolute; margin-top: 50%; margin-left: 35%; "><a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; 1976, 2018 SANRIO CO., LTD. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</div>
</div>
</div>-->


</body>
</html>
