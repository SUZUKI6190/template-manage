<?php
 /*
Template Name Posts: 1カラムLP
*/
?>
<?php include( TEMPLATEPATH . '/onecol-header.php' ); ?>

<body id="onecol" style="background-color:<?php the_field('bgc',$post->ID); ?>">
<div style="background:url(<?php the_field( 'bgi',$post->ID); ?>);">

<div id="<?php the_field('side_ds',$post->ID); ?>" style="background-color:<?php the_field('bg_c',$post->ID);?>;">
<div class="bgi">

	<?php if(post_custom('main_header')): ?>
	<div class="headerimg"><img src="<?php the_field( 'main_header',$post->ID); ?>" alt="<?php the_title(); ?>" /></div>
	<?php endif; ?>

<article class="onecont">

	<header>
		<h1><?php the_title(); ?></h1>
	</header>

	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<section id="post-<?php the_ID(); ?>" class="onecoln">
			<?php the_content(); ?>
		</section><!-- /#post -->
	<?php endwhile; endif; ?>

</article><!-- /.onecont -->

<?php include( TEMPLATEPATH . '/onecol-footer.php' ); ?>