<?php
/**
 * The template for displaying contact
 * Template Name: Photos
 */
get_header();

?>
<div id="top-btn" class="cta" style="display: none;">
    <div class="img"></div>
</div>
<?php
echo "<div id='page-scroll' class='page-photos'>";


$section1 = get_field('section1');
$row1 = get_field('row1');
$row2 = get_field('row2');
$row3 = get_field('row3');
$row4 = get_field('row4');
$row5 = get_field('row5');
$row6 = get_field('row6');
$row7 = get_field('row7');
$row8 = get_field('row8');
$row9 = get_field('row9');
$section_footer = get_field('sectionFooter');
//section1
echo "<section class='section1'>";
echo "<div class='grey-background'></div>";
echo "<div class='title-block' data-aos-delay='300' data-aos='fade-in' data-aos-duration='1500' data-aos-anchor-placement='top-bottom'>";
echo "<h1>" . $section1['title'] . "</h1>";
echo "</div>";
echo "<div class='image-header' style=\"background-image: url('" . $section1['image']['url'] . "')\"></div>";
echo "</section>";
//ROW1 1V 2H
if ($row1['image1']['url']) {
    echo "<section class='section2'>";
    if ($row1['image1']['title'] !== "" || $row1['image1']['description'] !== "" ) {
        echo "<div class='row1v2h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row1['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row1['image1']['title'] . "</p><p class='desc'>" . $row1['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row1['image1']['url'] . "')\"></div>";

    }
    if ($row1['image2']['title'] !== "" || $row1['image2']['description'] !== "" ) {
        echo "<div class='row1v2h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row1['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row1['image2']['title'] . "</p><p class='desc'>" . $row1['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row1['image2']['url'] . "')\"></div>";

    }
    if ($row1['image3']['title'] !== "" || $row1['image3']['description'] !== "" ) {
        echo "<div class='row1v2h-3' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row1['image3']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row1['image3']['title'] . "</p><p class='desc'>" . $row1['image3']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-3' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row1['image3']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//ROW2 3V
if ($row2['image1']['url']) {
    echo "<section class='section3'>";
    if ($row2['image1']['title'] !== "" || $row2['image1']['description'] !== "" ) {
        echo "<div class='row3v-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row2['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row2['image1']['title'] . "</p><p class='desc'>" . $row2['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row2['image1']['url'] . "')\"></div>";

    }
    if ($row2['image2']['title'] !== "" || $row2['image2']['description'] !== "" ) {
        echo "<div class='row3v-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row2['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row2['image2']['title'] . "</p><p class='desc'>" . $row2['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row2['image2']['url'] . "')\"></div>";

    }
    if ($row2['image3']['title'] !== "" || $row2['image3']['description'] !== "" ) {
        echo "<div class='row3v-3' data-aos='fade-in' data-aos-delay='600' data-aos-duration='1000' style=\"background-image: url('" . $row2['image3']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row2['image3']['title'] . "</p><p class='desc'>" . $row2['image3']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-3' data-aos='fade-in' data-aos-delay='600' data-aos-duration='1000' style=\"background-image: url('" . $row2['image3']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//ROW3 1V 1H
if ($row3['image1']['url']) {
    echo "<section class='section4'>";
    if ($row3['image1']['title'] !== "" || $row3['image1']['description'] !== "" ) {
        echo "<div class='row1v1h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row3['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row3['image1']['title'] . "</p><p class='desc'>" . $row3['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v1h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row3['image1']['url'] . "')\"></div>";

    }
    if ($row3['image2']['title'] !== "" || $row3['image2']['description'] !== "" ) {
        echo "<div class='row1v1h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row3['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row3['image2']['title'] . "</p><p class='desc'>" . $row3['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v1h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row3['image2']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//ROW1 1V 2H
if ($row4['image1']['url']) {
    echo "<section class='section5'>";
    if ($row4['image1']['title'] !== "" || $row4['image1']['description'] !== "" ) {
        echo "<div class='row1v2h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row4['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row4['image1']['title'] . "</p><p class='desc'>" . $row4['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row4['image1']['url'] . "')\"></div>";

    }
    if ($row4['image2']['title'] !== "" || $row4['image2']['description'] !== "" ) {
        echo "<div class='row1v2h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row4['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row4['image2']['title'] . "</p><p class='desc'>" . $row4['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row4['image2']['url'] . "')\"></div>";

    }
    if ($row4['image3']['title'] !== "" || $row4['image3']['description'] !== "" ) {
        echo "<div class='row1v2h-3' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row4['image3']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row4['image3']['title'] . "</p><p class='desc'>" . $row4['image3']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-3' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row4['image3']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//ROW2 3V
if ($row5['image1']['url']) {
    echo "<section class='section6'>";
    if ($row5['image1']['title'] !== "" || $row5['image1']['description'] !== "" ) {
        echo "<div class='row3v-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row5['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row5['image1']['title'] . "</p><p class='desc'>" . $row5['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row5['image1']['url'] . "')\"></div>";

    }
    if ($row5['image2']['title'] !== "" || $row5['image2']['description'] !== "" ) {
        echo "<div class='row3v-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row5['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row5['image2']['title'] . "</p><p class='desc'>" . $row5['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row5['image2']['url'] . "')\"></div>";

    }
    if ($row5['image3']['title'] !== "" || $row5['image3']['description'] !== "" ) {
        echo "<div class='row3v-3' data-aos='fade-in' data-aos-delay='600' data-aos-duration='1000' style=\"background-image: url('" . $row5['image3']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row5['image3']['title'] . "</p><p class='desc'>" . $row5['image3']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-3' data-aos='fade-in' data-aos-delay='600' data-aos-duration='1000' style=\"background-image: url('" . $row5['image3']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//ROW3 1V 1H
if ($row6['image1']['url']) {
    echo "<section class='section7'>";
    if ($row6['image1']['title'] !== "" || $row6['image1']['description'] !== "" ) {
        echo "<div class='row1v1h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row6['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row6['image1']['title'] . "</p><p class='desc'>" . $row6['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v1h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row6['image1']['url'] . "')\"></div>";

    }
    if ($row6['image2']['title'] !== "" || $row6['image2']['description'] !== "" ) {
        echo "<div class='row1v1h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row6['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row6['image2']['title'] . "</p><p class='desc'>" . $row6['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v1h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row6['image2']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//ROW1 1V 2H
if ($row7['image1']['url']) {
    echo "<section class='section8'>";
    if ($row7['image1']['title'] !== "" || $row7['image1']['description'] !== "" ) {
        echo "<div class='row1v2h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row7['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row7['image1']['title'] . "</p><p class='desc'>" . $row7['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row7['image1']['url'] . "')\"></div>";

    }
    if ($row7['image2']['title'] !== "" || $row7['image2']['description'] !== "" ) {
        echo "<div class='row1v2h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row7['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row7['image2']['title'] . "</p><p class='desc'>" . $row7['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row7['image2']['url'] . "')\"></div>";

    }
    if ($row7['image3']['title'] !== "" || $row7['image3']['description'] !== "" ) {
        echo "<div class='row1v2h-3' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row7['image3']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row7['image3']['title'] . "</p><p class='desc'>" . $row7['image3']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v2h-3' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row7['image3']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//ROW2 3V
if ($row8['image1']['url']) {
    echo "<section class='section9'>";
    if ($row8['image1']['title'] !== "" || $row8['image1']['description'] !== "" ) {
        echo "<div class='row3v-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row8['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row8['image1']['title'] . "</p><p class='desc'>" . $row8['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row8['image1']['url'] . "')\"></div>";

    }
    if ($row8['image2']['title'] !== "" || $row8['image2']['description'] !== "" ) {
        echo "<div class='row3v-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row8['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row8['image2']['title'] . "</p><p class='desc'>" . $row8['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row8['image2']['url'] . "')\"></div>";

    }
    if ($row8['image3']['title'] !== "" || $row8['image3']['description'] !== "" ) {
        echo "<div class='row3v-3' data-aos='fade-in' data-aos-delay='600' data-aos-duration='1000' style=\"background-image: url('" . $row8['image3']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row8['image3']['title'] . "</p><p class='desc'>" . $row8['image3']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row3v-3' data-aos='fade-in' data-aos-delay='600' data-aos-duration='1000' style=\"background-image: url('" . $row8['image3']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//ROW3 1V 1H
if ($row9['image1']['url']) {
    echo "<section class='section10'>";
    if ($row9['image1']['title'] !== "" || $row9['image1']['description'] !== "" ) {
        echo "<div class='row1v1h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row9['image1']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row9['image1']['title'] . "</p><p class='desc'>" . $row9['image1']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v1h-1' data-aos='fade-in' data-aos-duration='1000' style=\"background-image: url('" . $row9['image1']['url'] . "')\"></div>";

    }
    if ($row9['image2']['title'] !== "" || $row9['image2']['description'] !== "" ) {
        echo "<div class='row1v1h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row9['image2']['url'] . "')\"><div class='img-info'><div class='text-block'><p class='title'>" . $row9['image2']['title'] . "</p><p class='desc'>" . $row9['image2']['description'] . "</p></div></div></div>";
    } else {
        echo "<div class='row1v1h-2' data-aos='fade-in' data-aos-delay='300' data-aos-duration='1000' style=\"background-image: url('" . $row9['image2']['url'] . "')\"></div>";

    }
    echo "</section>";
}
//section_footer
echo "<section class='section-footer'>";
echo "<div class='block-contact' >";
echo "<h2 data-aos='fade-up' data-aos-duration='1000'>" . $section_footer['title'] . "</h2>";
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
