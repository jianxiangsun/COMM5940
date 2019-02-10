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
<!-- Overview -->
<div class="overlay"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<div class="site-heading">
				<br>
				<h1 class="section-heading text" style="font-size:60px; color:#fff;">Museums Overview</h1>
				<br>
				<h2 class="text-primary" style="font-style: italic; font-size:40px;">#Free but Precious!</h2>
			</div>
		</div>
	</div>	
</div>
</header>

<!-- Main Content -->	
<section class="bg-light" id="services">
	<div class="container">
		<div class="col-lg-12 text-center">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/LPi29o_VDoM"
					frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>			</iframe>
			<br>
			<button type="button" style="font-size:25px; height:90px; width:240px;"
					class="btn btn-primary" id='mainland'>All Museums<br> in One Click</button>
			<img src="<?php bloginfo("template_url") ?>/img/play.png" alt="">

			<div id="versionchoice2" align="left" style="display:none">
				<iframe class="airtable-embed" src="https://airtable.com/embed/shrD50634pOxKn3ra?backgroundColor=purple&viewControls=on"
						frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;">			</iframe>
			</div>
		</div>
	</div>	
</section>
<?php get_footer(); ?>