<?php

try{
    throw new Exception("Houve um êrro.", 400);

}catch(Exception $e){

    echo json_encode(array(
        "Mensagem"=>$e->getMessage(),
        "Linha"=>$e->getLine(),
        "Arquivo"=>$e->getFile(),
        "Codigo"=>$e->getCode()
    ));


}




?>