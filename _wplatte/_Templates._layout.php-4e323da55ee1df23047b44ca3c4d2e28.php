<?php //netteCache[01]000462a:2:{s:4:"time";s:21:"0.09760200 1375197901";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:73:"C:\wamp\www\buscador\wp-content\themes\WP\directory\Templates\@layout.php";i:2;i:1375197844;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: C:\wamp\www\buscador\wp-content\themes\WP\directory\Templates\@layout.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'zsgwf1jmy7')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
get_header("") ?>

<?php if (isset($sidebarType) && $sidebarType == 'home'): if (!is_active_sidebar('sidebar-home')): $fullwidth = true ;endif ;elseif (isset($sidebarType) && $sidebarType == 'item'): if (!is_active_sidebar('sidebar-item')): $fullwidth = true ;endif ;else: if (!is_active_sidebar('sidebar-1')): $fullwidth = true ;endif ;endif ?>

<div id="main" class="defaultContentWidth<?php if (isset($fullwidth)): ?> onecolumn<?php endif ?>">
	<div id="wrapper-row">
		<div id="primary" class="">

			<div id="content" role="main">
<?php if (isset($themeOptions->advertising->showBox2)): ?>
	            <div id="advertising-box-2" class="advertising-box">
	                <?php echo $themeOptions->advertising->box2Content ?>

	            </div>
<?php endif ?>
				
<?php if (isset($fullwidth)): NUIMacros::callBlock($_l, 'content', array('fullwidth' => true) + $template->getParams()) ;else: NUIMacros::callBlock($_l, 'content', $template->getParams()) ;endif ?>
			</div><!-- /#content -->

		</div><!-- /#primary -->

<?php if (isset($fullwidth)): else: ?>

<?php if (isset($sidebarType) && $sidebarType == 'home'): if(is_active_sidebar("sidebar-home")): ?>
				<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar('sidebar-home') ?>
				</div>
<?php endif; elseif (isset($sidebarType) && $sidebarType == 'item'): if(is_active_sidebar("sidebar-item")): ?>
				<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar('sidebar-item') ?>
				</div>
<?php endif; else: if(is_active_sidebar("sidebar-1")): ?>
				<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar('sidebar-1') ?>
				</div>
<?php endif; endif ?>

<?php endif ?>
	</div>

</div> <!-- /#main -->

<?php get_footer("") ;
