<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js"></script>

</head>

<input id="RF10VALORITEM" type="tel" required="required" placeholder="R$" maxlength="15" name="RF10_VALORITEM[]" onblur="calcular()" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$" class="valor" data-thousands="." data-decimal=",">



<script>
$(function() {
    $('#RF10VALORITEM').maskMoney();
});


</script>