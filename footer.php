<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chilli_&_Lime
 */

?>
<section class="footer black-bg">
	<div class="container-fluid">
		<div class="row px-5">
			<div class="col-lg-12 col-sm-12 col-12">
				<a href="<?php echo home_url();?>"><img src="<?php the_field('footer_logo','option');?>" alt=""/></a>
			</div>	
		</div>	
		<div class="row py-5 px-5">
			<?php if( have_rows('contact_details','option') ): ?>
			<?php while( have_rows('contact_details','option') ): the_row(); 
			$location = get_sub_field('location');
			$title = get_sub_field('title');
			$phone = get_sub_field('phone');
			$email = get_sub_field('email');
			?>
			<div class="col-lg-4 col-sm-4 col-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-lg-12">
						<h6><?php echo $title;?></h6>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<p><?php echo $location;?></p>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<p><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a><br>
							<a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
					</div>
				</div>
			</div>	
			<?php endwhile;?>
			<?php endif;?>
			<div class="col-lg-4 col-sm-4 col-12">
				<?php $locations = get_nav_menu_locations(); //get all menu locations
				$menu = wp_get_nav_menu_object($locations['footer-menu']);?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-lg-12">
						<h6><?php echo $menu->name;?></h6>
					</div>
				</div>
				<div class="row">
					<?php
					wp_nav_menu( array(
						'container'=> false,
						'menu_class'=> false, 
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
						'menu_class'        => 'footer-menu',
					) );
					?>
				</div>
			</div>	
			<?php if( have_rows('social_media', 'option') ): ?>
			<?php while( have_rows('social_media', 'option') ): the_row(); ?>
			<div class="col-lg-4 col-sm-4 col-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-lg-12">
						<h6><?php the_sub_field('title'); ?></h6>
					</div>
				</div>
				<div class="row">
					<ul>
						<?php if( have_rows('cta', 'option') ): ?>
						<?php while( have_rows('cta', 'option') ): the_row(); ?>
						<li><a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a></li>
						<?php endwhile;?>
						<?php endif;?>
					</ul>
				</div>
			</div>
			<?php endwhile;?>
			<?php endif;?>
		</div>	
		<div class="row px-5">
			<div class="col-lg-12 border-top py-4 text-center col-md-12 col-12">
				<p><?php the_field('copyright_text','option');?></p>
			</div>
		</div>
	</div>       
</section>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
