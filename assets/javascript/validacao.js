const caixaDeTexto = document.querySelector('[data-validar]');

const tiposErrosInputs = {
    nome: {
        'valueMissing': "O campo nome não pode estar vazio"
    },
    email: {
        'valueMissing': "O campo email não pode estar vazio",
        'patternMismatch': "O email deve conter o nome, o @ e o domínio do e-mail"
    }
}

const tiposErros = [
    'valueMissing', 'patternMismatch'
]

const MostrarMensagemErro = (input, tipoInput, mensagemAtual) => {
    let mensagem = "";
    if (mensagemAtual != "") mensagemAtual = mensagemAtual.split("<br>");


    tiposErros.forEach(erro => {
        if (input.validity[erro] && (mensagemAtual.indexOf(tiposErrosInputs[tipoInput][erro])) < 0 ) {
                mensagem += tiposErrosInputs[tipoInput][erro] + "<br/>";
        }
    })
    return mensagem;
}


export const validacao = (input) => {

    const tipoInput = input.dataset.tipo
    if (input.validity.valid) {
        caixaDeTexto.innerHTML = "";
    }
    else {
        caixaDeTexto.innerHTML += MostrarMensagemErro(input, tipoInput, caixaDeTexto.innerHTML)
    }
}
