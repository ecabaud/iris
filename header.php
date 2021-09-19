<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php wp_head(); ?>s
</head>

<body <?php body_class(); ?>>
<?php
$items = wp_get_nav_menu_items( 'header' );
$custom_logo = get_theme_mod('wpc_logo');
wp_body_open();
?>
<div id="page" class="site">
    <?php
    if ( isMobile() ) { ?>
        <div id="mobile-nav">
            <a href='<?php echo home_url() ?>'><div id="menu-logo" style="background-image: url(<?php echo $custom_logo ?>)"></div></a>
            <img id="menu-burger" src="<?php echo get_template_directory_uri() . '/assets/img/square.svg' ?>">
        </div>
    <?php }
    ?>
    <div id="menu-nav">
        <?php
        if ( isMobile() ) { ?>
            <div id="close-menu">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/close.svg' ?>">
            </div>
            <?php }
        ?>
        <ul class="menu-list">
        <?php
        if ( isMobile() ) {
            if ( is_front_page() ) {
                echo "<li class='menu-item current-link'><a href='" . home_url() . "'>Accueil</a></li>";
            } else {
                echo "<li class='menu-item'><a href='" . home_url() . "'>Accueil</a></li>";
            }
        }
        $asLogo = false;
        $i = 0;
        foreach ( $items as $item ) {
            if ( $asLogo === false && $i >= count($items)/2 && !isMobile() ) {
                echo "<li class='menu-item logo'><a href='" . home_url() . "'><div style=\"background-image: url('" . $custom_logo . "')\"></div></a></li>";
                $asLogo = true;
            }
            if ( $item->url === "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ) {
                echo "<li class='menu-item current-link'><a href='" . $item->url . "'>" . $item->title . "</a></li>";

            } else {
                echo "<li class='menu-item'><a href='" . $item->url . "'>" . $item->title . "</a></li>";
            }
            $i++;
        }
        ?>
        </ul>
    </div>
    <div id="content" class="site-content">
