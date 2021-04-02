<?php 


$categorias = [];
$categorias[] = 'infantil';
$categorias[] = "adolescente";
$categorias[] = 'adulto';
$categorias[] = 'idoso';

print_r($categorias);

$nome = 'eduardo';
$idade = 27;

//var_dump($nome, $idade);

if ($idade >= 6 && $idade <= 12){

    //echo 'infantil';
    for($i =0; $i < count($categorias); $i++){
        if ($categorias[$i] == "infantil"){
            echo "<br> O nadador ".$nome." compete na categoria infantil";
        }
    }

}else if ($idade >= 13 && $idade <= 18 ){
    //echo 'adolecente';
    for($i =0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'adolescente')
        {
            echo "<br> O nadador ".$nome." compete na categoria ". $categorias[$i];
        }
    }
}else{
//echo 'adulto';
    for($i =0; $i < count($categorias); $i++){
         if ($categorias[$i] == 'adulto'){
            echo "<br> O nadador ".$nome." compete na categoria adulto";
         }
    }
}
