<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="tax-page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
			<div class="archive-product-content">
			<?php /* Start the Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="item-grid">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php if ( has_post_thumbnail() ) : ?>
						
						<a href="<?php echo get_the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium' ); ?>
						</a>
						
					<?php endif; ?>

						<div class="name-price">
							<p class="item-name"><?php echo get_the_title(); ?> ......</p>
							<p class="price-meta"> ......
								<?php $meta_print_value=get_post_meta(get_the_ID(),'price',true);
								echo($meta_print_value);?>
							</p>
						</div>
			</article><!-- #post-## -->
			</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
