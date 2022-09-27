<?php

 class Usuario{

    private $id;
    private $nome;
    private $email;
    private $apelido;
    private $data_nasc;
    private $senha;

    function getID() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getApelido() {
        return $this->apelido;
    }

    function getDataNasc() {
        return $this->data_nasc;
    }

    function getSenha() {
        return $this->senha;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setApelido($apelido) {
        $this->apelido = $apelido;
    }

    function setDataNasc($data_nasc) {
        $this->data_nasc = $data_nasc;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
 }

?>