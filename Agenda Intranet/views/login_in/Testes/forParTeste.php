  <head>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
                celula1.innerHTML = "<input type='tel' required='required' placeholder='R$ ' maxlength='15' name='RF10_VALORITEM[]' id='RF10_VALORITEM' onblur='calcular()' pattern='([0-9]{1,3}\ )?[0-9]{1,3},[0-9]{2}$' class='valor'/>";
                celula2.innerHTML =  "<input type='date' required='required' maxlength='10' name='RF10_DATAITEM[]' id='RF10_DATAITEM' pattern='[0-9]{2}\/[0-9]{2}\/[0-9]{4}$'' min='2018-01-01' max='2020-12-01' class='form-control' />"; 
                  celula3.innerHTML =  "<textarea class='form-control' rows='1' cols='50' id='RF10_DDITEM' name='RF10_DDITEM[]' placeholder='Digite Aqui:' required='required' class='form-control'></textarea>"; 
                celula4.innerHTML =  "<button class='btn btn-danger' onclick='removeLinha(this)'>Remover</button>";
            }            
            // funcao remove uma linha da tabela
            function removeLinha(linha) {
              var i=linha.parentNode.parentNode.rowIndex;
              document.getElementById('tbl').deleteRow(i);
            }


String.prototype.formatMoney = function() {
    var x = this;
   
    if(x.indexOf('.') === -1) {
           x = x.replace(/([\d]+)/, "$1,00");

    }

    x = x.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
   x = x.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
  x = x.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");


    return x;
};
            // funcao calcula as linhas com valores da tabela
            function calcular() {
            var total = 0;
            var x = document.getElementsByClassName("valor");
            for (var i = 0; i < x.length; i++) {

            total +=  parseFloat(x[i].value.replace( ',','.')*100 : 0);

           
          
            }
             document.getElementById("result").value = String(total/100).formatMoney();
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
<form method="post" action="model\classes\Registropar.php" enctype="multipart/form-data">

<div class="col-sm-4">
<div class="form-group">
<label for="RF2_DEPTO">Departamento</label>
<select class="form-control" id="RF2_DEPTO" type="text" name="cod_depto" required>
    <?php

@include("conec.php");

$sql = "SELECT * FROM departamento ORDER BY nome_depto ASC";
$resultado = mysql_query($sql) or die("Não foi desta vez");
?>

<?php while($linha = mysql_fetch_array($resultado)){ 
$cod_depto = $linha["cod_depto"];
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
    <textarea class="form-control" rows="6" id="RF8_DJ" name="RF8_DJ" placeholder="Digite Aqui:" title="Breve descriçaõ da motivação de abertura de registro do PAR!" required></textarea>
  </div>
</div>
 </div>



<!-- Multiple Checkboxes -->
<div class="col-sm-4"> 
<div class="form-group">

  <label for="RF6_AtivoFixo">Ativo Fixo?</label><br>
 
      <input class="w3-radio" type="radio" name="RF6_AtivoFixo" id="RF6_AtivoFixo" value="Y"/>
      Sim
  
      <input class="w3-radio" type="radio" checked="checked" name="RF6_AtivoFixo" id="RF6_AtivoFixo"  value="N"/>
      Não
 </div>


<!-- Multiple Checkboxes -->
<div class="form-group">
  <label for="RF5_POA">Previsão no orçamento anual?</label><br>
      <input class="w3-radio" type="radio" name="RF5_POA" id="RF5_POA" value="Y"/>
      Sim  
 
      <input class="w3-radio" type="radio" checked="checked" name="RF5_POA" id="RF5_POA" value="N"/>
      Não
 
  </div>


<!-- File Button --> 
<div class="form-group">
  <label for="fileUpload">Anexo de Documentos</label>
    <input id="fileUpload" name="fileUpload" type="file">
  </div>
</div>


<div class="col-sm-4">
<div class="input-group"> 
	<span class="input-group-addon">Nº PAR</span>
 <input  class="form-control"  id="RF3_NUMEROPAR" name="RF3_NUMEROPAR" type="number" pattern="[0-9]+$" title="Numero de registro do PAR!" placeholder="Numero do PAR" required="required" />
</div><br>

	<div class="input-group">
    	 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
    		<input id='RF1_DATA_ATUAL' name="RF1_DATA_ATUAL" type='text' class="form-control" value='<?php echo date("d/m/Y H:i:s "); ?>' readonly>
    </div><br>


 <!--RF9_REDP-->
    <div class="input-group">
      <span class="input-group-addon">Retornos Estimados<br> do Projeto</span>                
    <textarea class="form-control" id="RF9_REDP" rows="4"  name="RF9_REDP" placeholder="(tangíveis / intangíveis)" required></textarea>
  </div>                 
  </div>
 

<!-- RF10_Previsão_De_Desembolso_Do_Projeto -->

<div class="col-sm-12">
<div class="form-group">
  <label for="RF10_PDPROJETO">Previsão de desembolso do Projeto</label>        
     <table class="table table-bordered" id="tbl" border="0"> 
       	<tbody>	 	
        <tr>
          <td><strong>Valor</strong></td>
          <td><strong>Previsão de desembolso</strong></td>
          <td><strong>Descrição da despesa</strong></td>
          <td><strong>Acão</strong></td>       	
     	  <td class="input-group">
    	  <span class="input-group-addon"><strong>Total: R$</strong></span>  
 		  <input type="text" class="form-control" name="RF10_VALORTOTAL" id="result" readonly>
 	      </td>
 	      <td>
 	      	<button class="btn btn-success" onclick="adicionaLinha('tbl')">Adicionar</button>
 	      </td>
 	      </tr>    
 		</tbody>  	
</table>
  </div>
</div>


	<!--<tfoot>
     	<tr>
     	<td colspan="4" style="text-align: left;">             
        <button class="btn btn-success" onclick="adicionaLinha('tbl')">Adicionar</button>
         </td>
     	</tr>
 	   </tfoot>-->



<br>
<div class="col-sm-4">
<input type="submit" value="Submit" name="Registerpar">
</div>
</form>
<br>

<!--Orientações de preenchimento-->
<div class="col-sm-12">
  <span class="glyphicon glyphicon-warning-sign" name="RF10">Solicitar ao fornecedor a aposição do nº do PAR na NF (de serviço ou de produto);</span>
              <span class="glyphicon glyphicon-warning-sign">Não serão autorizados quaisquer pagamentos de projetos sem o preenchimento correto deste documento;</span>



</div>
</div>
</div>
</div>
