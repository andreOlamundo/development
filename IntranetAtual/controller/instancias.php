<?php


// Aqui ele pega o valor da varíavel do navegador.
$cod = $_GET['cod'];

// A condição switch faz com que o valor dos códigos do primeiro script represente uma página html que carregará na div conteudo.
switch($cod){

case '1'; // Aqui por exemplo, lá é page.php?cod=1, certo? Então ela vai carregar a página "home"institucional.html na div conteúdo.
include('../views/login_out/institucional.php');
break;
case '2'; // Aqui tambem, lá é page.php?cod=2, então ela carregará a página de formulario.html.'div conteúdo'
include('../views/login_out/formulario.html');
break;
/*case '2.1'; // Direto pelo index.php*/

case '4'; // Aqui tambem, lá é page.php?cod=4, então ela carregará a politicasProcedimentos.html.'div conteúdo'
include('../views/login_out/politicasProcedimentos.html');
break;
case '5'; // Aqui tambem, lá é page.php?cod=5, então ela carregará a página de table_list.html.'div conteúdo'
include('../views/login_out/table_list.php');
break;
case '5.1'; // Aqui tambem, lá é page.php?cod=5.1, então ela carregará a página de table_list_Adm.'div conteúdo'
include('../views/login_in/teste_form.php');
break;
case '5.2'; // Aqui tambem, lá é page.php?cod=5.2, então ela carregará a página de CADASTRAR.'div conteúdo'
include('../views/login_in/cadastro_lr.php');
break;
case '5.3'; // Aqui tambem, lá é page.php?cod=5.3, então ela carregará a página de ALTERAR/EXCLUIR.'div conteúdo'
include('../views/login_in/controle_lr.php');
break;
case '6'; // Aqui tambem, lá é page.php?cod=6, então ela carregará a página de iframe'agenda'.'div conteúdo'
include('../views/login_out/agenda.html');
break;

case '6.1'; // Aqui tambem, lá é page.php?cod=6.1, então ela carregará a página de iframe'googleMap'.'div conteúdo'
include('../views/login_out/localizacao.html');
break;

case '7'; // Aqui tambem, lá é page.php?cod=7, então ela carregará a página de utilidades.html.'div conteúdo'
include('../views/login_out/utilidades.html');
break;
case '8'; // Aqui tambem, lá é page.php?cod=8, então ela carregará a página galeria.html.'div conteúdo'
include('../views/login_out/galeria.php');
break;
case '8.1'; // Aqui tambem, lá é page.php?cod=8.1, então ela carregará o médoto que busca as imagens diadafamilia2016php.'div conteúdo'
include('../views/images/fotos/CCXP2016/CCXP2016.php');
break;
case '8.2'; // Aqui tambem, lá é page.php?cod=8.2, então ela carregará o médoto que busca as imagens diadafamilia2016php.'div conteúdo'
include('../views/images/fotos/spdiversoes/spdiversoes.php');
break;
case '8.3'; // Aqui tambem, lá é page.php?cod=8.3, então ela carregará o médoto que busca as imagens diadafamilia2016php.'div conteúdo'
include('../views/images/fotos/summit2017/summit2017.php');
break;
case '8.4'; // Aqui tambem, lá é page.php?cod=8.4, então ela carregará o médoto que busca as imagens diadafamilia2016php.'div conteúdo'
include('../views/images/fotos/diadafamilia2016/diadafamilia2016.php');
break;
case '9'; // Aqui tambem, lá é page.php?cod=8.4, então ela carregará o médoto que busca as imagens diadafamilia2016php.'div conteúdo'
include('register.php');
break;
case '10'; // Aqui tambem, lá é page.php?cod=8.4, então ela carregará o médoto que busca as imagens diadafamilia2016php.'div conteúdo'
include('register.php');
include('index.php');
break;

case '11'; // Aqui tambem, lá é page.php?cod=8.4, então ela carregará o médoto que busca as imagens diadafamilia2016php.'div conteúdo'
include('formpar.php');
include('index.php');
break;
}
?>
