<?php get_header(); ?>
<header class="header about-header">
    <div class="wrapper">
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
                <li class="gnav__list-item"><a href="#contact">Contact</a></li>
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
    <section id="contact" class="contact wave-bg">
        <div class="wrapper">
            <h2 class="section-title">Contact</h2>
            <div class="contact__container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile;
                else : ?>
                    <p>記事はありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>