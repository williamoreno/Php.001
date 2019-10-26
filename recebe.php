<?php
 include 'funcoes.php';
    $nome = trataNome($_POST["nome"]);
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    if(!empty($nome) && !empty($email)){
        $arquivo = fopen("c://temp/dados.txt","a+");
        date_default_timezone_set('America/Sao_Paulo');
        fwrite($arquivo," Dados do Cliente ".date("d.m.y H.m.s"). "\r\n");
        fwrite($arquivo,"\r\nNome: ".$nome);
        fwrite($arquivo,"\r\nE-mail: ".$email);
        fwrite($arquivo,"\r\nIdade: ".$idade);
        fwrite($arquivo,"\r\n---------------------------------------------------------\r\n");
        fclose($arquivo);
        
        echo"<script>alert(' Gravado com sucesso <<c>>')</script>";
        echo"<script>location= './index.php'</script>";
        
        
        
    }else{
        echo "Por favor, preencha os campos obrigatórios!";
    }
  function trataNome ($nome){
    $nomeTratado = ucwords(strtolower($nome));
      return $nomeTratado; }
     

?>
<br>
 <a href="index.php">Voltar</a>
