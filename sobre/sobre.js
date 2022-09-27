
var front1 = "off";
function fe1(){

    if(front1 == "off"){
        var nomefe1 = document.querySelector("#nome");
        nomefe1.innerHTML = "<p>Nome: Diego Savio</p>";

        var idadefe1 = document.querySelector("#idade");
        idadefe1.innerHTML = "<p>Idade: 18 anos</p>";

        var githubfe1 = document.querySelector("#GitHub");
        githubfe1.innerHTML = "<p>GitHub:<a href=https://github.com/DiegoSavioRocha>Diego Savio Rocha</a></p>";

        var linkedinfe1 = document.querySelector("#Linkedin");
        linkedinfe1.innerHTML = "<p>Linkedin:<a href=https://www.linkedin.com/in/diego-rocha-687a3822b/>Diego Rocha</a></p>";

        var funcaofe1 = document.querySelector("#funcao");
        funcaofe1.innerHTML = "<p>Função: Front-End</p>";

        document.getElementById("giffe1").style.display = "block";
        document.getElementById("gifbe1").style.display = "block";
        document.getElementById("giffe2").style.display = "none";
        document.getElementById("gifbe2").style.display = "none";

        front1 = "on";
        front2 = "off";
        back1 = "off";
        back2 = "off"
        
    } else if(front1 == "on"){
        var nomefe1 = document.querySelector("#nome");
        nomefe1.innerHTML = "<p>Nome: </p>";

        var idadefe1 = document.querySelector("#idade");
        idadefe1.innerHTML = "<p>Idade: </p>";

        var githubfe1 = document.querySelector("#GitHub");
        githubfe1.innerHTML = "<p>GitHub:<a href=asddas></a></p>";

        var linkedinfe1 = document.querySelector("#Linkedin");
        linkedinfe1.innerHTML = "<p>Linkedin:<a href=></a></p>";

        var funcaofe1 = document.querySelector("#funcao");
        funcaofe1.innerHTML = "<p>Função:</p>";

        document.getElementById("giffe1").style.display = "none";
        document.getElementById("gifbe1").style.display = "none";
        front1 = "off";
    }
}

var front2 = "off";
function fe2(){

    if(front2 == "off"){

        var nomefe2 = document.querySelector("#nome");
        nomefe2.innerHTML = "<p>Nome: Mateus Meira</p>";

        var idadefe2 = document.querySelector("#idade");
        idadefe2.innerHTML = "<p>Idade: 18 anos</p>";

        var githubfe2 = document.querySelector("#GitHub");
        githubfe2.innerHTML = "<p>GitHub:<a href=https://github.com/mateusMSL>MateusMSL</a></p>";

        var linkedinfe2 = document.querySelector("#Linkedin");
        linkedinfe2.innerHTML = "<p>Linkedin:<a href=https://www.linkedin.com/in/mateus-meira-santos-572772246>Mateus Meira Santos</a></p>";

        var funcaofe2 = document.querySelector("#funcao");
        funcaofe2.innerHTML = "<p>Função: Front-End</p>";

        document.getElementById("giffe1").style.display = "block";
        document.getElementById("gifbe1").style.display = "block";
        document.getElementById("giffe2").style.display = "none";
        document.getElementById("gifbe2").style.display = "none";

        front2 = "on";
        front1 = "off";
        back1 = "off";
        back2 = "off";
        
    } else if(front2 == "on"){

        var nomefe1 = document.querySelector("#nome");
        nomefe1.innerHTML = "<p>Nome: </p>";

        var idadefe1 = document.querySelector("#idade");
        idadefe1.innerHTML = "<p>Idade: </p>";

        var githubfe1 = document.querySelector("#GitHub");
        githubfe1.innerHTML = "<p>GitHub:<a href=asddas></a></p>";

        var linkedinfe1 = document.querySelector("#Linkedin");
        linkedinfe1.innerHTML = "<p>Linkedin:<a href=asddas></a></p>";

        var funcaofe1 = document.querySelector("#funcao");
        funcaofe1.innerHTML = "<p>Função:</p>";

        document.getElementById("giffe1").style.display = "none";
        document.getElementById("gifbe1").style.display = "none";
        front2 = "off";
    }
}

var back1 = "off";
function be1(){

    if(back1 == "off"){

        var nomebe1 = document.querySelector("#nome");
        nomebe1.innerHTML = "<p>Nome: Marcos Gustavo</p>";

        var idadebe1 = document.querySelector("#idade");
        idadebe1.innerHTML = "<p>Idade: 18 anos</p>";

        var githubbe1 = document.querySelector("#GitHub");
        githubbe1.innerHTML = "<p>GitHub:<a href=https://github.com/marcosgustavo7>Marcos Gustavo</a></p>";

        var linkedinbe1 = document.querySelector("#Linkedin");
        linkedinbe1.innerHTML = "<p>Linkedin:<a href=https://www.linkedin.com/in/marcos-gustavo-271152223>Marcos Gustavo</a></p>";

        var funcaobe1 = document.querySelector("#funcao");
        funcaobe1.innerHTML = "<p>Função: Back-End</p>";

        document.getElementById("giffe2").style.display = "block";
        document.getElementById("gifbe2").style.display = "block";
        document.getElementById("giffe1").style.display = "none";
        document.getElementById("gifbe1").style.display = "none";

        back1 = "on";
        front1 = "off";
        front2 = "off";
        back2 = "off";
        
    } else if(back1 == "on"){

        var nomebe1 = document.querySelector("#nome");
        nomebe1.innerHTML = "<p>Nome: </p>";

        var idadebe1 = document.querySelector("#idade");
        idadebe1.innerHTML = "<p>Idade: </p>";

        var githubbe1 = document.querySelector("#GitHub");
        githubbe1.innerHTML = "<p>GitHub:<a href=asddas></a></p>";

        var linkedinbe1 = document.querySelector("#Linkedin");
        linkedinbe1.innerHTML = "<p>Linkedin:<a href=asddas></a></p>";

        var funcaobe1 = document.querySelector("#funcao");
        funcaobe1.innerHTML = "<p>Função: </p>";

        document.getElementById("giffe2").style.display = "none";
        document.getElementById("gifbe2").style.display = "none";
        back1 = "off";
    }
}

var back2 = "off";
function be2(){

    if(back2 == "off"){

        var nomebe2 = document.querySelector("#nome");
        nomebe2.innerHTML = "<p>Nome: Guilherme de Freitas</p>";

        var idadebe2 = document.querySelector("#idade");
        idadebe2.innerHTML = "<p>Idade: 19 anos</p>";

        var githubbe2 = document.querySelector("#GitHub");
        githubbe2.innerHTML = "<p>GitHub:<a href=https://github.com/Guilhermegfs>Guilhermegfs</a></p>";

        var linkedinbe2 = document.querySelector("#Linkedin");
        linkedinbe2.innerHTML = "<p>Linkedin:<a href=https://www.linkedin.com/in/guilherme-de-freitas-silva-04846024b/>Guilherme de Freitas</a></p>";

        var funcaobe2 = document.querySelector("#funcao");
        funcaobe2.innerHTML = "<p>Função: Back-End</p>";

        document.getElementById("giffe2").style.display = "block";
        document.getElementById("gifbe2").style.display = "block";
        document.getElementById("giffe1").style.display = "none";
        document.getElementById("gifbe1").style.display = "none";

        back2 = "on";
        front1 = "off";
        front2 = "off";
        back1 = "off";
        
    } else if(back2 == "on"){

        var nomebe2 = document.querySelector("#nome");
        nomebe2.innerHTML = "<p>Nome: </p>";

        var idadebe2 = document.querySelector("#idade");
        idadebe2.innerHTML = "<p>Idade: </p>";

        var githubbe2 = document.querySelector("#GitHub");
        githubbe2.innerHTML = "<p>GitHub:<a href=asddas></a></p>";

        var linkedinbe2 = document.querySelector("#Linkedin");
        linkedinbe2.innerHTML = "<p>Linkedin:<a href=asddas></a></p>";

        var funcaobe2 = document.querySelector("#funcao");
        funcaobe2.innerHTML = "<p>Função: </p>";

        document.getElementById("giffe2").style.display = "none";
        document.getElementById("gifbe2").style.display = "none";
        back2 = "off";
    }
}

function Logo_Return(){

    window.scrollTo(0, 0);

    location.href = "../../"
}