<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mamasheaven
 */

get_header(); ?>
    <div class="fp-container">

        <!--visioon-->
        <?php
        $args = array(
            'post_type' => 'page',
            'p' => 16
        );

        $your_query = new WP_Query($args);
        while ($your_query->have_posts()) :
        $your_query->the_post(); ?>
        <div class="fp-section ">
            <div class="fp-inner text-center">
                <h1><?php the_title(); ?></h1><?php
                the_content();
                endwhile;
                ?></div>
        </div>
        <!--/visioon-->

        <!--app-->
        <?php
        $args = array(
            'post_type' => 'page',
            'p' => 62
        );

        $your_query = new WP_Query($args);
        while ($your_query->have_posts()) :
        $your_query->the_post(); ?>
        <div class="fp-section ">
            <div class="fp-inner text-center">
                <h1><?php the_title(); ?></h1><?php
                the_content();
                endwhile;
                ?></div>
        </div>
        <!--/app-->

        <!--telgid-->
        <?php
        $args = array(
            'post_type' => 'page',
            'p' => 67
        );

        $your_query = new WP_Query($args);
        while ($your_query->have_posts()) :
        $your_query->the_post(); ?>
        <div class="fp-section ">
            <div class="fp-inner text-center">
                <h1><?php the_title(); ?></h1><?php
                the_content();
                endwhile;
                ?></div>
        </div>
        <!--/telgid-->

        <!--hooandja-->
<!--        --><?php
//        $args = array(
//            'post_type' => 'page',
//            'p' => 50
//        );
//
//        $your_query = new WP_Query($args);
//        while ($your_query->have_posts()) :
//        $your_query->the_post(); ?>
<!--        <div class="fp-section ">-->
<!--            <div class="fp-inner text-center">-->
<!--                <h1>--><?php //the_title(); ?><!--</h1>--><?php
//                the_content();
//                endwhile;
//                ?><!--</div>-->
<!--        </div>-->
        <!--/hooandja-->

        <!--festivalid-->
        <?php
        $args = array(
            'post_type' => 'page',
            'p' => 53
        );

        $your_query = new WP_Query($args);
        while ($your_query->have_posts()) :
        $your_query->the_post(); ?>
        <div class="fp-section ">
            <div class="fp-inner text-center">
                <h1><?php the_title(); ?></h1><?php
                the_content();
                endwhile;
                ?></div>
        </div>
        <!--/festivalid-->

        <!--statistika-->
        <?php
        $args = array(
            'post_type' => 'page',
            'p' => 22
        );

        $your_query = new WP_Query($args);
        while ($your_query->have_posts()) :
        $your_query->the_post(); ?>
        <div class="fp-section ">
            <div class="fp-inner text-center">
                <h1><?php the_title(); ?></h1><?php
                the_content();
                endwhile;
                ?></div>
        </div>
        <!--/statistika-->

        <!--meeskond-->
        <?php
        $args = array(
            'post_type' => 'page',
            'p' => 56
        );

        $your_query = new WP_Query($args);
        while ($your_query->have_posts()) :
        $your_query->the_post(); ?>
        <div class="fp-section ">
            <div class="fp-inner text-center">
                <h1><?php the_title(); ?></h1><?php
                the_content();
                endwhile;
                ?></div>
        </div>
        <!--/meeskond-->

    </div> <!--/fp-container-->

<?php
get_sidebar();
get_footer();
