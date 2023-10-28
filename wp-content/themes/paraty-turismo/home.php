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
		<h3> Explore a deslumbrante cidade de Paraty, RJ, com Paraty Rentals & Cruises. Oferecemos casas de temporada à beira-mar e no centro histórico para uma estadia perfeita. Para aventuras inesquecíveis, embarque em nossas escunas e descubra as ilhas paradisíacas de Paraty. </h3>
		<div class="social-media">
			<a target="_blank" rel="noopener" href="https://www.facebook.com/smecrz/?locale=pt_BR">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/facebook.webp" alt="logo do facebook">
			</a>
			<a target="_blank" rel="noopener" href="https://instagram.com/secretaria.ed?igshid=YmMyMTA2M2Y=">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/instagram.webp" alt="logo do instagram">
			</a>
			<a target="_blank" rel="noopener" href="https://www.youtube.com/@secretariamunicipaldeeduca87">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/youtube.webp" alt="logo do youtube">
			</a>
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
