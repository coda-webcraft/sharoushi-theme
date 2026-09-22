<?php get_header(); ?>

<section class="archive-lead">
    <h1>お知らせ</h1>
</section>

<section class="archive-list">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <div class="archive-item">
                <p class="archive-date"><?php the_date(); ?></p>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
        <?php endwhile; else: ?>
        <p>現在、お知らせはありません。</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>