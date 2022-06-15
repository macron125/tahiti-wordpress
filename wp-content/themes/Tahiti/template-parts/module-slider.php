<section class="hero">
  <div class="slider">
  <?php 
    if(have_rows( 'slider' )) {

      while(have_rows( 'slider' )) {

        the_row();

        // If image is included, display image
        if(get_sub_field('image')) {
          $slide = get_sub_field('image'); 
          echo '<div class="slide" style="background-image: url(' . get_sub_field('image') . ')"></div>';
        }
      } 
    }
    ?>
  </div>
  <div class="overlay"></div>
  <div class="hero-content content">
    <h1 class="title"><b>Welcome </b>to Tahiti</h1>
    <p>Your vacation starts here</p>
  </div>
</section>