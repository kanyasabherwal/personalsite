<?php 

/* Template Name: Home */

get_header(); ?>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<nav></nav>

<section class="hero-banner">

	<div class="outer-container">
		<div class="hero-banner__text">
			<h1>Perform Better</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illo numquam recusandae beatae sunt officiis perspiciatis architecto alias necessitatibus, unde.</p>
		</div>
	</div>
	
</section>

<section class="identity">

	<div class="outer-container">
		<h2>Optimize systems, not willpower</h2>
		<p><em>What if you could trace how well you feel, focus and function back to your behaviour?</em><br/><br/>

		What if your brain and body were telling you everything you need to know about how to get the most from them, but you didn't know how to listen? If you could understand what your systems are telling you, what would happen if you started to give them more of what they really need?</p>
		
		<div class="columns-3-1__container">
			<div class="columns-3-1__single wow fadeInUp" data-wow-delay="0.2s">
				<h3>People are (organic) machines</h3>
				<p>You don't need to be an engineer or a nutritionist (like me) to know that your body is made up of a series of systems. But you might be surprised to know that your systems can be maintained to promote security (health), optimized to run more efficiently (productivity), and even upgraded to excel at specific goals (performance).</p>
			</div>
			<div class="columns-3-1__single wow fadeInUp" data-wow-delay="0.5s">
				<h3>Sherpa/Cheerleader</h3>
				<p>Move forward in your journey no matter where you're starting from with a supportive planner and partner. Larlkyn's experience training, coaching, and consulting for a diverse range of people ready to play a role in their personal performance shows itself in his structured, supportive approach. From goal definition through mapping, motivation, education, and measurement to aligned body, mind and goals.</p>
			</div>
			<div class="columns-3-1__single wow fadeInUp" data-wow-delay="0.8s">
				<h3>Guru/Fad filter</h3>
				<p>Wheatbelly? 4-Hour Work Week? Paleo? Bulletproof? Fast Diet? There are so many diet/health/productivity gurus and fads on bestseller lists we need to go on a fad diet diet. That said, many of them are research based and offer useful advice. Larlkyn combs through them and, combined with his engineering, physical health and nutrition training create a bespoke toolkit designed for your circumstances.</p>
			</div>
		</div>
	</div>

</section>

<section class="journey-how">

	<div class="outer-container">

		<h2>The Journey to Habit Change</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illo numquam recusandae beatae sunt officiis perspiciatis architecto alias necessitatibus, unde.</p>

		<div class="columns-3-1__container">
			<div class="columns-3-1__single wow fadeInLeft" data-wow-delay="0.1s">
				
			</div>
			<div class="columns-3-1__single wow fadeInUp" data-wow-delay="0.3s">
				
			</div>
			<div class="columns-3-1__single wow fadeInRight" data-wow-delay="0.2s">
				
			</div>
			<div class="columns-3-1__single wow fadeInLeft" data-wow-delay="0.1s">
				
			</div>
			<div class="columns-3-1__single wow fadeInUp" data-wow-delay="0.3s">
				
			</div>
			<div class="columns-3-1__single wow fadeInRight" data-wow-delay="0.2s">
				
			</div>
		</div>

	</div>
	
</section>

<section class="testimonials">
		<?php 

		$query = new WP_Query( array( 'post_type' => 'testimonial', 'order'   => 'ASC' ) );
		    
	    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

	    	<?php 
	    	    $testimonial    = get_post_meta( $post->ID, '_single_quotation', true );
	    	    $source     	= get_post_meta( $post->ID, '_single_source', true );
	    	?>

	    	<div>
	    		<div class="single-testimonial"><?php echo $testimonial; ?></div>
	    		<p class="testimonial-source">– <?php echo $source; ?></p>
	    	</div>
			
		    

		<?php endwhile; endif; ?>
</section>

<section class="packages">

	<div class="outer-container">
		
		<h2>Packages</h2>
		<p>Working with a coach on a regular basis has been shown to lead to successful lifestyle changes. Coaches provide accountability, consistency, and ongoing support so that you get long-term results.<br/><br/>All packages contain: 1-hour initial consult, Body Composition Assessment, ongoing nutrition support.</p>

		<div class="columns-3-1__container wow fadeInUp">
			
		<?php 

		$query = new WP_Query( array( 'post_type' => 'package', 'order'   => 'ASC' ) );
		    
	    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

	    	<?php 
	    	    $price     	= get_post_meta( $post->ID, '_details_price', true );
	    	    $blurb     	= get_post_meta( $post->ID, '_details_blurb', true );
	    	    $points     	= get_post_meta( $post->ID, '_details_points', true );
	    	    // print_r($points);
	    	?>

		    <div class="columns-3-1__single">
		    	<h3><?php the_title(); ?></h3>
		    	<p class="price">$<?php echo $price; ?> <span class="price--small">+ hst</span></p>
		    	<p class="package__description">
		    		<?php echo $blurb; ?>
		    	</p>
		    	<ul>
		    		<?php foreach ($points as $point) { ?>
		    			<li><?php echo $point; ?></li>
		    		<?php } ?>
		    	</ul>
		    	<button class="packages__read-more">More info</button>
		    </div>

		<?php endwhile; endif; ?>

			<div class="columns-3-1__single">
				<h3>Wellness Plus</h3>
				<p class="price">$640 <span class="price--small">+ hst</span></p>
				<p class="package__description">
					A 24-week program that upgrades your sleep, gets the right food and nutrients, and help you track your sleep. 
				</p>
				<ul>
					<li>6 x 30-minute follow-up sessions bi-weekly</li>
					<li>package point</li>
					<li>package point</li>
					<li>package point</li>
				</ul>
				<button class="packages__read-more">More info</button>
			</div>

			<div class="columns-3-1__single">
				<h3>Maintenance Nutrition</h3>
				<p class="price">$1440 <span class="price--small">+ hst</span></p>
				<p class="package__description">
					For individuals who are already on the right track, but want to optimize and further refine their nutritional strategies.
				</p>
				<ul>
					<li>12 x 45 minute Sessions per year, monthly sessions</li>
					<li>package point</li>
					<li>package point</li>
					<li>package point</li>
				</ul>
				<button class="packages__read-more">More info</button>
			</div>
		</div>

	</div>

</section>

<section class="get-started">
	
</section>

<footer>
	
</footer>

<?php endwhile; endif; ?>

<?php get_footer(); ?>


