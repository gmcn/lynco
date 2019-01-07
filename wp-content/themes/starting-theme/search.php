<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php include(locate_template("inc/page-elements/title.php")); ?>

<div class="container-fluid search__results">

	<?php
	if ( have_posts() ) : ?>

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

		$content = get_the_content();
		?>

			<div class="row">
				<div class="col-md-12">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<p><?php echo wp_trim_words( $content, 40, '...' ); ?></p>
					<a class="more" href="<?php the_permalink(); ?>">Read More</a>

				</div>
			</div>

		<?php endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	</div>

<?php
//get_sidebar();
get_footer();
