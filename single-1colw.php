<?php
 /*
Template Name Posts: 1カラムLP（画像ワイド）
*/
?>
<?php include( 'onecol-header.php' ); ?>

<body id="onecol" style="background-color:<?php the_field('bgcw',$post->ID); ?>">
<div style="background:url(<?php the_field( 'bgiw',$post->ID); ?>);">

	<?php if(post_custom('main_headerw')): ?>
	<div class="headerimgw"><img src="<?php the_field( 'main_headerw',$post->ID); ?>" alt="<?php the_title(); ?>" /></div>
	<?php endif; ?>

<div id="<?php the_field('side_dsw',$post->ID); ?>" style="background-color:<?php the_field('bg_cw',$post->ID);?>;">
<div class="bgiw">

<article class="onecontw">

	<header>
		<h1><?php the_title(); ?></h1>
	</header>

	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<section id="post-<?php the_ID(); ?>" class="onecolw">
			<?php the_content(); ?>
		</section><!-- /#post -->
	<?php endwhile; endif; ?>

</article><!-- /.onecontw -->

<?php include( 'onecol-footer.php' ); ?>