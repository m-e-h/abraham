<?php
/**
 * Nothing found template.
 *
 * @package abraham
 */

if ( is_single( get_the_ID() ) ) {
?>

<article <?php hybrid_attr( 'post' ); ?>>

	<?php tha_entry_top(); ?>

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php tha_entry_content_before(); ?>
			<?php the_content(); ?>
			<?php tha_entry_content_after(); ?>
		</div>

		<?php get_template_part( 'components/entry', 'footer' ); ?>

		<?php comments_template( '', true ); ?>

	<?php tha_entry_bottom(); ?>

</article>

<?php } ?>
