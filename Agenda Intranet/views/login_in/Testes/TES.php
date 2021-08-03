<script type="text/javascript">

function subtrair(v) {

var objHidden1 = document.getElementById("hidden1");

var objText1 = document.getElementById("text1");

var objText2 = document.getElementById("text2");

var objText3 = document.getElementById("text3");

 

if (v == 1) {

objText1.value = parseFloat(objHidden1.value)-parseFloat(objText2.value);

} else {

objText1.value = parseFloat(objHidden1.value)-(parseFloat(objText2.value)+parseFloat(objText3.value));

}

}

</script>

 

<form name="form1" action="pagina.php">

<input type="hidden" value="3000" id="hidden1">

Texto1: <input type="text" value="3000" id="text1">

<br>Texto2: <input type="text" value="0" id="text2" onChange="subtrair(1)">

<br>Texto3: <input type="text" value="0" id="text3" onChange="subtrair(2)">

<input type="submit" value="Enviar">

</form>

