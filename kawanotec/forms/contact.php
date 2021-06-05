<?php

$email    = 'contato@kawanotec.com.br';
$assunto  = 'Contato KawanoTec';
$corpo    = "
Mensagem enviada por: "    . $_POST['name']."      
  
E-mail: "                  . $_POST['email']."
  
Conteúdo da Mensagem: "    . $_POST['mensagem']."
";

if(mail($email, $assunto, $corpo)){ 
  echo "E-mail enviado com sucesso!";
 
}else{ 
  echo "Ocorreu um erro ao enviar o e-mail. Tente novamente em alguns instantes.";
 
}

?>

