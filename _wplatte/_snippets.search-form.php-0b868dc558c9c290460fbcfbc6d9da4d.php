<?php //netteCache[01]000475a:2:{s:4:"time";s:21:"0.47496500 1375197905";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:86:"C:\wamp\www\buscador\wp-content\themes\WP\directory\Templates\snippets\search-form.php";i:2;i:1375197844;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: C:\wamp\www\buscador\wp-content\themes\WP\directory\Templates\snippets\search-form.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'tds5riog4t')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<form method="get" id="searchform" action="<?php echo htmlSpecialChars($homeUrl) ?>">
	<label for="s" class="assistive-text"><?php echo NTemplateHelpers::escapeHtml(_x('Search', 'assistive-text', 'ait'), ENT_NOQUOTES) ?></label>
	<input type="text" class="field" name="s" id="s" placeholder="<?php echo htmlSpecialChars(_x('Search', 'search field placeholder', 'ait')) ?>" />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php echo htmlSpecialChars(_x('Search', 'search button text', 'ait')) ?>" />
</form>
