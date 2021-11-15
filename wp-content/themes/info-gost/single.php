<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package info-gost
 */

get_header();
?>
<section class="comments-page">
	

<div class="container">
	<div class="row">
	    <div class="col-md-3">
	        <?php get_template_part('template-parts/sidemenu'); ?>
	    </div>  
	    <div class="col-md-9"> 
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
		</div>
	</div>
</div>
</section>
<?php
// get_sidebar();
 get_template_part('template-parts/partners');
 get_template_part('template-parts/footer'); ?>