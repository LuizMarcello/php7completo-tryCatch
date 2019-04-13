<?php
//Apenas criando o método:
function trataNome($name){

    if(!$name){
        //No caso de êrro no parâmetro, aqui cria uma nova excessão, que 
        //é capturada pelo 'bloco catch' abaixo:
        throw new Exception("Nenhum nome foi informado.", 1);
    }

    echo ucfirst($name)."<br>";
}


//Tentando executar:
try{

    trataNome("João");
    trataNome("Pedro");
    trataNome("Luiz");
    trataNome("");
 
    

//Capturando a nova excessão  do 'if' acima:
}catch(Exception $e){

    echo $e->getMessage();
    /*echo json_encode(array(
        "Mensagem"=>$e->getMessage(),
        "Codigo do erro"=>$e->getCode()
    ));*/
    

}

finally{
     echo "<br>";
     echo "Executou o try";

}

?>