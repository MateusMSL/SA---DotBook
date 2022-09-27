
function Buscar_Por_Nome(){

    alert("Realizando Busca por Nome :)");
}


function Cadastrar(){

    location.href = "views/cadastro/cadastro.html";
}

function Logar(){

    location.href = "views/login/login.php";
}

function deslogar(){

    location.href = "./controller/UsuarioController.php?logout=true";
}

var adc_livro_modoatual = "off";
function Adicionar_Livro(){

    if(adc_livro_modoatual == "off"){

        document.getElementById("background_overlay").style.display = "block";
        document.getElementById("Background_Addproduct").style.display = "block";
        adc_livro_modoatual = "on";
        window.scrollTo(0, 100);
        

    } else if(adc_livro_modoatual == "on"){
        
        document.getElementById("background_overlay").style.display = "none"; 
        document.getElementById("Background_Addproduct").style.display = "none";
        adc_livro_modoatual = "off";

    }

}

function desativarol(){

    if (adc_livro_modoatual == "on"){

        document.getElementById("background_overlay").style.display = "none"; 
        document.getElementById("Background_Addproduct").style.display = "none";
        adc_livro_modoatual = "off" 
        noScroll();

    } else if(adc_livro_modoatual == "off"){

        
        document.getElementById("background_overlay").style.display = "block";
        document.getElementById("Background_Addproduct").style.display = "block";
        adc_livro_modoatual = "on";
        window.scrollTo(0, 0);
        

    }
}



function Fale_Conosco(){

    alert("Falando Conosco");
}

function Termos_De_Uso(){

    alert("Estudando Termos de Uso...");
}

function Logo_Return(){

    window.scrollTo(0, 0);

    document.getElementById("background_overlay").style.display = block;
}

function funcaoteste(){

    location.href = "../dotbook/views/livro/livro_principal.php";
}

function Sobre(){

    location.href = "views/sobre/sobre.html";
}