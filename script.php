<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = "adolescente";
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    //echo 'o nome não pode ser vazio';
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio , por fvor, preenchao novamente';
    header('location: index.php');
    //return;
}else if (strlen($nome) <3){
   // echo 'o nome deve conter mais de 3 caracteres';
    //return;
    $_SESSION['mensagem-de-erro'] = 'o nome deve conter mais de 3 caracteres';
    header('location: index.php');
   
}else if (strlen($nome) > 40){
    /*echo 'nome é muito extenso';
    return;*/
    
    $_SESSION['mensagem-de-erro'] = 'o nomeé muito extenso';
    header('location: index.php');
}else if(!is_numeric($idade)){
    /*echo "informe um numero para idade ";
    return; */
    
    $_SESSION['mensagem-de-erro'] = 'informe um numero para idade ';
    header('location: index.php');
    
}

if ($idade >= 6 && $idade <= 12) {

    //echo 'infantil'
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == "infantil") {
            $_SESSION['mensagem-de-sucesso'] = "<br> O nadador " . $nome . " compete na categoria " .$categorias[$i];
            header('location: index.php');
            return;
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    //echo 'adolecente';
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem-de-sucesso'] = "<br> O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
} else {
    //echo 'adulto';
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['mensagem-de-sucesso'] = "<br> O nadador " . $nome . " compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }
    }
}
?>
