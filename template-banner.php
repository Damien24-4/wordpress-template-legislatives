<?php
/**
 * Template Name: Zone bleue uniquement (Sans contenu)
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'banner'); ?>

    <?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>
