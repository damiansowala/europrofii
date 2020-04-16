<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/bootstrap-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 4.0.0
 * @autor 		Babobski
 */
?>
<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>

    <section class="page">
        <div class="container__full">
            <div class="row">
                <div class="col-xs-12 col-sm-4 page__title">
                    <article class="paragraph">
                        <h1 class="paragraph__header paragraph__title--center">Przydatne informacje</h1>
                    </article>
                    <?php if(get_the_post_thumbnail_url()): ?>
                        <div class="mask mask--bg" style="background-image: url('<?php the_post_thumbnail_url( 'thumbnail' ); ?>');"></div>
                    <?php endif; ?>    
                </div>
                <div class="col-xs-12 col-sm-8 page__body">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="row paragraph__blog">
                        <div class="col-xs-12 col-sm-2">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-res', 'title' => 'Feature image']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-10">
                            <h3 class="paragraph__title"><a class="btn btn__link btn__link--title" href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
								<?php the_title(); ?>
							</a></h3>
                            <p class="paragraph__text"><?php echo $content = wpautop( $post->post_content ); ?></p>
                        </div>
                    </article>
				<?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>

<?php else: ?>
	<h1>
		<?php echo __('Zapraszamy niebawem.', 'wp_babobski')?>
	</h1>
<?php endif; ?>

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>


