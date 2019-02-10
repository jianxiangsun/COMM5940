<!-- Culture -->
<?php query_posts( 'showposts=5&post_type=culture');while(have_posts()) : the_post(); ?>
<h2 class="text-uppercase"><?php echo pods_field_display( 'culture',$post->ID,'post_title');?></h2>
<div class="img-fluid d-block mx-auto">
<?php echo pods_image( get_post_meta( $post->ID, 'image', true),'medium'); ?>	
</div>
<ul class="list-inline">
	<li><?php echo pods_field_display( 'culture',$post->ID,'period');?></li>
	<li><?php echo pods_field_display( 'culture',$post->ID,'location');?></li>
	<li><a href="<?php echo pods_field_display( 'culture',$post->ID,'link');?>">See details</a></li>
</ul>
<p style="text-align:left"><?php echo pods_field_display( 'culture',$post->ID,'post_content');?></p>
	<?php endwhile;wp_reset_query(); ?>