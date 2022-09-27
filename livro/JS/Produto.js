function Buscar_Por_Nome(){

    alert("Realizando Busca por Nome :)");
}




function Fale_Conosco(){

    alert("Falando Conosco");
}

function Termos_De_Uso(){

    alert("Estudando Termos de Uso...");
}


function Cadastrar(){

    location.href = "../cadastro/cadastro.html";
}

function Logar(){

    location.href = "../login/login.php";
}

function deslogar(){

    location.href = "../../controller/UsuarioController.php?logout=true";
}

function Logo_Return(){

    location.href = "../../";
}


function alterar_exibir(){

    document.getElementById("book_edit_button").style.display = "none";
    document.getElementById("book_delete_button").style.display = "none";
    document.getElementById("book_cancel_button").style.display = "block";
    document.getElementById("book_edit_confirm_button").style.display = "block";
    
    document.getElementById("nomep2").style.display = "block";
    document.getElementById("autor2").style.display = "block";
    document.getElementById("genero2").style.display = "block";
    document.getElementById("editora2").style.display = "block";
    document.getElementById("pagina2").style.display = "block";
    document.getElementById("ano2").style.display = "block";
    document.getElementById("fbfeito1").style.display = "none";

}


function cancelar_exibir(){

    document.getElementById("book_edit_button").style.display = "block";
    document.getElementById("book_delete_button").style.display = "block";
    document.getElementById("book_cancel_button").style.display = "none";
    document.getElementById("book_edit_confirm_button").style.display = "none";
    
    document.getElementById("nomep2").style.display = "none";
    document.getElementById("autor2").style.display = "none";
    document.getElementById("genero2").style.display = "none";
    document.getElementById("editora2").style.display = "none";
    document.getElementById("pagina2").style.display = "none";
    document.getElementById("ano2").style.display = "none";
    
    document.getElementById("fbfeito1").style.display = "block";
}

function excluir_livroatual(){

    alert("Olá, precisamos fazer o PHP de excluir e recarregar para a pagina inicial, porem como ainda não esta pronto só vamos voltar pra pagina inicial mesmo");
    location.href = "index.html";
}







