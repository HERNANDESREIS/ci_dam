<?php

class Servidor_Model {
    private $id;
    private $identificador;
    private $data;
    private $telefone;
    private $email;
    
    

    //# #/
    ###
    //gets

    public function getId(){
        return $this->id;
    }

    public function getIdentificador(){
        return $this->identificador;
    }

    public function getData(){
        return $this->data;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    //sets

    public function setId(int $id){
        $this->id = $id;
    }

    public function setIdentificador(string $identificador){
        $this->identificador = $identificador;
    }

    public function setData(date $data){
        $this->data = $data;
    }

    public function setTelefone(string $telefone){
        $this->telefone = $telefone;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }


}