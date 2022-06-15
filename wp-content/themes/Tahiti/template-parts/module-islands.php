<section class="discover">
  <div class="content global-width">
    <h2 class="title"><b>Discover</b> Tahiti</h2>
    <ul class="spots">
      <?php 
      
      $query = new WP_Query($args);

      if($query->have_posts()) {
        while($query->have_posts()) {
          $query->the_post();

          $title = $post->post_title;
          $image = get_field('image');
          $excerpt = get_field('excerpt');
          $price = get_field('price');

          echo 
          '
          <li class="spot-card">
            <figure class="spot-img" style="background-image: url(' . $image . ')"></figure>
            <h3 class="spot-title title">' . $title. '</h3>
            <p class="spot-copy">'. $excerpt .'</p>
            <a href="#" target="_blank" class="spot-btn btn">
              <div class="spot-price">
                <span>FROM</span>
                <span>$'. $price .'</span>
              </div>
              <div class="arr-right">
              <svg xmlns="http://www.w3.org/2000/svg" width="20.031" height="20" viewBox="0 0 20.031 20">
                <path fill="#fff" id="Rounded_Rectangle_1_copy" data-name="Rounded Rectangle 1 copy" class="cls-1" d="M377,1687h18a1,1,0,0,1,0,2H377A1,1,0,0,1,377,1687Zm9.719-8.72,8.971,8.97a1.019,1.019,0,1,1-1.441,1.44l-8.971-8.97A1.019,1.019,0,0,1,386.719,1678.28Zm7.562,9-8.971,8.97a1.019,1.019,0,1,0,1.441,1.44l8.971-8.97A1.019,1.019,0,0,0,394.281,1687.28Z" transform="translate(-376 -1678)"/>
              </svg>
            </div>
            </a>
          </li>
          
          ';
        };
      };

      wp_reset_postdata();
      
      ?>

    </ul>
  </div>
</section>
