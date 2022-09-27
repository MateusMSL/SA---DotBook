<?php

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Usuario.php');
require_once('../../dao/LivroDao.php');
require_once('../../model/Livro.php');
require_once('../../dao/FeedbackDao.php');
require_once('../../model/Feedback.php');

$livro = new Livro();
$livrodao = new LivroDao();

$usuario = new Usuario();
$userdao = new UserDao();

$feedback = new Feedback();
$feedbackdao = new FeedbackDao();

$login = new UserDao();

$idu = $usuario->getID();
$idl = $livro->getID();

if(!$login->checkLogin()) {
    include '../livro/users/livrogenerico.php';
}

foreach($userdao->user() as $usuario) {

if($usuario->getID() == 1 && $usuario->getNome() == "admin") {
    include '../livro/users/livroadmin.php';
} else {
    include '../livro/users/livrousuario.php';
}

}

?>
