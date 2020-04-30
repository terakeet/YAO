<?php
/**
 * Template Name: News Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<div class="content-wrap">

			<?php if( have_rows('news_links') ): ?>

			<div class="news-articles">

				<?php while( have_rows('news_links') ): the_row();

				// vars
				$headline = get_sub_field('article_headline');
				$excerpt = get_sub_field('article_excerpt');
				$date = get_sub_field('article_date');
				$url = get_sub_field('article_url');
				$source = get_sub_field('article_source_name');

				?>

				<div class="news-articles__article">

					<?php if( $headline ): ?>
					<h2><?php if( $url ): ?><a href="<?php echo $url; ?>" target="_blank" rel="noreferrer noopener"><?php endif; ?><?php echo $headline; ?><?php if( $url ): ?></a><?php endif; ?></h2>
					<?php endif; ?>

					<?php if( $date || $source ) : ?>
				  <p class="news-articles__date"><?php if( $date ){ echo $date; } if( $source ){ echo ' - '.$source; } ?></p>
					<?php endif; ?>

					<?php if( $excerpt ): ?>
				  <p class="news-articles__excerpt"><?php echo $excerpt; ?></p>
					<?php endif; ?>

					<?php if( $url ): ?>
					<a class="button" href="<?php echo $url; ?>" target="_blank" rel="noreferrer noopener">Read Article</a>
					<?php endif; ?>

				</div>

				<?php endwhile; ?>

			</div>

			<?php endif; ?>

		</div>



		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
