<?php

$email     = 'orcamento@kawanotec.com.br';
$assunto   = 'Orçamento KawanoTec';
$corpo     = "
Manutenção ou Compra: "             . $_POST['servico']."

Modelo/Versão do Produto: "         . $_POST['produto']."

Manutenção ou Compra: "             . $_POST['servico']."
  
Reparo ou venda: "                  . $_POST['problema']."    
  
Mensagem enviada por: "             . $_POST['nome']."
  
Número para contato: "              . $_POST['telefone']."
  
Cidade: "                           . $_POST['local']."
";

if(mail($email, $assunto, $corpo)){ 
  echo "E-mail enviado com sucesso!"; 

}else{
  echo "Ocorreu um erro ao enviar o e-mail. Tente novamente em alguns instantes."; 
}    

?>

