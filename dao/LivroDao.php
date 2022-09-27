<?php

class LivroDao {

public function criar(Livro $livro) {
    try {
        
        $sql = "INSERT INTO livro (nome, autor, genero, editora, num_pags, ano_lancamento, imagem) VALUES (:nome, :autor, :genero, :editora, :num_pags, :ano_lancamento, :imagem)";

        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(":nome", $livro->getNome(), PDO::PARAM_STR);
        $stmt->bindValue(":autor", $livro->getAutor(), PDO::PARAM_STR);
        $stmt->bindValue(":genero", $livro->getGenero(), PDO::PARAM_STR);
        $stmt->bindValue(":editora", $livro->getEditora(), PDO::PARAM_STR);
        $stmt->bindValue(":num_pags", $livro->getNum_Pags(), PDO::PARAM_STR);
        $stmt->bindValue(":ano_lancamento", $livro->getAno_Lancamento(), PDO::PARAM_STR);
       
        $nomep = $livro->getNome();
        $imagem = $livro->getImagem();
        include '../includes/upload_img.php';
        $stmt->bindValue(":imagem", $nome_imagem, PDO::PARAM_STR);
        
        return $stmt->execute();

    } catch (PDOException $e) {
        //echo "Erro ao Inserir Produto <br>" . $e->getMessage();
    }
}

public function alterar(Livro $livro) {
    try {
        $sql = "UPDATE livro SET nome = :nome, autor = :autor, genero = :genero, editora = :editora, num_pags = :num_pags, ano_lancamento = :ano_lancamento, imagem = :imagem WHERE id_livro = :id";

        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(":id", $livro->getID(), PDO::PARAM_INT);
        $stmt->bindValue(":nome", $livro->getNome(), PDO::PARAM_STR);
        $stmt->bindValue(":autor", $livro->getAutor(), PDO::PARAM_STR);
        $stmt->bindValue(":genero", $livro->getGenero(), PDO::PARAM_STR);
        $stmt->bindValue(":editora", $livro->getEditora(), PDO::PARAM_STR);
        $stmt->bindValue(":num_pags", $livro->getNum_Pags(), PDO::PARAM_STR);
        $stmt->bindValue(":ano_lancamento", $livro->getAno_Lancamento(), PDO::PARAM_STR);

        $nomep = $livro->getNome();
        $imagem = $livro->getImagem();
        include '../includes/upload_img.php';
        $stmt->bindValue(":imagem", $nome_imagem, PDO::PARAM_STR);

        return $stmt->execute();

    } catch (PDOException $e) {
        //echo "Ocorreu um erro ao tentar atualizar Produto." . $e->getMessage();
    }
}

    public function Listagem(){

        try {

            $sql = "SELECT * FROM livro where id_livro = :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $_POST["idli"], PDO::PARAM_INT);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {

            $list[] = $this->listaLivros($linha);

            }

            return $list;
        } catch (PDOException $e) {
            //echo "Erro ao carregar livro." . $e->getMessage();
        }
        
    }

    public function listarl() {
        try{
            $sql = "SELECT * FROM livro order by id_livro desc";

            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaLivros($linha);
            }

            return $list;

    } catch (PDOException $e) {
        //echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
    }
}

public function editar() {
    try {
        $sql = "SELECT * FROM livro WHERE id_livro = :id";
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(":id", $_POST['id_edit'], PDO::PARAM_INT);
        $stmt->execute();
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $list = array();

        foreach ($lista as $linha) {
            $list[] = $this->listaLivros($linha);
        }

        return $list;

    } catch (PDOException $e) {
        //echo "Ocorreu um erro ao tentar buscar Usuário." . $e->getMessage();
    }

}


private function listaLivros($linhas) {

        $livro = new Livro();
        $livro->setID($linhas['id_livro']);
        $livro->setNome($linhas['nome']);
        $livro->setAutor($linhas['autor']);
        $livro->setGenero($linhas['genero']);
        $livro->setEditora($linhas['editora']);
        $livro->setNum_Pags($linhas['num_pags']);
        $livro->setAno_Lancamento($linhas['ano_lancamento']);
        $livro->setImagem($linhas['imagem']);

        //vai retornar a lista de produtos
        return $livro;

}

public function excluir(Livro $livro) {
    try {

        $sql = "DELETE FROM livro WHERE id_livro= :id";
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(":id", $livro->getID(), PDO::PARAM_INT);
        return $stmt->execute();

    } catch (PDOException $e) {
        //echo "Erro ao Excluir produto" . $e->getMessage();
    }
}


}



?>