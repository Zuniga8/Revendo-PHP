<?php


$categorias = [];
$categorias[] = 'infantil';
$categorias[] = "adolescente";
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'o nome não pode ser vazio';
    return;
}

if (strlen($nome) <3){
    echo 'o nome deve conter mais de 3 caracteres';
    return;
}
if (strlen($nome) > 40){
    echo 'nome é muito extenso';
    return;
}

if(!is_numeric($idade)){
    echo "informe um numero para idade ";
    return;
    
}

if ($idade >= 6 && $idade <= 12) {

    //echo 'infantil'
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == "infantil") {
            echo "<br> O nadador " . $nome . " compete na categoria infantil";
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    //echo 'adolecente';
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            echo "<br> O nadador " . $nome . " compete na categoria " . $categorias[$i];
        }
    }
} else {
    //echo 'adulto';
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            echo "<br> O nadador " . $nome . " compete na categoria adulto";
        }
    }
}
?>
