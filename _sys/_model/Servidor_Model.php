<?php

class Servidor_Model {
    private $id;
    private $identificador;
    private $nome;
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

    public function getNome(){
        return $this->nome;
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

    public function __toString()
    {
        return " nome:".$this->nome." identificador:".$this->identificador.
    " data:".$this->data." telefone:".$this->telefone." email:".$this->email."<br>" ;
    }

    //sets

    public function setId(int $id){
        $this->id = $id;
    }

    public function setIdentificador(string $identificador){
        $this->identificador = $identificador;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
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

    //db functions 
    public function cadastrarServidor(){

    }

    public function buscarServidor(){

    }

    


}