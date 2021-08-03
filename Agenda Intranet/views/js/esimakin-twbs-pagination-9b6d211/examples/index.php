<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>jQuery Pagination plugin</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="../jquery.twbsPagination.js" type="text/javascript"></script>
</head>
<body>
	<table class="table table-striped">
	<tr>

		<td><strong>Nº PAR</strong></td>
		<td><strong>Data do Cadastro</strong></td>
		<td><strong>Responsável</strong></td>
		<td><strong>Departamento</strong></td>
		<td><strong>Valor total do PAR</strong></td>
		<td><strong>Descrição Justificativa</strong></td>
		<td><strong>Ações</strong></td>

		</tr>


		<?php 

		include("conexao.php");

		$busca = "SELECT * FROM formpar INNER JOIN formpar_item on formpar.par_id=formpar_item.par_item_id
		 ";

$total_reg = "10"; // número de registros por página

$pagina=$_GET['pagina'];
if (!$pagina) {
	$pc = "1";
} else {
	$pc = $pagina;
}

$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");


$tr = mysql_num_rows($todos); // verifica o número total de registros

$tp = $tr / $total_reg; // verifica o número total de páginas

// vamos criar a visualização
while ($dados = mysql_fetch_array($limite)) { ?>
<tr>

	<tr>
		<td><?php echo $rf3_numero_par = $dados["rf3_numero_par"];?></td>
			<td><?php echo $rf1_data_atual =$dados["rf1_data_atual"];?></td>
			<td><?php echo $user =$dados["user"]; ?></td>
			<td><?php echo $cod_depto = $dados["cod_depto"];?></td>
			<td><?php echo $rf10_valor_total =$dados["rf10_valor_total"];?></td>
			<td><?php echo $rf8_dj =$dados["rf8_dj"];?></td>
		
			<td>
				<a href='page.php?cod=5.2'><button type="button" class="btn btn-info btn-xs inline">Detalhar</button></a><button type="button" class="btn btn-xs">Editar</button>
			</td>

	</tr>
	<?php }
	$anterior = $pc -1;
	$proximo = $pc +1;
	if ($pc>1) {
		echo " <a href='?pagina=$anterior'><- Anterior</a> ";
	}
	echo "|";
	if ($pc<$tp) {
		echo " <a href='?pagina=$proximo'>Próxima -></a>";
	}
	?>
</table>
<div class="container">
    <nav aria-label="Page navigation">
        <ul class="pagination" id="pagination"></ul>
    </nav>
</div>
<script type="text/javascript">
    $(function () {
        window.pagObj = $('#pagination').twbsPagination({
            totalPages: 35,
            visiblePages: 10,
            onPageClick: function (event, page) {
                console.info(page + ' (from options)');
            }
        }).on('page', function (event, page) {
            console.info(page + ' (from event listening)');
        });
    });
</script>
</body>
</html>