<?php

class Livro{
    private $id;
    private $nome;
    private $autor;
    private $genero;
    private $editora;
    private $num_pags;
    private $ano_lancamento;
    private $imagem;

    function getID() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getAutor() {
        return $this->autor;
    }

    function getGenero() {
        return $this->genero;
    }

    function getEditora() {
        return $this->editora;
    }
    
    function getNum_Pags() {
        return $this->num_pags;
    }

    function getAno_Lancamento() {
        return $this->ano_lancamento;
    }

    function getImagem() {
        return $this->imagem;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }

    function setNum_Pags($num_pags) {
        $this->num_pags = $num_pags;
    }

    function setAno_Lancamento($ano_lancamento) {
        $this->ano_lancamento = $ano_lancamento;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

}

?>