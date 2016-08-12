<?php get_header(); ?>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php // Get custom meta values 

	// HERO BANNER
	$banner     	= get_post_meta( $post->ID, '_banner_image', true );
	$bannerurl  	= wp_get_attachment_image_src( $banner,'banner', true );
	$heading    	= get_post_meta( $post->ID, '_banner_heading', true );
	$subheading 	= get_post_meta( $post->ID, '_banner_subheading', true );
	$ctatext 		= get_post_meta( $post->ID, '_banner_ctatext', true );
	$ctalink 		= get_post_meta( $post->ID, '_banner_ctalink', true );

	// ACTIONS
	$pockets      	= get_post_meta($post->ID,'_actions',true);

	// CTA
	$ctaimg     	= get_post_meta( $post->ID, '_cta_image', true );
	$ctaimgurl  	= wp_get_attachment_image_src( $ctaimg,'cta', true );
	$ctaname 		= get_post_meta($post->ID,'_cta_name',true);
	$ctatitle 		= get_post_meta($post->ID,'_cta_title',true);
	$ctanum 		= get_post_meta($post->ID,'_cta_number',true);
	$ctanumlink 	= get_post_meta($post->ID,'_cta_numlink',true);
	$ctabtn 		= get_post_meta($post->ID,'_cta_btext',true);
	$bctalink 		= get_post_meta($post->ID,'_cta_blink',true);
	
	// TESTIMONIAL
	$test_id 		= get_post_meta($post->ID,'_test_select',true);

?>

<header>
	<div class="outer-container">
		<div class="logo-holder">
			<img class="the-logo" src="<?php echo get_template_directory_uri(); ?>/dist/images/tfab_logo.png" alt="Tools and Financing for Aboriginal Business">
		</div>
	</div>
</header>

<section class="hero-banner" style="background-image: url(<?php echo $bannerurl[0];?>);">
	<div class="outer-container">
		<div class="hero-banner__text wow fadeIn">
			<h1><?php echo $heading; ?></h1>
			<a href="<?php echo $ctalink; ?>">
				<button class="header-cta">
					<?php echo $ctatext; ?>
				</button>
			</a>
		</div>
	</div>
</section>

<section class="intro-blurb">
	<div class="outer-container">
		<?php the_content(); ?>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>


