<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-intro' ); ?> >

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php twentyseventeen_edit_link( get_the_ID() ); ?>
</article><!-- #post-## -->
