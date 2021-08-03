
<?

if(!$_POST[sql]){$sql="select * from formpar";}else{$sql=$_POST[sql];}//se não tiver recebido uma sql por formulário, usa a sql padrão
	//include("conexao.php");

//$sql = "SELECT * FROM formpar INNER JOIN formpar_item on formpar.par_id=formpar_item.par_item_id";
 
function pag($sql,$np='25'){
	mysql_connect('localhost','root','sdb@debian'); 
	mysql_select_db('sdb_intranet'); //executa a conexão e seleção de banco de dados
	$q=mysql_query($sql);//executa a consulta
	$nc=mysql_num_fields($q);//número de campos afetados pelo resultado
	$nr=mysql_num_rows($q);//número de linhas do resultado
	$div='<script language="JavaScript">
		function ir(p){
			var np=parseInt(document.np.np.value);
			var obj;
			for(var i=1;i<np;i++){
				objv=document.getElementById(i).style.visibility="hidden";
				objd=document.getElementById(i).style.display="none";
			}
			document.getElementById(p).style.visibility="visible";
			document.getElementById(p).style.display="inline";
		}
		</script>'; //monta o javascript que irá exibir/ocultar a paginação
	for($i=0;$i<$nc;$i++){ //monta um array com os campos da consulta
		$campos[$i]=mysql_field_name($q,$i);
	}
	$p=1;//seta a primeira página
	$l=1;//seta a primeira linha
	$rows=1;//seta o contador geral de linhas
	while($r=mysql_fetch_array($q)){ //pega cada linha do resultado da consulta
		if($p==1){$visibility="visible";$display="inline";}else{$visibility="hidden";$display="none";}; //se é a primeira página, exibe o div, senão oculta o div
		if($l==1){//se é a primeira linha da página, coloca o título primeiro
			$div.='<div id="'.$p.'" style="position: relative;left: 0px;top: 0px; visibility: '.$visibility.'; display: '.$display.';"><table border="0" align="center" width="100%"><tr>';
			while(list($k,$c)=each($campos)){//monta cada coluna do título
				$div.='<td>'.$c.'</td>';
			}// fim while do título
			reset($campos);//resseta os campos
			$div.='</tr>';//fecha a linha do título
		}//fim do if da primeira linha (título)
		$div.='<tr>';//abre a linha de dados
		while(list($k,$c)=each($campos)){//monta as colunas de resultado
			$v=$r[$c];
			$div.='<td>'.$v.'</td>';
		}//fecha while que monta os dados
		reset($campos);//resseta os campos
		$div.='</tr>';//fecha linha do resultado
		if($l==$np || $rows==$nr){//se a linha é igual ao máximo de linhas por página ou se chegou à última linha do resultado
			$div.='</table></div>';//fecha a tabela
			$links.='[<a href="#" onClick="ir(''.$p.'')">'.$p.'</a>]';//monta o link para as páginas
			$p++;//próxima página
			$l=1;//reinicia a contagem de linha
		}else{//senão é o máximo de linhas da página
			$l++;//aumenta a linha
		}//fecha if do número de linhas
		$rows++;//aumenta o contador geral de linhas
	}//fim while que pega cada linha do resultado
	$div.='<form name="np"><input name="np" value="'.$p.'" type="hidden"></form><div align="center">'.$links.'</div>';
	echo $div;//escreve as páginas
}
 
?>
<html>
<head>
<title>Paginação com troca rápida</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
 
<body>
<fieldset><legend>Pesquisar</legend>
<form method="post">
SQL: <input type="text" name="sql" width="100" value="select * from collations"><input type="submit" value="Consultar">
</form>
</fieldset>
<fieldset><legend>SQL pesquisada:</legend><? echo $sql; ?></fieldset>
<? pag($sql);//coloque a string de consulta sql (obrigatório) e o número de páginas (opcional)?>
</body>
</html>