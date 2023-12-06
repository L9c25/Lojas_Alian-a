<body>
	<link rel="stylesheet" href="./components/eletro/css/style.css">
	<div class="img-card"></div>

	<div class="formula">

		<div class="category">
			<h2>Eletrodomésticos</h2>
			<span class="retangle"></span>
		</div>
		<span class="retangle2"></span>
		<nav class="Partedecima">
			<form id="purchaseForm">
				<div>
					<select name="productName" id="productName" class="filter">
						<option value="produto1">Eletrodomésticos</option>
						<option value="produto2">Produto 2</option>
						<option value="produto3">Produto 3</option>
						<option value="produto4">Produto 4</option>
					</select>
				</div>

				<div>
					<select name="productName1" id="productName1" class="filter">
						<option value="produto1">Preço</option>
						<option value="produto2">Produto 2</option>
						<option value="produto3">Produto 3</option>
						<option value="produto4">Produto 4</option>
					</select>
				</div>

				<div>
					<select name="productName2" id="productName2" class="filter">
						<option value="produto1">Tamanho</option>
						<option value="produto2">Produto 2</option>
						<option value="produto3">Produto 3</option>
						<option value="produto4">Produto 4</option>
					</select>
				</div>

				<div>
					<select name="productName3" id="productName3" class="filter">
						<option value="produto1">Cor</option>
						<option value="produto2">Produto 2</option>
						<option value="produto3">Produto 3</option>
						<option value="produto4">Produto 4</option>
					</select>
				</div>

				<div>
					<select name="productName4" id="productName4" class="filter">
						<option value="produto1">Marca </option>
						<option value="produto2">Produto 2</option>
						<option value="produto3">Produto 3</option>
						<option value="produto4">Produto 4</option>
					</select>
				</div>

				<div>
					<select name="productName5" id="productName5" class="filter">
						<option value="produto1">Eletrodomésticos</option>
						<option value="produto2">Produto 2</option>
						<option value="produto3">Produto 3</option>
						<option value="produto4">Produto 4</option>
					</select>
				</div>
			</form>

			<div class="filters">
				<div class="itens/filter">
					<p>3.147 Itens</p>
					<span class="retancle4"></span>
				</div>
				<div class="itensfilter">
					<select name="filter1" id="filter1" class="filter">
						<option value="produto1">Lançamentos</option>
						<option value="produto2">Produto 2</option>
						<option value="produto3">Produto 3</option>
						<option value="produto4">Produto 4</option>
					</select>
					<span class="retancle4"></span>
				</div>
			</div>

		</nav>
	</div>

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
						for ($i = 0; $i < 12; $i++):
							?>
							<div class="product">
								<div class="produc-image" style="background-image: url('./components/eletro/Assets/img/Geladeira.jpeg');">
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
						<?php endfor ?>


					</div>
				</div>
			</div>
		</div>
	</section>
</body>