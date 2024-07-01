<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minimalist_blog_template
 */

?>

<?php wp_footer(); ?>

  <div class="wrapper">
    <hr/>
    <footer id="colophon" class="site-footer">
      <div class="site-info">
        &#64<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?= bloginfo( 'name' ) . ' - ' . getdate()['year']; ?></a>
      </div><!-- .site-info -->
    </footer><!-- #colophon -->
  </div>

  <script
    src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
    crossorigin="anonymous"></script>
  </body>
</html>
