<?php
try {
    $root = $_SERVER['DOCUMENT_ROOT'];
    require $root . "/APP/config/connect.php";
    require "./controllers/prodController.php";

} catch (Exception $e) {
    echo "". $e->getMessage() ."press F";
}
$ID = $_GET["id"];
$d = new daoMysql($pdo);
$produto = $d->listar();
$produto = $produto[$ID - 1];
echo($ID);
?>
<head>
    <title><?php echo($produto->getNome())?></title>
</head>
<body>
    <link rel="stylesheet" href="./components/produto/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- fundo com o tom cinza que fica atras do body2 -->
    <div class="fundo">
        <div class="aparente">
            <!--div com banheiro, sala e cozinha do topo do site -->
            <a href="#">
                <div class="banheiro">

                    <img src="./components/produto/Assets/WhatsApp Image 2023-11-17 at 00.59.40 (1).png"
                        alt="Toalha Branca" width="50%">

                    <div class="lado">
                        <h1>Banheiro</h1>
                        <div class="botão">
                            <!--este botão funciona tmbém para o botão da div cozinha-->
                            <h4>Comprar</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="sala">
                    <img src="./components/produto/Assets/WhatsApp Image 2023-11-17 at 00.59.40 (2).png"
                        alt="Sofá Verde" width="50%">
                    <div class="lado">
                        <h1>Sala</h1>
                        <div class="botão2">
                            <h4>Comprar</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="cozinha">

                    <img src="./components/produto/Assets/WhatsApp Image 2023-11-17 at 00.59.40_resized.png" alt="Fogão"
                        width="50%">

                    <div class="lado">
                        <h1>Cozinha</h1>
                        <div class="botão">
                            <h4>Comprar</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- fundo da pagina aonde vai conter o corpo do site-->
        <div class="body2">
            <div class="produtonome">
                <h1>Geladeira Frost Free 443 litros - Inox 110v </h1>
            </div>
            <div class="tudo">
                <div class="ladolado">
                    <!-- scripts que fazem imagens mudar de lugar-->
                    <div class="variação1" onclick="mudarImagem('./components/produto/Assets/geladeira.png')">
                        <img src="./components/produto/Assets/geladeira.png" alt="Produto" width="100%">
                    </div>
                    <div class="variação2" onclick="mudarImagem('./components/produto/Assets/geladeiraa_resized.png')">
                        <img src="./components/produto/Assets/geladeiraa_resized.png" alt="Produto" width="100%">
                    </div>

                    <div class="variação3" onclick="mudarImagem('./components/produto/Assets/semprod_resized.png')">
                        <img src="./components/produto/Assets/semprod_resized.png" alt="Produto" width="100%">
                    </div>
                    <div class="variação4" onclick="mudarImagem('./components/produto/Assets/lados_resized.png')">
                        <img src="./components/produto/Assets/lados_resized.png" alt="Produto" width="100%">
                    </div>
                </div>
                <!-- imagem principal quando for carregar o site-->
                <div class="Imagem_inicial">
                    <img id="imagemPrincipal" src="./components/produto/Assets/geladeira.png" alt="Produto" width="70%"
                        class="imagem1">
                </div>
                <div class="preços_produto">
                    <div>
                        <h1>Cores:</h1>
                    </div>
                    <div class="cores">
                        <!-- variação do produto com cor-->
                        <div class="prod1">
                            <a href="#">
                                <img src="./components/produto/Assets/geladeira - Azul.png" alt="gelradeia 4 Portas"
                                    width="100%">

                                <p>Azul</p>
                            </a>
                        </div>
                        <div class="prod2">
                            <a href="#">
                                <img src="./components/produto/Assets/geladeira.png" alt="gelradeia 4 Portas"
                                    width="100%">

                                <p>Prata</p>
                            </a>
                        </div>
                        <div class="prod3">
                            <a href="#">
                                <img src="./components/produto/Assets/geladeira - Rosa.png" alt="gelradeia 4 Portas"
                                    width="100%">

                                <p>Rosa</p>
                            </a>
                        </div>
                    </div>
                    <!--preço do produto-->
                    <div>
                        <div class="preçopromo">de <?php echo($produto->getPreco())?></div>
                        <div class="preçopromo2"> Por <?php echo($produto->getPreco() * 0.9)?></div>
                    </div>
                    <!--otões de interação, de adicionar a ista,whatsapp e frete-->
                    <div class="botão_prod">
                        <div class="desejo">
                            <a href="#" class="bot_clicavel">
                                <div class="icon_prod1" width="100%">
                                    <i class="fas fa-heart" style="color: red;"></i>
                                    <!--Icone do coração-->
                                </div>
                                <div class="t_icon1">
                                    <p>Lista de desejos</p>
                                </div>
                            </a>
                        </div>
                        <div class="WhatsApp">
                            <a href="#" class="bot_clicavel2">
                                <div class="icon_prod2">
                                    <i class="fab fa-whatsapp" style="color: white;"></i>
                                    <!-- Ícone de carrinho do whatsApp-->

                                </div>
                                <div class="t_icon2">
                                    <p>Comprar agora</p>
                                </div>
                            </a>
                        </div>
                        <div class="localização">
                            <a href="#" class="bot_clicavel3">
                                <div class="icon_prod3">
                                    <i class="fas fa-map-marker-alt" style="color: #4285F4;"></i>
                                    <!-- Ícone de localização -->
                                </div>
                                <div class="t_icon3">
                                    <p>Calcular frete</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Table com informações e descrição do produto-->
            <div class="info">
                <h1>Informações do Produto</h1>
                <table class="distancia">
                    <tr class="cor-fundo">
                        <th>
                            <h3>Tipo de Degelo</h3>
                        </th>
                        <td>FrostFree</td>
                    </tr>
                    <tr>
                        <th>
                            <h3>Porta Latas</h3>
                        </th>
                        <td>Sim</td>
                    </tr>
                    <tr class="cor-fundo">
                        <th>
                            <h3>Compartimento para Taças</h3>
                        </th>
                        <td>Sim</td>
                    </tr>
                    <tr>
                        <th>
                            <h3>Prateleira do refrigerador</h3>
                        </th>
                        <td>Vidro</td>
                    </tr>

                    <tr class="cor-fundo">
                        <th>
                            <h3>Dispenser de água</h3>
                        </th>
                        <td>Sim</td>
                    </tr>
                    <tr>
                        <th>
                            <h3>Porta do freezer aproveitavél</h3>
                        </th>
                        <td>Sim</td>
                    </tr>
                    <tr class="cor-fundo">
                        <th>
                            <h3>Dispenser de lata</h3>
                        </th>
                        <td>Sim</td>
                    </tr>
                </table>
            </div>
            <!--campo das Avaliações-->
            <div class="avaliacoes">
                <h2>Avaliações de Produtos</h2>
                <div class="recomend">
                    <button id="mostrarFormulario" onclick="exibirFormulario()">Fazer Avaliação</button>
                    <div class="formulario-overlay" id="formularioOverlay">
                        <div class="formulario-container">
                            <span class="fechar" onclick="fecharFormulario()">&times;</span>
                            <h3>Deixe sua Avaliação</h3>
                            <!--formulário que será escondido -->
                            <form class="formlindo">
                                <label for="imagem">Adicionar Imagem:</label>
                                <input type="file" id="imagem" accept="image/*">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" required>

                                <label for="avaliacao">Avaliação:</label>
                                <div class="estrelas" onclick="selecionarEstrelas(event)">
                                    <span class="estrela" data-valor="1">&#9733;</span>
                                    <span class="estrela" data-valor="2">&#9733;</span>
                                    <span class="estrela" data-valor="3">&#9733;</span>
                                    <span class="estrela" data-valor="4">&#9733;</span>
                                    <span class="estrela" data-valor="5">&#9733;</span>
                                </div>

                                <input type="number" id="avaliacao" min="1" max="5" style="display: none" required>

                                <label for="comentario">Comentário:</label>
                                <textarea id="comentario" rows="4" required></textarea>


                                <button type="button" class="coment" onclick="adicionarComentario()">Enviar
                                    Avaliação</button>
                            </form>
                        </div>
                    </div>
                    <!-- container com notas gerais sobre produto-->
                    <div class="geral_nota">
                        <div class="nota_text">
                            <h3>Nota</h3>
                        </div>
                        <div class="nota_coment">
                            <div class="nota_nota">
                                <h3>4.1</h3>
                                <div class="star_01">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                                <hr class="linha_reta">

                                <p>1093 notas para este produto</p>
                            </div>

                        </div>
                    </div>
                    <!-- filtro de avaliações por estrela-->
                    <div class="filtro">
                        <>filtrar por:</>
                        <hr>
                        <!-- botão com as estrelas w barrinha de porcentagem-->
                        <!--ops: as divs se repetem e mudam só a informação-->
                        <div class="star-tudo">
                            <button class="custom-button">
                                5
                                <div class="star">&#9733;</div>
                            </button>
                            <div class="progress-barrinha5">
                                <div class="progress-bar5">56.5%</div>
                            </div>
                        </div>
                        <div class="star-tudo">
                            <button class="custom-button">
                                4
                                <div class="star">&#9733;</div>
                            </button>
                            <div class="progress-barrinha4">
                                <div class="progress-bar4">24.6%</div>
                            </div>
                        </div>
                        <div class="star-tudo">
                            <button class="custom-button">
                                3
                                <div class="star">&#9733;</div>
                            </button>
                            <div class="progress-barrinha3">
                                <div class="progress-bar3">13.2%</div>
                            </div>
                        </div>
                        <div class="star-tudo">
                            <button class="custom-button">
                                2
                                <div class="star">&#9733;</div>
                            </button>
                            <div class="progress-barrinha2">
                                <div class="progress-bar2">3.1%</div>
                            </div>
                        </div>
                        <div class="star-tudo">
                            <button class="custom-button">
                                1
                                <div class="star">
                                    &#9733;
                                </div>
                            </button>
                            <div class="progress-barrinha1">
                                <div class="progress-bar1">2.7%</div>
                            </div>
                        </div>
                    </div>
                    <!--recomendação do produto prara outros usuarios-->
                    <div class="ava">
                        <h4>recomendação do Produto: </h4>
                        <div class="recomedacao_lado">
                            <div class="recomendacao_sim">
                                <h3>99%</h3>
                                <p>dos clientes recomendam esse produto.</p>
                            </div>
                            <div class="recomendacao_nao">
                                <h3>1%</h3>
                                <p>dos clientes não recomendam esse produto.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--comentário fixo de exemplo-->
                <div class="coment_viwer">

                    <div class="comment-container" id="comentarios">

                    </div>



                    <!-- pessoa 1 -->
                    <div class="comment-container">
                        <div class="user-info">
                            <!--imagem do perfil do usuario-->
                            <img class="user-photo" src="./components/produto/Assets/valéria.png" alt="Foto de perfil">
                            <div class="name_star">
                                <div class="user-name">valéria Almeida</div>
                                <!--avaliação em estrela-->
                                <div class="star-rating">★★★★★</div>
                            </div>
                            <button class="like-button">👍</button>
                        </div>
                        <!--aonde vai ficar o comentário do usuario-->
                        <div class="comment-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo ut elit fringilla
                            consequat. Duis vel condimentum quam.
                        </div>
                    </div>
                    <!-- pessoa 2 -->
                    <div class="comment-container">
                        <div class="user-info">
                            <img class="user-photo" src="./components/produto/Assets/Agatha-Nunes.png"
                                alt="Foto de perfil">
                            <div class="name_star">
                                <div class="user-name">Agatha Nunes</div>
                                <div class="star-rating">★★★★★</div>
                            </div>
                            <button class="like-button">👍</button>
                        </div>
                        <div class="comment-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo ut elit fringilla
                            consequat. Duis vel condimentum quam.
                        </div>
                    </div>
                    <!-- pessoa 3 -->
                    <div class="comment-container">
                        <div class="user-info">
                            <img class="user-photo" src="./components/produto/Assets/Ygona Moura.png"
                                alt="Foto de perfil">
                            <div class="name_star">
                                <div class="user-name">Ygona Moura</div>
                                <div class="star-rating">★★★★★</div>
                            </div>
                            <button class="like-button">👍</button>
                        </div>
                        <div class="comment-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo ut elit fringilla
                            consequat. Duis vel condimentum quam.
                        </div>
                    </div>
                    <!-- pessoa 4 -->
                    <div class="comment-container">
                        <div class="user-info">
                            <img class="user-photo" src="./components/produto/Assets/luiz.png" alt="Foto de perfil">
                            <div class="name_star">
                                <div class="user-name">Luiz Augusto</div>
                                <div class="star-rating">★★★★★</div>
                            </div>
                            <button class="like-button">👍</button>
                        </div>
                        <div class="comment-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo ut elit fringilla
                            consequat. Duis vel condimentum quam.
                        </div>
                    </div>
                    <!-- pessoa 5 -->
                    <div class="comment-container">
                        <div class="user-info">
                            <img class="user-photo" src="./components/produto/Assets/MAnoel-Gomes.png"
                                alt="Foto de perfil">
                            <div class="name_star">
                                <div class="user-name">Manoel Gomes</div>
                                <div class="star-rating">★★★★★</div>
                            </div>
                            <button class="like-button">👍</button>
                        </div>
                        <div class="comment-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo ut elit fringilla
                            consequat. Duis vel condimentum quam.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js">
        // console.log("test")
    </script>
</body>