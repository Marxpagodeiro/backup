const openModalButton = document.querySelector(".botao");
const closeModalButton = document.querySelector("#close-modal");
const closeCadastroButton = document.querySelector("#close-modalCad")
const entrar = document.querySelector("#entrar");
const openCadastroButton = document.querySelector("#but_cad")
const modal = document.querySelector("#modal");
const modalCadastro = document.querySelector("#modal_cadastro")
const form = document.querySelector(".form");
const fromCadastro = document.querySelector(".form_cadastro")
const txtusuario = document.getElementById("txtusuario");
const txtsenha = document.getElementById("txtsenha");
const txtnome = document.querySelector("txtnome");
const txtdata = document.querySelector("txtdata");
const txtemail = document.querySelector("txtemail");
const txtCsenha = document.querySelector("txtCsenha ");


const toggleModal = () => {
  modal.classList.toggle("hide");

};
const toggleModalCad = () => {
  modalCadastro.classList.toggle("hide");

};
[openModalButton, closeModalButton].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});
[openCadastroButton,closeCadastroButton].forEach((el) => {
    el.addEventListener("click", () => toggleModalCad());
  });

// Aplica evento na submissão do formulário
form.addEventListener("submit", (e) => {
  e.preventDefault();
  validaEntrada();
});


function validaEntrada() {
  // Valores dos elementos
  let usuarioValor = txtusuario.value.trim();
  let senhaValor = txtsenha.value.trim();
  
  //Verificando usuario
  if (usuarioValor === "") {
    MostraErro(txtusuario, "Usuário deve ser preenchido!");
  }else{
    MostraSucesso(txtusuario);

  }

  //Verificando senha
  if (senhaValor === "") {
    MostraErro(txtsenha, "Senha deve ser preenchida");
  } else if (senhaValor.length < 6 || senhaValor.length > 30) {
    MostraErro(txtsenha, "Senha deve ter entre  6 a 30 caracteres");
  } else {
    MostraSucesso(txtsenha);
  }

  if(senhaValor === "123456" || usuarioValor === "admin" ){
    entrar.addEventListener('click', function() {
      window.location.href = 'menu.html'; 
    });
  }

}

fromCadastro.addEventListener("submit", (el) => {
  el.preventDefault();
  validaCadastro();
});

function validaCadastro() {
  // Valores dos elementos
  let usuarioValor = txtusuario.value.trim();
  let senhaValor = txtsenha.value.trim();
  let nomeValor = txtnome.value.trim();
  let emailValor = txtemail.value.trim();
  let dataValor = txtdata.value.trim();
  let CsenhaValor = txtCsenha.value.trim();
  
  //Verificando usuario
  if (usuarioValor === "") {
    MostraErro(txtusuario, "Usuário deve ser preenchido!");
  } else {
    MostraSucesso(txtusuario);
  }

  if (nomeValor === "") {
    MostraErro(txtnome, "O Nome completo deve ser preenchido!");
  } else {
    MostraSucesso(txtnome);
  }

  if (emailValor === "") {
    MostraErro(txtemail, "O E-mail deve ser preenchido!");
  } else {
    MostraSucesso(txtemail);
  }

  if (dataValor === "") {
    MostraErro(txtdata, "A data de Nascimeto deve ser preenchido!");
  } else {
    MostraSucesso(txtdata);
  }



  //Verificando senha
  if (senhaValor === "") {
    MostraErro(txtsenha, "Senha deve ser preenchida");
  } else if (senhaValor.length < 6 || senhaValor.length > 30) {
    MostraErro(txtsenha, "Senha deve ter entre  6 a 30 caracteres");
  } else if(senhaValor === CsenhaValor){
    MostraErro(txtsenha, "A senha deve ser iguas a confirmar senha");
    MostraErro(txtCsenha,"A senha deve ser iguas a confirmar senha");
  } 
  else {
    MostraSucesso(txtsenha);
  }

}

// Se existe algum erro, então apresenta na tela.
function MostraErro(input, message) {
  let formControl = input.parentElement;
  formControl.className = "form-control error";
  let small = formControl.querySelector("small");
  small.innerText = message;
}

// Se NÃO existe erro, então apresenta na tela.
function MostraSucesso(input) {
  let formControl = input.parentElement;
  formControl.className = "form-control success";
}