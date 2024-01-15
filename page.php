<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Chilli_&_Lime
 */

get_header();
?>
<section class="banner-error">
	<div class="container-fluid h-100">
		<div class="row justify-content-center align-items-center h-100">
			<div class="col-lg-12 text-center col-md-12 col-12">
				<h4><?php the_title();?></h4>
			</div>	
		</div>	
	</div>
</section>
<section class="not-found">
	<div class="container">
		<div class="row ">
			<div class="col-lg-12  col-md-12 col-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<?php endif; ?>
			</div>	
		</div>	
	</div>
</section>
<?php
get_footer();
