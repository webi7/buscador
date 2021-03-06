{extends $layout}

{block content}

{if $posts}

	{if $type}

		<article>

				<header class="entry-header">

					<h1 class="entry-title">
						<span>{__ 'Resultado da busca'}</span>
					</h1>

				</header>

		</article>

		{include snippets/content-loop-dir-search.php posts => $posts}

		{willPaginate}
		<nav class="paginate-links">
			{paginateLinks true}
		</nav>
		{/willPaginate}

	{else}

		<article id="post-{$post->id}" class="{$post->htmlClasses}">

				<header class="entry-header">

					<h1 class="entry-title">
						<span>
						{if $archive->isDay}
							{__ 'Arquivo diário:'} <span>{$posts[0]->date|date:$site->dateFormat}</span>
						{elseif $archive->isMonth}
							{__ 'Arquivos mensais:'} <span>{$posts[0]->date|date:'F Y'}</span>
						{elseif $archive->isYear}
							{__ 'Arquivos anuais:'} <span>{$posts[0]->date|date:'Y'}</span>
						{else}
							{__ 'Arquivos do Blog'}
						{/if}
						</span>
					</h1>

				</header>

		</article><!-- /#post-{$post->id} -->


		{include snippets/content-nav.php location => 'nav-above'}

		{include snippets/content-loop.php posts => $posts}

		{include snippets/content-nav.php location => 'nav-below'}

	{/if}

	{ifset $themeOptions->advertising->showBox4}
	<div id="advertising-box-4" class="advertising-box">
	    {!$themeOptions->advertising->box4Content}
	</div>
	{/ifset}

{else}

	{include snippets/nothing-found.php}

{/if}

{/block}
