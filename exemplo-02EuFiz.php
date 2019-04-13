<?php
 function trataNome($nome){

    if(!$nome){

        throw new Exception("Houve um erro no nome!!!", 450);
    }

    echo ucfirst($nome)."<br>";
}



try{
    trataNome("Luiz");
    trataNome("Carlos");
    trataNome("Marcello");
    trataNome("Gabriel");
    trataNome("");

}catch(Exception $e){

    //echo $e->getMessage()."<br>";
    echo json_encode(array(
        "Mensagem"=>$e->getMessage(),
        "Codigo"=>$e->getCode(),
        "Linha"=>$e->getLine(),
        "Arquivo"=>$e->getFile()
    ));
}



finally{
    echo "<br>";
    echo "Try executado"."<br>";
}

 





?>