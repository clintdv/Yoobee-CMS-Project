<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Chilli_&_Lime
 */

get_header();
?>
<section class="banner-error">
	<div class="container-fluid h-100">
		<div class="row justify-content-center align-items-center h-100">
			<div class="col-lg-12 text-center col-md-12 col-12">
				<h4><?php the_field('404_page_title','option');?></h4>
			</div>	
		</div>	
	</div>
</section>
<section class="not-found">
	<div class="container">
		<div class="row ">
			<div class="col-lg-12 text-center col-md-12 col-12">
				<?php the_field('404_page_content','option');?>
			</div>	
		</div>	
	</div>
</section>

<?php
get_footer();
