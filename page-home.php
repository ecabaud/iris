<?php
/**
 * The template for displaying home
 * Template Name: Home
 */
get_header();

?>
<div id="top-btn" class="cta" style="display: none;">
    <div class="img"></div>
</div>
<?php
echo "<div id='page-scroll' class='page-home'>";


$section1 = get_field('section1');
$section2 = get_field('section2');
$section3 = get_field('section3');
$section4 = get_field('section4');
$section5 = get_field('section5');
$section_footer = get_field('sectionFooter');
//section1
echo "<section class='section1'>";
echo "<div class='grey-background'></div>";
echo "<div class='title-block' data-aos-delay='300' data-aos='fade-in' data-aos-duration='1500' data-aos-anchor-placement='top-bottom'>";
echo "<h3>" . $section1['uptitle'] . "</h3>";
echo "<h1>" . $section1['title'] . "</h1>";
echo "</div>";
echo "<div class='image-header' style=\"background-image: url('" . $section1['image']['url'] . "')\"></div>";
echo "</section>";
//section2
echo "<section class='section2' style=\"background-image: url('" . $section2['background-image']['url'] . "')\">";
echo "<div class='text-block' data-aos='fade-in' data-aos-duration='1000'>";
echo "<h2>" . $section2['title'] . "</h2>";
echo "<p>" . $section2['text'] . "</p>";
echo "</div>";
echo "</section>";
//section3
//echo "<section class='section3'>";
//echo "<div class='image' style=\"background-image: url('" . $section3['image']['url'] . "')\"></div>";
//echo "<div class='text-block'>";
//echo "<h2>" . $section3['title'] . "</h2>";
//echo "<p>" . $section3['text'] . "</p>";
//echo "</div>";
//echo "</section>";
//section4
echo "<section class='section4'>";

echo "<div class='bottle-block-left'>";
echo "<h2 class='bottle-cuve' data-aos='fade-in' data-aos-duration='1000'>" . $section4['bottel1']['cuve'] . "</h2>";
echo "<p class='bottle-desc' data-aos='fade-in' data-aos-duration='1000'>" . $section4['bottel1']['description'] . "</p>";
echo "<div class='image' style=\"background-image: url('" . $section4['bottel1']['image']['url'] . "')\"></div>";
echo "<a class='cta' data-aos='fade-in' data-aos-duration='1000' href='" . $section4['bottel1']['cta']['url'] . "'>" . $section4['bottel1']['cta']['title'] . "</a>";

echo "</div>";

echo "<div class='bottle-block-right'>";
echo "<h2 class='bottle-cuve' data-aos='fade-in' data-aos-duration='1000'>" . $section4['bottel2']['cuve'] . "</h2>";
echo "<p class='bottle-desc' data-aos='fade-in' data-aos-duration='1000'>" . $section4['bottel2']['description'] . "</p>";
echo "<div class='image' style=\"background-image: url('" . $section4['bottel2']['image']['url'] . "')\"></div>";
echo "<a class='cta' data-aos='fade-in' data-aos-duration='1000' href='" . $section4['bottel2']['cta']['url'] . "'>" . $section4['bottel2']['cta']['title'] . "</a>";
echo "</div>";

echo "</section>";
//section5
echo "<section class='section5'>";
echo "<div class='photo1' data-aos='fade-up' data-aos-duration='1000' style=\"background-image: url('" . $section5['photo1']['url'] . "')\"></div>";
echo "<div class='photo2' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $section5['photo2']['url'] . "')\"></div>";
echo "<div class='photo3' data-aos='fade-up' data-aos-delay='600' data-aos-duration='1000' style=\"background-image: url('" . $section5['photo3']['url'] . "')\"></div>";
//echo "<div class='block-cta'>";
//echo "<a class='cta' href='" . $section5['cta']['url'] . "'>" . $section5['cta']['title'] . "</a>";
//echo "</div>";
echo "</section>";
//section_footer
echo "<section class='section-footer'>";
echo "<div class='block-contact' data-aos='fade-up' data-aos-duration='1000'>";
echo "<h2>" . $section_footer['title'] . "</h2>";
echo "<div class='block-mail' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section_footer['mail']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section_footer['mail']['email'] . "</p>";
echo "</div>";
echo "<div class='block-phone' data-aos='fade-up' data-aos-delay='600' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section_footer['phone']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section_footer['phone']['num'] . "</p>";
echo "</div>";
echo "<div class='block-address' data-aos='fade-up' data-aos-delay='900' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section_footer['address']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section_footer['address']['theaddress'] . "</p>";
echo "</div>";
echo "</div>";
get_footer();
echo "</section>";
echo "<div>";
?>
