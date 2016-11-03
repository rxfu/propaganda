<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EasyMag
 */

get_header();?>

	<div class="container">
		<div class="row">

			<div class="col-lg-9 col-md-9">
				<div class="dt-category-wrap">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

							<?php if (have_posts()): ?>

								<header class="page-header">
									<?php
the_archive_title('<h1 class="page-title">', '</h1>');
the_archive_description('<div class="taxonomy-description">', '</div>');
?>
								</header><!-- .page-header -->

								<?php /* Start the Loop */?>

								<div class="dt-category-posts">
									<?php
$count = 1;
while (have_posts()): the_post();?>
										<div class="dt-news-post">
											<div class="dt-news-post-content">
						                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
												<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_title();?></a>
												<span class="pull-right">
													<time class="dt-news-post-date text-right"><i class="fa fa-calendar"></i> <?php the_time(get_option('date_format'));?></time>
												</span>
											</div><!-- .dt-news-post-content -->
										</div><!-- .dt-news-post -->

															<?php
	$count++;

endwhile;?>

									<?php wp_reset_postdata();?>
								</div><!-- .dt-category-posts -->

								<div class="clearfix"></div>

								<div class="dt-pagination-nav">
									<?php echo paginate_links(); ?>
								</div><!---- .jw-pagination-nav ---->

							<?php else: ?>
								<p><?php _e('Sorry, no posts matched your criteria.', 'easymag');?></p>
							<?php endif;?>

						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- .dt-category-wrap -->
			</div><!-- .col-lg-9-->

			<div class="col-lg-3 col-md-3">
				<?php get_sidebar();?>
			</div>

		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer();?>
