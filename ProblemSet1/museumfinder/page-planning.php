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

<!-- Planning -->
<div class="overlay"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<div class="site-heading">
				<br>
				<h1 class="section-heading text" style="font-size:60px; color:#fff;">Plan Your Trip</h1>
				<br>
				<h2 class="text-primary" style="font-style: italic; font-size:40px;">#Find the museums nearby you</h2>
			</div>
		</div>
	</div>	
</div>
</header>

<!-- Main Content -->
<section id="about">
	<div class="container">
		<div id="button" align="center">
			<button type="button" style="font-size:20px; height:50px; width:100;"
					class="btn btn-primary btn-lg" onclick="show_districts1();">Hong Kong Island</button>
			<button type="button" style="font-size:20px; height:50px; width:100;"
					class="btn btn-danger btn-lg" onclick="show_districts2();">Kowloon</button>
			<button type="button" style="font-size:20px; height:50px; width:100;background: #0071d8;"
					class="btn btn-success btn-lg" onclick="show_districts3();">New Territories</button>
		</div><br>
		<div id="button2" align="center">
			<button type="button" style="font-size:20px; height:50px; width:100; background:url(<?php bloginfo("template_url") ?>/img/gallery.jpg);"
					class="btn btn-lg" onclick="show_districts4();">Galleries</button>
			<button type="button" style="font-size:20px; height:50px; width:100; background:url(<?php bloginfo("template_url") ?>/img/speciality.jpg);"
					class="btn btn-warning btn-lg" onclick="show_districts5();">General Museums</button>
			<button type="button" style="font-size:20px; height:50px; width:100; background:url(<?php bloginfo("template_url") ?>/img/general.jpg);"
					class="btn btn-warning btn-lg" onclick="show_districts6();">Speciality Museums</button>
		</div><br>
		<div id="map" style="width: 650px; height: 480px; border: 1px solid #AAA; margin-left: auto; margin-right: auto;"></div><br>
	</div>
</section>
<?php get_footer(); ?>