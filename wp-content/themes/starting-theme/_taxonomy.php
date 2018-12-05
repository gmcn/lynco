<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-elements/title.php"));
include(locate_template("inc/page-projects/filter.php"));
include(locate_template("inc/page-projects/loop.php"));
?>





<?php
//get_sidebar();
get_footer();
