<?php
/**
 * The template for displaying domaine
 * Template Name: Domaine
 */
get_header();

?>
<div id="top-btn" class="cta" style="display: none;">
    <div class="img"></div>
</div>

<?php
echo "<div id='page-scroll' class='page-domaine'>";

//test
$section1 = get_field('section1');
$section2 = get_field('section2');
$section3 = get_field('section3');
$section4 = get_field('section4');
$section5 = get_field('section5');
$section6 = get_field('sectionFooter');
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
echo "<div class='image' data-aos='fade-right' data-aos-duration='1000' style=\"background-image: url('" . $section2['image']['url'] . "')\"></div>";
echo "<div class='text-block' data-aos='fade-in' data-aos-duration='1000'>";
echo "<h2>" . $section2['title'] . "</h2>";
echo "<p>" . $section2['text'] . "</p>";
echo "</div>";
echo "</section>";
//section3
echo "<section class='section3'>";
echo "<h2 data-aos='fade-in' data-aos-duration='1000'>" . $section3['title'] . "</h2>";
echo "<div class='infos'>";
echo "<div class='block' data-aos='fade-up' data-aos-duration='1000'>";
echo "<p class='num'>" . $section3['info_1']['num'] . "</p>";
echo "<p class='info'>" . $section3['info_1']['info'] . "</p>";
echo "</div>";
echo "<div class='block' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>";
echo "<p class='num'>" . $section3['info_2']['num'] . "</p>";
echo "<p class='info'>" . $section3['info_2']['info'] . "</p>";
echo "</div>";
echo "<div class='block' data-aos='fade-up' data-aos-delay='600' data-aos-duration='1000'>";
echo "<p class='num'>" . $section3['info_3']['num'] . "</p>";
echo "<p class='info'>" . $section3['info_3']['info'] . "</p>";
echo "</div>";
echo "<div class='block' data-aos='fade-up' data-aos-delay='900' data-aos-duration='1000'>";
echo "<p class='num'>" . $section3['info_4']['num'] . "</p>";
echo "<p class='info'>" . $section3['info_4']['info'] . "</p>";
echo "</div>";
echo "</div>";
echo "</section>";
//section4
echo "<section class='section4' style=\"background-image: url('" . $section4['background-image']['url'] . "')\">";
echo "<div class='text-block' data-aos='fade-in' data-aos-duration='1000'>";
echo "<h2>" . $section4['title'] . "</h2>";
echo "<p>" . $section4['text'] . "</p>";
echo "</div>";
echo "</section>";
//section5
echo "<section class='section5'>";
echo "<div class='text-block' data-aos='fade-in' data-aos-duration='1000'>";
echo "<h2>" . $section5['title'] . "</h2>";
echo "<div class='text'>" . $section5['text'] . "</div>";
//echo "<a class='cta' href='" . $section5['cta']['url'] . "'>" . $section5['cta']['title'] . "</a>";
echo "</div>";
echo "<div class='image' data-aos='fade-left' data-aos-duration='1000' style=\"background-image: url('" . $section5['image']['url'] . "')\"></div>";
echo "</section>";
//section6
echo "<section class='section-footer'>";
echo "<div class='block-contact'>";
echo "<h2 data-aos='fade-up' data-aos-duration='1000'>" . $section6['title'] . "</h2>";
echo "<div class='block-mail' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section6['mail']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section6['mail']['email'] . "</p>";
echo "</div>";
echo "<div class='block-phone' data-aos='fade-up' data-aos-delay='600' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section6['phone']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section6['phone']['num'] . "</p>";
echo "</div>";
echo "<div class='block-address' data-aos='fade-up' data-aos-delay='900' data-aos-duration='1000'>";
echo "<div class='image' style=\"background-image: url('" . $section6['address']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section6['address']['theaddress'] . "</p>";
echo "</div>";
echo "</div>";
get_footer();
echo "</section>";
echo "<div>";
?>
