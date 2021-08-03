<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>
<hr class="featurette-divider">
<?php 

@include("conexao.php");


$RF2_DEPTO =$_POST["cod_depto"];
$RF8_DJ =$_POST["RF8_DJ"];
$RF6_AtivoFixo =$_POST["RF6_AtivoFixo"];
$RF5_POA =$_POST["RF5_POA"];
$RF1_DATA_ATUAL =$_POST["RF1_DATA_ATUAL"];
$RF3_NUMEROPAR =$_POST["RF3_NUMEROPAR"];
$RF9_REDP =$_POST["RF9_REDP"];
$RF10_VALOR =$_POST["RF10_VALOR"];
$RF10_DATA =$_POST["RF10_DATA"];
$RF10_DD =$_POST["RF10_DD"];




$query = "INSERT INTO `formpar` (`cod_depto`,`RF8_DJ`, `RF6_AtivoFixo`, `RF5_POA`, `RF1_DATA_ATUAL`, `RF3_NUMEROPAR`, `RF9_REDP`,`RF10_VALOR`, `RF10_DATA`, `RF10_DD` ) VALUES ('".$cod_depto."','".$RF8_DJ."','".$RF6_AtivoFixo."','".$RF5_POA."','".$RF1_DATA_ATUAL."','".$RF3_NUMEROPAR."','".$RF9_REDP."','".$RF10_VALOR."','".$RF10_DATA."','".$RF10_DD."')";

$inserir = mysql_query($query);
if ($inserir) {
  echo "Informações cadastradas com SUCESSO!";
} else {
  echo "Desculpe não foi possível efetuar o cadastro.";
  echo "Dados sobre o erro:" .mysql_error();
}
?>



 <hr class="featurette-divider">
</div>

</div>
</div>
