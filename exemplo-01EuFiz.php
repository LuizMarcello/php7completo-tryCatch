<?php
 try{
     throw new Exception("Atenção, houve um erro!!!", 350);

 }catch(Exception $e){

    echo json_encode(array(
        "Menssagem"=>$e->getMessage(),
        "Arquivo"=>$e->getFile(),
        "Linha"=>$e->getLine(),
        "Codigo"=>$e->getCode()


    ));

 }




?>