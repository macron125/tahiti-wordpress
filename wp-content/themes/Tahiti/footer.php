    <footer class="footer global-width" id="footer">
      <nav class="gf">
        <a href="<?php echo esc_url( get_home_url() ); ?>" class="logo">
          <div class="logo">
            <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="Tahiti Logo" />
          </div>
        </a>
        <?php 
          
          wp_nav_menu(
            [
              'container'             => false,
              'menu_class'            => 'gf-list',
              'theme_location'        => 'footer',
              'depth'                 => '1',
              'li_class'              => 'gf-item',
              'anchor_class'          => 'gf-link'
            ]
          );
          
          ?>
      </nav>
      <div class="copyright" style="text-align: center; margin: 30px 0;">© Copyright 2022</div>
    </footer>
    <div class="developedBy" id="developedBy" style="width:100%;text-align:center;font-family:helvetica;font-size:10px;background-color:#0E0E10;color:#fff;padding:10px 0;">Developed by <a href="https://georgeparesishvili.com/" style="color:#fff"><b>George&nbsp;Paresishvili</b></a></div>
    <?php wp_footer(); ?>
  </body>
</html>
