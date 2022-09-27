<?php

    session_start();

    require_once('config/Conexao.php');
    require_once('dao/UserDao.php');
    require_once('model/Usuario.php');
    require_once('dao/LivroDao.php');
    require_once('model/Livro.php');
    
    //$conexao = Conexao::getConexao();

    $livro = new Livro();
    $livrodao = new LivroDao();

    $usuario = new Usuario();
    $userdao = new UserDao();

    $login = new UserDao();

    if(!$login->checkLogin()) {
        include 'views/inicial/users/inicial.php';
    }

   foreach($userdao->user() as $usuario) {

    if($usuario->getID() == 1 && $usuario->getNome() == "admin") {
        include 'views/inicial/users/admin.php';
    } else {
        include 'views/inicial/users/usuarios.php';
    }

    }
?>
