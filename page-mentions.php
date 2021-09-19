<?php
/**
 * The template for displaying mentions
 * Template Name: Mentions Légales
 */
get_header();

?>
<div id="top-btn" class="cta" style="display: none;">
    <div class="img"></div>
</div>
<?php
echo "<div id='page-scroll' class='page-mentions'>";


$section2 = get_field('section1');
$section3 = get_field('section2');
$section4 = get_field('section3');

//section1
echo "<section class='section1'>";
echo "<h1>" . get_the_title() . "</h1>";
echo "</section>";
//section2
echo "<section class='section2'>";
echo "<div>";
echo "<h2>" . $section2['title'] . "</h2>";
echo "<p>" . $section2['txt'] . "</p>";
echo "</div>";
echo "</section>";
//section3
echo "<section class='section3'>";
echo "<div>";
echo "<h2>" . $section3['title'] . "</h2>";
echo "<p>" . $section3['txt'] . "</p>";
echo "</div>";
echo "</section>";
//section4
echo "<section class='section4'>";
echo "<div>";
echo "<h2>" . $section4['title'] . "</h2>";
echo "<p>" . $section4['txt'] . "</p>";
echo "</div>";
echo "</section>";
//sectionfooter
echo "<section class='section-footer'>";
get_footer();
echo "</section>";
echo "<div>";
?>
