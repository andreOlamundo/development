   
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage">INTRANET</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
          <li> <a href="/intranetSDB/index.php">ACESSO RESTRITO</a></li>
          </ul>
          </div>
         
       
       <!-- <div id="navbar" class="navbar-collapse collapse">
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
           </div> -->
<!--/.navbar-collapse -->

      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-sm-2 sidebar">

          <ul class="nav nav-sidebar">
           <li><a href="institucional.html">INSTITUCIONAL</a></li>
            <li><a href="formulario.html">FORMULÁRIOS</a></li>
             <li class="disabled"><a href="#">FORMULÁRIO PAR</a></li>
            <li><a href="politicasProcedimentos.html">POLITICAS & PROCEDIMENTOS</a></li>    
             <li><a href="table_list.php">LISTA DE RAMAIS</a></li>
            <li><a href="agenda.html">AGENDA</a></li>
            <li><a href="utilidades.html">UTILIDADES</a></li>  
          </ul>
         
                  
        </div>
        </div>
        </div>
