 <?php

  // Lista de tipos de arquivos permitidos
  $tiposPermitidos= array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
  // Tamanho máximo (em bytes)
  $tamanhoPermitido = 1024 * 500; // 500 Kb
  // O nome original do arquivo no computador do usuário
  $arqName = $_FILES['fileUpload']['name'];
  // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
  $arqType = $_FILES['fileUpload']['type'];
  // O tamanho, em bytes, do arquivo
  $arqSize = $_FILES['fileUpload']['size'];
  // O nome temporário do arquivo, como foi guardado no servidor
  $arqTemp = $_FILES['fileUpload']['tmp_name'];
  // O código de erro associado a este upload de arquivo
  $arqError = $_FILES['fileUpload']['error'];
  if ($arqError == 0) {
        // Verifica o tipo de arquivo enviado
    if (array_search($arqType, $tiposPermitidos) === false) {
      echo 'O tipo de arquivo enviado é inválido!';
    // Verifica o tamanho do arquivo enviado
    } else if ($arqSize > $tamanhoPermitido) {
      echo 'O tamanho do arquivo enviado é maior que o limite!';
    // Não houveram erros, move o arquivo
    } else {
      $pasta = '../../uploads/';
      // Pega a extensão do arquivo enviado
      $extensao = strtolower(end(explode('.', $arqName)));
      // Define o novo nome do arquivo usando um UNIX TIMESTAMP
      $nome = time() . '.' . $extensao;
      // Escapa os caracteres protegidos do MySQL (para o nome do usuário)
      $nomeMySQL = mysql_real_escape_string($_POST['RF3_NUMEROPAR']);
      $upload = move_uploaded_file($arqTemp, $pasta . $nome);
      // Verifica se o arquivo foi movido com sucesso
      if ($upload == true) {
        // Cria uma query MySQL
        $sql = "INSERT INTO `upload` (`id`, ` RF3_NUMEROPAR`, `RF1_DATA_ATUAL`) VALUES (NULL, '". $nomeMySQL ."', '". $nome ."')";
        // Executa a consulta
        $query = mysql_query($sql);
        if ($query == true) {
                    echo 'Arquivo inserido com sucesso!';
                }
      }
    }
  } else {
    echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
  }

  ?>