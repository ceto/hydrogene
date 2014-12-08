<?php
/*
Template Name: Contact Page Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/contact', 'page'); ?>
<?php endwhile; ?>
