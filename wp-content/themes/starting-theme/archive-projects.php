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
include(locate_template("inc/page-projects/filter.php"));
include(locate_template("inc/page-projects/loop.php"));

?>

<?php
//get_sidebar();
get_footer();
