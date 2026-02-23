<?php get_header(); ?>

<main>

    <!-- MV -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide1">
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>./images/sea.jpg" alt="">
                </picture>
            </div>
            <div class="swiper-slide slide2">
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>./images/sky.jpg" alt="">
                </picture>
            </div>
            <div class="swiper-slide slide3">
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>./images/cosmos.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>


    <!-- Profile -->
    <section id="profile" class="profile wrapper">
        <div class="profile__container">
            <div class="profile__catch target-a radialGrad-blue balloon-pop">
                <p class="profile__catch-text lupin-target">Webコーディング承ります。</p>
            </div>
            <div class="profile__pictureandtext">
                <div class="fly-wrapper fly-wrapper--picture">
                    <a href="#works" class="profile__picture target-b"></a>
                </div>
                <div class="fly-wrapper fly-wrapper--text">
                    <a href="<?php echo home_url(); ?>/about/" class="profile__text target-c radialGrad-orange">
                        <p class="profile__myname lupin-target"><span class="profile__myname--en font-en">ikaomoti</span>イカオモチ</p>
                        <p class="profile__about lupin-target">元時計修理士のウェブエンジニア。</p>
                        <p class="profile__about lupin-target">趣味はクライミングと犬。</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="wave-bg">

        <!-- Skills -->
        <section id="skills" class="skills">
            <div class="wrapper">
                <h2 class="section-title">Skills</h2>
                <ul class="skills__container">

                    <?php
                    $args = array(
                        'post_type' => 'skill',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );
                    $skills = new WP_Query($args);

                    if ($skills->have_posts()):
                        while ($skills->have_posts()): $skills->the_post();
                            $icon = get_field('icon_class');
                            $level = get_field('level');
                            $experience = get_field('experience');
                            $text = get_field('description');
                    ?>
                            <li class="skill fadeinup animate__animated">
                                <p class="skill__title font-en"><?php the_title(); ?></p>
                                <div class="skill__img">
                                    <i class="<?php echo $icon; ?>"></i>
                                </div>
                                <p class="slill__level-term">習熟度(自己評価)</p>
                                <div class="skill__level">
                                    <div class="skill__level-bar" data-level="<?php echo esc_attr($level); ?>"></div>
                                </div>
                                <p class="skill__experience">経験年数：<?php echo esc_html($experience); ?>年</p>
                                <p class="skill__text"><?php echo esc_html($text); ?></p>
                            </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </ul>
            </div>
        </section>

        <!-- Works -->
        <section class="works">
            <div class="wrapper">
                <h2 class="section-title" id="works">Works</h2>
                <div class="works__container">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <article class="post-item">
                                <div class="post-item__wrapper fadeinup animate__animated">
                                    <a href="<?php the_permalink(); ?>" class="post-item__title"><?php the_title(); ?></a>
                                    <a href="<?php the_permalink(); ?>" class="post-item__link-img">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <div class="post-info">
                                        <?php $categories = get_the_category(); ?>
                                        <?php if ($categories): ?>
                                            <p class="post-meta">公開日：<?php the_time('Y年n月'); ?></p>
                                            <p class="post-label"><?php echo esc_html($categories[0]->name); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile;
                    else: ?>
                        <p>記事はありません。</p>
                    <?php endif; ?>
                </div>
            </div>
            <?php echo paginate_links(); ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>