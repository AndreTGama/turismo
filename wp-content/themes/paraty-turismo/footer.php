<footer>
	<div class="social-media">
		<div class="social">
			<h3>Canais Oficiais</h3>
			<h4>Siga-nos nas Redes Sociais</h4>
			<ul>
				<li>
					<a target="_blank" rel="noopener" href="https://www.facebook.com/smecrz/?locale=pt_BR">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/facebook.png" alt="logo do facebook">
					</a>
				</li>
				<li>
					<a target="_blank" rel="noopener" href="https://instagram.com/secretaria.ed?igshid=YmMyMTA2M2Y=">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/instagram.png" alt="logo do instagram">
					</a>
				</li>
				<li>
					<a target="_blank" rel="noopener" href="https://www.youtube.com/@secretariamunicipaldeeduca87">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/youtube.png" alt="logo do youtube">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="site-map">
		<h3>Links Rápidos</h3>
		<?php
		wp_nav_menu(array(
			'theme_location' => 'footer',
			'menu_class' => 'menu-footer',
		));
		?>
	</div>
	<div class="address">
		<h3> Contate-nos</h3>
		<div class="links">
			<a class="links-contact" href="https://www.google.com/maps/place/R.+Dr.+Samuel+Costa,+10+-+Centro+Hist%C3%B3rico,+Paraty+-+RJ,+23970-000/@-23.218557,-44.7153386,17.54z/data=!4m15!1m8!3m7!1s0x9d0e3c6b68b491:0xf487f3dc51dc2b94!2sParaty+-+State+of+Rio+de+Janeiro,+23970-000!3b1!8m2!3d-23.2200406!4d-44.7204077!16zL20vMDI5aDJ5!3m5!1s0x9d6d2447d2943d:0xd3c83e87ee242c80!8m2!3d-23.2187245!4d-44.71296!16s%2Fg%2F11c28_vnz_?entry=ttu" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/google-maps.png" alt="logo do google maps">
				<span>R. Dr. Samuel Costa, 10 <br /> Centro Histórico, Paraty - RJ, <br />CEP: 23970-000</span>
			</a>
			<a class="links-contact" href="https://wa.me/5524999999999?text=Eu+gostaria+de+entender+mais+sobre+o+processo+de+trabalho+de+voc%C3%AAs." target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/whatsapp.png" alt="logo do whatsApp">
				<span>(24) 99999-9999</span>
			</a>
			<a class="links-contact" href="mailto:seu-email@example.com">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icons/mail.png" alt="logo do email">
				<span>andre@email.com</span>
			</a>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>