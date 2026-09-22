<?php
/* Template Name: 業務詳細 */
get_header();
?>

<section class="service-lead">
    <h1><?php the_title(); ?></h1>
    <p><?php the_field('service_lead'); ?></p>
</section>

<section class="service-detail">
    <h2>詳しい説明</h2>
    <p><?php the_field('service_detail'); ?></p>
</section>

<section class="service-flow">
    <h2>ご依頼の流れ</h2>
    <p><?php the_field('service_flow'); ?></p>
</section>

<section class="service-price-note">
    <h2>料金について</h2>
    <p><?php the_field('service_price_note'); ?></p>
</section>

<?php get_footer(); ?>