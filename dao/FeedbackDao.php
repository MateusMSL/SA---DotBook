<?php

class FeedbackDao{

    public function criar(Feedback $feedback){
        try {

            $sql = "INSERT INTO feedback (id_usuario, id_livro, nota, comentario, apelido) VALUES (:id_usuario, :id_livro, :nota, :comentario, :apelido)";

            $stmt = Conexao::getConexao()->prepare($sql);
            
            $stmt->bindValue(":id_usuario", $feedback->getIDU(), PDO::PARAM_INT);
            $stmt->bindValue(":id_livro", $feedback->getIDL(), PDO::PARAM_INT);
            $stmt->bindValue(":nota", $feedback->getNota(), PDO::PARAM_INT);
            $stmt->bindValue(":comentario", $feedback->getComentario(), PDO::PARAM_STR);
            $stmt->bindValue(":apelido", $feedback->getApelido(), PDO::PARAM_STR);

            return $stmt->execute();

        } catch (PDOException $e) {
            //echo "Erro ao criar feedback" . $e->getMessage();
        }
    }

    public function excluir(Feedback $feedback) {
        try {
            
            $sql = "DELETE FROM feedback WHERE id_feedback = :id_feedback";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id_feedback", $feedback->getIDFB(), PDO::PARAM_INT);
            return $stmt->execute();

        } catch (PDOException $e) {
            //echo "Erro ao tentar Excluir feedback" . $e->getMessage();
        }
    }

    public function listarf() {
        try{

            $sql = "SELECT * FROM feedback where id_livro = :id_livro";
            $stmt = Conexao::getConexao()->prepare($sql);

            $stmt->bindValue(":id_livro", $_POST["idli"], PDO::PARAM_INT);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaFeedback($linha);
            }

            return $list;

    } catch (PDOException $e) {
        //echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
    }
}

private function listaFeedback($linhas) {

        $feedback = new Feedback();
        $feedback->setIDFB($linhas['id_feedback']);
        $feedback->setIDU($linhas['id_usuario']);
        $feedback->setIDL($linhas['id_livro']);
        $feedback->setNota($linhas['nota']);
        $feedback->setComentario($linhas['comentario']);
        $feedback->setApelido($linhas['apelido']);

        return $feedback;

}

}


?>