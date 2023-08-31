<?php
    $nome = $_POST['campoNome'];
    $email = $_POST['campoEmail'];
    $assunto = $_POST['campoAssunto'];
    $msg = $_POST['campoMsg'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <h1>Dados Recebidos</h1>
    <p><b>Nome: </b><?php echo $nome; ?></p>
    <p><b>Email: </b><?php echo $email; ?></p>
    <p><b>Assunto: </b><?php echo $assunto; ?></p>
    <p><b>Mensagem: </b><?php echo $msg; ?></p>
    
</body>
</html>