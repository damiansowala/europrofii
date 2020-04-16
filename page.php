<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/bootsrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 4.0.0
 * @autor 		Babobski
 */
?>
<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

	<section class="page">
        <div class="container__full">
            <div class="row">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
					<div class="col-xs-12 col-sm-4 page__title">
						<article class="paragraph">
							<h1 class="paragraph__header paragraph__title--center"><?php the_title(); ?></h1>
						</article>
						<?php if(get_the_post_thumbnail_url()): ?>
                        	<div class="mask mask--bg" style="background-image: url('<?php the_post_thumbnail_url( 'thumbnail' ); ?>');"></div>
                    	<?php endif; ?>    
					</div>
					<div class="col-xs-12 col-sm-8 page__body">
						<article class="paragraph">
							<p class="paragraph__text"><?php the_content(); ?></p>
						</article>
                	</div>

				<?php endwhile; ?>
            </div>
        </div>
    </section>

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
