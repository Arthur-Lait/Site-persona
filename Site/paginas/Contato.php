
    <h3 class="contato">Contato</h3>
    <p>Entre em contato conosco preenchendo o formulário abaixo:</p>

<section class="mapa-contato">
<form name="FormContato" method="POST" action="index.php?param=home">
    <label for="nome">Digite seu Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Digite seu Nome" required>
    <div id="mensagem-erro-nome" style="color: red; margin-bottom: 10px;"></div>

    <label for="email">Digite seu E-Mail:</label>
    <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required>
    <div id="mensagem-erro-email" style="color: red; margin-bottom: 10px;"></div>

    <label for="telefone">Digite seu Whatsapp:</label>
    <input type="text" name="telefone" id="telefone" placeholder="(99) 99999-9999" required>
    <div id="mensagem-erro-tel" style="color: red; margin-bottom: 10px;"></div>

    <label for="local">Digite seu Local:</label>
    <input type="text" name="local" id="local" placeholder="Digite seu Local">
    <div id="mensagem-erro-local" style="color: red; margin-bottom: 10px;"></div>

    <label for="cargo">Digite seu Cargo:</label>
    <input type="text" name="cargo" id="cargo" placeholder="Digite seu Cargo" required>
    <div id="mensagem-erro-cargo" style="color: red; margin-bottom: 10px;"></div>


    <label for="mensagem">Digite sua Mensagem:</label>
    <textarea name="mensagem" id="mensagem" rows="10" required></textarea>
    <br>

    <div id="mensagem-envio" style="color: red; margin-bottom: 10px;"></div>
    <button type="submit" id="botao">
        Enviar Mensagem
    </button>
</form>
</section>

<script>

    document.getElementById("botao").onclick = function (e) {
        var nome = document.getElementById("nome").value;
        var email = document.getElementById("email").value;
        var telefone = document.getElementById("telefone").value;
        var cargo = document.getElementById("cargo").value;
        var empresa = document.getElementById("empresa").value;
        var mensagem = document.getElementById("mensagem").value;

        var mensagemErroNome = document.getElementById("mensagem-erro-nome");
        var mensagemErroEmail = document.getElementById("mensagem-erro-email");
        var mensagemErroTel = document.getElementById("mensagem-erro-tel");
        var mensagemErroCargo = document.getElementById("mensagem-erro-cargo");
        var mensagemErroEmpresa = document.getElementById("mensagem-erro-empresa");
        var mensagemEnvio = document.getElementById("mensagem-envio");

        mensagemErroNome.innerHTML = "";
        mensagemErroEmail.innerHTML = "";
        mensagemErroTel.innerHTML = "";
        mensagemErroCargo.innerHTML = "";
        mensagemErroEmpresa.innerHTML = "";
        mensagemEnvio.innerHTML = "";

        const validarEmail = (email) => {
            const regex = /^[^\s]+@[^\s]+\.[^\s]+$/;
            return regex.test(email);
        }

        const validarTelefone = (telefone) => {
            const regextelefone = /^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/;
            return regextelefone.test(telefone);
        }

        const validacaoTel = validarTelefone(telefone);
        const validacaoEmail = validarEmail(email);

        let erro = false;
        let erroEmpresa = false;
        let erroCargo = false;
        let erroNome = false;
        let erroEmail = false;
        let erroTel = false;

        if (nome == "" && email == "" && telefone == "" && cargo == "" && empresa == "") {
            mensagemErroNome.innerHTML = "Preencha todos os Campos";
            mensagemErroEmail.innerHTML = "Preencha todos os Campos";
            mensagemErroTel.innerHTML = "Preencha todos os Campos";
            mensagemErroCargo.innerHTML = "Preencha todos os Campos";
            mensagemErroEmpresa.innerHTML = "Preencha todos os Campos";
            erro = true;
            erroNome = true;
            erroEmail = true;
            erroTel = true;
            erroCago = true;
            erroEmpresa = true;
        } else {
            if (nome == "") {
                mensagemErroNome.innerHTML = "Preencha o Campo Nome!";
                erro = true;
                erroNome = true;
            } else if (nome.length < 2) {
                mensagemErroNome.innerHTML = "O nome deve ter ao menos 2 caracteres!";
                erro = true;
                erroNome = true;
            }
            if (email == "") {
                mensagemErroEmail.innerHTML = "Preencha o Campo E-Mail!";
                erro = true;
                erroEmail = true;
            } else if (!validacaoEmail) {
                mensagemErroEmail.innerHTML = "O E-Mail é Inválido!";
                erro = true;
                erroEmail = true;
            }
            if (telefone == "" || telefone == "(99) 99999-9999") {
                mensagemErroTel.innerHTML = "Preencha o Campo Telefone!";
                erro = true;
                erroTel = true;
            } else if (!validacaoTel) {
                mensagemErroTel.innerHTML = "O Telefone é Inválido!";
                erro = true;
                erroTel = true;
            }
            if (cargo == "") {
                mensagemErroCargo.innerHTML = "Preencha o Campo Cargo!";
                erro = true;
                erroCargo = true;
            } else if (cargo.length < 2) {
                mensagemErroCargo.innerHTML = "O cargo deve ter ao menos 2 caracteres!";
                erro = true;
                erroCargo = true;
            }
            if (empresa == "") {
                mensagemErroEmpresa.innerHTML = "Preencha o Campo Empresa!";
                erro = true;
                erroEmpresa = true;
            } else if (empresa.length < 2) {
                mensagemErroEmpresa.innerHTML = "O nome da empresa deve ter ao menos 2 caracteres!";
                erro = true;
                erroEmpresa = true;
            }
        }

        if (!erroNome && !erroEmail && !erroTel && !erroCargo && !erroEmpresa) {
            if (mensagem == "") {
                mensagemEnvio.innerHTML = "O campo Mensagem está vazio!";
                erro = true;
            } else {
                erro = false;
            }
        }
        if (erro) {
            e.preventDefault();
        } else {
            mensagemEnvio.style.color = "green";
            mensagemEnvio.innerHTML = "Mensagem enviada com sucesso!";

            document.getElementById("nome").value = "";
            document.getElementById("email").value = "";
            document.getElementById("telefone").value = "";
            document.getElementById("cargo").value = "";
            document.getElementById("empresa").value = "";
            document.getElementById("mensagem").value = "";
        }
    }
</script>