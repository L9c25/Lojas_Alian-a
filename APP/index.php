<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./CSS/Style.css">
	<!-- import slick css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
		integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
		integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<div class="img-card"></div>
	<section class="section-produtos">
		<div class="container">
			<div class="content-Descontos">
				<span class="tile-category">
					<span class="img-emoji"></span>
					<h2>Descontos</h2>
				</span>
				<div class="carrosel">
					<div class="swiper-slider-products js-swiper-slider">
						
						
						<?php
							for ($i=0; $i<10; $i++):
						?>
							<div class="product">
							<div class="produc-image" style="background-image: url('./Assets/img/Geladeira.jpeg');">
							</div>
							<div class="info-product">
								<h3>Sofá sala de estar Compact
									1,50m Tecido</h3>
								<div class="rating-product">
									<p class="rating">
										&#9733&#9733&#9733&#9733&#9733
									</p>
									<p class="avaliantions">999</p>
								</div>
								<p class="origin-price"><i>R$ 3.299,00</i></p>
								<span class="descount-price-product">
									<p class="descount-price">R$ 2.969,10</p>
									<p class="text-info">no pix</p>
								</span>
							</div>
						</div>
						<?php endfor?>


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
	<script src="./Assets/Script/script.js"></script>



</body>

</html>