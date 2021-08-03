

<input type="text" class="form-control" name="RF10_VALORTOTAL" id="result" readonly>


<script>

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
            var x = document.getElementsByClassName('valor');
            for (var i = 0; i < x.length; i++) {
            total +=  parseFloat(x[i].value.replace( ',', '.' ));
          
            }
             document.getElementById("result").value = String(total).formatMoney();
            }

</script>