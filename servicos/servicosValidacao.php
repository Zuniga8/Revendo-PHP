<?php

//declare('strict type');
function validaNome(string $nome) : bool{

    if(empty($nome)){

        setarMensagemErro('O nome não pode ser vazio , por fvor, preenchao novamente');
        return false;
    }else if (strlen($nome) <3){
        setarMensagemErro('o nome deve conter mais de 3 caracteres');
        return false;
    }else if (strlen($nome) > 40){      
        setarMensagemErro('o nome não pode conter mais de 40 caracteres');
          return false;
    }
    return true;
}

function validaIdade(string $idade) : bool{

    if(!is_numeric($idade)){
        setarMensagemErro( 'informe um numero para idade ');
        return false;
    }
    return true;
}
