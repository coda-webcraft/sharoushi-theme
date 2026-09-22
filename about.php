<?php
/* Template Name: 事務所概要 */
get_header();
?>

<section class="about-lead">
    <h1>事務所概要</h1>
    <p><?php the_field('about_lead'); ?></p>
</section>

<section class="about-history">
    <h2>沿革・経歴</h2>
    <p><?php the_field('about_history'); ?></p>
</section>

<section class="about-info">
    <h2>事務所概要</h2>
    <table class="info-table">
        <tr>
            <th>事務所名</th>
            <td><?php the_field('office_name'); ?></td>
        </tr>
        <tr>
            <th>代表者</th>
            <td><?php the_field('office_representative'); ?></td>
        </tr>
        <tr>
            <th>所在地</th>
            <td><?php the_field('office_address'); ?></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><?php the_field('office_tel'); ?></td>
        </tr>
        <tr>
            <th>設立</th>
            <td><?php the_field('office_established'); ?></td>
        </tr>
    </table>
</section>

<?php get_footer(); ?>