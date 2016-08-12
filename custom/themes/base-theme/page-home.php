<?php 

/* Template Name: Home */

get_header(); ?>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<ul class= "menu">

        <li> 
          <a href="#about">About me</a>
        </li> 
        <li>
          <a href="#work">Work </a>
         </li> 
        <li>
          <a href="#contact">Contact me</a> 
        </li>

      </ul>
    	
      <section class="banner">
      	
      	<header>
        	 <h1 class="name">Kanya Sabherwal</h1>
            <h2>Aspiring web developer. Passionate about creativity<h2>
        </header>
          
      </section>

	    
      <section id="about" class="about-section">
      
        <div>
          <h1 class="who"> Who am I?</h1>
        </div>

        <div>

          <img class="profile" src="http://i288.photobucket.com/albums/ll166/kanyasabherwal/a199083e-bc00-43b0-950a-d91828fd1385_zps6csqatra.jpg"/>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam placeat esse cumque at nesciunt, odio, sed, necessitatibus sunt porro eos quis molestiae nihil ullam! Amet dolorum odio unde, vel ratione optio, quos nemo adipisci molestias asperiores, porro id temporibus possimus. Id temporibus sint animi eum nemo non dignissimos explicabo amet, porro, magni quod sapiente voluptate, a rerum. Optio sequi quis quod eum, dolores eius repellendus necessitatibus possimus, sit eligendi minima nesciunt, qui, quisquam sed! Perferendis possimus facere mollitia assumenda consequuntur nam corporis amet nihil quaerat saepe ducimus labore, repudiandae libero, aliquid, magnam nulla, dolorum reprehenderit molestiae debitis laudantium alias natus. 
          </p>

        </div>

       </section>



	       
	   <section id="work" class="work-section">

        <div>
          <h1 class="what">
           What am I up to? 
          </h1>
        </div>

        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis reprehenderit ut earum, minima consequuntur voluptatibus dolores totam obcaecati voluptas laudantium tempora corrupti doloremque eos reiciendis unde maiores dignissimos praesentium voluptate tenetur perferendis quae labore dolore. Animi maxime expedita perferendis alias voluptatem porro consequatur vel soluta magni quasi, natus eius laudantium molestiae quae assumenda tempore itaque nostrum perspiciatis reiciendis omnis sit nisi! Dolorem iste reprehenderit repellat deserunt, architecto aliquid libero accusantium veniam ad aut sint omnis quos quisquam fugiat quidem nulla, similique. Sed qui modi quas veritatis quibusdam aliquam, et, dolorum provident itaque ab cum odit! Distinctio modi nemo a similique.
          </p>
        </div>

        </section>




	      <section id="contact" class="contact-section">
        
          <div>
            <h1 class="give">Give me a shout!</h1>
          </div>

          <div class="socials">
          	<i class="fa fa-instagram" aria-hidden="true">
          	<i class="fa fa-facebook-square" aria-hidden="true"></i>
          	<i class="fa fa-pinterest-square" aria-hidden="true"></i>
          	</i>
          	<i class="fa fa-envelope" aria-hidden="true"></i>
          	<i class="fa fa-phone-square" aria-hidden="true"></i>
          </div>

          <div>
            
            <?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ); ?>
          </div>

        </section>
      




<?php endwhile; endif; ?>

<?php get_footer(); ?>


