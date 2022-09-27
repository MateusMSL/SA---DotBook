<?php


require_once('../config/Conexao.php');
require_once('../dao/FeedbackDao.php');
require_once('../model/Feedback.php');

$feedback = new Feedback();
$feedbackdao = new FeedbackDao();

$dados = filter_input_array(INPUT_POST);

if(isset($_POST['criar'])){

    $feedback->setIDU($dados['idu']);
    $feedback->setIDL($dados['idl']);
    $feedback->setNota($dados['nota']);
    $feedback->setComentario($dados['comentario']);
    $feedback->setApelido($dados['apelido']);

    if($feedbackdao->criar($feedback)) {

    echo "<script>
            location.href = '../';
          </script>";

    }

}else if(isset($_POST['excluir'])) {

  $feedback->setIDFB($_POST['id_feedback']);

  if($feedbackdao->excluir($feedback)) {

  echo "<script>
          alert('Feedback Deletado com Sucesso!!');
          location.href = '../';
      </script>";
  }
        
}
?>