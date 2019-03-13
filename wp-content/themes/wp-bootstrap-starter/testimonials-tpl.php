<?php
// Template Name: Testimonials Page
get_header();?>

<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main id="content" class="wrapper-header_title site-content">
	<div class="col-md-12">
			<h1 class="text-center col-md-12"><?php echo the_title();?></h1>
	</div>
</main>
<div class="site-content contain">
	<div class="container">
		<div class="row">
			<?php echo the_content();?>
		</div>
	</div>
</div>
<?php
endwhile;
else: 
endif; 
?>
<div class="content_page">
<!-- Loop de Testimoniales -->
<div class="site-content contain">
	<div class="container">	
		<div class="row">
<?php
$query = new WP_Query( array( 
	'post_type' => 'testimonials',
	'meta_query' => array(
                            array(
                            'key' => 'featured-checkbox',
                            'value' => 'no'
                    		)
                		)		
	)
);
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>

<div class="col-md-6 testimonial_element">
	<div class="img_box">
		<img class="img-responsive" src="<?php echo $featured_img_url;?>">
	</div>
	<div class="testimonial_text">
		<?php the_content();?>
		<span><?php echo the_title();?></span>
	</div>
</div>

<?php
endwhile;
else: 
endif; 
?>		</div>
	</div>
</div>
<!-- Loop de Testimoniales -->
<div class="site-content contain feutered_testimonials" style="background: url('<?php echo get_template_directory_uri()?>/img/bg_testimonials_feutured.png');">
	<div class="container">	
		<div class="row">
<?php
$query = new WP_Query( array( 
	'post_type' => 'testimonials',
	'meta_query' => array(
                            array(
                            'key' => 'featured-checkbox',
                            'value' => 'yes'
                    		)
                		)		
	)
);
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>

<div class="col-md-12 testimonial_element">
	<div class="img_box">
		<img class="img-responsive" src="<?php echo $featured_img_url;?>">
	</div>
	<div class="testimonial_text">
		<?php the_content();?>
		<span><?php echo the_title();?></span>
	</div>
</div>

<?php
endwhile;
else: 
endif; 
?>		</div>
	</div>
</div>
</div>
<?php get_footer();?>