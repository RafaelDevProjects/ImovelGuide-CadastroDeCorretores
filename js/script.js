document.getElementById("correotrForm").addEventListener("submit", function (e) {
    const cpf = document.querySelector('input[name="cpf"]').value;
    const creci = document.querySelector('input[name="creci"]').value;
    const name = document.querySelector('input[name="name"]').value;

    if (cpf.length != 11 || creci.length < 2 || name.length < 2) {
        alert("Por favor, preencha os campos corretamente.")
        e.preventDefault();
    }
});