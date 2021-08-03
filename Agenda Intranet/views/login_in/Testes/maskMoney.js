<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js"></script>

<input type="text" id="meu-input" data-thousands="." data-decimal="," />

<script>
$(function() {
    $('#meu-input').maskMoney();
});
</script>