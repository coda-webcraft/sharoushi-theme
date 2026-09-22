<?php
get_header();
?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <section class="single-lead">
            <h1>
                <?php the_title(); ?>
            </h1>
            <p class="single-date">
                <?php the_date(); ?>
            </p>
        </section>

        <section class="single-content">
            <?php the_content(); ?>
        </section>

        <section class="single-back">
            <a href="<?php echo home_url('/news/'); ?>">← お知らせ一覧へ戻る</a>
        </section>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>