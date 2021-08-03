<?php

for( $i=0; $i<count($_POST['item']); $i++ )
{
   echo 'Item: '.$_POST['item'][$i].'--';
   echo 'Descrição: '.$_POST['descricao'][$i].'--';
   echo 'Condição: '.$_POST['condicao'][$i].'--';
   echo 'Valor: '.$_POST['valor'][$i].'--';
   echo 'Desconto: '.$_POST['desconto'][$i].'--';
   echo 'Total: '.$_POST['total'][$i].'<br /><br />';
}
?>