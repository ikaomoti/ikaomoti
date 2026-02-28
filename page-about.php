<?php get_header(); ?>
<header class="l-header u-header-show">
    <div class="l-container">
        <h1 class="site-title">
            <a href="<?php echo home_url(''); ?>" class="site-title__link">
                <span>ikaomoti</span><span class="site-title__bar"> | </span><span>Web engineer</span>
            </a>
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
    <section id="about" class="about wave-bg">
        <div class="l-container">
            <h2 class="section-title">About me</h2>
            <div class="about__container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="about__text">
                            <?php the_content(); ?>
                        </div>
                        <div class="about__bottom">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p>記事はありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>