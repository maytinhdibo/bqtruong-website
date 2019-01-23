<?php
  // Include WordPress
  global $wpdb;
  define('WP_USE_THEMES', false);
  require('/var/www/bqtdotcom/wp-blog-header.php');
  query_posts('posts_per_page=1');
?>

<?php while (have_posts()): the_post(); ?>
   <h2><?php the_title(); ?></h2>
   <?php the_excerpt(); ?>
   <p><a href="<?php the_permalink(); ?>" class="red">Read more...</a></p>
<?php endwhile; ?>
