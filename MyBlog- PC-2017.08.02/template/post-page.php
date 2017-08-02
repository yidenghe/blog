<article class="post">
<div class="post_a">
	<div class="post_l">
			<h2 class="entry-title">{$article.Title}</h2>
			<div class="content">
			{$article.Content}
			</div>
			<div class="clear"></div>
	</div>
	<div class="comments">
			{if !$article.IsLock}
			{template:comments}
			{/if}
	</div>
	
</div>
	<div class="post_r">
		{template:sidebar}
	</div>
	<div class="clear"></div>
</article>
