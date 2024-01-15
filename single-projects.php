<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Chilli_&_Lime
 */

get_header();
?>
<section class="banner-new">
	<div class="container-fluid h-100">
		<div class="row justify-content-center align-items-center h-100">
			<div class="col-lg-12 p-0 text-center col-md-12 col-12">
				<img class="w-100" src="<?php the_field('banner_image');?>" alt="" />
			</div>	
		</div>	
	</div>
</section>
<section class="we-are inner" id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 px-5 red-bg col-md-6 col-12">
				<div class="row h-100">
					<div class="col-lg-12 col-12">					
						<h2><?php the_title();?></h2>
						<h3><?php the_field('what_we_do');?></h3>
					</div>	
				</div>	
			</div>	
			<div class="col-lg-6 bg-black col-md-6 col-12">
				<?php the_field('about_content');?>
			</div>	
		</div>	
	</div>
</section>
<section class="main-images">
	<div class="container-fluid">
		<div class="row">
			<?php if( have_rows('images') ): ?>
			<?php while( have_rows('images') ): the_row(); 
			$image = get_sub_field('image');
			?>
			<div class="col-lg-6 img p-0 col-md-6 col-12">
				<a href="#"><img class="w-100" src="<?php echo $image;?>" alt="" /></a>
			</div>
			<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>
<?php
get_footer();
