<?php
/**
 * The template for displaying Vins
 * Template Name: Vins
 */
?>
<div id="top-btn" class="cta" style="display: none;">
    <div class="img"></div>
</div>
<?php
echo "<div id='page-scroll' class='page-vins'>";

get_header();

$section1 = get_field('section1');
$section2 = get_field('section2');
$section3 = get_field('section3');
$section4 = get_field('section4');
$section5 = get_field('section5');
$section6 = get_field('sectionFooter');
//section1
echo "<section class='section1'>";
echo "<div class='grey-background'></div>";
echo "<div class='title-block' data-aos-delay='300' data-aos='fade-in' data-aos-duration='1500' data-aos-anchor-placement='bottom-bottom'>";
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
//echo "<section class='section3' style=\"background-image: url('" . $section3['background_image']['url'] . "')\">";
//echo "<h2>" . $section3['title'] . "</h2>";
//echo "<div class='text-block'>";
//echo "<div class='text-block-1'>";
//echo "<h3>" . $section3['bloque_de_texte_1']['title_1'] . "</h3>";
//echo "<p>" . $section3['bloque_de_texte_1']['text_1'] . "</p>";
//echo "</div>";
//echo "<div class='text-block-2'>";
//echo "<h3>" . $section3['bloque_de_texte_2']['title_2'] . "</h3>";
//echo "<p>" . $section3['bloque_de_texte_2']['text_2'] . "</p>";
//echo "</div>";
//echo "</div>";
//echo "</section>";
//section4
echo "<section class='section4' id='coup-de-foudre'>";
echo "<div class='image' style=\"background-image: url('" . $section4['image']['url'] . "')\"></div>";
echo "<div class='text-block'>";
echo "<p class='subtitle' data-aos='fade-in' data-aos-duration='1000'>" . $section4['subtitle'] . "</p>";
echo "<h2 data-aos='fade-in' data-aos-duration='1000'>" . $section4['title'] . "</h2>";
if ( $section4['year'] && $section4['cuve'] ) {
    echo "<div class='cuve-infos' data-aos='fade-in' data-aos-duration='1000'>";
    echo "<p class='year'>" . $section4['year'] . "</p>";
    echo "<p class='cuve'>" . $section4['cuve'] . "</p>";
    echo "</div>";
}
echo "<div class='infos'>";
echo "<div class='info-1' data-aos='fade-left' data-aos-duration='1000'>";
echo "<div class='picto' style=\"background-image: url('" . $section4['info_1']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section4['info_1']['text'] . "</p>";
echo "</div>";
echo "<div class='info-2' data-aos='fade-left' data-aos-duration='1000'>";
echo "<div class='picto' style=\"background-image: url('" . $section4['info_2']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section4['info_2']['text'] . "</p>";
echo "</div>";
echo "<div class='info-3' data-aos='fade-left' data-aos-duration='1000'>";
echo "<div class='picto' style=\"background-image: url('" . $section4['info_3']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section4['info_3']['text'] . "</p>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</section>";
//section5
echo "<section class='section5' id='terre-de-gamay'>";
echo "<div class='image' style=\"background-image: url('" . $section5['image']['url'] . "')\"></div>";
echo "<div class='text-block'>";
echo "<p class='subtitle'  data-aos='fade-in' data-aos-duration='1000'>" . $section5['subtitle'] . "</p>";
echo "<h2  data-aos='fade-in' data-aos-duration='1000'>" . $section5['title'] . "</h2>";
if ( $section5['year'] && $section5['cuve'] ) {
    echo "<div class='cuve-infos'  data-aos='fade-in' data-aos-duration='1000'>";
    echo "<p class='year'>" . $section5['year'] . "</p>";
    echo "<p class='cuve'>" . $section5['cuve'] . "</p>";
    echo "</div>";
}
echo "<div class='infos'>";
echo "<div class='info-1' data-aos='fade-right' data-aos-duration='1000'>";
echo "<div class='picto' style=\"background-image: url('" . $section5['info_1']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section5['info_1']['text'] . "</p>";
echo "</div>";
echo "<div class='info-2' data-aos='fade-right' data-aos-duration='1000'>";
echo "<div class='picto' style=\"background-image: url('" . $section5['info_2']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section5['info_2']['text'] . "</p>";
echo "</div>";
echo "<div class='info-3' data-aos='fade-right' data-aos-duration='1000'>";
echo "<div class='picto' style=\"background-image: url('" . $section5['info_3']['picto']['url'] . "')\"></div>";
echo "<p class='info'>" . $section5['info_3']['text'] . "</p>";
echo "</div>";
echo "</div>";
echo "</div>";
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
