<?php get_header(); ?>

<main>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide1">
                <picture>
                    <img src="./images/sea.jpg" alt="">
                </picture>
            </div>
            <div class="swiper-slide slide2">
                <picture>
                    <img src="./images/sky.jpg" alt="">
                </picture>
            </div>
            <div class="swiper-slide slide3">
                <picture>
                    <img src="./images/cosmos.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
    <section id="profile" class="profile wrapper">
        <div class="profile__container">
            <a class="profile__catch target-a radialGrad-blue" href="#skills">
                <p class="profile__catch-text"><span class="font-en">Web</span>コーディング<br>承ります。</p>
            </a>
            <div class="profile__pictureandtext">
                <div class="fly-wrapper">
                    <a href="#works" class="profile__picture target-b"></a>
                </div>
                <div class="fly-wrapper">
                    <a href="<?php echo home_url(); ?>/about/" class="profile__text target-c radialGrad-orange">
                        <p class="profile__myname"><span class="profile__myname--en font-en">ikaomoti</span>イカオモチ</p>
                        <p class="profile__about">元時計修理士のウェブエンジニア。</p>
                        <p class="profile__about">趣味はクライミングと犬。</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="wrapper">
            <h2 class="section-title">Skills</h2>
            <ul class="skills__contianer">
                <li class="skill fadeinup animate__animated">
                    <p class="skill__title font-en">HTML/CSS</p>
                    <div class="skill__img">
                        <i class="fas fa-code"></i>
                    </div>
                    <p class="skill__text">クラス命名規則にはBEMを用い、保守性の高いウェブサイト作りをお手伝いいたします。CSS構築にはSCSSを使い納期短縮、作業効率化を図ります。</p>
                </li>
                <li class="skill fadeinup animate__animated">
                    <p class="skill__title">レスポンシブ</p>
                    <div class="skill__img">
                        <i class="fas fa-mobile-alt"></i>
                        <i class="fas fa-arrows-alt-h"></i>
                        <i class="fas fa-desktop"></i>
                    </div>
                    <p class="skill__text">
                        スマートフォンからデスクトップ仕様まで、リキッド/ソリッドデザイン、コンテンツ幅～px以上は固定仕様など、柔軟に対応します。SPファーストかPCファーストにするかなども、サイト運用目的に合わせて作成します。
                    </p>
                </li>
                <li class="skill fadeinup animate__animated">
                    <p class="skill__title font-en">JavaScript</p>
                    <div class="skill__img">
                        <i class="fab fa-js"></i>
                    </div>
                    <p class="skill__text">ハンバーガーメニュー、スライダー、タブ、アコーディオンなど動きのあるウェブサイトを作ります。細かいこだわり、ご要望に対応いたします。</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="works">
        <div class="wrapper">
            <h2 class="section-title" id="works">Works</h2>
            <div class="works__container">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="post-item">
                            <div class="post-item__wrapper fadeinup animate__animated">
                                <a href="<? the_permalink(); ?>" class="post-item__title"><?php the_title(); ?></a>
                                <a href="<? the_permalink(); ?>" class="post-item__link-img">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                                <div class="post-info">
    <?php 
    $categories = get_the_category();
    if($categories): ?>
    <p class="post-meta">公開日：<?php the_time('Y年n月'); ?></p>
    <?php endif; ?>
     <p class="post-label">
            <?php echo esc_html($categories[0]->name); ?>
        </p>
    
</div>
                            </div>
                        </article>
                    <?php endwhile;
                else : ?>
                    <p>記事はありません。</p>
                <?php endif; ?>
            </div>
        </div>
        <?php echo paginate_links(); ?>
    </section>
</main>

<?php get_footer(); ?>