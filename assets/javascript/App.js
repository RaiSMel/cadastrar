import { validacao } from "./validacao.js";

const inputs = document.querySelectorAll('.entrada');

inputs.forEach(input => {
    input.addEventListener('blur', (evento) => {
        validacao(evento.target);
    });

})