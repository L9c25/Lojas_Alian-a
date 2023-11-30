<?php
require "./config/connect.php";
require "./controllers/prodController.php";
?>

<body>
	<link rel="stylesheet" href="./components/body/Style.css">
	<div class="img-card"></div>
	<section class="section-produtos">
		<div class="container">


			<div class="content">
				<span class="tile-category">
					<span class="img-emoji"
						style="background-image: url('./components/body/Assets/Emojis/Emoji_1.png')"></span>
					<h2>Descontos</h2>
				</span>
				<div class="carrosel">
					<div class="swiper-slider-products js-swiper-slider">

						<?php
						$d = new daoMysql($pdo);
						$dados = $d->listar();
						foreach ($dados as $p):
							?>
							<div class="product">
								<div class="produc-image" style="background-image: 
									url('./components/body/Assets/img/<?php echo ($p->getImg()) ?>');">
								</div>
								<div class="info-product">
									<h3>
										<?php echo ($p->getNome()) ?>
									</h3>
									<div class="rating-product">
										<p class="rating">&#9733&#9733&#9733&#9733&#9733</p>
										<p class="avaliantions">999</p>
									</div>
									<p class="origin-price"><i>R$
											<?php echo ($p->getPreco()) ?>
										</i></p>
									<span class="container-descount">
										<p class="descount-price">R$
											<?php echo ($p->getPreco() * 0.9) ?>
										</p>
										<p class="text-info">no pix</p>
									</span>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>


			<div class="content">
				<span class="tile-category">
					<span class="img-emoji"
						style="background-image: url('./components/body/Assets/Emojis/amorzinho.png');"></span>
					<h2>Ofertas</h2>
				</span>
				<div class="carrosel">

					<div class="swiper-slider-products js-swiper-slider">
						<?php
						$d = new daoMysql($pdo);
						$dados = $d->listar();
						foreach ($dados as $p):
							?>
							<div class="product">
								<div class="produc-image" style="background-image: 
									url('./components/body/Assets/img/<?php echo ($p->getImg()) ?>');">
								</div>
								<div class="info-product">
									<h3>
										<?php echo ($p->getNome()) ?>
									</h3>
									<div class="rating-product">
										<p class="rating">&#9733&#9733&#9733&#9733&#9733</p>
										<p class="avaliantions">999</p>
									</div>
									<p class="origin-price"><i>R$
											<?php echo ($p->getPreco()) ?>
										</i></p>
									<span class="container-descount">
										<p class="descount-price">R$
											<?php echo ($p->getPreco() * 0.9) ?>
										</p>
										<p class="text-info">no pix</p>
									</span>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>


			<div class="content">
				<span class="tile-category">
					<span class="img-emoji"
						style="background-image: url('./components/body/Assets/Emojis/Surpreso.png')"></span>
					<h2>Para Você</h2>
				</span>
				<div class="carrosel">
					<div class="swiper-slider-products js-swiper-slider">
						<?php
						$d = new daoMysql($pdo);
						$dados = $d->listar();
						foreach ($dados as $p):
							?>
							<div class="product">
								<div class="produc-image" style="background-image: 
									url('./components/body/Assets/img/<?php echo ($p->getImg()) ?>');">
								</div>
								<div class="info-product">
									<h3>
										<?php echo ($p->getNome()) ?>
									</h3>
									<div class="rating-product">
										<p class="rating">&#9733&#9733&#9733&#9733&#9733</p>
										<p class="avaliantions">999</p>
									</div>
									<p class="origin-price"><i>R$
											<?php echo ($p->getPreco()) ?>
										</i></p>
									<span class="container-descount">
										<p class="descount-price">R$
											<?php echo ($p->getPreco() * 0.9) ?>
										</p>
										<p class="text-info">no pix</p>
									</span>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>

			<div class="content">
				<span class="tile-category">
					<span class="img-emoji"
						style="background-image: url('./components/body/Assets/Emojis/grafico.png')"></span>
					<h2>Mais Vendidos</h2>
				</span>
				<div class="carrosel">
					<div class="swiper-slider-products js-swiper-slider">


						<?php
						$d = new daoMysql($pdo);
						$dados = $d->listar();
						foreach ($dados as $p):
							?>
							<div class="product">
								<div class="produc-image" style="background-image: 
									url('./components/body/Assets/img/<?php echo ($p->getImg()) ?>');">
								</div>
								<div class="info-product">
									<h3>
										<?php echo ($p->getNome()) ?>
									</h3>
									<div class="rating-product">
										<p class="rating">&#9733&#9733&#9733&#9733&#9733</p>
										<p class="avaliantions">999</p>
									</div>
									<p class="origin-price"><i>R$
											<?php echo ($p->getPreco()) ?>
										</i></p>
									<span class="container-descount">
										<p class="descount-price">R$
											<?php echo ($p->getPreco() * 0.9) ?>
										</p>
										<p class="text-info">no pix</p>
									</span>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>

		</div>
	</section>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"
		integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js"
		integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
		integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./components/body/Assets/Script/script.js"></script>
</body>