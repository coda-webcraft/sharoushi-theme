<?php
/* Template Name: アクセス */
get_header();
?>

<section class="access-lead">
    <h1>アクセス</h1>
    <p>
        <?php the_field('access_lead'); ?>
    </p>
</section>

<section class="access-info">
    <div class="access-detail">
        <h2>所在地</h2>
        <p>
            <?php the_field('access_address'); ?>
        </p>

        <h2>最寄駅・アクセス方法</h2>
        <p>
            <?php the_field('access_station'); ?>
        </p>

        <h2>駐車場について</h2>
        <p>
            <?php the_field('access_parking'); ?>
        </p>
    </div>

    <div class="access-map">
        <?php echo get_field('access_map_embed'); ?>
    </div>
</section>

<?php get_footer(); ?>