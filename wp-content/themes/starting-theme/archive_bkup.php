<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

include(locate_template("inc/page-elements/title.php"));

?>

<?php

// the query

$args = array( 'post_type' => 'post', 'cat' => get_query_var('cat')  );
$the_query = new WP_Query( $args );

 ?>

<?php if ( $the_query->have_posts() ) : ?>

	<div class="container-fluid">
		<div class="row">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-md-6">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>

<?php else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php
//get_sidebar();
get_footer();
