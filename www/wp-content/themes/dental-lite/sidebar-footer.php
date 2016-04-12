<?php
global $theme_sidebars;
$places = array();
foreach ($theme_sidebars as $sidebar){
    if ($sidebar['group'] !== 'footer')
        continue;
    $widgets = theme_get_dynamic_sidebar_data($sidebar['id']);
    if (!is_array($widgets) || count($widgets) < 1)
        continue;
    $places[$sidebar['id']] = $widgets;
}
$place_count = count($places);
$needLayout = ($place_count > 1);
if (theme_get_option('theme_override_default_footer_content')) {
    if ($place_count > 0) {
        $centred_begin = '<div class="center-wrapper"><div class="center-inner">';
        $centred_end = '</div></div><div class="clearfix"> </div>';
        if ($needLayout) { ?>
<div class="content-layout">
    <div class="content-layout-row">
        <?php 
        }
        foreach ($places as $widgets) { 
            if ($needLayout) { ?>
            <div class="layout-cell layout-cell-size<?php echo $place_count; ?>">
            <?php 
            }
            $centred = false;
            foreach ($widgets as $widget) {
                 $is_simple = ('simple' == $widget['style']);
                 if ($is_simple) {
                     $widget['class'] = implode(' ', array_merge(explode(' ', theme_get_array_value($widget, 'class', '')), array('footer-text')));
                 }
                 if (false === $centred && $is_simple) {
                     $centred = true;
                     echo $centred_begin;
                 }
                 if (true === $centred && !$is_simple) {
                     $centred = false;
                     echo $centred_end;
                 }
                 theme_print_widget($widget);
            } 
            if (true === $centred) {
                echo $centred_end;
            }
            if ($needLayout) {
           ?>
            </div>
        <?php 
            }
        } 
        if ($needLayout) { ?>
    </div>
</div>
        <?php 
        }
    }
?>
<div class="footer-text">
<?php
global $theme_default_options;
echo do_shortcode(theme_get_option('theme_override_default_footer_content') ? theme_get_option('theme_footer_content') : theme_get_array_value($theme_default_options, 'theme_footer_content'));
} else { 
?>
<div class="footer-text">
<?php theme_ob_start() ?>
  
<div class="content-layout layout-item-0">
    <div class="content-layout-row">
    <div class="layout-cell layout-item-1" style="width: 33%"><?php if (false === theme_print_sidebar('footer-1-widget-area')) { ?>
        <h1 style="text-align: left;">About Us</h1>
        <p style="text-align: left;"><span style="font-weight: bold;">Quis suscipit turpis pharetra Ut hendrerit faucibus.</span></p>
        <p style="padding-top: 15px; text-align: left;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames acu turpis egestas. Aenean auctor libero sed ant imperdiet erat faucibus.</p>
        <p style="padding-top: 15px; text-align: left;"><a href="#">Read More</a></p>
    <?php } ?></div><div class="layout-cell layout-item-1" style="width: 34%"><?php if (false === theme_print_sidebar('footer-2-widget-area')) { ?>
        <h1 style="text-align: left;">Latest News</h1>
        <h3 style="text-align: left; padding-bottom: 15px;">July 14, 2013</h3>
        <p style="text-align: left;"><span style="font-weight: bold;">Est eligendi optio.</span><br />Co niimpedituo minus. At vero eomonium etusamust digne imos.
         Aenean justoruimu lectus, dapibus.</p><p style="text-align: left;"><a href="#">more...</a></p>
        <p style="text-align: left; padding-top: 15px;"><a href="#">all news archive</a></p>
    <?php } ?></div><div class="layout-cell layout-item-2" style="width: 33%"><?php if (false === theme_print_sidebar('footer-3-widget-area')) { ?>
        <h1 style="text-align: left;">Contact Info</h1>
        <p style="text-align: left;">New York WA 02020<br />
         11 Some Street Second Floor<br />
         Freephone: +1 800 559 6580<br />
         Fax: +1 800 559 6580<br /></p>
        <p style="text-align: left; padding-top: 10px;"><a href="#">info@namecompany.com</a><br /><br /></p>
        <p style="text-align: left;">Name Company © 2013 Copyright<br /><a href="#">PRIVACY POLICY</a><br /></p>
    <?php } ?></div>
    </div>
</div>


<?php echo do_shortcode(theme_ob_get_clean()) ?>
<?php } ?>

</div>
