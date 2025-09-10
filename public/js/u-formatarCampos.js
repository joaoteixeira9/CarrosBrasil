function aplicarMascaraCpfCnpj(cpfCnpj) {
    let valorNumerico = cpfCnpj.value.replace(/\D/g, '');
    let valorFormatado = valorNumerico;
    let erro = document.getElementById("erroCpfCnpj");
    let btn = document.getElementById("btn-confirmar");

    erro.style.display = 'none';
    btn.disabled = true;

    if (valorNumerico.length > 14) {
        valorNumerico = valorNumerico.slice(0, 14);
        valorFormatado = valorNumerico;
    }

    if (valorNumerico.length == 11) {
        valorFormatado = valorNumerico.replace(/(\d{3})(\d)/, "$1.$2");
        valorFormatado = valorFormatado.replace(/(\d{3})(\d)/, "$1.$2");
        valorFormatado = valorFormatado.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    }
    else if (valorNumerico.length == 14) {
        valorFormatado = valorNumerico.replace(/^(\d{2})(\d)/, "$1.$2");
        valorFormatado = valorFormatado.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
        valorFormatado = valorFormatado.replace(/\.(\d{3})(\d)/, ".$1/$2");
        valorFormatado = valorFormatado.replace(/(\d{4})(\d)/, "$1-$2");
    }

    if (valorNumerico.length > 0 && valorNumerico.length !== 11 && valorNumerico.length !== 14) {
        erro.style.display = 'block';
        btn.disabled = true;
    } else {
        erro.style.display = 'none';
        btn.disabled = false;
    }

    cpfCnpj.value = valorFormatado;
}

function aplicarMascaraTelefone(tel) {
    let valor = tel.value.replace(/\D/g, '');
    let btn = document.getElementById("btn-confirmar");
    let erro = document.getElementById("erroTel");

    erro.style.display = 'none';
    btn.disabled = true;

    if (valor.length > 11) {
        valor = valor.slice(0,11);
    }

    if (valor.length == 11) {
        valor = valor.replace(/(\d{2})(\d)/, "($1)$2");
        valor = valor.replace(/(\d{5})(\d)/, "$1-$2");
    }

    if (valor.length == 10) {
        valor = valor.replace(/(\d{2})(\d)/, "($1)$2");
        valor = valor.replace(/(\d{4})(\d)/, "$1-$2");
    }

    if (valor.length > 0 && valor.length !== 13 && valor.length !== 14) {
        erro.style.display = 'block'
        btn.disabled = true;
    }else{
        erro.style.display = 'none'
        btn.disabled = false;
    }

    tel.value = valor;
}

document.addEventListener("DOMContentLoaded", function (){
    const inputCpfCnpj = document.getElementById("cpf_cnpj");
    const inputTel = document.getElementById("telefone");

    if (inputCpfCnpj) {
        aplicarMascaraCpfCnpj(inputCpfCnpj);
        inputCpfCnpj.addEventListener("input", function () {
            aplicarMascaraCpfCnpj(this);
        });
    }

    if (inputTel) {
        aplicarMascaraTelefone(inputTel);
        inputTel.addEventListener("input", function () {
            aplicarMascaraTelefone(this);
        });
    }
});