<?php 

$maxColumns = 3;

$columns = get_field( 'about' );

if( $columns ) {
  echo ' <section class="about global-width">';
    echo '<h2 class="title"><b>Why</b> Tahiti?</h2>';
    echo '<div class="article-cards">';
    foreach($columns as $column) {

        $image = $column['image'];
        $content = $column['content'];
        $link = $column['link'];

        echo '<article>';
          echo '<div class="article-content">';
          if( $image ) {
            echo '<div class="article-card-img" style="background-image: url(' . $image . ')"></div>';
          };

          if( $content ) {
            echo '<div class="article-card-descr">' . $content . '</div>';
          };
          echo '</div>';
          
          if( $link ) {
            echo '<a href="' . $link . '" class="article-card-more">Learn More</a>';
          };
        echo '</article>';

    };
  
    echo '</div>';
  echo '</section>';
};