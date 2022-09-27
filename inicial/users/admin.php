<?php 

echo '<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bem Vindo ao DotBook </title>
    <script src="views/inicial/JS/Pagina-inicial.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="views/inicial/pagina-inicial_adm.css" rel="stylesheet">
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
    
    

    <article class="container-fluid" id="background_overlay" onclick="desativarol()"> </article>

    <header class="col-lg-12 col-sm-12"> <!-- Cabeçalho -->
        <nav id="logo" class="col-lg-1 col-sm-3"  onclick="Logo_Return()" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500"> <!-- Logo da empresa --> </nav>
        
        <nav id="nomelogado" class="col-lg-3 col-sm-3"> <!-- Cadastrar --> 
            <p> <font color="white"> Bem Vindo, </font> <font color="red">' . $usuario->getNome() . ' </font> </p>
        </nav>
        <nav id="logoff" class="col-lg-1 col-sm-2"> <!-- Login --> 
            <button type="button" class="btn btn-outline-light"  onclick="deslogar()"> Logout </button>
        </nav>
    </header>
   
  
    <div class="col-lg-4 col-sm-7" scroll="enable" id="Background_Addproduct">

    <form action="controller/LivroController.php" method="post" name="cad" enctype="multipart/form-data" >

        <section class="col-lg-10 col-sm-10" id="Cadastre_seu_produto"> <p> Cadastre seu Livro! </p> </section>

        <section class="col-lg-10 col-sm-10" id="Cadastre_seu_produto"> <p> Nome </p> </section>
        <section> <input type="text" class="col-lg-10 col-sm-10" name="nome" id="ADD_Nome_Livro"> </section>

        <section class="col-lg-10 col-sm-10" id="Cadastre_seu_produto"> <p> Autor </p> </section>
        <section> <input type="text" class="col-lg-10 col-sm-10" name="autor" ADD_Autor_Livro id="ADD_Autor_Livro"> </section>

        <section class="col-lg-10 col-sm-10" id="Cadastre_seu_produto"> <p> Gênero </p> </section>
        <section> <input type="text" class="col-lg-10 col-sm-10" name="genero" id="ADD_Genero_Livro"> </section>

        <section class="col-lg-10 col-sm-10" id="Cadastre_seu_produto"> <p> Editora </p> </section>
        <section> <input type="text" class="col-lg-10 col-sm-10" name="editora" id="ADD_Editora_Livro"> </section>

        <section class="col-lg-10 col-sm-10" id="Cadastre_seu_produto"> <p> Páginas </p> </section>
        <section> <input type="number" class="col-lg-2 col-sm-4" name="num_pags" id="ADD_Paginas_Livro"> </section>
        
        <section class="col-lg-10 col-sm-10" id="Cadastre_seu_produto"> <p> Ano de Lançamento</p> </section>
        <section> <input type="date" class="col-lg-4"name="ano_lancamento" id="ADD_Ano_Lancamento_Livro"> </section>

        <section class="col-lg-10 col-sm-10" id="Cadastre_seu_produto"> <p> Capa do Livro </p> </section>
        
        <input type="file" id="ADD_Capa_do_Livro" name="imagem" required"> <br/>
       

        <section> <button type="submit" class="btn btn-outline-danger" name="cadastrar" id="add_NEW_product"> Adicionar Novo Livro </button> </section>
        <section id="texto_de_retorno" class="col-lg-4" onclick="desativarol()"> <p> Cancelar Adição </p> </section>
        
        </form>
    </div>



    <div class="container-fluid" id="Showcase_Banner">

        <div class="col-lg-7 col-sm-12" id="showcase_banner_01" >
            <section class="col-lg-12 col-sm-12" id="SHOWCASE_Text_01"> 
                <p class="mb-5"> Bem Vindo ao DOTBook </p> 
            </section>
        </div>
        
        <div class="col-lg-9 col-sm-12" id="showcase_banner_02">
            <section class="col-lg-12" id="SHOWCASE_Text_02"> 
                <p> Somos um website de feedbacks. <br/>
                    Aqui você confere a avaliação de uma incrivel comunidade de leitores, <br/>
                    Descobre novos livros e avalia seus favoritos! <br/> 
                    Um Site Desenvolvido pra você, Leitor de longa data ou até mesmo para os iniciantes.</p> 
            </section>
        </div>

        <div class="col-lg-3 col-sm-8" id="showcase_banner_03" >
            <section class="col-lg-12 col-sm-10" id="SHOWCASE_area_01"> 
                
            </section>
        </div>

    </div>

    </div>

    <section class="col-lg-2 col-sm-11 Superior_options_02" > 
    <button type="button" class="btn btn-outline-danger" id="adicionar_button" onclick="Adicionar_Livro()"> Adicionar Livro </button>
    </section>


    <div class="container-fluid" id="lista_de_livros">';
            
?>
     
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
    
    <?php echo '

    </div>
   


    <div class="container-fluid" id="alert_book"> 
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
        <div class="col-lg-3 col-sm-3 " id="superior_footer">
            <section class="col-lg-3 " id="fale_conosco_section" onclick="Sobre()"> <p> <font size="2"> Fale Conosco </font> </p> </section>
            
        </div>
    
        <div class="col-lg-6 col-sm-3" id="superior_footer">
            <section class="col-lg-4 col-sm-9 " id="logo_section" onclick="Logo_Return()"></section>
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
</html>';


?>