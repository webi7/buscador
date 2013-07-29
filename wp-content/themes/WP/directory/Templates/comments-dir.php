{if $post->hasOpenComments}
{ifset $themeOptions->advertising->showBox3}
<div id="advertising-box-3" class="advertising-box">
    {!$themeOptions->advertising->box3Content}
</div>
{/ifset}
{/if}

{if isset($closeable) && ($post->hasOpenComments)}
<div class="closeable">
	<div class="open-button item {if $defaultState == 'opened'}comments-opened{else}comments-closed{/if}">
		{if $defaultState == 'opened'}
			{__ "Fechar comentários"}
		{else}
			{__ "Mostrar comentários"}
		{/if}
	</div>
{/if}

<div id="comments">
{if !$post->isPasswordRequired}

{if $post->comments}

	<h2 id="comments-title">
		{_n 'Comment', 'Comments', $post->commentsCount} ({$post->commentsCount})
	</h2>

	{include snippets/comments-pagination.php, location => 'above'}

	{listComments comments => $post->comments}
		{if $comment->type == 'pingback' or $comment->type == 'trackback'}
		<li class="post pingback">
			<p>
			{__ 'Pingback'}
			{!$comment->author->link}
			{editCommentLink $comment->id}
			</p>
		{else}

		<li class="{$comment->classes}">

			<article id="comment-{$comment->id}" class="comment">

				<div class="left controls clearfix">
					<div class="comment-avatar">{!$comment->author->avatar}</div>
				</div>

				<div class="body clearfix">
					<div class="arrow left"><!--  --></div>
					<div class="content ">
						<div>
							<span class="author vcard"><cite class="fn">{!$comment->author->nameWithLink}</cite></span><span class="eh">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span class="date"><a href="{$comment->url}" class="comment-date"><time pubdate datetime="{$comment->date|date:'c'}">{$comment->date|date:$site->dateFormat} {_x 'at', 'comment publish time'} {$comment->date|date:$site->timeFormat}</time></a></span>

							<div class="reply">
								{capture $replyTitle} {!__ 'Responder <span>&darr;</span>'} {/capture}
								{commentReplyLink $replyTitle, $comment->args, $comment->depth, $comment->id}
							</div>
							{editCommentLink $comment->id}
						</div>

						{if !$comment->approved}
							<em class="comment-awaiting-moderation">{__ 'Seu comentário está aguardando moderação.'}</em><br>
						{/if}
						{!$comment->content}
					</div>
				</div>

			</article>
		{/if}
	{/listComments}

	{include snippets/comments-pagination.php, location => 'below'}

{elseif !$post->hasOpenComments && $post->type != 'page' && $post->hasSupportFor('comments')}

	<p class="nocomments">{__ 'Comentários fechados.'}</p>

{/if}

{* translations for parameters *}

{capture $reviewNoun}{_x 'Comment', 'noun'}{/capture}
{capture $reviewLoggedIn}{!__ 'Você tem que estár <a href="%s">logado</a> para comentar.'|printf: wp_login_url(apply_filters('the_permalink', get_permalink()))}{/capture}
{capture $reviewLeave}{__ 'Deixe um comentário'}{/capture}
{capture $reviewReplyTo}{__ 'Deixe um comentário para %s'}{/capture}
{capture $reviewCancel}{__ 'Cancelar comentário'}{/capture}
{capture $reviewPost}{__ 'Adicionar comentário'}{/capture}

{commentForm
	comment_field => '<p class="comment-form-comment"><label for="comment">' . $reviewNoun . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
	must_log_in => '<p class="must-log-in">' .  $reviewLoggedIn . '</p>',
	title_reply => $reviewLeave,
	title_reply_to => $reviewReplyTo,
	cancel_reply_link => $reviewCancel,
	label_submit => $reviewPost
}

{else}
	<p class="nopassword">{__ 'Este post é protegido por senha. Digite a senha para ver os comentários.'}</p>
{/if}
</div><!-- #comments -->

{if isset($closeable) && ($post->hasOpenComments)}
</div> 			<!-- /.closeable -->
{/if}
