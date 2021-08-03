<head>

   <script type="text/javascript">

            //Funcao adiciona uma nova linha na tabela
            function adicionaLinha(idTabela) {
                var tabela = document.getElementById(idTabela);
                var numeroLinhas = tabela.rows.length;
                var linha = tabela.insertRow(numeroLinhas);
                var celula1 = linha.insertCell(0);
                var celula2 = linha.insertCell(1);   
                var celula3 = linha.insertCell(2);
                var celula4 = linha.insertCell(3); 
                celula1.innerHTML = "<input type='text' required='required' placeholder='R$ 0,00 ' maxlength='15' name='rf10_valor_item[]' onblur='calcular(this)' pattern='([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$' class='valor' size='15' onkeypress='mascara( this, mvalor );'>";
                celula2.innerHTML =  "<input type='date' required='required' maxlength='10' name='rf10_data_item[]' id='rf10_data_item' pattern='[0-9]{2}\/[0-9]{2}\/[0-9]{4}$'' min='2018-01-01' max='2020-12-01' class='form-control' />"; 
                  celula3.innerHTML =  "<textarea class='form-control' rows='1' cols='50' id='rf10_dd_item' name='rf10_dd_item[]' placeholder='Digite Aqui:' required='required' class='form-control'></textarea>"; 
                celula4.innerHTML =  "<button class='btn btn-danger' onclick='removeLinha(this)'>Remover</button>";
            }  

// funcao remove uma linha da tabela
  function removeLinha(linha) {
  var i=linha.parentNode.parentNode.rowIndex;
  document.getElementById('tbl').deleteRow(i);

  var total = 0;
  var x = document.getElementsByClassName('valor');
  for (var i = 0; i < x.length; i++) {
  total +=  parseFloat(x[i].value.replace(',','.'));
            						}
  document.getElementById('result').value = String(total.toFixed(2)).formatMoney();
  
 }

// funcao mascara campo valor onkeypress
  function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
// funcao mascara campo valor onkeypress
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
// funcao mascara alternativa para numeros (Não utilizada)
function mnum(v){
    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
    return v;
}
// funcao mascara campo valor onkeypress
function mvalor(v){
    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
   v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milhões

   v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares
        
    v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
    return v.replace('.','');
}

// funcao Mascara em formato Real TOTALR$
String.prototype.formatMoney = function() {
    var x = this;
   
  if(x.indexOf('.') === -1) {

   x = x.replace(/([\d]+)/, "$1,00");
    }

   x = x.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
   x = x.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
   x = x.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");


    return x;
}
// funcao calcula as linhas com valores da tabela
function calcular() {
 var total = 0;
 var x = document.getElementsByClassName('valor');
 for (var i = 0; i < x.length; i++) {
 total +=  parseFloat(x[i].value.replace(',','.'));
            						}
 document.getElementById("result").value = String(total.toFixed(2)).formatMoney();
            		}
  </script>       

</head>
    
<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<!-- Form Name -->
<h2>Project Approval Request - PAR</h2>
<hr class="featurette-divider">


<!-- Select Multiple Departamento -->
<form id="Registerpar" name="Registerpar" method="post" action="model\classes\Registropar.php" enctype="multipart/form-data">


<div class="col-sm-4">
<div class="form-group">
<label for="rf2_depto">Departamento</label>
<select class="form-control" id="rf2_depto" type="text" name="rf2_depto" required>
<option value>---- Selecione ----</option>
    <?php

@include("conec.php");

$sql = "SELECT * FROM departamento ORDER BY nome_depto ASC";
$resultado = mysql_query($sql) or die("Não foi possivel realizar a consulta");
?>

<?php while($linha = mysql_fetch_array($resultado)){ 
$rf2_depto = $linha["rf2_depto"];
$nome_depto = $linha["nome_depto"];
?>


<option><?=$nome_depto;?><br></option>
<?php
}
?>
</select>
</div>
<!-- Textarea RF8_Decricao_Justificativa -->

<div class="form-group">
      <div class="input-group">
      <span class="input-group-addon">Descrição <br>/ Justificativa</span>                
    <textarea class="form-control" rows="6" id="rf8_dj" name="rf8_dj" placeholder="Digite Aqui:" title="Breve descriçaõ da motivação de abertura de registro do PAR!" required></textarea>
  </div>
</div>
 </div>


<!-- Multiple Checkboxes -->
<div class="col-sm-4"> 
<div class="form-group">

  <label for="rf6_ativofixo">Ativo Fixo?</label><br>
 
      <input class="inline-radio" type="radio" name="rf6_ativofixo" id="rf6_ativofixo" value="Y"/>
      Sim
  
      <input class="inline-radio" type="radio" checked="checked" name="rf6_ativofixo" id="rf6_ativofixo"  value="N"/>
      Não
 </div>


<!-- Multiple Checkboxes -->
<div class="form-group">
  <label for="rf5_poa">Previsão no orçamento anual?</label><br>
      <input class="inline-radio" type="radio" name="rf5_poa" id="rf5_poa" value="Y"/>
      Sim  
 
      <input class="inline-radio" type="radio" checked="checked" name="rf5_poa" id="rf5_poa" value="N"/>
      Não
 
  </div>


<!-- File Button --> 
<div class="form-group">
  <label for="file_upload">Anexo de Documentos</label>
    <input type="file" name="file_upload[]" multiple>
  </div>
</div>


<div class="col-sm-4">
<div class="input-group"> 
	<span class="input-group-addon">Nº PAR</span>
 <input  class="form-control"  id="rf3_numero_par" name="rf3_numero_par" type="number" pattern="[0-9]+$" title="Numero de registro do PAR!" placeholder="Numero do PAR" required="required" />
</div><br>

	<div class="input-group">
    	 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
    		<input id='rf1_data_atual' name="rf1_data_atual" type='text' class="form-control" value='<?php echo date("d/m/Y H:i:s "); ?>' readonly>
    </div><br>


 <!--RF9_REDP-->
    <div class="input-group">
      <span class="input-group-addon">Retornos Estimados<br> do Projeto</span>                
    <textarea class="form-control" id="rf9_redp" rows="4"  name="rf9_redp" placeholder="(tangíveis / intangíveis)" required></textarea>
  </div>                 
  </div>


<!-- RF10_Previsão_De_Desembolso_Do_Projeto -->

<div class="col-sm-12">
<div class="form-group">
 <!-- <label for="RF10_PDPROJETO">Previsão de desembolso do Projeto</label>-->        
     <table class="table table-bordered" id="tbl" border="0"> 
       	<tbody>	
        <tr>
          
           <td colspan="6" align="center"><strong>PREVISÃO DE DESEMBOLSO DO PROJETO</strong></td>
        </tr> 	
        <tr>
          <td><strong>Valor: (R$)</strong></td>
          <td><strong>Previsão de desembolso</strong></td>
          <td><strong>Descrição da despesa</strong></td>
          <td><strong>Acão</strong></td>       	
     	  <td class="input-group">
    	  <span class="input-group-addon"><strong>Total: (R$)</strong></span>
    	  <input type="text" required="required" class="form-control" placeholder="R$ 0,00" name="rf10_valor_total" id="result" value="0,00" readonly>
 	      </td>
 	      <td>
 	      	<button class="btn btn-success" onclick="adicionaLinha('tbl')">Adicionar</button>
 	      </td>
 	      </tr>    
 		</tbody>  	
</table>
  </div>
</div>
<!-- Post User atual -->
 <input type="hidden" name="user" value='<?php echo $_SESSION['user_firstname']; ?>'/>


<!-- Submete Form -->
<div class="col-sm-12">
	<hr class="featurette-divider">
<input type="submit" value="Registrar" name="Registerpar">
</div>
</form>
</div>
</div>
</div>
