<?php
session_start();

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <p> FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES </p>
    <form action="script.php" method="post">
        <?php
            $mensagemdeerro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensagemdeerro)) {
                echo $mensagemdeerro;
            }
        ?>

        <p>Seu Nome: <input type="text" name="nome" /></p>
        <p>Sua Idade: <input type="text" name="idade" /></p>
        <p><input type="submit" /></p>

    </form>

<h1>
<?php 
    $mensagemdesucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
    if(!empty($mensagemdesucesso)){
        echo $mensagemdesucesso;
    }
?>

</h1>


</body>

</html>