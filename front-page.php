<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id="sliderOne" class="slider">
        <div class="slider__body">
                <?php if(get_field('slider')): ?>
                    <?php while(has_sub_field('slider')): ?>

                        <div class="container slider__slide">
                            <article class="col-xs-12 col-md-6 paragraph">
                            <h1 class="paragraph__header"><?php the_sub_field('tytul'); ?></h1>
                                <h2 class="paragraph__subheader"><?php the_sub_field('podtytul'); ?></h2>
                                <a href="<?php the_sub_field('link'); ?>" role="link" class="btn btn__more btn__more--border">Dowiedz się więcej</a>
                            </article>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>


                <?php if(get_field('slider')): ?>
                    <?php while(has_sub_field('slider')): ?>
                        <div class="mask" style="background-image: url('<?php the_sub_field('zdjecie'); ?>');"></div>
                    <?php endwhile; ?>
                <?php endif; ?>

            <div class="slider__controls"></div>
        </div>
    </section>

    <section class="offer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <article class="paragraph p-tb">
                        <h3 class="paragraph__header">Sprawdz zakres naszych uslug</h3>
                    </article>
                </div>
                <?php if(get_field('oferta')): ?>
                    <?php while(has_sub_field('oferta')): ?>
                        <div class="col-xs-12 col-sm-12">
                            <article class="card">
                                <div class="card__image-box">
                                    <img src="<?php the_sub_field('zdjecie'); ?>" alt="" class="img-res">
                                </div>
                                <div class="card__text-box">
                                    <h2 class="card__title"><?php the_sub_field('nazwa_oferty'); ?></h3>
                                </div>
                                <div class="card__btn-box">
                                    <a href="<?php the_sub_field('link_do_oferty'); ?>" class="btn btn__more">Dowiedz się więcej</a>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="quest">
        <div class="mask mask--bg" style="background-image: url('<?php the_field('img_quest'); ?>');"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <article class="paragraph">
                        <h3 class="paragraph__header">MASZ PYTANIA?
                            CHCESZ WIEDZIEĆ
                            WIĘCEJ?</h3>
                        <h4 class="paragraph__subheader">Jesteśmy do Twojej dyspozycji! Chcesz dowiedzieć się więcej o naszych usługach? Masz pytania dotyczące zwrotu podatku, prowadzenia działalności gospodarczej w Niemczech, ubezpieczeń, Kindergeld i Elterngeld? Skontaktuj się z naszym biurem </h4>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?php echo do_shortcode( ''. get_field('kod_form') .'' ); ?>
                    <ul class="items items__flat">
                        <li class="item item__flat">
                            <a href="<?php the_field('polityka_prywatnosci',131); ?>" class="btn btn__link">Polityka prywatności i Cookies</a>
                        </li>
                        <li class="item item__flat">
                            <a href="<?php the_field('rodo',131); ?>" class="btn btn__link">RODO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <article class="paragraph p-tb">
                        <h3 class="paragraph__header">Informacje, które
                            mogą się przydać</h3>
                    </article>
                </div>
            </div>

            <div class="row">

                    <?php
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('posts_per_page=6' . '&paged='.$paged);

                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <div class="col-xs-12 col-sm-6 line">
                                <article class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <img class="img-res" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <h3 class="paragraph__title"><?php the_title(); ?></h3>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn__more btn__more--red">Poczytaj więcej</a>
                                </article>
                        </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <?php wp_reset_query(); ?>

    <section id="sliderTwo" class="opinions">
        <div class="mask mask--bg" style="background-image: url('<?php the_field('img_opinions'); ?>');"></div>
        <div class="slider__body">
                <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-6">
                                <article class="paragraph">
                                    <h2 class="paragraph__header">Poznaj opinie naszych klientów</h2>
                                </article>
                            </div>
                        </div>
                    </div>

                    <?php if(get_field('klient')) : ?>
                            <?php while(has_sub_field('klient')) : ?>

                                <div class="container slider__slide">
                                    <article class="col-xs-12 col-sm-6 col-sm-offset-6 paragraph">
                                        <h3 class="paragraph__title"><?php the_sub_field('imie'); ?></h3>
                                        <div class="stars-box">
                                            <?php
                                                $star = get_sub_field('liczba_gwiazdek');
                                                if($star > 0){
                                                    for($i=0; $i<$star; $i++){
                                                        echo '<i class="stars-box__star"></i>';
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <p class="paragraph__text paragraph__text--center"><?php the_sub_field('opinia'); ?></p>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                    <?php endif; ?>          
                </div>
    </section>





<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>