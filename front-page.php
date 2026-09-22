<?php
/* Template Name: トップページ */
get_header();
?>

<section class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
    <h1 class="hero-catch"><?php the_field('catch_copy'); ?></h1>
</section>

<section class="strengths">
    <h2>事務所の強み</h2>
    <div class="strength-list">
        <div class="strength-item">
            <h3><?php the_field('strength_title_1'); ?></h3>
            <p><?php the_field('strength_text_1'); ?></p>
        </div>
        <div class="strength-item">
            <h3><?php the_field('strength_title_2'); ?></h3>
            <p><?php the_field('strength_text_2'); ?></p>
        </div>
        <div class="strength-item">
            <h3><?php the_field('strength_title_3'); ?></h3>
            <p><?php the_field('strength_text_3'); ?></p>
        </div>
    </div>
</section>

<section class="services">
    <h2>業務内容</h2>
    <div class="service-list">

        <div class="service-item">
            <h3><?php the_field('service_title_1'); ?></h3>
            <p><?php the_field('service_text_1'); ?></p>
            <a href="<?php the_field('service_link_1'); ?>">詳しく見る</a>
        </div>

        <div class="service-item">
            <h3><?php the_field('service_title_2'); ?></h3>
            <p><?php the_field('service_text_2'); ?></p>
            <a href="<?php the_field('service_link_2'); ?>">詳しく見る</a>
        </div>

        <div class="service-item">
            <h3><?php the_field('service_title_3'); ?></h3>
            <p><?php the_field('service_text_3'); ?></p>
            <a href="<?php the_field('service_link_3'); ?>">詳しく見る</a>
        </div>

        <div class="service-item">
            <h3><?php the_field('service_title_4'); ?></h3>
            <p><?php the_field('service_text_4'); ?></p>
            <a href="<?php the_field('service_link_4'); ?>">詳しく見る</a>
        </div>

    </div>
</section>

<section class="greeting">
    <h2>代表挨拶</h2>
    <div class="greeting-wrap">
        <img src="<?php the_field('greeting_image'); ?>" alt="代表者写真">
        <p><?php the_field('greeting_text'); ?></p>
    </div>
</section>

<section class="home-news">
    <h2>お知らせ</h2>
    <div class="home-news-list">

        <?php
        $news_query = new WP_Query(array(
            'posts_per_page' => 3,
        ));
        ?>

        <?php if ($news_query->have_posts()): ?>
            <?php while ($news_query->have_posts()):
                $news_query->the_post(); ?>
                <div class="home-news-item">
                    <p class="home-news-date">
                        <?php the_date(); ?>
                    </p>
                    <h3><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a></h3>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <p>現在、お知らせはありません。</p>
        <?php endif; ?>

    </div>

    <div class="home-news-more">
        <a href="<?php echo home_url('/news/'); ?>">お知らせ一覧を見る →</a>
    </div>
</section>

<?php get_footer(); ?>