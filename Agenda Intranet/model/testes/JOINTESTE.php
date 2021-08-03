<?php
 //$id = $_POST['item_lista'];
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->Host = 'mail.casasbu.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = 'ow@casasbu.com.br'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = '6KI+EPs)RX=+'; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom('ow@casasbu.com.br', 'Danilo'); //Seu e-mail
     $mail->AddReplyTo('ow@casasbu.com.br', 'teste'); //Seu e-mail
     $mail->Subject = 'Email teste do site';//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('mdvisualstudio@gmail.com', 'Teste Locaweb');
     $mail->AddAddress('ciceropensepositivo@gmail.com', 'Teste Locaweb');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo

     include "../../conexao.php";
    $sqlemail = mysqli_query($db,"SELECT * FROM tab_orc 
                                       INNER JOIN usuario ON usuario.id_usuario = tab_orc.id_usuario
                                       WHERE tab_orc.item_lista = '11'");
    $rowemail = mysqli_fetch_assoc($sqlemail);
     
    $pedido = $rowemail['id_orc'];
    $usuario = $rowemail['usuario'];
    $descritivo = $rowemail['descricao'];


    $sqlemail1 = mysqli_query($db,"SELECT * FROM tab_orc 
    INNER JOIN list_orc_imob ON list_orc_imob.item_lista = tab_orc.item_lista
    INNER JOIN imovel ON imovel.id_imovel =  list_orc_imob.id_imovel
    INNER JOIN cidade ON cidade.id_cidade = imovel.id_cidade
    INNER JOIN bairro ON bairro.id_bairro = imovel.id_bairro
    INNER JOIN usuario ON usuario.id_usuario = tab_orc.id_usuario
    INNER JOIN fotos ON fotos.token = imovel.token
    WHERE tab_orc.item_lista = '11' AND fotos.classe = '1'");
    
    while($rowemail1 = mysqli_fetch_assoc($sqlemail1)){
        $codigo = $rowemail1['cod_ref'];
        
        $html = '<!DOCTYPE html>
            <html>
            <head>
             <meta charset="UTF-8"/>
             <title>Email Personalizado</title>

            </head>
            <body>

            <center> <table border="0" width="600px" cellspacing="0" cellpadding="0" >
                 <tr>
                     <td colspan="3" bgcolor="#6f006f" height="60px"><font face="verdana" color="#ffffff"><center> Pedido Cliente : '.$usuario.'  , n° # '.$pedido.' do pedido:</center></font></td>
                 </tr>
                 <tr bgcolor="#ffa800">
                     <td><center><img src="http://198.136.59.20/~casasbucom/casasbu2/img/logo.png" /></center></td>
                     <td colspan="2"><center><font face="verdana" color="#ffffff" >Lista do orçamento CasasBU</font></center></td>
                 </tr>
                 <tr height="30px">
                     <td><font face="verdana"><center><b>Código da casa</b></center></font></td>
                     <td><font face="verdana"><center><b>Fotos</b></center></font></td>
                     <td><font face="verdana"><center><b>Característica</b></center></font></td>
                 </tr>';
                 
                 $sqlemail1 = mysqli_query($db,"SELECT * FROM tab_orc 
                 INNER JOIN list_orc_imob ON list_orc_imob.item_lista = tab_orc.item_lista
                 INNER JOIN imovel ON imovel.id_imovel =  list_orc_imob.id_imovel
                 INNER JOIN cidade ON cidade.id_cidade = imovel.id_cidade
                 INNER JOIN bairro ON bairro.id_bairro = imovel.id_bairro
                 INNER JOIN usuario ON usuario.id_usuario = tab_orc.id_usuario
                 INNER JOIN fotos ON fotos.token = imovel.token
                 WHERE tab_orc.item_lista = '11' AND fotos.classe = '1'");
                  while($rowemail1 = mysqli_fetch_assoc($sqlemail1)){
                    $codigo = $rowemail1['cod_ref'];

                    $html .= '
                    <div >
                    <tr>
                         <td ><center> '.$codigo.'</center></td>
                         <td ><center><img src="http://198.136.59.20/~casasbucom/casasbu2/admin/imoveis/imagens/' . $rowemail1['foto'] . '" width="180px" /></center></td>
                         <td>
                         <ul>
                         <li>' . $rowemail1['dormitorios'] . ' Domitório(s)</li>
                         <li>' . $rowemail1['banheiros'] . ' Banheiro(s)</li>
                         <li>' . $rowemail['suites'] . ' Suíte(s)</li>
                         <li>Garagem para '. $rowemail1['garagem'] . ' carros</li>
                         </ul>
                         </td>
                    </tr>

                    <tr>
                        <td colspan="2" height="50px"><font face="verdana" size="2"><b>Observação:</b></font><br/> ' . $rowemail1['descricao'] . ' </td>
                        <td><font face="verdana" size="2"><b>Preço:</b></font> '. $rowemail1['preço'] . '</td>
                    </tr>
                    <tr>
                        <td colspan="3">Endereço: ' . $rowemail1['endereco'] . ', n° ' . $rowemail1['numero'] . ' - Bairro: ' . $rowemail1['bairro'] . ' - Cidade: ' . $rowemail1['cidade'] . '</td>
                    </tr>
                    <tr><td colspan="3" height="40px"><font color="#999999">_________________________________________________________________________</font></td></tr>
                    </div>';
                
                }

                $html .= '
                 <tr>
                     <td colspan="3"><font face="verdana"size="2"><b>Mensagem:</b></font><br/>
                     ' . $descritivo . '</td>
                 </tr>
                 <tr bgcolor="#ffa800" >
                     <td colspan="3" height="40px"><font face="verdana" color="#ffffff"><b>Dados da imobiliária</b></font></td>
                 </tr>
                 <tr bgcolor="#ffa800" >
                     <td><font face="verdana" size="2" >
                     <font color="#ffffff">Site</font></br>
                     <font color="#ffffff">Sobre Nós</font></br>
                     <font color="#ffffff">Guia Comercial</font></br>
                     <font color="#ffffff">Fale Conosco</font>
                     </font>
                    </td>
                    <td colspan="2">
                    <font face="verdana" size="2">
                     <font color="#ffffff">(35)9 9923-4258 - Fernando - WhatsApp</font></br>
                     <font color="#ffffff">Skype: fernando.teixeira.</font></br>
                     <font color="#ffffff">(35)9 9827-0271 - Marcos Moreira WhatsApp</font></br>
                     <font color="#ffffff">(35)3473-0732 - Marcos</font></br>
                     <font color="#ffffff">Email: contato@casasbu.com.br</font>
                     </font>
                    </td>
                 
                 </tr>
                 <tr>
                 <td colspan="3" bgcolor="#6f006f" height="60px"><center>
                    <font face="Verdana" color="#ffffff" size="2" > Rua Padre Antonio, Nº 04, centro</br> Santa Rita do Sapucaí / MG
                     CRECI: MG 28224</br> <a href="http://www.casasbu.com.br"><font color="#ffffff">www.casabu.com.br</font></a> </font></center>
                     </td>
                 </tr>
             </table></center> 
            </body>
            </html>

