<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sydney
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="title-post entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php if ( is_front_page() ) :  ?>
		<div id="home-bloc-yellow">
			<h1>Salut les gens !!!</h1>
		</div>
		<div id="home-bloc-nav">
				<div class="items-nav-home">
					<a href="">
					<img src="<?= get_stylesheet_directory_uri(); ?>/img/item1.png" alt="">
					<div class="item-hover"><p><strong>Visualiser</strong><br> le projet</p></div>
					</a>
				</div>
			<div class="items-nav-home">
				<a href=""><img src="<?= get_stylesheet_directory_uri(); ?>/img/item2.png" alt=""></a>
				<div class="item-hover"><p><strong>Visualiser</strong><br> le projet</p></div>
			</div>
			<div class="items-nav-home">
				<a href=""><img src="<?= get_stylesheet_directory_uri(); ?>/img/item3.png" alt=""></a>
				<div class="item-hover"><p><strong>Visualiser</strong><br> le projet</p></div>
			</div>
			<div class="items-nav-home">
				<a href=""><img src="<?= get_stylesheet_directory_uri(); ?>/img/item4.png" alt=""></a>
				<div class="item-hover"><p><strong>Visualiser</strong><br> le projet</p></div>
			</div>
			<div class="items-nav-home">
				<a href=""><img src="<?= get_stylesheet_directory_uri(); ?>/img/item5.jpg" alt=""></a>
				<div class="item-hover"><p><strong>Visualiser</strong><br> le projet</p></div>
			</div>
			<div class="items-nav-home">
				<a href=""><img src="<?= get_stylesheet_directory_uri(); ?>/img/item6.jpg" alt=""></a>
				<div class="item-hover"><p><strong>Visualiser</strong><br> le projet</p></div>
			</div>
		</div>


		<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'sydney' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
