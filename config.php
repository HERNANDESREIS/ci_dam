<?php
//config 
session_start();


//fazer a leitura das classes automaticamente
spl_autoload_register(function ($class_name) {
    //echo "class".DIRECTORY_SEPARATOR."autoload".DIRECTORY_SEPARATOR."$class_name".".php";
    //
    if(file_exists("_sys".DIRECTORY_SEPARATOR."_model".DIRECTORY_SEPARATOR."$class_name".".php")){
        //busca na pasta _model
        require_once("_sys".DIRECTORY_SEPARATOR."_model".DIRECTORY_SEPARATOR."$class_name".".php");
        
    }elseif(file_exists("_sys".DIRECTORY_SEPARATOR."PDO".DIRECTORY_SEPARATOR."$class_name".".php")){
        //busca na pasta PDO
        require_once("_sys".DIRECTORY_SEPARATOR."PDO".DIRECTORY_SEPARATOR."$class_name".".php");
    
    }elseif(file_exists("_sys".DIRECTORY_SEPARATOR."_controle".DIRECTORY_SEPARATOR."$class_name".".php")){
        //busca na pasta _controle
        require_once("_sys".DIRECTORY_SEPARATOR."_controle".DIRECTORY_SEPARATOR."$class_name".".php");
    
    }elseif(file_exists("_sys".DIRECTORY_SEPARATOR."_view".DIRECTORY_SEPARATOR."$class_name".".php")){
        //busca na pasta _view
        require_once("_sys".DIRECTORY_SEPARATOR."_view".DIRECTORY_SEPARATOR."$class_name".".php");
    
    }else{
        echo  "<br>erro ao encontrar arquivo!";
    }
});
//

$servidor = new Servidor_Model();
echo $servidor;
?>