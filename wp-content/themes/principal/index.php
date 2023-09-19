<?php
get_header();
?>
<section id="header">
	<div class="container-header">
		<div class="text-header">
			<h1>
				Venha conhcer Paraty!
			</h1>
			<h3>
				Viva momentos inesquecíveis em meio à beleza natural e à história desta cidade encantadora.
			</h3>
			<!-- <div id="count">
				<div class="card-cound">
					<span class="value">5+</span>
					<span class="description">Ilhas</span>
				</div>
				<div class="card-cound">
					<span class="value">5+</span>
					<span class="description">Praias</span>
				</div>
				<div class="card-cound">
					<span class="value">5+</span>
					<span class="description">Bares</span>
				</div>
				<div class="card-cound">
					<span class="value">5+</span>
					<span class="description">Bares</span>
				</div>
			</div> -->
		</div>
		<div class="img-header">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/woman-walk.png" alt="centro historico de Paraty" />
		</div>
	</div>
	<div class="divisor"></div>
</section>
<section id="schooner">
	<div class="text-schooner">
		<h2>
			Nossas Escunas
		</h2>
	</div>
	<div class="slider-schooner">
		<div class="card-schooner" id="myBtn">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/escuna.jpg" alt="centro historico de Paraty" />
			<span>Escuna 1</span>
		</div>
		<div class="card-schooner">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/escuna.jpg" alt="centro historico de Paraty" />
			<span>Escuna 2</span>
		</div>
		<div class="card-schooner">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/escuna.jpg" alt="centro historico de Paraty" />
			<span>Escuna 3</span>
		</div>
		<div class="card-schooner">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/escuna.jpg" alt="centro historico de Paraty" />
			<span>Escuna 4</span>
		</div>
	</div>
</section>
<section id="about-us">
	<div class="img-about-us">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/turista.png" alt="centro historico de Paraty" />
	</div>
	<div class="text-about-us">
		<h2> Sobre Nós </h2>
		<h3> Explore a deslumbrante cidade de Paraty, RJ, com Paraty Rentals & Cruises. Oferecemos casas de temporada à beira-mar e no centro histórico para uma estadia perfeita. Para aventuras inesquecíveis, embarque em nossas escunas e descubra as ilhas paradisíacas de Paraty. </h3>
	</div>
</section>
<section id="house">
	<div class="text-house">
		<h2>
			Nossas Casas
		</h2>
	</div>
	<div class="slider-house">
		<div class="card-house">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/casa.webp" alt="centro historico de Paraty" />
			<span>Escuna 1</span>
		</div>
		<div class="card-house">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/casa.webp" alt="centro historico de Paraty" />
			<span>Escuna 2</span>
		</div>
		<div class="card-house">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/casa.webp" alt="centro historico de Paraty" />
			<span>Escuna 3</span>
		</div>
		<div class="card-house">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/casa.webp" alt="centro historico de Paraty" />
			<span>Escuna 4</span>
		</div>
	</div>
</section>
<section id="count">
	<div class="card-cound">
		<span class="value">5+</span>
		<span class="description">Ilhas</span>
	</div>
	<div class="card-cound">
		<span class="value">5+</span>
		<span class="description">Praias</span>
	</div>
	<div class="card-cound">
		<span class="value">5+</span>
		<span class="description">Bares</span>
	</div>
	<div class="card-cound">
		<span class="value">5+</span>
		<span class="description">Bares</span>
	</div>
</section>
<section id="gallery">
	<div class="text-house">
		<h2>
			Galeria
		</h2>
		<div class="gallery-photo">
			<img class="div1" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/cidade-vertical.png" alt="an old car">
			<img class="div2" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/barco.webp" alt="Barco">
			<img class="div3" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/cidade-vertical.png" alt="an old car">
			<img class="div4" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/barco.webp" alt="Barco">
			<img class="div5" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/praia.webp" alt="foto da praia por cima">
			<img class="div6" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/cidade-vertical.png" alt="an old car">
		</div>
	</div>
</section>
<section id="modal">
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="content">
				<div class="gallery">
					<div class="gallery__item">
						<input type="radio" id="img-1" checked name="gallery" class="gallery__selector" />
						<img class="gallery__img" src="https://picsum.photos/id/1015/600/400.jpg" alt="" />
						<label for="img-1" class="gallery__thumb"><img src="https://picsum.photos/id/1015/150/100.jpg" alt="" /></label>
					</div>
					<div class="gallery__item">
						<input type="radio" id="img-2" name="gallery" class="gallery__selector" />
						<img class="gallery__img" src="https://picsum.photos/id/1039/600/400.jpg" alt="" />
						<label for="img-2" class="gallery__thumb"><img src="https://picsum.photos/id/1039/150/100.jpg" alt="" /></label>
					</div>
					<div class="gallery__item">
						<input type="radio" id="img-3" name="gallery" class="gallery__selector" />
						<img class="gallery__img" src="https://picsum.photos/id/1057/600/400.jpg" alt="" />
						<label for="img-3" class="gallery__thumb"><img src="https://picsum.photos/id/1057/150/100.jpg" alt="" /></label>
					</div>
					<div class="gallery__item">
						<input type="radio" id="img-4" name="gallery" class="gallery__selector" />
						<img class="gallery__img" src="https://picsum.photos/id/106/600/400.jpg" alt="" />
						<label for="img-4" class="gallery__thumb"><img src="https://picsum.photos/id/106/150/100.jpg" alt="" /></label>
					</div>
				</div>
				<div class="information">
					<h2> Escuna 1</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod est iure mollitia atque similique ipsum, officia laborum tempora incidunt illo, dignissimos, rerum esse corrupti itaque eligendi quidem repellat natus asperiores.</p>
					<hr />
					<div class="characteristics">
						<div class="chatacteristic-cards">
							<div class="card">
								<span>Pessoas</span>
								<span>5</span>
							</div>
							<div class="card">
								<span>Pessoas</span>
								<span>5</span>
							</div>
						</div>
						<div class="chatacteristic-cards">
							<div class="card">
								<span>Pessoas</span>
								<span>5</span>
							</div>
							<div class="card">
								<span>Pessoas</span>
								<span>5</span>
							</div>
						</div>
					</div>
					<div class="links-contact">
						<a href="https://wa.me/5524999999999?text=Eu+gostaria+de+entender+mais+sobre+o+processo+de+trabalho+de+voc%C3%AAs." target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/whatsapp.png" alt="logo do whatsApp">
						</a>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>
<script>
	var modal = document.getElementById("myModal");
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function() {
		modal.style.display = "block";
	}
	span.onclick = function() {
		modal.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
<!-- TODO testes para aplicar video no header -->
<!-- <section id="video">
	<div class="container">
		<div class="cover cut">
			<video autoplay muted loop>
				<source src="<?php echo get_template_directory_uri(); ?>/assets/video/paraty.mp4" type="video/mp4">
			</video>
		</div>
	</div>
</section> -->

<?php
get_footer();
