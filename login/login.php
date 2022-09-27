<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Usuario.php');

$login = new UserDao();

if($login->checkLogin()) {
	header("Location: ../../");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="JS/Login.js"> </script>    
    <title> Faça Login na DOTBook! </title>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body >
    
    <div class="container-fluid" id="background_config">
        <div class="col-lg-5 col-sm-12" id="image_login" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="2500">
            <section class="col-lg-12" id="config_image_login"></section>
        </div>

        <div class="col-lg-3 col-sm-11" id="welcome_text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" >
            <section class="col-lg-12" id="config_welcome_text" onclick="principal_anonymous_mode()"> <P> Seja Bem Vindo ao DotBook. </P></section>

            <section id="aviso_retorno" class="col-sm-11 fade-out"> <p> Clique no texto acima para navegar sem login </p> </section>
        </div>

        <div class="col-lg-3" id="campo_de_login">
            <form action="../../controller/UsuarioController.php" method="post" name="login">
            <section class="col-lg-12 col-sm-12" id="Login_text"> <p> Email </p></section>
            <section class="col-lg-12 col-sm-12" id="config_campo_de_login"> <input class="col-lg-12 col-sm-12" type="email" name="mail" id="email_login"> </section>
            <section class="col-lg-12 col-sm-12" id="Password_text"> <p> Senha </p></section>
            <section class="col-lg-12 col-sm-12" id="config_campo_de_login"> <input class="col-lg-12 col-sm-12" type="password" name="senha" id="email_login"> </section>
            <section onclick="Cadastrar()" class="col-lg-4" id="Cadastrar_Text"  onclick=""> <p> Cadastre-se </p> </section>
           <!-- <section onclick="Recuperar_Senha()" class="col-lg-4" id="Alterar_Text" > <p> Alterar Senha </p> </section> -->
            <section class="col-lg-4 col-sm-3" id="BOTAO_LOGIN"> <input type="submit" class="btn btn-outline-warning col-lg-12" name="login" value="Fazer Login"/> </section>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script>
        AOS.init();
    </script>
    <!-- AOS -->

</body>

</html>