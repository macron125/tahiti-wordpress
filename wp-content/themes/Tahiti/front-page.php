<?php
get_header();

  echo '<main id="main" class="main">';

    // Get hero section
    get_template_part( 'template-parts/module', 'slider' );

    // Get about section
    get_template_part( 'template-parts/module', 'about' );

    // Get discover section
    $islandArgs = array(
      'post_type'       => 'islands',
      'post_status'     => 'publish',
      'posts_per_page'  => '4',
      'order'           => "ASC",
    );
    
    get_template_part( 'template-parts/module', 'islands', $islandArgs );

  echo '</main>';

get_footer();




