<?php
/**
 * Template Name: Basic Page
 */
$argsTours = array(
	'post_type' => 'tours',
	'posts_per_page' => -1,
);

$tours = get_posts($argsTours);
$toursArray = [];

foreach ($tours as $tour) {
	$images = get_field('images', $tour->ID);
	$gallery = [
		$images['first_image']['url'],
		$images['second_image']['url'],
		$images['third_image']['url'],
		$images['fourth_image']['url'],
		$images['fifth_image']['url'],
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

get_header();
?>
<section id="base">
	<div class="text">
		<h2>
			<?= $title ?>
		</h2>
	</div>
	<div class="slider">
		<?php
		foreach ($toursArray as $i) {
			$jsonData = json_encode($i, JSON_UNESCAPED_UNICODE);
		?>
			<div class="card" onclick="openModalSchooner(<?= $i['id'] ?>)">
				<img src="<?= $i['img'] ?>" alt="<?= $i['name'] ?>" />
				<span><?= $i['name'] ?></span>
			</div>
			<div id="modal myModal">
				<div id="myModalSchooner-<?= $i['id'] ?>" class="modal">
					<div class="modal-content">
						<span id="closeSchooner" onclick="closeModalSchooner(<?= $i['id'] ?>)" class="close">&times;</span>
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
											<img title="Qauntidade de pessoas" alt="icone de pessoas" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/crowd.png" />
											<span><?= $i['people'] ?></span>
										</div>
										<div class="card">
											<img title="Ilhas" alt="icone de uma ilha" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/island-on-water.png" />
											<span><?= $i['islands'] ?></span>
										</div>
									</div>
									<div class="chatacteristic-cards">
										<div class="card">
											<img title="Tempo de passeio" alt="icone de uma relógio" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/time.png" />
											<span><?= $i['time'] ?></span>
										</div>
										<div class="card">
											<img title="Restaurante" alt="icone de uma restaurante" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/food.png" />
											<span><?= $i['snack'] ?></span>
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
