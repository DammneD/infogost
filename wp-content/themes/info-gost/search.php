<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package info-gost
 */

get_header();
?>
<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
                   <?php get_template_part('template-parts/sidemenu'); ?>                    
            </div>
            <div class="col-md-9">
	            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				<div id="primary" class="content-area search-content">
					<main id="main" class="site-main">
						<?php if ( have_posts() ) : ?>
							<header class="page-header">
								<h2>Поиск</h2>
								<h1 class="page-title">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( '%s', 'info-gost' ),  get_search_form() );
									?>

								</h1>
							</header><!-- .page-header -->
							
							<?php
							/* Start the Loop */
							while ( have_posts() ) :

								the_post();
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );
							endwhile;

								the_posts_navigation();
							else :
								
								get_template_part( 'template-parts/content', 'none' );
							endif;
						?>
					</main><!-- #main -->
					<div class="pager-nav"> 
                    <?php wp_pagenavi(); ?>
                	</div>
				</div><!-- #primary -->				
           	</div>
		</div>
	</div>
</section>
	

<?php
   get_template_part('template-parts/partners'); 
     get_template_part('template-parts/footer'); ?>