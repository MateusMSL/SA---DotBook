<?php

require_once('../config/Conexao.php');
require_once('../dao/LivroDao.php');
require_once('../model/Livro.php');

$livro = new Livro();
$livrodao = new LivroDao();

$dados = filter_input_array(INPUT_POST);

if(isset($_POST['cadastrar'])){

    
    $livro->setNome($dados['nome']);
    $livro->setAutor($dados['autor']);
    $livro->setGenero($dados['genero']);
    $livro->setEditora($dados['editora']);
    $livro->setNum_Pags($dados['num_pags']);
    $livro->setAno_Lancamento($dados['ano_lancamento']);
    $livro->setImagem($_FILES['imagem']);
   

    if($livrodao->criar($livro)) {

        echo "<script>
            alert('Produto Cadastrado com Sucesso!!');
            location.href = '../';
            </script>";
    }
}else if(isset($_POST['alterar'])){

    $livro->setID($dados['id_alter']);
    $livro->setNome($dados['nome']);
    $livro->setAutor($dados['autor']);
    $livro->setGenero($dados['genero']);
    $livro->setEditora($dados['editora']);
    $livro->setNum_Pags($dados['num_pags']);
    $livro->setAno_Lancamento($dados['ano_lancamento']);
    $livro->setImagem($_FILES['imagem']);

    

    $img = $_POST['del_img'];

    if($livrodao->alterar($livro)) {

      $del_img = "../img/$img";
      unlink($del_img);

        if(!is_file($del_img)){  
            echo "<script>
                    alert('Livro Atualizado com Sucesso!!');
                    location.href = '../';
                </script>";
        }
    }

} else if(isset($_POST['excluir'])) {
  
    $livro->setID($_POST['id_del']);
    $img = $_POST['del_img'];

    if($livrodao->excluir($livro)) {
      
      $del_img = "../img/$img";
      unlink($del_img);

    echo "<script>
            alert('Livro Deletado com Sucesso!!');
            location.href = '../';
        </script>";
    }
}


?>