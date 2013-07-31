<?php //netteCache[01]000461a:2:{s:4:"time";s:21:"0.50590300 1375197999";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:72:"C:\wamp\www\buscador\wp-content\themes\WP\directory\Templates\search.php";i:2;i:1375197844;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: C:\wamp\www\buscador\wp-content\themes\WP\directory\Templates\search.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'd4br1t68q4')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb91c70a0b62_content')) { function _lb91c70a0b62_content($_l, $_args) { extract($_args)
?>

<?php if ($posts): ?>
	
	<header class="entry-header">
		<h1 class="entry-title"><span><?php echo NTemplateHelpers::escapeHtml(__('Resultados de pesquisa para:', 'ait'), ENT_NOQUOTES) ?>
 <?php echo NTemplateHelpers::escapeHtml($site->searchQuery, ENT_NOQUOTES) ?></span></h1>
	</header>

<?php if ($type): ?>
		
<?php NCoreMacros::includeTemplate("snippets/content-loop-dir-search.php", array('posts' => $posts) + $template->getParams(), $_l->templates['d4br1t68q4'])->render() ?>

<?php else: ?>

<?php NCoreMacros::includeTemplate("snippets/content-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['d4br1t68q4'])->render() ?>

<?php endif ?>

<?php if($GLOBALS["wp_query"]->max_num_pages > 1): ?>
	<nav class="paginate-links">
		<?php echo WpLatteFunctions::paginateLinks(true) ?>

	</nav>
<?php endif ?>

<?php if (isset($themeOptions->advertising->showBox4)): ?>
	<div id="advertising-box-4" class="advertising-box">
	    <?php echo $themeOptions->advertising->box4Content ?>

	</div>
<?php endif ?>

<?php else: ?>

<?php NCoreMacros::includeTemplate("snippets/nothing-found.php", $template->getParams(), $_l->templates['d4br1t68q4'])->render() ?>

<?php endif ?>

<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = true; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
$_l->extends = $layout ?>

<?php 
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
