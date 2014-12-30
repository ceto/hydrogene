<?php
/*
Template Name: About Us Page Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/aboutus', 'page'); ?>
<?php endwhile; ?>
