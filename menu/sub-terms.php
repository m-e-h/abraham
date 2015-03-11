<?php
/**
 * @package Abraham
 */

if ( is_taxonomy_hierarchical( get_queried_object()->taxonomy ) ) :

	$terms = wp_list_categories(
		array(
			'taxonomy'         => get_queried_object()->taxonomy,
			'child_of'         => get_queried_object_id(),
			'depth'            => 1,
			'title_li'         => false,
			'show_option_none' => false,
			'echo'             => false
		)
	);

	if ( !empty( $terms ) ) : ?>

		<nav <?php hybrid_attr( 'menu', 'sub-terms' ); ?>>

			<ul id="menu-sub-terms-list" class="menu-sub-terms__list">
				<?php echo $terms; ?>
			</ul><!-- .sub-terms -->

		</nav><!-- .menu -->
<?php
	endif; // End check for list.

endif; // End check for hierarchy.
