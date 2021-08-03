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
                celula1.innerHTML = 
                "<input type='tel' required='required' placeholder='R$ ' maxlength='15' name='RF10_VALORITEM[]' id='RF10_VALORITEM' onblur='calcular()' pattern='([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$' class='valor'>";

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
            total +=  parseFloat(x[i].value.replace( ',', '.' ));
          
            }
             document.getElementById("result").value = String(total).formatMoney();
            }
  </script>  