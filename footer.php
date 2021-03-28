    <footer class="footer">
      <div class="container">
        <?php 
          if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
            return;
          }
        ?>

        <div class="footer-menu-bar">
          <?php dynamic_sidebar( 'sidebar-footer' ); ?>
        </div>
        <!-- ./footer-menu-bar -->
        <div class="footer-info">
          <?php 
          wp_nav_menu( [
            'theme_location' => 'footer_menu',
            'container' => 'nav',
            'menu_class' => 'footer-nav',
            'echo' => true,
          ] );
           
          $instance = array(
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/?hl=ru',
            'youtube' => 'https://www.youtube.com',
            'twitter' => 'https://twitter.com/?lang=ru',
            'title' => '',
          );
          $args = array(
            'before_widget' => '<div class="footer-social">',
            'after_widget'  => '</div>' 
          );
          the_widget( 'Social_Widget', $instance, $args ); ?>
        </div> 
        <!-- /.footer-info -->        
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->
    <?php wp_footer(); ?>
  </body>
</html>
