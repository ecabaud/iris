<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();

echo the_title();

$sections[] = get_field('section1');
$sections[] = get_field('section2');
$sections[] = get_field('section3');
foreach ( $sections as $section ){
    echo '<section style="height: 100vh;">';
    echo $section['text'];
    echo '</section>';
}
get_footer();
