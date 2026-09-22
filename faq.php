<?php
/* Template Name: よくある質問 */
get_header();
?>

<section class="faq-lead">
    <h1>よくある質問</h1>
</section>

<section class="faq-list">

    <div class="faq-item">
        <p class="faq-q"><?php the_field('faq_q1'); ?></p>
        <p class="faq-a"><?php the_field('faq_a1'); ?></p>
    </div>

    <div class="faq-item">
        <p class="faq-q"><?php the_field('faq_q2'); ?></p>
        <p class="faq-a"><?php the_field('faq_a2'); ?></p>
    </div>

    <div class="faq-item">
        <p class="faq-q"><?php the_field('faq_q3'); ?></p>
        <p class="faq-a"><?php the_field('faq_a3'); ?></p>
    </div>

    <div class="faq-item">
        <p class="faq-q"><?php the_field('faq_q4'); ?></p>
        <p class="faq-a"><?php the_field('faq_a4'); ?></p>
    </div>

    <div class="faq-item">
        <p class="faq-q"><?php the_field('faq_q5'); ?></p>
        <p class="faq-a"><?php the_field('faq_a5'); ?></p>
    </div>

</section>

<?php get_footer(); ?>