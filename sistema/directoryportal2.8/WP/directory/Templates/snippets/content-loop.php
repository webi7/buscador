{if isset($sidebarType) && $sidebarType == 'home'}
	{if !is_active_sidebar('sidebar-home')}
		{var $fullwidth = true}
	{/if}
{elseif isset($sidebarType) && $sidebarType == 'item'}
	{if !is_active_sidebar('sidebar-item')}
		{var $fullwidth = true}
	{/if}
{else}
	{if !is_active_sidebar('sidebar-1')}
		{var $fullwidth = true}
	{/if}
{/if}

{foreach $posts as $post}
<article id="post-{$post->id}" class="{$post->htmlClasses}">

	<header class="entry-header">

		<h1 class="entry-title">
			<a href="{$post->permalink}" title="{__ 'Permalink to'} {$post->title}" rel="bookmark">{$post->title}</a>
		</h1>

	</header>

	{if $post->thumbnailSrc}
	<a href="{$post->permalink}">
		<div class="entry-thumbnail">
			{ifset $fullwidth}
			<img src="{timthumb src => $post->thumbnailSrc, w => 940, h => 250}" alt="">
			{else}
			<img src="{timthumb src => $post->thumbnailSrc, w => 629, h => 250}" alt="">
			{/ifset}
		</div>
	</a>
	{/if}

	<div class="entry-meta">
		<span class="sep blog-date">{__ 'On:'} </span>
		<a href="{dayLink $post->date}" title="{$post->date|date:$site->dateFormat}" rel="bookmark"><time class="entry-date" datetime="{$post->date|date:$site->dateFormat}" pubdate="">{$post->date|date:$site->dateFormat}</time></a>
		<span class="by-author">
			<span class="sep blog-author"> {__ 'By:'} </span>
			<span class="author vcard">
				<a class="url fn n" href="{$post->author->postsUrl}" title="{__ 'View all posts by %s'|printf: $post->author->name}" rel="author"> {$post->author->name}</a>
			</span>
		</span>

		{if ($post->type == 'post' && $post->categories)}
		<span class="cat-links">
			<span class="sep blog-categories entry-utility-prep entry-utility-prep-cat-links">{__ 'Posted in'}</span>
			{!$post->categories}
		</span>
		{/if}
		<div class="comments-link">
			<a href="{get_comments_link($post->id)}" title="{__ 'Comment on'} {$post->title}">{$post->commentsCount}</a>
		</div>
		<span class="edit-link">{editPostLink $post->id}</span>
	</div>

	<div class="entry-content">
		{!$post->content}
	</div>

</article><!-- /#post-{$post->id} -->
{/foreach}
