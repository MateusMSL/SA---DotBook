<?php

class Feedback{

    private $idfb;
    private $idu;
    private $idl;
    private $nota;
    private $comentario;
    private $apelido;

    function getIDFB(){
        return $this-> idfb;    
    }

    function getIDU(){
        return $this-> idu;    
    }

    function getIDL(){
        return $this-> idl;    
    }

    function getNota(){
        return $this->nota;
    }

    function getComentario(){
        return $this->comentario;
    }

    function getApelido(){
        return $this->apelido;
    }

    function setIDFB($idfb) {
        $this->idfb = $idfb;
    }

    function setIDU($idu) {
        $this->idu = $idu;
    }

    function setIDL($idl) {
        $this->idl = $idl;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    function setApelido($apelido) {
        $this->apelido = $apelido;
    }

}

?>