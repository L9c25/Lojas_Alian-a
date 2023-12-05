<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./CSS/Style.css">
</head>

<body>
	<div class="formula">
	<nav class="Partedecima">
    <form id="purchaseForm">
		<div>
			<select name="productName" id="productName"  class="filter">
				<option value="produto1">Produto 1</option>
				<option value="produto2">Produto 2</option>
				<option value="produto3">Produto 3</option>
				<option value="produto4">Produto 4</option>
			</select>
		</div>

		<div>
			<label for="..."></label>
			<select name="..." id="..." class="filter">
				<option value="...">...</option>
				<option value="...">...</option>
				<option value="...">...</option>
				<option value="...">...</option>
			</select>
		</div>
    
		<div>
			<label for="..."></label>
			<select name="..." id="..."  class="filter">
				<option value="...">...</option>
				<option value="...">...</option>
				<option value="...">...</option>
				<option value="...">...</option>
			</select>
		</div>

		<div>
			<label for="..."></label>
			<select name="..." id="..."  class="filter">
				<option value="...">...</option>
				<option value="...">...</option>
				<option value="...">...</option>
				<option value="...">...</option>
			</select>
		</div>
    </form>
  </nav>

	</div>

	<div class="img-card"></div>
	<section class="section-produtos">
		<div class="container">
			<div class="content-Descontos">
				<span class="tile-category">
					<span class="img-emoji"></span>
					<h2>Descontos</h2>
				</span>
				<div class="carrosel">
					<div class="swiper-slider-products">
						
						
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
</body>

</html>