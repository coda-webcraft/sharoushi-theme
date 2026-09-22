<?php
/* Template Name: お問い合わせ */
get_header();
?>

<section class="contact-lead">
    <h1>お問い合わせ</h1>
    <p>労務相談、料金プランについてなど、お気軽にお問い合わせください。</p>
</section>

<section class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="09fb7a4" title="コンタクトフォーム 1"]'); ?>
</section>

<?php get_footer(); ?>