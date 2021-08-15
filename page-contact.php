<?php
/**
 * The template for displaying contact
 * Template Name: Contact
 */
?>
<div id="top-btn" class="cta" style="display: none;">
    <div class="img"></div>
</div>
<?php
echo "<div id='page-scroll' class='page-contact'>";

get_header();

$section1 = get_field('section1');
$section2 = get_field('section2');
$section3 = get_field('section3');
$section4 = get_field('sectionFooter');
//section1
echo "<section class='section1'>";
echo "<div class='grey-background'></div>";
echo "<div class='title-block' data-aos-delay='300' data-aos='fade-in' data-aos-duration='1500' data-aos-anchor-placement='top-bottom'>";
echo "<h1>" . $section1['title'] . "</h1>";
echo "</div>";
echo "<div class='image-header' style=\"background-image: url('" . $section1['image']['url'] . "')\"></div>";
echo "</section>";
//section2
echo "<section class='section2'>";
echo "<div class='background-image' style=\"background-image: url('" . $section2['background-image']['url'] . "')\"></div>";
echo "<div class='form-block' data-aos='fade-in' data-aos-duration='1000'>";
echo "<h2>" . $section2['title'] . "</h2>";
echo "<p>" . $section2['form'] . "</p>";
echo "</div>";
echo "</section>";
//section3
echo "<section class='section3'>";
echo "<div class='acf-map' data-zoom='16' style='position: absolute;'>";
echo "	<div class='marker' data-lat='" . $section3['address']['lat'] . "' data-lng='" . $section3['address']['lng']  . "'></div>";
echo "</div>";
echo "<div class='text-block'>";
echo "<div class='text-container' data-aos='fade-in' data-aos-duration='1000'>";
echo "<h2>" . $section3['title'] . "</h2>";
echo "<p >" . $section3['address_label'] . "</p>";
echo "<a class='cta' href='" . $section3['cta']['url'] . "' >" . $section3['cta']['title'] . "</a>";
echo "</div>";
echo "</div>";
echo "</section>";
//section4
echo "<section class='section-footer'>";
echo "<div class='block-contact'>";
echo "<h2 data-aos='fade-up' data-aos-duration='1000'>" . $section4['title'] . "</h2>";
echo "<div class='block-mail' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section4['mail']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section4['mail']['email'] . "</p>";
echo "</div>";
echo "<div class='block-phone' data-aos='fade-up' data-aos-delay='600' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section4['phone']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section4['phone']['num'] . "</p>";
echo "</div>";
echo "<div class='block-address' data-aos='fade-up' data-aos-delay='900' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section4['address']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section4['address']['theaddress'] . "</p>";
echo "</div>";
echo "</div>";
get_footer();
echo "</section>";
echo "<div>";
?>
