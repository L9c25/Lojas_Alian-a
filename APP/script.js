function mudarImagem(caminhoImagem) {
    var imagemPrincipal = document.getElementById('imagemPrincipal');
    imagemPrincipal.src = caminhoImagem;

    // Remover a classe 'selecionado' de todas as variações
    var variacoes = document.querySelectorAll('.ladolado > div');
    variacoes.forEach(function (variacao) {
        variacao.classList.remove('selecionado');
    });

    // Adicionar a classe 'selecionado' à variação clicada
    event.currentTarget.classList.add('selecionado');
}



function exibirFormulario() {
    const formularioOverlay = document.getElementById("formularioOverlay");
    formularioOverlay.style.display = "flex";
    document.body.classList.add('formulario-aberto'); // Adicione uma classe ao body
}

function fecharFormulario() {
    const formularioOverlay = document.getElementById("formularioOverlay");
    formularioOverlay.style.display = "none";
    document.body.classList.remove('formulario-aberto'); // Remova a classe do body
}

function selecionarEstrelas(event) {
    const estrelas = document.querySelectorAll('.estrela');
    const avaliacaoInput = document.getElementById("avaliacao");

    estrelas.forEach((estrela, index) => {
        if (index < event.target.dataset.valor) {
            estrela.classList.add('selecionada');
        } else {
            estrela.classList.remove('selecionada');
        }
    });

    avaliacaoInput.value = event.target.dataset.valor;
}

function adicionarComentario() {
    const nome = document.getElementById("nome").value;
    const avaliacao = document.getElementById("avaliacao").value;
    const comentario = document.getElementById("comentario").value;

    if (nome && avaliacao && comentario) {
        const comentariosContainer = document.getElementById("comentarios");

        const novoComentario = document.createElement("div");
        novoComentario.className = "comentario";
        novoComentario.innerHTML = `<strong>${nome}</strong> - Avaliação: ${avaliacao}/5<br>${comentario}`;

        comentariosContainer.appendChild(novoComentario);

        // Limpar o formulário
        document.getElementById("nome").value = "";
        resetEstrelas();
        document.getElementById("comentario").value = "";

        // Fechar o formulário após adicionar um comentário
        fecharFormulario();
    } else {
        alert("Por favor, preencha todos os campos.");
    }
}

function resetEstrelas() {
    const estrelas = document.querySelectorAll('.estrela');
    estrelas.forEach((estrela) => {
        estrela.classList.remove('selecionada');
    });
}

