<?php
/**
 * Created by PhpStorm.
 * User: cabaudenzo
 * Date: 04/07/2020
 * Time: 13:13
 */
?>

<div class="full-body">
    <div class="logo animate__animated animate__fadeIn col-md-6">
        <?php
        $custom_logo = get_theme_mod('wpc_logo');
        ?>
        <img src="<?php echo $custom_logo ?>" alt="site logo">
    </div>
    <div class="form col-md-6">
        <?php echo do_shortcode('[contact-form-7 id="12" title="Patience..."]'); ?>
    </div>
</div>