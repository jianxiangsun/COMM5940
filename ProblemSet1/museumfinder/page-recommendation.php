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
				<h1 class="section-heading text" style="font-size:60px; color:#fff;"><?php the_title(); ?></h1>
				<br>
				<h2 class="text-primary" style="font-style: italic; font-size:40px;">#The 10 popular museums in Hong Kong</h2>
			</div>
	</div>	
</div>
</div>
<style type="text/css">
	img {
		display: block;
		margin-left: auto;
		margin-right: auto;
		border-radius: 8px;
		border: 1px solid #ddd;	
		padding: 5px;
		width: 100%;
		height:auto;

}
	img:hover {
		box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
	}

	h3 {
		text-align:center;
		font-weight:bold;
		text-decoration:underline;
	}

</style>
</header>

<!-- Main Content -->	
<!------------------------------------------------>
<section class="bg-light" id="team">
	<div class="container">
		 <div class="col-lg-8 col-md-10 mx-auto">
			<div class="table-responsive">
				
				<?php
				$query = new AirpressQuery();
				$query->setConfig("Default");
				$query->table("museum");

				$events = new AirpressCollection($query);

				foreach($events as $e){
					echo"<h3>".$e["name"]."</h3><br>
					<a href='".$e["image_url"]."'><img src='".$e["image_url"]."'></a><br>
					
					<strong>Opening Hours</strong>：<ul>
					<li>Weekdays：".$e["week_day"]."</li>
					<li>Weekend：".$e["weekend"]."</li>
					<li>Closed：".$e["close"]."</li>
					</ul>
					<strong>Suggested Duration</strong>：".$e["suggested_duration"]."<br>
					<strong>Address</strong>：".$e["address"]."<br>
					<strong>Contact Number</strong>：".$e["contact_number"]."<br>
					<strong>Museum Website</strong>：<a href='".$e["website"]."'>Click Here</a><hr>
					";}
				?>	
				<br><br><div align="center"><a style="font-size:25px;" class="btn btn-secondary text-uppercase js-scroll-trigger" href="http://dev-jianxiang.pantheonsite.io/planning/" onclick="show_districts7();">Check on map</a></div>
				<br><br>
				
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>