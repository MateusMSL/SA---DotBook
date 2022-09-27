<?php 

require_once('./config/Conexao.php');
require_once('./dao/UserDao.php');
require_once('./model/Usuario.php');
require_once('./dao/LivroDao.php');
require_once('./model/Livro.php');


$usuario = new Usuario();
$userdao = new UserDao();

//$conexao = Conexao::getConexao();

$livro = new Livro();
$livrodao = new LivroDao();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bem Vindo ao DotBook </title>
    <script src="views/inicial/JS/Pagina-inicial.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="views/inicial/pagina-inicial.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
    <!-- DROPDOWN -->
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DROPDOWN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- AOS -->
</head>


    
  <body>
    
    

  
    <header class="col-lg-12 col-sm-12"> <!-- Cabeçalho -->
        <nav id="logo" class="col-lg-1 col-sm-2"  onclick="Logo_Return()" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500"> <!-- Logo da empresa --> </nav>
        
        
        <nav id="cadastro" class="col-lg-1 col-sm-2"> <!-- Cadastrar --> 
            <button type="button" class="btn btn-outline-danger" onclick="Cadastrar()"> Cadastrar </button>
        </nav>
        <nav id="login" class="col-lg-1 col-sm-1"> <!-- Login --> 
            <button type="button" class="btn btn-outline-danger"  onclick="Logar()"> Login </button>
        </nav>
    </header>
   
  
    

    <div class="container-fluid" id="Showcase_Banner">

        <div class="col-lg-7" id="showcase_banner_01" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1500">
            <section class="col-lg-12" id="SHOWCASE_Text_01"> 
                <p class="mb-5"> Bem Vindo ao DOTBook </p> 
            </section>
        </div>
        
        <div class="col-lg-9" id="showcase_banner_02">
            <section class="col-lg-12" id="SHOWCASE_Text_02"> 
                <p> Somos um website de feedbacks. <br/>
                    Aqui você confere a avaliação de uma incrivel comunidade de leitores, <br/>
                    Descobre novos livros e avalia seus favoritos! <br/> 
                    Um Site Desenvolvido pra você, Leitor de longa data ou até mesmo para os iniciantes.</p> 
            </section>
        </div>

        <div class="col-lg-3 col-sm-9" id="showcase_banner_03" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="2000">
            <section class="col-lg-12" id="SHOWCASE_area_01"> 
                
            </section>
        </div>

    </div>



    



<div class="container-fluid" id="lista_de_livros" >  <!-- PRESETS DOS LIVROS -->
        
        <?php foreach($livrodao->listarl() as $livro) : ?>
            
            <div class="col-lg-2 livro_preset" id="" data-aos="fade-down" >
            <form action="../dotbook/views/livro/livro_principal.php" method="post" name="enviafb">
            <input class="invisible_button" type="submit" name="enviar" value="" />
            
            
            <section class="col-lg-12 foto_preset" id=""> 
                    <img src="img/<?= $livro->getImagem() ?>" alt="<?= $livro->getImagem() ?>" /></section>
                    <input type="hidden" name="idli" value="<?= $livro->getID() ?>"/>
            <input type="hidden" name="idu" value=" <?= $usuario->getID() ?>"/>
            </form>
                <section class="col-lg-12 nome_preset" id=""> <p> <?= $livro->getNome() ?> </p></section>
            </div>
       
        <?php endforeach?>       
    
</div>
   


<div class="container-fluid" id="alert_book" data-aos="zoom-in"> <!-- ALERTA SUGESTÃO LIVRO -->
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
          Não Encontrou o livro que você queria? Que pena... <br/>
          Nos Envie um Email em: DotBook.Sugestao@gmail.com, adicionaremos o mais rápido possivel!   
        </div>
        
      </div>
</div>

   
<div class="container-fluid" id="footer" > <!-- FOOTER -->
    <div class="col-lg-3 col-sm-3" id="superior_footer">
        <section class="col-lg-3 col-sm-12" id="fale_conosco_section" onclick="Sobre()"> <p> <font size="2"> Fale Conosco </font> </p> </section>
        
    </div>

    <div class="col-lg-6 col-sm-3" id="superior_footer">
        <section class="col-lg-4 col-sm-12" id="logo_section" onclick="Logo_Return()"></section>
    </div>

    <div class="col-lg-3" id="superior_footer">
        <section class="col-lg-11" id="copyrith_section"> <p> <font size="2" color="#fff"> 2022 - All Rights Reserved to Website Developers </font> </p></section>
    </div>
</div>

    
     <!-- AOS -->
     <script>
        AOS.init();
      </script>
    <!-- AOS -->

    <!-- BOOTSTRAP INICIAL -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP INICIAL -->
    
</body>
</html>