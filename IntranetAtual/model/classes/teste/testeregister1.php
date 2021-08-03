<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<hr class="featurette-divider">
<?php 

@include("conec.php");


$RF2_DEPTO =$_POST["cod_depto"];
$RF8_DJ =$_POST["RF8_DJ"];
$RF6_AtivoFixo =$_POST["RF6_AtivoFixo"];
$RF5_POA =$_POST["RF5_POA"];
$RF1_DATA_ATUAL =$_POST["RF1_DATA_ATUAL"];
$RF3_NUMEROPAR =$_POST["RF3_NUMEROPAR"];
$RF9_REDP =$_POST["RF9_REDP"];
$RF10_VALORTOTAL =$_POST["RF10_VALORTOTAL"];
//$RF10_VALORTOTAL = str_replace(".","",$_POST["RF10_VALORTOTAL"]);
//$RF10_VALORTOTAL = str_replace(",",".",$RF10_VALORTOTAL);
$RF10_DATAITEM =$_POST["RF10_DATAITEM"];
//$RF10_VALORITEM =$_POST['RF10_VALORITEM'];
$RF10_DDITEM =$_POST["RF10_DDITEM"];


if(is_array($_POST['RF10_VALORITEM']) ){

for( $i=0; $i<count($_POST['RF10_VALORITEM']); $i++ )
{

$_POST['RF10_VALORITEM'][$i].$query = "INSERT INTO `itemformpar`(`RF10_VALOR`) VALUES ('".$_POST['RF10_VALORITEM']."')";
$inserir = mysql_query($query);
if ($inserir) {
  echo "Informações do ARRAY cadastradas com SUCESSO!";
} else {
  echo "Desculpe não foi possível efetuar o cadastro das Informações do ARRAY .";
  echo "Dados sobre o erro de gravação do ARRAY:" .mysql_error();
}
			
	
}
}


$query = "INSERT INTO `formpar` (`cod_depto`,`RF8_DJ`, `RF6_AtivoFixo`, `RF5_POA`, `RF1_DATA_ATUAL`, `RF3_NUMEROPAR`, `RF9_REDP`,`RF10_VALORTOTAL` ) VALUES ('".$RF2_DEPTO."','".$RF8_DJ."','".$RF6_AtivoFixo."','".$RF5_POA."','".$RF1_DATA_ATUAL."','".$RF3_NUMEROPAR."','".$RF9_REDP."','".$RF10_VALORTOTAL."')";


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
