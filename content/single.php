<?php
/**
 * Single post template.
 *
 * @package abraham
 */

if ( ! hybrid_post_has_content() && ! is_singular( 'gravityview' ) ) {
	return;
}
?>

<article <?php hybrid_attr( 'post' ); ?>>

	<?php tha_entry_top(); ?>

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php tha_entry_content_before(); ?>
			<?php the_content(); ?>
			<?php tha_entry_content_after(); ?>
		</div>

		<?php get_template_part( 'components/entry', 'footer' ); ?>

	<?php tha_entry_bottom(); ?>

</article>

<?php
if ( comments_open() || get_comments_number() ) :
	comments_template( '/content/comments.php' );
endif;
