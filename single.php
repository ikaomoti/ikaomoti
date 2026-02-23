<?php get_header(); ?>
<header class="header about-header">
    <div class="wrapper">
        <h1 class="site-title">
            <a href="<?php echo home_url(''); ?>" class="site-title__link"> <?php bloginfo('name'); ?> </a>
        </h1>
        <nav class="gnav">
            <ul class="gnav__list">
                <li class="gnav__list-item"><a href="<?php echo home_url(''); ?>">Top</a></li>
                <li class="gnav__list-item"><a href="<?php echo home_url(''); ?>#skills">Skills</a></li>
                <li class="gnav__list-item"><a href="<?php echo home_url(''); ?>#works">Works</a></li>
                <li class="gnav__list-item"><a href="<?php echo home_url('about'); ?>">About</a></li>
                <li class="gnav__list-item"><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
            </ul>
        </nav>
        <div class="hamburger-button">
            <span class="hamburger-button__bar"></span>
            <span class="hamburger-button__bar"></span>
            <span class="hamburger-button__bar"></span>
        </div>
    </div>
</header>

<main>
    <section class="work-single-page wave-bg">
        <div class="wrapper">
            <h2 class="section-title">Works</h2>
            <div class="post__container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="post-item">
                            <h3 class="post-item__title">
                                <?php the_title(); ?>
                            </h3>
                            <div class="post-item__inner">
                                <div class="post-item__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="post-item__info">
                                    <p class="post-item__url">
                                        URL:<br>
                                        <a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a>
                                    </p>
                                    <p class="post-meta">公開日：<?php the_time('Y年n月'); ?></p>
                                    <div class="post-item__skill-area">
                                        <p class="post-item__skill"><?php the_field('skill1'); ?></p>
                                        <p class="post-item__skill"><?php the_field('skill2'); ?></p>
                                        <p class="post-item__skill"><?php the_field('skill3'); ?></p>
                                    </div>
                                    <p class="post-item__comment">
                                        <?php the_field('comment'); ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                else : ?>
                    <p>記事はありません。</p>
                <?php endif; ?>
            </div>
            <div class="pagination font-en">
                <p class="pagination__prev">
                    <?php next_post_link('%link', 'Prev'); ?>
                </p>
                <p class="pagination__next">
                    <?php previous_post_link('%link', 'Next'); ?>
                </p>
            </div>
    </section>
    </div>
</main>

<?php get_footer(); ?>