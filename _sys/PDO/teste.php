<?php
include_once("Insert.php");

//teste!!!!!

/*
 $insert = new Insert();

 $tabela = "pessoas";
 $campos = "nome,endereco,telefone,email,niver";
 $dados = "'gelado luide','sao rege','11-24','claud@soubd','123'";

 if($insert->INSERT_DB($tabela, $campos,$dados)){
     echo  "inseriu!!!";
 }else{
    echo  "nao deu!!";
 }
 
*/

/*

include_once("Select.php");

$sele = new Select();

$resultado = $sele->Select_DB("pessoas", "nome LIKE 'gera%'", 10);

foreach ($resultado as $value) {
  echo "<br>    ".$value['nome'];
}

*/




/*
include_once("Update.php");

$up = new Update();

if($up->Update_DB("pessoas","nome = 'azuna',niver ='1902-02-11'","id_pessoa = 2")){
    echo  " alteroy!!";
}else{
   echo  " nao deu!!";
}

*/


/*

include_once("Delete.php");

$Del = new Delete();

if($Del->Delete_DB("pessoas","id_pessoa = 23")){
    echo  " Deletou!!";
}else{
   echo  " nao deu!!";
}

*/





//echo "auto carregar";
?>