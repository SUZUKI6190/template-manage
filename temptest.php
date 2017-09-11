<?php
/**
 * Template Name: temptest
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div class="wrapper">
       <h1>THIS IS MY CUSTOM THEME FOR PAGE tq-1</h1>
    <div id="content">
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <?php the_content(); ?>
               <?php endwhile; endif; ?>
    </div>          
</div>
<?php get_footer(); ?>