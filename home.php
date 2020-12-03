<?php
get_header();
?>

<main>
    <div class="flex justify-center ">
        <section class="h-4/6 w-full mx-2  md:flex-none md:w-11/12 lg:w-3/4 mt-8">
            <h1 class="text-5xl	text-orange-ec font-playFair mt-4 text-center md:text-left"><?php echo get_theme_mod('edible_canterbury_homepage_text_title'); ?></h1>

            <div class="w-full md:flex">
                <div class="md:w-1/2 h-full">
                    <p class="text-center md:text-left md:w-10/12 mt-6 leading-6 font-body"><?php echo get_theme_mod('edible_canterbury_homepage_text_setting'); ?>
                    </p>
                </div>
                <iframe src="<?php echo get_theme_mod('edible_canterbury_homepage_text_video'); ?>" class=" mx-auto md:w-1/2 " width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="edible canterbury intro video"></iframe>
            </div>
            <div class=" flex md:block justify-center ">
                <button role="button" class="bg-orange-ec px-8 py-2 rounded-full text-white border-none mt-8 hover:bg-yellow-500">FIND OUT MORE</button>
            </div>
        </section>
    </div>
    <div class=" w-full mt-32 
                     bg-grass bg-repeat-x	
                     flex justify-center items-center">
        <div class="bg-white p-4 md:p-4 rounded shadow-xl 
                    mt-52 mx-2 mb-32
        ">
            <div class="flex justify-center">
                <svg class="w-8 h-8 text-orange-ec" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <h1 class="font-playFair text-orange-ec text-3xl md:text-4xl text-center"><?php echo get_theme_mod('edible_canterbury_homepage_text_postcode'); ?></h1>
            <label for="find a local community garden">
                <form class="h-12 flex justify-center my-6">
                    <input for="" type="number" max="9999" placeholder="Post code" name="Post Code" class="w-2/3 border-yellow-500 text-yellow-500 font-body ">
                    <button role="button" type="submit" class="bg-orange-ec border-none rounded-none rounded-r-lg hover:bg-yellow-500">
                        <svg class=" w-12 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </label>
        </div>
    </div>

    <div class="my-16 md:my-32">
        <div>
            <h3 class="font-playFair text-3xl md:text-4xl text-center"><?php echo get_theme_mod('edible_canterbury_homepage_text_our_community'); ?></h3>
            <h4 class="text-center text-sm font-body text-gray-300"><?php echo get_theme_mod('edible_canterbury_homepage_text_our_community_subtitle'); ?></h4>
        </div>
        <img class="mx-auto mt-8" src="wp-content/themes/edible_canterbury/assets/image/FRN_Logo-2.png" alt="Food Resilience network">


        <div class="  mx-auto flex flex-col items-center md:flex-row md:justify-center">
            <div class=" w-64 mx-4">
                <img src="wp-content/themes/edible_canterbury/assets/image/soil-health.jpg" alt="soil health logo" class="mx-auto my-4 w-full">
            </div>
            <div class="w-64  mx-4">
                <img src="wp-content/themes/edible_canterbury/assets/image/CHS.jpg" alt="CHS logo" class="mx-auto my-4 w-full">
            </div>
            <div class=" w-64 mx-4">
                <img src="wp-content/themes/edible_canterbury/assets/image/ccga-logo.jpg" alt="CCGA logo" class="mx-auto my-4 w-full">
            </div>

        </div>


        <div>

        </div>
    </div>

</main>

<?php
get_footer();
?>