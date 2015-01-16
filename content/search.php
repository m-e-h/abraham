<?php
/**
 * @package Abraham
 */
?>
<?php tha_entry_before(); ?>

<article <?php hybrid_attr( 'post' ); ?>>

<?php tha_entry_top(); ?>

	<header class="entry-header">
		<?php get_template_part( 'partials/entry', 'title' ); ?>
	</header><!-- .entry-header -->

<?php if ( is_singular( get_post_type() ) ) : ?>

	<div <?php hybrid_attr( 'entry-content' ); ?>>
		<?php get_the_image(); ?>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	  <?php abraham_entry_meta(); ?>
	  <?php abraham_post_terms(); ?>
	</footer><!-- .entry-footer -->

<?php else : // If not viewing a single post. ?>

	<div <?php hybrid_attr( 'entry-summary' ); ?>>
		<?php get_the_image(); ?>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

<?php endif; // End single post check. ?>

<?php tha_entry_bottom(); ?>

</article><!-- .entry -->

<?php
tha_entry_after();
