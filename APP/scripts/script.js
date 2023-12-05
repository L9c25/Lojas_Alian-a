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

// const comentarios = document.getElementById("comentarios");

// // Verifica se a div está vazia
// if (comentarios.innerHTML.trim() === "") {
//     // Se estiver vazia, define a propriedade display como "none"
//     comentarios.style.display = "none";
// } else {
//     // Se não estiver vazia, mantém ou define a propriedade display como "block" (ou o valor desejado)
//     comentarios.style.display = "block"; // ou qualquer outro valor, dependendo do seu layout
// }


function exibirFormulario() {
    const formularioOverlay = document.getElementById("formularioOverlay");
    formularioOverlay.style.display = "flex";
    document.body.classList.add('formulario-aberto'); // Adicione uma classe ao body
}

function fecharFormulario() {
    const formularioOverlay = document.getElementById("formularioOverlay");
    formularioOverlay.style.display = "none";
    document.body.classList.remove('formulario-aberto'); 
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

// Função para selecionar a quantidade de estrela e retornar o resultado
function avaliarAvaliacao(avaliacao) {
    switch (avaliacao) {
        case "1":
            return "★";
        case "2":
            return "★★";
        case "3":
            return "★★★";
        case "4":
            return "★★★★";
        case "5":
            return "★★★★★";
        default:
            return "Não Avaliado";
    }
}

function adicionarComentario() {
    const nome = document.getElementById("nome").value;
    const avaliacao = document.getElementById("avaliacao").value;
    const comentario = document.getElementById("comentario").value;
    const imagemInput = document.getElementById("imagem");

    if (nome && avaliacao && comentario) {
        const comentariosContainer = document.getElementById("comentarios");
        const novoComentario = document.createElement("div");
        novoComentario.className = "comentario";

        // Avaliar a avaliação e obter o resultado 
        const resultadoAvaliacao = avaliarAvaliacao(avaliacao);

        // Adicionar a imagem, se uma for selecionada
        if (imagemInput.files.length > 0) {
            const imagemURL = URL.createObjectURL(imagemInput.files[0]);
            novoComentario.innerHTML += `
                <div class="comment-container">
                    <div class="user-info">
                        <!--imagem do perfil do usuario-->
                        <img class="user-photo" src="${imagemURL}" alt="Foto de perfil">
                        <div class="name_star">
                            <div class="user-name">${nome}</div>
                            <!--avaliação em estrela-->
                            <div class="star-rating">${resultadoAvaliacao}</div>
                        </div>
                        <button class="like-button">👍</button>
                    </div>
                    <!--aonde vai ficar o comentário do usuario-->
                    <div class="comment-text">${comentario}</div>
                </div>
                <style> display: block;</style>
            `;
        }

        comentariosContainer.appendChild(novoComentario);

        // Limpar o formulário
        document.getElementById("nome").value = "";
        resetEstrelas();
        document.getElementById("comentario").value = "";
        imagemInput.value = "";

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

// AAAAAAAAAAAAAAAAAAAAAAA

 // Adicione um evento change ao input de imagem
 const imagemInput = document.getElementById("imagem");
 const labelImagem = document.getElementById("imagem-label");

 imagemInput.addEventListener("change", function() {
   // Altera o texto do label quando uma imagem for escolhida
   if (imagemInput.files.length > 0) {
     labelImagem.textContent = "Escolha outra imagem";
     labelImagem.classList.add("escolhido");
     mensagemImagem.style.display = "block";
   } else {
     labelImagem.textContent = "Escolher Imagem";
     mensagemImagem.style.display = "none";
   }
 });



 

