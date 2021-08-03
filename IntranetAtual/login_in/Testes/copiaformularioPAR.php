<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h2>FORMULÁRIO PAR</h2>
<hr class="featurette-divider">
<!-- Select Multiple -->
<div class="form-group">
   <div class="col-sm-4">
 <label for="login_input_depto">Departamento</label>
<select class="form-control" id="login_input_depto" type="text" name="cod_depto" required>

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
</div>

<!-- Textarea -->
<div class="form-group">
   <div class="col-sm-4"> 
  <label for="RF8_Decricao_Justificativa">Descrição / Justificativa</label>                   
    <textarea class="form-control" id="RF8_Decricao_Justificativa" name="RF8_Decricao_Justificativa" placeholder="Digite Aqui:"></textarea>
  </div>
</div>

<!-- Textarea
<div class="form-group">
  <label class="col-md-4 control-label" for="RF9_REDP">Retornos Estimados do Projeto</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="RF9_REDP" name="RF9_REDP" placeholder="Digite Aqui:"></textarea>
  </div>
</div> -->

<!-- File Button --> 
<div class="form-group">
   <div class="col-sm-4"> 
  <label for="RF7_Anexo_De_Documentos">Anexo de Documentos</label>
    <input id="RF7_Anexo_De_Documentos" name="RF7_Anexo_De_Documentos" class="input-file" type="file">
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
   <div class="col-sm-4"> 
  <label for="RF6_Ativo_Fixo">Ativo Fixo?</label><br>
 
      <input type="radio" name="RF6_Ativo_Fixo" id="RF6_Ativo_Fixo-0" value="Y">
      Sim
  
      <input type="radio" checked="checked" name="RF6_Ativo_Fixo" id="RF6_Ativo_Fixo-1"  value="N">
      Não
 
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
   <div class="col-sm-4">
  <label for="RF5_Previsão_No_Orçamento_Anual">Previsão no orçamento anual?</label><br>
      <input type="radio" name="RF5_Previsão_No_Orçamento_Anual" id="RF5_Previsão_No_Orçamento_Anual-0" value="Y">
      Sim  
 
      <input type="radio" checked="checked" name="RF5_Previsão_No_Orçamento_Anual" id="RF5_Previsão_No_Orçamento_Anual-1" value="N">
      Não
  
  </div>
</div>

<!-- Button -->
<div class="form-group">
   <div class="col-sm-4">
  <label for="RF10_Previsão_De_Desembolso_Do_Projeto">Previsão de desembolso do Projeto</label><br>
 

        <button onclick="adicionaLinha('tbl')">Adicionar</button>
        <table id="tbl" border="1">
        <tr>
          <td>Produto</td>
          <td>Valor</td>
          <td>Acao</td>
        </tr>
        </table>  
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-sm-4 control-label" for="RF12_Campo_Salvar"></label>
  <div class="col-md-8">
    <button id="RF12_Campo_Salvar" name="RF12_Campo_Salvar" class="btn btn-success">Salvar</button>
    <button id="RF13_Campo_Cancelar" name="RF13_Campo_Cancelar" class="btn btn-danger">Cancelar</button>
    <button id="RF14_Campo_Imprimir" name="RF14_Campo_Imprimir" class="btn btn-danger">Imprimir</button>
    <button id="RF14_Campo_Reportar" name="RF15_Campo_Reportar" class="btn btn-danger">Reportar</button>
  </div>
</div>

</fieldset>
</form>

</div>
</div>
</div>
</body>
</html>
