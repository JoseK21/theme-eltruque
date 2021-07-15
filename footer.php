<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
</div>
</div>
</div><!-- #content -->

<?php do_action('sydney_before_footer'); ?>

<?php if (is_active_sidebar('footer-1')) : ?>
	<?php get_sidebar('footer'); ?>
<?php endif; ?>

<style>
	.container2 {

		display: grid;
		grid-template-columns: 1fr;
		grid-template-rows: 1fr 1fr 1fr;
		grid-template-areas:
			"content21"
			"content22"
			"content23";
		height: 300px;
		justify-items: center;
		padding: 0 30px;
		align-items: center;
	}

	.container3 {
		display: grid;
		/* height: 200px; */
		grid-template-columns: 100px 1fr;
		grid-template-rows: 1fr 1fr;
		grid-template-areas:
			"logo eltrueque"
			"logo feria100organica";
		grid-gap: 0.2rem;
		text-transform: uppercase;
		font-size: 12px;
		color: #004d40;
		text-align: center;
	}

	#content21 {
		margin-top: 20px;
		grid-area: content21;
	}

	#content22 {
		grid-area: content22;
		align-self: center;
	}

	#content22 img {
		width: 30px;
		margin-right: 10px;
	}

	#content23 {
		grid-area: content23;
		align-self: center;
		text-align: end;
		padding-right: 50px;
		justify-content: flex-end;
		display: inline-flex;
	}

	#content23 input {
		border-top-left-radius: 1rem;
		border-bottom-left-radius: 1rem;
	}

	#logo {
		grid-area: logo;
		align-self: center;
	}

	#eltrueque {
		grid-area: eltrueque;
		align-self: flex-end;
		margin-left: 20px;
		text-align: start;
		font-size: 40px;
		color: #ffffff;
	}

	#feria100organica {
		grid-area: feria100organica;
		align-self: flex-start;
		margin-left: 20px;
		text-align: start;
		font-size: 20px;
		color: #A3B038;
		font-family: "Times New Roman";
	}

	.button3 {
		border-color: #00ADE2;
		background-color: #00ADE2;
	}

	.button3:hover {
		border-color: #00ADE2;
		background-color: #00ADE2;
		color: #ffffff
	}


	@media only screen and (min-width: 920px) {
		.container2 {
			display: grid;
			grid-template-columns: 1fr 0.5fr 1fr;
			grid-template-rows: 1fr;
			grid-template-areas:
				"content21 content22 content23";
			grid-gap: 0.2rem;
			font-weight: 800;
			text-transform: uppercase;
			font-size: 12px;
			color: #004d40;
			text-align: center;
			padding: 0 30px;
			height: 250px;
			align-items: center;
		}

		#content21 {
			margin-top: 0px;
		}
	}

	@media only screen and (min-width: 768px) {
		.container2 {
			padding: 0 50px;
		}
	}
</style>

<a on="tap:toptarget.scrollTo(duration=200)" class="go-top"><i class="sydney-svg-icon"><?php sydney_get_svg_icon('icon-chevron-up', true); ?></i></a>

<footer id="colophon" class="site-footer" role="contentinfo" <?php sydney_do_schema('footer'); ?>>
	<!-- 	<div class="site-info container">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'sydney')); ?>"><?php printf(__('TEST %s', 'sydney'), 'WordPress'); ?></a>
		<span class="sep"> | </span>
		<?php printf(__('Theme: %2$s by %1$s.', 'sydney'), 'aThemes', '<a href="https://athemes.com/theme/sydney" rel="nofollow">Sydney</a>'); ?>
	</div> -->

	<div class="container2">
		<div id="content21">
			<div class="container3">
				<div id="logo">
					<img src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="Workplace" style="width: 100px; padding-rigth: 20px">
				</div>
				<div id="eltrueque">el trueque</div>
				<div id="feria100organica">feria 100% organica</div>
			</div>

		</div>
		<div id="content22">
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>'/images/instagram.png'" alt="instagram">
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>'/images/facebook.png'" alt="facebook">
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>'/images/whatsapp.png'" alt="whatsapp">
		</div>
		<div id="content23">
			<input type="text" id="fname" name="fname" value="John"><br>
			<button class="button3">Buscar</button>
		</div>
	</div>
</footer><!-- #colophon -->

<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

<!-- 
//   xs: 0,
//   sm: 576px,
//   md: 768px,
//   lg: 992px,
//   xl: 1200px,
//   xxl: 1400px
	-->