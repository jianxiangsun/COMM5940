<?php get_header(); ?>
<!-- Page Header -->
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
if ( has_post_thumbnail() ) {
	$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	echo '<header class="masthead" style="background-image:url('.$feat_image_url.');">';
}
endwhile;
endif;
?> 

<!-- Exhibition -->
<div class="overlay"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<div class="site-heading">
				<br>
				<h1 class="section-heading text-uppercase" style="font-size:60px; color:#fff;">Recent Exhibition</h1>
				<br>
				<h2 class="text-primary" style="font-style: italic; font-size:40px;">#Take a look of what is happening</h2>
			</div>
		</div>
	</div>
</div>
</header>
<section class="bg-light" id="portfolio" style="background-color: #fff;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="<?php bloginfo("template_url") ?>/img/portfolio/art.png" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Art</h4>
					<p class="text-muted">Taste the Beauty</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="<?php bloginfo("template_url") ?>/img/portfolio/history.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>History</h4>
					<p class="text-muted">Remember and Explore</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="<?php bloginfo("template_url") ?>/img/portfolio/science.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Science</h4>
					<p class="text-muted">Touch the Future</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="<?php bloginfo("template_url") ?>/img/portfolio/figure.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>People</h4>
					<p class="text-muted">Their Stories</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="<?php bloginfo("template_url") ?>/img/portfolio/culture.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Culture</h4>
					<p class="text-muted">Undersand Hong Kong</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="<?php bloginfo("template_url") ?>/img/portfolio/event.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Events</h4>
					<p class="text-muted">Join us and Have Fun</p>
				</div>
			</div>
		</div>
	</div>
</section>









<!-- Portfolio Modals -->

<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>			
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<?php get_template_part('archive-arts'); ?>	
								<button class="btn btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!-- Modal 2 -->
	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<?php get_template_part('archive-histories'); ?>	
								<button class="btn btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 3 -->
	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto">
							<div class="modal-body">
							<?php get_template_part('archive-sciences'); ?>	
								<button class="btn btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 4 -->
	<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto">
							<div class="modal-body">
							<?php get_template_part('archive-people'); ?>	
								<button class="btn btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal 5 -->
	<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto">
							<div class="modal-body">
							<?php get_template_part('archive-culture'); ?>	
								<button class="btn btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 6 -->
	<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto">
							<div class="modal-body">
							<?php get_template_part('archive-events'); ?>	
								<button class="btn btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>