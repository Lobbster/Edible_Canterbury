<?php

/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edible_canterbury
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="site">
		<header class="bg-white w-full flex justify-center sticky top-0 py-2 shadow-sm">
			<div class=" w-full mx-2 md:w-11/12 lg:w-3/4 md:mx-0 flex items-center justify-between">

				<div class="flex items-center ml-2 md;ml-0">
					<div class="h-10 w-10 "><?php the_custom_logo(); ?></div>
					<h3 class="text-lg font-playFair leading-5">Edible <br> Canterbury</h3>
				</div>


				<nav class="h-12 md:w-5/6 flex flex-row-reverse md:flex-row md:justify-between items-center">
					<button role="button" class="navButton mr-2 block border-none md:hidden " aria-controls="primary-menu" aria-expanded="false">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
						</svg>
					</button>

					<?php
					$count = 0;
					foreach (wp_get_nav_menu_items('[menu') as $value) {
						echo "<a class='linkBtn text-xs text-center hidden w-1/6 md:block cursor-pointer hover:text-gray-900' data-index=$count href'" . $value->url . "'>" . $value->title . "</a>";
						$count++;
					}
					?>

					<button class="bg-orange-ec text-white text-xs  w-32 h-6 border-none hidden lg:block text-center hover:bg-yellow-500 ">BECOME A MEMBER</button>
				</nav>
			</div>
		</header>
		<div class="phoneMenu h-96 w-screen top-14 bg-white 
					flex flex-col justify-center items-center
					md:hidden shadow sticky">

			<?php
			foreach (wp_get_nav_menu_items('[menu') as $value) {
				echo "<a style='text-decoration:none;' class=' text-gray-900 p-5 cursor-pointer leading-6 font-body'" . $value->url . "'>" . $value->title . "</a>";
			}
			?>
			<button class="bg-orange-ec text-white w-2/3 h-8 border-none my-5 text-center hover:bg-yellow-500">BECOME A MEMBER</button>

		</div>