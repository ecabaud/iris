<?php
/**
 * Created by PhpStorm.
 * User: cabaudenzo
 * Date: 21/11/2020
 * Time: 16:16
 */
_deprecated_file(
/* translators: %s: Template name. */
    sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
    '3.0.0',
    null,
    /* translators: %s: Template name. */
    sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
);

$left_items = wp_get_nav_menu_items( 'left-footer' );
$right_items = wp_get_nav_menu_items( 'right-footer' );
$mid_items = wp_get_nav_menu_items( 'mid-footer' );
$custom_logo = get_theme_mod('wpc_logo');

?>

<div id="footer" role="contentinfo">
    <div class="footer-logo-container">
        <div class="footer-logo" style="background-image: url(<?php echo $custom_logo ?>)"></div>
    </div>
    <div class="footer-left">
        <ul class="footer-menu">
            <?php
            foreach ( $left_items as $item ) {
                $class = "";
                foreach ($item->classes as $c){
                    if ($c) {
                        $class = $class." ".$c;

                    }
                }

                if ( $item->url === "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ) {
                    echo "<li class='menu-item current-link" . $class . "'><a href='" . $item->url . "'>" . $item->title . "</a></li>";

                } else if ($item->url === "" || $item->url === "#") {
                    echo "<li class='menu-item" . $class . "'>" . $item->title . "</li>";
                } else {
                    echo "<li class='menu-item" . $class . "'><a href='" . $item->url . "'>" . $item->title . "</a></li>";
                }
            }
            ?>
        </ul>
    </div>
    <div class="footer-middle">
        <ul class="footer-menu">
            <?php
            foreach ( $mid_items as $item ) {
                $class = "";
                foreach ($item->classes as $c){
                    if ($c) {
                        $class = $class." ".$c;

                    }
                }

                if ( $item->url === "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ) {
                    echo "<li class='menu-item current-link" . $class . "'><a href='" . $item->url . "'>" . $item->title . "</a></li>";

                } else if ($item->url === "" || $item->url === "#") {
                    echo "<li class='menu-item" . $class . "'>" . $item->title . "</li>";
                } else {
                    echo "<li class='menu-item" . $class . "'><a href='" . $item->url . "'>" . $item->title . "</a></li>";
                }
            }
            ?>
        </ul>
    </div>
    <div class="footer-right">
        <ul class="footer-menu">
            <?php
            foreach ( $right_items as $item ) {
                $class = "";
                foreach ($item->classes as $c){
                    if ($c) {
                        $class = $class." ".$c;

                    }
                }
                if ( $item->url === "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ) {
                    echo "<li class='menu-item current-link" . $class . "'><a href='" . $item->url . "'>" . $item->title . "</a></li>";

                } else if ($item->url === "" || $item->url === "#") {
                    echo "<li class='menu-item" . $class . "'>" . $item->title . "</li>";
                } else {
                    echo "<li class='menu-item" . $class . "'><a href='" . $item->url . "'>" . $item->title . "</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
