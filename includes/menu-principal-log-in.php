<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
  <a class="navbar-brand" href="#">INTRANET SDB</a>
</div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
    
<a class="navbar-brand" href="#">Bem Vindo: <?php


 echo $_SESSION['user_name']; ?></a> 
      <li><a class="navbar-brand" href="index.php?logout">Logout</a></li>

     </ul>
   </div>
       
           <!--/.navbar-collapse -->
         </nav>
        <div class="col-sm-3 col-sm-2 sidebar">


          <ul class="nav nav-sidebar">
           <li><a href="http://192.168.1.3/intranetSDB/index.php">INSTITUCIONAL</a></li>
            <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_in/formulario.html">FORMULÁRIOS</a></li>
             <li class="disabled"><a href="#">FORMULÁRIO PAR</a></li>
            <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_in/politicasProcedimentos.html">POLITICAS & PROCEDIMENTOS</a></li>    
             <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_in/table_list_Adm.php">LISTA DE COLABORADORES</a></li>
            <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_in/agenda.html">AGENDA</a></li>
            <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_in/utilidades.html">UTILIDADES</a></li>
               <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_in/galeria.php">GALERIA DE FOTOS</a></li>  
          </ul>                          
        </div>


