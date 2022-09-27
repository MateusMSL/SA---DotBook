<?php

require_once('../config/Conexao.php');
require_once('../dao/UserDao.php');
require_once('../model/Usuario.php');

$usuario = new Usuario();
$userdao = new UserDao();

$dados = filter_input_array(INPUT_POST);

if(isset($_POST['cadastrar'])){

    $usuario->setNome($dados['nome']);
    $usuario->setEmail($dados['email']);
    $usuario->setApelido($dados['apelido']);
    $usuario->setDataNasc($dados['data_nasc']);
    $usuario->setSenha(password_hash($dados['senha'], PASSWORD_DEFAULT));

    if($userdao->criar($usuario)) {

    echo "<script>
            location.href = '../views/login/login.php';
          </script>";

    }
    
} else if(isset($_POST['login'])) {

	$usuario->setEmail(strip_tags($dados['mail']));
	$usuario->setSenha(strip_tags($dados['senha'])); 

    $userdao->login($usuario);

	if($userdao->login($usuario)) {

     echo "<script>
            location.href = '../';
           </script>";

	} else {
        echo "<script>
                alert('Login ou senha incorretos!');
                location.href = '../views/login/login.php';
            </script>";
	}	
 
} else if(isset($_GET['logout'])) {

    $userdao->logout();

    header("Location: ../");


} else {

    header("Location: ../");
}

?>