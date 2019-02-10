<?php get_header(); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
if ( has_post_thumbnail() ) {
	$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	echo '<header class="masthead" style="background-image:url('.$feat_image_url.');">';
}
endwhile;
endif;
?> 

<!-- Contact -->
<section id="contact">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="site-heading">
					<br>
					<h1 class="section-heading text" style="font-size:60px; color:#fff;">Contact Us</h1>
					<br>
					<h2 class="text-primary" style="font-style: italic; font-size:40px;">#We are pleased to hear from you</h2>
				</div>
			</div>
			<div class="col-lg-12">
				<form id="contactForm" name="sentMessage" novalidate="novalidate">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
</section>
</header>

<?php get_footer(); ?>