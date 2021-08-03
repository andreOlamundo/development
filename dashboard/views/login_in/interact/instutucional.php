
<!DOCTYPE html>
<html LANG="pt-br.UTF8">
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
    <link href="/intranetSDB/dashboard/dashboard.css" rel="stylesheet">   
     <script src="\intranetSDB\bootstrap-3.3.7\docs\assets\js\ie-emulation-modes-warning.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="\intranetSDB\js\main.js"></script>

  </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
      <!-- Container (MeNU Section) -->


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
          <!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="index.php?logout">Logout</a>
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
           <li><a href="dashboard/institucional.html">INSTITUCIONAL</a></li>
            <li><a href="dashboard/formulario.html">FORMULÁRIOS</a></li>
             <li class="disabled"><a href="#">FORMULÁRIO PAR</a></li>
            <li><a href="dashboard/politicasProcedimentos.html">POLITICAS & PROCEDIMENTOS</a></li>    
             <li><a href="dashboard/interact/table_list_Adm.php">LISTA DE COLABORADORES</a></li>
            <li><a href="agenda.html">AGENDA</a></li>
            <li><a href="utilidades.html">UTILIDADES</a></li>  
          </ul>
         
                  
        </div>
        </div>
        </div>


div class="container-fluid">
  <div class="row">
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Institucional</h2>
<hr class="featurette-divider">
        <h4>"...Seres humanos precisam uns dos outros. Nós nos ajudamos a sobreviver e a levar uma vida cheia de sentido. Acreditamos e dependemos de nossos companheiros. Talvez seja isto a felicidade".
            </h4>
              <blockquote>
               <footer>Sr Shintaro Tsuji</br>Presidente e CEO da Sanrio
               </footer>
              </blockquote><br>
 <div class="row slideanim">
        <div class="col-lg-4">
          <div class="thumbnail">
     
          <img class="img-circle" src="http://192.168.1.3/intranetSDB/images/institucional/20170221_0917012.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Visão </h2>
          <p>A visão da Sanrio é promover a comunicação social compartilhando felicidade, amizade e diversão através da Criatividade e Inovação.</p>
          
          </div><!--/ .thumbnail-->

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <div class="thumbnail">
          <img class="img-circle" src="http://192.168.1.3/intranetSDB/images/institucional/20170221_0914112.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Missão</h2>
          <p>A missão da Sanrio é criar e desenvolver propriedades intelectuais originais e as colocar em prática com uma variedade de produtos de qualidade, serviços e atividade que inspirem nossos consumidores a terem experiências únicas e exclusivas no mundo inteiro.</p>
          
         </div><!--/ .thumbnail-->


        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         <div class="thumbnail">
          <img class="img-circle" src="http://192.168.1.3/intranetSDB/images/institucional/20170214_1335002.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Valores</h2>
          <p>Felicidade, Amizade, Comprometimento, Respeito, Transparencia, Ética e Confiança.</p>
                    </div><!--/ .thumbnail-->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

     <hr class="featurette-divider">


<div class="panel-group text-center" id="accordion">
     <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">SANRIO </a>
        </h4>
      </div>
        <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">A Sanrio é a designer e distribuidora mundial de artigos de papelaria, material escolar, presentes e acessórios, que trazem como marca os seus personagens. A Sanrio talvez seja mais conhecida pela Hello Kitty®, nossa estrela e símbolo corporativo. Porém ela é apenas um de muitos personagens e desenhos da Sanrio que trazem vida a nossos produtos . Entre os outros personagens estão o Pochacco®, nosso cachorrinho atleta, e o levado Badtz Maru®.

  A Sanrio foi fundada em 1960 por Shintaro Tsuji, que criou uma linha de produtos com personagens para as ocasiões em que as pessoas precisam presentear alguém. Hoje, o Sr. Tsuji é o presidente da Sanrio Company, Ltd. , sediada em Toquio e com distribuidores por todo o Japão, Sudeste Asiático, Américas e Europa.

  A Sanrio Inc., subsidiária da Sanrio Co., Ltd, está sediada no sul de San Francisco, na California. A Sanrio Inc. distribui produtos pela America do Norte, Central e do Sul. A Sanrio começou no ocidente em 1976 com uma loja no Eastridge Mall em San Jose, California. Hoje nas Américas, mais de 4000 localidades exibem com orgulho os produtos com os personagens Sanrio. A Sanrio é proprietária e operadora de mais de 40 destas lojas. As demais são de propriedade de operadores independentes que partilham da nossa filosofia “pequeno presente, grande sorriso”.</div>
      </div>
      </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">COMUNICAÇÃO SOCIAL</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Nosso objetivo de oferecer os meios para enriquecer a comunicação interpessoal permanece consistente em todas as atividades da Sanrio por todos os continentes. O ato de presentear está no coração do nosso negócio, e vemos cada cliente como o comprador de um presente – mesmo que seja apenas uma lembrancinha para ele mesmo. Um pequeno presente traz de fato um grande sorriso. A Sanrio fornece um veículo aos jovens, e aos jovens de coração, para que possam expressar seus sentimentos a amigos e familiares – cada produto nosso traz uma mensagem de amizade e felicidade. Presentear alguém com um gracioso kit de papel de carta da Hello kitty não diz apenas “vamos manter contato”, ele oferece o meio para fazê-lo.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">PEQUENO PRESENTE, GRANDE SORRISO</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">É mais do que uma frase de efeito, é a base de tudo o que fazemos, e temos o orgulho de dizer que temos criado sorrisos por mais de 40 anos. Na Sanrio nós acreditamos que um presente é mais do que apenas um presente. È um meio de expressarmos nossos sentimentos por outras pessoas. Seja criando um artigo de papelaria, uma loja ou uma série de desenho animado para a TV, esta filosofia está sempre presente nas atividades da Sanrio. De nossas lojas e quiosques, que exibem as últimas coleções da Sanrio, até os espaços menores que oferecem nossos produtos, convidamos todos os nossos amigos e visitantes para experimentar a mágica destas quatro simples 
        </div>
      </div>
    </div>
   </div>  
  <hr class="featurette-divider">
   </div>
    </div>

       <!-- Container (Footer Section) -->

<div id="footer">
  
</div>
</div>


</body>
</html>