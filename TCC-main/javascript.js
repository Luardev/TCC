const delay = (delayInms) => {
    return new Promise(resolve => setTimeout(resolve, delayInms)); // instancia uma função basica de Tempo_parado do JS, n mexer 
};
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
});
const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}