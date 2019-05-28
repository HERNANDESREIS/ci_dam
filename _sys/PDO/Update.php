<?php
include_once("ConnectsPDO.php");
/*

update cliente set nome = '".$nome."', email = '".$email."',telefone = '".$tel."'
            where idcliente = ".$id;

*/

class Update extends ConnectsPDO{

    public function Update_DB($tabela,$set,$clausula){
        $conn = $this->GetConnection();

        $sql = "UPDATE $tabela SET $set WHERE $clausula";
        //construcao da sql para db

        $stmt = $conn->prepare($sql);
        //variavel de preparo antes da acao sql

        //execultadno a acao
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

}


