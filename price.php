<?php
/* Template Name: 料金 */
get_header();
?>

<section class="price-lead">
    <h1>料金</h1>
    <p>
        <?php the_field('price_lead'); ?>
    </p>
</section>

<section class="price-plans">
    <div class="plan-list">

        <div class="plan-item">
            <h3>
                <?php the_field('plan_a_name'); ?>
            </h3>
            <p class="plan-price">
                <?php the_field('plan_a_price'); ?>
            </p>
            <p>
                <?php the_field('plan_a_desc'); ?>
            </p>
        </div>

        <div class="plan-item">
            <h3>
                <?php the_field('plan_b_name'); ?>
            </h3>
            <p class="plan-price">
                <?php the_field('plan_b_price'); ?>
            </p>
            <p>
                <?php the_field('plan_b_desc'); ?>
            </p>
        </div>

    </div>
</section>

<section class="price-spot">
    <h2>スポット業務について</h2>
    <p>
        <?php the_field('spot_note'); ?>
    </p>
</section>

<section class="price-note">
    <p>
        <?php the_field('price_note'); ?>
    </p>
</section>

<?php get_footer(); ?>