<?php
/**
 * Attachements Page
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php echo wp_get_attachment_image($post->ID, 'full'); ?>	
<?php endwhile; ?>