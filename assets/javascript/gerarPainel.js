const links = document.querySelectorAll('.cadastros--excluir');
const modal = document.querySelector('.modal');
const botaoCancelar = document.querySelector('.botao.cancelar')

links.forEach(link => {
    link.addEventListener("click", (evento) => {
        let values = evento.currentTarget.dataset.number;
        values = values.split("|");
        console.log(values)
        modal.style.display = "flex";

        let id = document.querySelector("#id");
        let nome = document.querySelector("#modal__nome");
        let email = document.querySelector("#modal__email");

        id.value = values[0];
        nome.value = values[1];
        email.value = values[2];
    })
})

botaoCancelar.addEventListener("click", () => {
    modal.style.display = "none";
})
