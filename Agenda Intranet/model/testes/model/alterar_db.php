<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterando</h2>
<hr class="featurette-divider">
<?php 

$user_namecolab = $_POST['user_namecolab'];
/*$user_sobrenome = $_POST['user_sobrenome'];
$user_email = $_POST['user_email'];
$cod_depto = $_POST['cod_depto'];
$nome_depto = $_POST['nome_depto'];
$cod_cargo = $_POST['cod_cargo'];
$user_name = $_POST['user_name'];
$user_ramal = $_POST['user_ramal'];*/

$user_id = $_POST["user_id"];

   
        if (isset($_POST["user_id"])) {

           @include("conec.php");

            $sql = "SELECT user_id FROM users WHERE user_id = ('" . $user_id . "');";
            $resultado = mysql_query($sql) or die("Não foi desta vez");

            if ($resultado->num_rows == 1) {

            	
            	$sql = "UPDATE users SET (user_id '".$user_id."', user_namecolab '".$user_namecolab."')";
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados!");
echo "<h1>Registro Alterado com sucesso!</h1>";
                } else{
                	echo "<h1>Erro/h1>"
                }


        }
    





?>
</div>
</div>
</div>
