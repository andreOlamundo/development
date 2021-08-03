<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<hr class="featurette-divider">
<?php 

@include("conec.php");


$rf2_depto =$_POST["rf2_depto"];
$rf8_dj =$_POST["rf8_dj"];
$rf6_ativofixo =$_POST["rf6_ativofixo"];
$rf5_poa =$_POST["rf5_poa"];


if(isset($_FILES['file_upload']))
   {
      require '../../WideImage/WideImage.php'; //Inclui classe WideImage à página

      date_default_timezone_set("Brazil/East");

      $name     = $_FILES['file_upload']['name']; //Atribui uma array com os nomes dos arquivos à variável
      $tmp_name = $_FILES['file_upload']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável
      //$error = $_FILES['file_upload']['error']; //O código de erro associado a este upload de arquivo
      

      $allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp"); //Extensões permitidas

      $dir = '../../uploads/';

      for($i = 0; $i < count($tmp_name); $i++) //passa por todos os arquivos
      {
         $ext = strtolower(substr($name[$i],-4));

         if(in_array($ext, $allowedExts)) //Pergunta se a extensão do arquivo, está presente no array das extensões permitidas
         {
            $new_name = date("Y.m.d-H.i.s") ."-". $i . $ext;

            $image = WideImage::load($tmp_name[$i]); //Carrega a imagem utilizando a WideImage

            //$image = $image->resize(170, 180, 'outside'); //Redimensiona a imagem para 170 de largura e 180 de altura, mantendo sua proporção no máximo possível
          //  $image = $image->crop('center', 'center', 170, 180); //Corta a imagem do centro, forçando sua altura e largura

            $image->saveToFile($dir.$new_name); //Salva a imagem
         }
         /*else{
          echo "Tipo de arquivo invalido, sao permitidos somente arquivos com extencao gif, jpeg, jpg, png, bmp.";
         }*/
      }
   }

$rf1_data_atual =$_POST["rf1_data_atual"];
$rf3_numero_par =$_POST["rf3_numero_par"];
$rf9_redp =$_POST["rf9_redp"];
$rf10_valor_total = str_replace(",",".",str_replace('.', '',$_POST["rf10_valor_total"]));
$user = $_POST["user"];

if(is_array($_POST['rf10_valor_item']) ){
 	foreach(str_replace(",",".",$_POST['rf10_valor_item']) as $item => $rf10_valor_item)
 	{
		for( $item=$item; $item<count(str_replace(",",".",$_POST['rf10_valor_item'])); $item++ )
{

$rf3_numero_par =$_POST['rf3_numero_par'];
$rf10_data_item =$_POST['rf10_data_item'][$item];
$rf10_dd_item =$_POST['rf10_dd_item'][$item];


	$rf10_valor_item =str_replace(",",".",$_POST['rf10_valor_item'][$item]).$query = "INSERT INTO `formpar_item`(`rf3_numero_par`, `rf10_valor_item`, `rf10_data_item`, `rf10_dd_item`) VALUES ('".$rf3_numero_par."', '".$rf10_valor_item."', '".$rf10_data_item."', '".$rf10_dd_item."')";

	$inserir = mysql_query($query);
}
	
	}
}else{
	break;
};

$query = "INSERT INTO `formpar` (`cod_depto`,`rf8_dj`, `rf6_ativofixo`, `rf5_poa`, `rf1_data_atual`, `rf3_numero_par`, `rf9_redp`,`rf10_valor_total`,`user` ) VALUES ('".$rf2_depto."','".$rf8_dj."','".$rf6_ativofixo."','".$rf5_poa."','".$rf1_data_atual."','".$rf3_numero_par."','".$rf9_redp."','".$rf10_valor_total."','".$user."')";


$inserir = mysql_query($query);
if ($inserir) {
  echo '
  <meta charset="UTF-8">
  <h1>Informações cadastradas com SUCESSO!</h1>
 <h2>Solicitar ao fornecedor a aposição do nº do PAR na NF (de serviço ou de produto);<br>
 Não serão autorizados quaisquer pagamentos de projetos sem o preenchimento correto deste documento;<br></h2>
';
} else {
  echo "Desculpe não foi possível efetuar o cadastro.";
  echo "Dados sobre o erro:" .mysql_error();
}

?>


 <hr class="featurette-divider">
</div>

</div>
</div>

