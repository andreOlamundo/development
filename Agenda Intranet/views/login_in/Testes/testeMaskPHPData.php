<?php
$data = "04/04/2011";
if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data)) {
 echo "Data inválida.";
}
?>