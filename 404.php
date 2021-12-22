<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 *
 * @package WordPress
 */

get_header(); ?>
<style>
    #menu-nav {
        background-color: white;
    }
</style>
<div class="page-404">
    <div class="left" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/404.png' ?>')"></div>
    <div class="right">
        <h1>PAGE 404</h1>
        <p>Oups, cette page est introuvable !</p>
        <a href="<?php echo get_home_url(); ?>" class="cta">Retourner à l'accueil</a>
    </div>
</div>

