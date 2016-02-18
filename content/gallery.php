<?php
/**
 * List of related articles.
 *
 * @package abraham
 */

?>
<article <?php hybrid_attr('post'); ?>>

	<?php tha_entry_top(); ?>

		<div <?php hybrid_attr('entry-summary'); ?>>
			<?php tha_entry_content_before(); ?>
			<?php abe_excerpt(); ?>
			<?php tha_entry_content_after(); ?>
		</div>

			<header <?php hybrid_attr('entry-header'); ?>>
				<h2 <?php hybrid_attr('entry-title'); ?>>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
			</header>

		<?php get_template_part('components/entry', 'footer'); ?>

<?php tha_entry_bottom(); ?>

</article>
