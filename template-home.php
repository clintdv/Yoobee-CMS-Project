<?php
/**
* Template Name:  Home 
*

* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*	
* @package Chilli_&_Lime
*/
get_header(); ?>
<?php if( have_rows('banner') ): ?>
<?php while( have_rows('banner') ): the_row(); 
// 
$background_image = get_sub_field('background_image');
$title = get_sub_field('title');

?>
<section class="banner" style="background: url(<?php echo $background_image?>) 50% 50% no-repeat;background-size: cover;">
	<div class="container h-100">
		<div class="row justify-content-center align-items-center h-100">
			<div class="col-lg-10 text-center col-sm-12 col-12">
				<div class="title-banner">
					<h1><?php echo $title?></h1>
				</div>
			</div>	
		</div>	
	</div>       
</section>
<?php endwhile;?>
<?php endif;?>
<?php if( have_rows('who_are') ): ?>
<?php while( have_rows('who_are') ): the_row(); 
// 
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$content = get_sub_field('content');
$image = get_sub_field('image');
?>
<section class="we-are" id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 px-5 black-bg col-sm-6 col-12">
				<div class="row h-100 align-items-center">
					<div class="col-lg-12 col-12">					
						<h2><?php echo $title?></h2>
						<h3><?php echo $sub_title?></h3>
						<?php echo $content?>
					</div>	
				</div>	
			</div>	
			<div class="col-lg-6 px-0 col-sm-6 col-12">
				<figure class="w-100 h-100"><img class="w-100" src="<?php echo $image?>" alt=""/></figure>
			</div>	
		</div>	
	</div>       
</section>
<?php endwhile;?>
<?php endif;?>	
<?php if( have_rows('we_collaborate') ): ?>
<?php while( have_rows('we_collaborate') ): the_row(); 
// 
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
?>
<section class="we-collaborate red-bg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 px-5 col-sm-12 col-12">
				<h2><?php echo $title?></h2>
				<h5 class="mt-3 mb-5"><?php echo $sub_title?></h5>
				<ul class="pl-0 text-center">
					<?php if( have_rows('images') ): ?>
					<?php while( have_rows('images') ): the_row(); 
					// 
					$image = get_sub_field('image');
					?>
					<li><img src="<?php echo $image?>" alt=""/></li>
					<?php endwhile;?>
					<?php endif;?>
				</ul>
			</div>
		</div>	
	</div>       
</section>
<?php endwhile;?>
<?php endif;?>
<?php if( have_rows('we_do') ): ?>
<?php while( have_rows('we_do') ): the_row(); 
// 
$title = get_sub_field('title');
$image = get_sub_field('image');
?>
<section class="we-do">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 px-0 col-sm-6 col-12">
				<figure class="w-100 h-100"><img class="w-100" src="<?php echo $image;?>" alt=""/></figure>
			</div>	
			<div class="col-lg-6 px-5 black-bg col-sm-6 col-12">
				<div class="row h-100 align-items-center">
					<div class="col-lg-12 col-12">					
						<h2><?php echo $title?></h2>
						<div class="row py-2">
							<?php if( have_rows('point') ): ?>
							<?php $pcounter = 1;?>
							<?php while( have_rows('point') ): the_row(); 
							$title = get_sub_field('title');
							$content = get_sub_field('content');
							?>
							<div class="col-lg-6 col-md-6 col-12">
								<h3><?php echo $title;?></h3>
								<p><?php echo $content;?></p>
							</div>
							<?php if($pcounter%2==0) { ?>
						</div>
						<div class="row py-2">
							<?php } ?>
							<?php $pcounter++;?>
							<?php endwhile;?>
							<?php endif;?>
						</div>
					</div>	
				</div>	
			</div>	
		</div>	
	</div>       
</section>
<?php endwhile;?>
<?php endif;?>
<?php if( have_rows('we_create') ): ?>
<?php while( have_rows('we_create') ): the_row(); 
// 
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
?>
<section class="we-create red-bg py-4" id="work">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 px-5 col-sm-12 col-12">
				<h2><?php echo $title?></h2>
				<h5 class="mt-3 mb-2"><?php echo $sub_title?></h5>
			</div>
		</div>	
	</div>       
</section>
<?php endwhile;?>
<?php endif;?>
<section class="slide">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12  px-0 col-md-12 col-12">
				<div class="owl-carousel owl-theme slider">
					<?php 
					$args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
					$the_query = new WP_Query( $args ); 
					?>
					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="item">
						<a href="<?php the_permalink();?>"><img src="<?php the_field('image');?>" alt=""/></a>
					</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
					<?php else:  ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>	
	</div>   
</section>
<?php if( have_rows('we_communicate') ): ?>
<?php while( have_rows('we_communicate') ): the_row(); 
// 
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$image = get_sub_field('image');
?>
<section class="we-communicate" id="contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 px-5 black-bg col-sm-6 col-12">
				<div class="row h-100 align-items-center">
					<div class="col-lg-12 col-12">					
						<h2><?php echo $title?></h2>
						<h5 class="mt-3 mb-4"><?php echo $sub_title?></h5>
						<?php echo do_shortcode('[contact-form-7 id="6ecaab2" title="Communicate Form"]')?>
					</div>	
				</div>	
			</div>	
			<div class="col-lg-6 px-0 col-sm-6 col-12">
				<figure class="w-100 h-100"><img class="w-100" src="<?php echo $image?>" alt=""/></figure>
			</div>	
		</div>	
	</div>       
</section>
<?php endwhile;?>
<?php endif;?>
<?php
get_footer();