const delay = (delayInms) => {
    return new Promise(resolve => setTimeout(resolve, delayInms)); // instancia uma função basica de Tempo_parado do JS, n mexer 
};
function passou(){ //
    document.getElementById('botao').style.fontSize='20%'
    document.getElementById('botao').style.border='1px solid black'
}
function npassou(){
    document.getElementById('botao').style.fontSize='13px'
    document.getElementById('botao').style.border='none'
}
function passou2(){
    document.getElementById('botao2').style.fontSize='20%'
    document.getElementById('botao2').style.border='1px solid black'
}
function npassou2(){
    document.getElementById('botao2').style.fontSize='13px'
    document.getElementById('botao2').style.border='none'
}
function pg(){ // manda na url o HTTPS que vc quiser
    window.location.assign("http://localhost/projetinho/Cadastrar.html")
}
document.addEventListener('DOMContentLoaded',function(){
    const urlParams = new URLSearchParams(window.location.search);
    const aconteceu = urlParams.get('aconteceu'); // n mexer

    const errop = document.getElementById('perro'); 

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

    }else if (aconteceu === 'nexist'){ // erro pro cadastro
        errop.textContent = 'Usuário não existe!';
        errop.style.padding='5px';
        errop.style.backgroundColor='rgb(180,0,0)';
        errop.style.borderRadius='5px';
        setTimeout(() => {
        errop.textContent = '';
        errop.style.padding='0%';
        }, 2000);
    }
})

$("button").click(function(){
    $("div").animate({left: '250px'});
  });