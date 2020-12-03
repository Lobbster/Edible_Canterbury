<?php

/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package edible_canterbury
 */

?>

<footer class="bg-gray-300 ">

	<div class="flex justify-center mt-32 pt-8">
		<a href="https://www.facebook.com/ediblecanterbury/">
			<img src="wp-content/themes/edible_canterbury/assets/svg/facebook.svg" alt="" class="m-2">
		</a>
		<a href="https://vimeo.com/user95277810">
			<img src="wp-content/themes/edible_canterbury/assets/svg/vimeo.svg" alt="" class="m-2">
		</a>
		<a href="#">
			<img src="wp-content/themes/edible_canterbury/assets/svg/mail.svg" alt="" class="m-2">
		</a>

	</div>

	<div class="site-info mt-8">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'edible_canterbury')); ?>">
			<?php
			printf(esc_html__('Proudly powered by %s', 'edible_canterbury'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		printf(esc_html__('Theme: %1$s by %2$s.', 'edible_canterbury'), 'edible_canterbury', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
	</div>

	<div class="md:flex justify-between mt-4">
		<p>
			© Edible Canterbury 2020 | Part of the Food Resilience Network This <br>
			site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.
		</p>
		<p class="md:text-right mt-4">Site by <br>
			Thomashendrikz@Gmail.com</p>
	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>