const delay = (delayInms) => {
    return new Promise(resolve => setTimeout(resolve, delayInms)); // instancia uma função basica de Tempo_parado do JS, n mexer 
};
var num = 2;
function passou(){ //
    document.getElementById('botao').style.fontSize='120%'
    document.getElementById('botao').style.border='1px solid black'
}
function npassou(){
    document.getElementById('botao').style.fontSize='13px'
    document.getElementById('botao').style.border='1px solid black'
}
function pg(){ // manda na url o HTTPS que vc quiser
    window.location.assign("http://localhost/projetinho/Cadastrar.html")
}
function addjogador(){
    $("#ModCad2").append("<div class='mb-3'><label for='Nome_jogador' class='col-form-label'>Nome do jogador"+num+"</label><input type='text' class='form-control' name='Nome_jogador' placeholder='Digite o nome do jogador...' required></div>")
    num = num + 1;
}
document.addEventListener('DOMContentLoaded',function(){
    const urlParams = new URLSearchParams(window.location.search);
    const aconteceu = urlParams.get('aconteceu'); // n mexer
    
    if (aconteceu === 'incorrect'){ // erro pro login 
        errop.textContent = 'senha incorreta';
        errop.style.padding='5px';
        errop.style.backgroundColor='rgb(180,0,0)';
        errop.style.borderRadius='5px';
        setTimeout(() => {
        // espera 2 segundos e faz oq estiver dentro da funcao 
        errop.textContent = '';
        errop.style.padding='0%';
        }, 2000);
        setTimeout(()=>{
            window.location.assign("http://localhost:8080/TCC-main/escola/cadescola.php")
        },2000)

    }else if (aconteceu === 'nexist'){ // erro pro cadastro
        $("#aviso").empty()
        $("#aviso").append("<div class='alert alert-danger' role='alert'>Usuário não existe!</div>");
        $("#aviso").fadeOut(2500);
        // setTimeout(()=>{
        //     window.location.assign("http://localhost:8080/TCC-main/escola/cadescola.php")
        // },2500)
    }else if (aconteceu === 'tiponexist'){
        $("#teste").empty()
        $("#teste").append("<div class='alert alert-danger d-flex align-items-center mt-2 ms-2 me-2' role='alert'><svg class='bi flex-shrink-0 me-2' style='height: 30px !important; width: 40px !important;' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg><div>Selecione um tipo de campeonato!</div></div>");
        $("#teste").fadeOut(2500);
        setTimeout(()=>{
            window.location.assign("http://localhost:8080/TCC-main/escola/cadescola.php")
        },2500)
    }
    else if (aconteceu === 'removido'){
        $("#teste").empty()
        $("#teste").append("<div class='alert alert-success d-flex align-items-center mt-2 ms-2 me-2' role='alert'><svg class='bi flex-shrink-0 me-2' style='height: 30px !important; width: 40px !important;' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg><div>Campeonato removido com sucesso!</div>");
        //$("#teste").append("<div class='alert alert-primary d-flex align-items-center mt-2 ms-2 me-2' role='alert'><svg class='bi flex-shrink-0 me-2' style='height: 30px !important; width: 40px !important;' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg><div>Campeonato removido com sucesso!</div>");
        $("#teste").fadeOut(2500);
        setTimeout(()=>{
            window.location.assign("http://localhost:8080/TCC-main/escola/cadescola.php")
        },2500)
    }else if (aconteceu === 'criado'){
        $("#teste").empty()
        $("#teste").append("<div class='alert alert-success d-flex align-items-center mt-2 ms-2 me-2' role='alert'><svg class='bi flex-shrink-0 me-2' style='height: 30px !important; width: 40px !important;' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg><div>Campeonato criado com sucesso!</div>");
        $("#teste").fadeOut(2500);
        setTimeout(()=>{
            window.location.assign("http://localhost:8080/TCC-main/escola/cadescola.php")
        },2500)
    }
});

async function entrar() {
    let Login = document.getElementById('Login').value;
    let senha = document.getElementById('senha').value;
    let response = await fetch(`../Banco/LOGIN.php`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ Login, senha })
    });
    let data = await response.json();
    if (data.status === true) {
        window.location.assign("http://localhost:8080/TCC-main/php/escola/cadescola.php");
    } else {
        window.location.assign("http://localhost:8080/TCC-main/php/escola/cadescola.php?aconteceu=nexist");
    }
}

// const { NOME, ENDERECO } = data[0];
// $("#select").append(`<option value="{nome}">{endereco}</option`);
// let options = DataTransfer.filter((item) => item.ativo === 'S');
// $("#select").html(options);

// const exampleModal = document.getElementById('exampleModal')
// if (exampleModal) {
//   exampleModal.addEventListener('show.bs.modal', event => {
//     // Button that triggered the modal
//     const button = event.relatedTarget
//     // Extract info from data-bs-* attributes
//     const recipient = button.getAttribute('data-bs-whatever')
//     // If necessary, you could initiate an Ajax request here
//     // and then do the updating in a callback.

//     // Update the modal's content.
//     const modalTitle = exampleModal.querySelector('.modal-title')
//     const modalBodyInput = exampleModal.querySelector('.modal-body input')

//     modalTitle.textContent = `New message to ${recipient}`
//     modalBodyInput.value = recipient
//   })
// }
// async function cadastrar(){
//     console.log('passo1')
//     let response  = await fetch(`../escola/cadastrar.php`);
//     console.log('passou')
//     let data = await response.json();
//     console.log(data);
// }

// if (window.jQuery) {
//     console.log("jQuery está OK");
// } else {
//     console.log("jQuery NÃO carregou");
// }