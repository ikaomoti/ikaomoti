<?php get_header(); ?>

<main class="wrapper">
    <h1 class="section-title">Blog</h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_post_thumbnail(); ?>
            </article>
        <?php endwhile; ?>

        <?php echo paginate_links(); ?>

    <?php else : ?>
        <p>記事はありません。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>