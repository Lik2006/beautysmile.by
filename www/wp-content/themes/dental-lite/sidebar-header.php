<?php theme_print_sidebar('header-widget-area'); ?>


    <div class="shapes">
        <div class="textblock object1082158071">
        <div class="object1082158071-text-container">
        <div class="object1082158071-text"><p style="text-align: right;"><span class="Apple-style-span" style="font-family: 'Open Sans'; color: rgb(60, 173, 211);"><span class="Apple-style-span" style="font-size: 14px; line-height: 16px;">На неотложеные нужды звоните прямо сейчас:<br /></span><span class="Apple-style-span" style="font-size: 24px; font-weight: bold; color: #1D5A8B; line-height: 100%;">
+1(234) 567-8901</span></span></p></div>
    </div>
    
</div><div class="textblock object2056405240">
        <div class="object2056405240-text-container">
        <div class="object2056405240-text"><p style="text-align: left;"><span style="font-weight: bold; line-height: 100%; font-family: 'Cuprum'; font-size: 46px; color: #1B517E;">ВЫСОКОЕ КАЧЕСТВО</span>
<span style="line-height: 110%; font-family: 'Cuprum'; font-size: 36px; color: #4CB4D6;"><br />стоматологической помощи</span></p>
<p><span style="line-height: 40%; font-family: 'Open Sans'; font-size: 14px; color: #999999;">Lorem ipsum dolor sit amet conse cte&nbsp;adipisicing elit, se eiusmod tempor.&nbsp;Ut enim ad minim veniam, quis nostrud&nbsp;exercitation ullamco laboris.</span></p>
<p style="padding-top: 20px;"><a href="#" class="button">Подробнее</a></p></div>
    </div>
    
</div>
            </div>

<?php if(theme_get_option('theme_header_show_headline')): ?>
	<?php $headline = theme_get_option('theme_'.(is_home()?'posts':'single').'_headline_tag'); ?>
	<<?php echo $headline; ?> class="headline">
    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
</<?php echo $headline; ?>>
<?php endif; ?>
<?php if(theme_get_option('theme_header_show_slogan')): ?>
	<?php $slogan = theme_get_option('theme_'.(is_home()?'posts':'single').'_slogan_tag'); ?>
	<<?php echo $slogan; ?> class="slogan"><?php bloginfo('description'); ?></<?php echo $slogan; ?>>
<?php endif; ?>





<?php if (theme_get_option('theme_use_default_menu')) { wp_nav_menu( array('theme_location' => 'primary-menu') );} else { ?><nav class="nav">
    <?php
	echo theme_get_menu(array(
			'source' => theme_get_option('theme_menu_source'),
			'depth' => theme_get_option('theme_menu_depth'),
			'menu' => 'primary-menu',
			'class' => 'hmenu'
		)
	);
	get_sidebar('nav'); 
?> 
    </nav><?php } ?>

                    
