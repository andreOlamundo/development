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
         </nav>
        <div class="col-sm-3 col-sm-2 sidebar">

          <ul class="nav nav-sidebar">
           <li><a href="http://192.168.1.3/intranetSDB/index.php">INSTITUCIONAL</a></li>
            <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_out/formulario.html">FORMULÁRIOS</a></li>
             <li class="disabled"><a href="#">FORMULÁRIO PAR</a></li>
            <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_out/politicasProcedimentos.html">POLITICAS & PROCEDIMENTOS</a></li>    
             <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_out/table_list.php">LISTA DE COLABORADORES</a></li>
            <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_out/agenda.html">AGENDA</a></li>
            <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_out/utilidades.html">UTILIDADES</a></li>
               <li><a href="http://192.168.1.3/intranetSDB/dashboard/views/login_out/galeria.php">GALERIA DE FOTOS</a></li>  
          </ul>                          
        </div>