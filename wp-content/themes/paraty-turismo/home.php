<?php

/**
 * Template Name: Home
 */

get_header();

$argsTours = array(
	'post_type' => 'tours',
	'posts_per_page' => 4,
	'meta_key' => 'featured_order',
	'orderby' => 'meta_value',
	'order' => 'ASC',
);

$tours = get_posts($argsTours);
$toursArray = [];

foreach ($tours as $tour) {
	$images = get_field('images', $tour->ID);
	$gallery = [
		$images['first_image']['url'] ?? '',
		$images['second_image']['url'] ?? '',
		$images['third_image']['url'] ?? '',
		$images['fourth_image']['url'] ?? '',
		$images['fifth_image']['url'] ?? '',
	];

	$trip = [
		"id" => $tour->ID,
		"name" => get_field('name', $tour->ID),
		"description" => get_field('description', $tour->ID),
		"people" => get_field('people', $tour->ID),
		"islands" => get_field('islands', $tour->ID),
		"time" => get_field('time', $tour->ID),
		"snack" => get_field('snack', $tour->ID) ? 'Sim' : 'Não',
		"images" => $gallery,
		"img" => $images['first_image']['url']
	];
	array_push($toursArray, $trip);
}

$argsHomes = array(
	'post_type' => 'homes',
	'posts_per_page' => 4,
	'meta_key' => 'featured_order',
	'orderby' => 'meta_value',
	'order' => 'ASC',
);

$homes = get_posts($argsHomes);
$homesArray = [];

foreach ($homes as $home) {
	$images = get_field('images', $home->ID);
	$gallery = [
		$images['first_image']['url'] ?? '',
		$images['second_image']['url'] ?? '',
		$images['third_image']['url'] ?? '',
		$images['fourth_image']['url'] ?? '',
		$images['fifth_image']['url'] ?? '',
	];

	$house = [
		"id" => $home->ID,
		"name" => get_field('name', $home->ID),
		"description" => get_field('description', $home->ID),
		"pool" => get_field('pool', $home->ID) ? 'Sim' : 'Não',
		"airconditioning" => get_field('air_conditioning', $home->ID) ? 'Sim' : 'Não',
		"people" => get_field('people', $home->ID),
		"wifi" => get_field('wifi', $home->ID) ? 'Sim' : 'Não',
		"images" => $gallery,
		"img" => $images['first_image']['url']
	];
	array_push($homesArray, $house);
}
?>
<section id="header">
	<div class="container-header">
		<div id="header-text" class="text-header js-scroll slide-left">
			<h1>
				Venha conhcer Paraty!
			</h1>
			<h3>
				Viva momentos inesquecíveis em meio à beleza natural e à história desta cidade encantadora.
			</h3>
			<div id="count">
				<div class="double-card-count">
					<div class="card-count">
						<div class="value" id="island-value">65</div>
						<span class="description">Ilhas</span>
					</div>
					<div class="card-count">
						<span class="value">
							<span>+ </span>
							<span id="beachs-value">60</span>
						</span>
						<span class="description">Praias</span>
					</div>
				</div>
				<div class="double-card-count">
					<div class="card-count">
						<span class="value">
							<span>+ </span>
							<span id="waterfall-value">19</span>
						</span>
						<span class="description">Cachoeiras</span>
					</div>
					<div class="card-count">
						<span class="value">
							<span>+ </span>
							<span id="alembic-value">100</span>
						</span>
						<span class="description">Alambiques</span>
					</div>
				</div>
			</div>
		</div>
		<div id="header-img" class="img-header js-scroll slide-right">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/woman-walk-blue.webp" alt="centro historico de Paraty" />
		</div>
	</div>
	<div class="divisor"></div>
</section>
<section id="trip">
	<div class="text-trip js-scroll fade-in">
		<h2>
			Nossos Passeios
		</h2>
		<a href="<?php echo get_bloginfo('url'); ?>/passeios"> Ver todos</a>
	</div>
	<div class="slider-trip">
		<?php
		foreach ($toursArray as $i) {
			$jsonData = json_encode($i, JSON_UNESCAPED_UNICODE);
		?>
			<div class="card-trip js-scroll fade-in" onclick="openModalTrip(<?= $i['id'] ?>)">
				<img src="<?= $i['img'] ?>" alt="<?= $i['name'] ?>" />
				<span><?= $i['name'] ?></span>
			</div>
			<div id="modal-trip">
				<div id="myModalTrip-<?= $i['id'] ?>" class="modal">
					<div class="modal-content">
						<span id="closetrip" onclick="closeModalTrip(<?= $i['id'] ?>)" class="close">&times;</span>
						<div class="content">
							<div class="gallery">
								<div class="fotorama" data-nav="thumbs" data-fit="cover" data-loop="true" data-allowfullscreen="true">
									<?php foreach ($i['images'] as $img) { ?>
										<img src="<?= $img ?>" alt="imagem da escuna">
									<?php } ?>
								</div>
							</div>
							<div class="information">
								<h2><?= $i['name'] ?></h2>
								<p><?= $i['description'] ?></p>
								<hr />
								<div class="characteristics">
									<div class="chatacteristic-cards">
										<div class="card">
											<img title="Qauntidade de pessoas" alt="icone de pessoas" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/crowd.webp" />
											<span><?= $i['people'] ?></span>
										</div>
										<div class="card">
											<img title="Ilhas" alt="icone de uma ilha" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/island-on-water.webp" />
											<span><?= $i['islands'] ?></span>
										</div>
									</div>
									<div class="chatacteristic-cards">
										<div class="card">
											<img title="Tempo de passeio" alt="icone de uma relógio" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/time.webp" />
											<span><?= $i['time'] ?></span>
										</div>
										<div class="card">
											<img title="Restaurante" alt="icone de uma restaurante" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/food.webp" />
											<span><?= $i['snack'] ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="links-contact">
							<a href="https://wa.me/5524999999999?text=Eu+gostaria+de+entender+mais+sobre+o+processo+de+trabalho+de+voc%C3%AAs." target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/whatsapp.webp" alt="logo do whatsApp">
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</section>
<section id="about-us">
	<div class="img-about-us js-scroll slide-left">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/another-girl.webp" alt="Mulher olhando para o nada" />
	</div>
	<div class="text-about-us js-scroll slide-right">
		<h2> Sobre Nós </h2>
		<h3> Venha explorar a cidade de Paraty conosco</h3>
		<h4> Explore a deslumbrante cidade de Paraty, RJ, com Paraty Rentals & Cruises. Oferecemos casas de temporada à beira-mar e no centro histórico para uma estadia perfeita. Para aventuras inesquecíveis, embarque em nossas escunas e descubra as ilhas paradisíacas de Paraty. </h4>
		<div class="social-media">
			<div class="icons">
				<a target="_blank" rel="noopener" href="https://www.facebook.com/smecrz/?locale=pt_BR">
					<svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
						<!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
						<style>svg{fill:#ffffff}</style>
						<path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
					</svg>	
				</a>
				<a target="_blank" rel="noopener" href="https://instagram.com/secretaria.ed?igshid=YmMyMTA2M2Y=">
					<svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512">
						<!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
						<style>svg{fill:#ffffff}</style>
						<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
					</svg>			</a>
				<a target="_blank" rel="noopener" href="https://www.youtube.com/@secretariamunicipaldeeduca87">
					<svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512">
						<!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
						<style>svg{fill:#ffffff}</style>
						<path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
					</svg>
				</a>
			</div>
			<span>
				Paraty Fun
			</span>
		</div>
	</div>
</section>
<section id="house">
	<div class="text-house js-scroll fade-in">
		<h2>
			Nossas Casas
		</h2>
		<a href="<?php echo get_bloginfo('url'); ?>/casas"> Ver todas</a>
	</div>
	<div class="slider-house">
		<?php
		foreach ($homesArray as $i) {
			$jsonData = json_encode($i, JSON_UNESCAPED_UNICODE);
		?>
			<div class="card-house js-scroll fade-in" onclick="openModalHouse(<?= $i['id'] ?>)">
				<img src="<?= $i['img'] ?>" alt="<?= $i['name'] ?>" />
				<span><?= $i['name'] ?></span>
			</div>
			<div id="modal-house">
				<div id="myModalHouse-<?= $i['id'] ?>" class="modal">
					<div class="modal-content">
						<span id="closeHouse" onclick="closeModalHouse(<?= $i['id'] ?>)" class="close">&times;</span>
						<div class="content">
							<div class="gallery">
								<div class="fotorama" data-nav="thumbs" data-fit="cover" data-loop="true" data-allowfullscreen="true">
									<?php foreach ($i['images'] as $img) { ?>
										<img src="<?= $img ?>" alt="imagem da escuna">
									<?php } ?>
								</div>
							</div>
							<div class="information">
								<h2><?= $i['name'] ?></h2>
								<p><?= $i['description'] ?></p>
								<hr />
								<div class="characteristics">
									<div class="chatacteristic-cards">
										<div class="card">
											<img title="Ar Condicionado" alt="ícone do ar condicionado" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/air-conditioning.webp" />
											<span><?= $i['airconditioning'] ?></span>
										</div>
										<div class="card">
											<img title="Qauntidade de pessoas" alt="icone de pessoas" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/crowd.webp" />
											<span><?= $i['people'] ?></span>
										</div>
									</div>
									<div class="chatacteristic-cards">
										<div class="card">
											<img title="Piscina" alt="ícone de uma piscina" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/pool.webp" />
											<span><?= $i['pool'] ?></span>
										</div>
										<div class="card">
											<img title="wi-fi" alt="ícone do wi-fi " src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/wifi.webp" />
											<span><?= $i['wifi'] ?></span>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="links-contact">
							<a href="https://wa.me/5524999999999?text=Eu+gostaria+de+entender+mais+sobre+o+processo+de+trabalho+de+voc%C3%AAs." target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/whatsapp.webp" alt="logo do whatsApp">
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</section>
<section id="gallery" class="js-scroll fade-in">
	<div class="text-house">
		<h2>
			Galeria
		</h2>
		<div class="gallery-photo image-link" data-nav="thumbs" data-fit="cover" data-loop="true" data-allowfullscreen="true">
			<a class="div1" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro-1.webp">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro-1.webp" alt="centro historico de paraty">
			</a>
			<a class="div2" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro-2.webp">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro-2.webp" alt="centro historico de paraty">
			</a>
			<a class="div3" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro-3.webp">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro-3.webp" alt="centro historico de paraty">
			</a>
			<a class="div4" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro-4.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro-4.jpg" alt="centro historico de paraty">
			</a>
			<a class="div5" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro5.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/centro5.jpg" alt="centro historico de paraty">
			</a>
			<a class="div6" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/praia-1.webp">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/praia-1.webp" alt="praia">
			</a>
		</div>
	</div>
</section>
<?php
get_footer();
