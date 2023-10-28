<?php

/**
 * Template Name: Houses
 */
$argsHomes = array(
	'post_type' => 'homes',
	'posts_per_page' => -1,
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

get_header();
?>
<section id="house" style="padding: 10% 5%;">
	<div class="text-house">
		<h2>
			Nossas Casas
		</h2>
	</div>
	<div class="slider-house">
		<?php
		foreach ($homesArray as $i) {
			$jsonData = json_encode($i, JSON_UNESCAPED_UNICODE);
		?>
			<div class="card-house" onclick="openModalHouse(<?= $i['id'] ?>)">
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
											<img title="Ar Condicionado" alt="ícone do ar condicionado" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/air-conditioning.png" />
											<span><?= $i['airconditioning'] ?></span>
										</div>
										<div class="card">
											<img title="Qauntidade de pessoas" alt="icone de pessoas" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/crowd.png" />
											<span><?= $i['people'] ?></span>
										</div>
									</div>
									<div class="chatacteristic-cards">
										<div class="card">
											<img title="Piscina" alt="ícone de uma piscina" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/pool.png" />
											<span><?= $i['pool'] ?></span>
										</div>
										<div class="card">
											<img title="wi-fi" alt="ícone do wi-fi " src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/wifi.png" />
											<span><?= $i['wifi'] ?></span>
										</div>
									</div>

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
		<?php
		}
		?>
	</div>
</section>
<?php
get_footer();
