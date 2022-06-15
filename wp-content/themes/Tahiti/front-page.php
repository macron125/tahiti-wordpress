<?php
get_header();

  echo '<main id="main" class="main">';

    // Get hero
    get_template_part( 'template-parts/module', 'slider' );

    // Get about
    get_template_part( 'template-parts/module', 'about' );

    // Get discover
    get_template_part( 'template-parts/module', 'discover' );

  echo '</main>';

get_footer();




