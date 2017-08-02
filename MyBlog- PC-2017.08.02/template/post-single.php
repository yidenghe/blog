<article class="post">
<div class="post_a">
	<div class="post_l">
			<h2 class="entry-title">{$article.Title}</h2>
			<div class="content">
			{$article.Content}
			</div>
            <div class="info">
			<p>&bull; 发表时间 {$article.Time('Y-m-d')} / 浏览 {$article.ViewNums} 次</p>
			<p>&bull; 文章标签 {if $article.Tags}{foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>    {/foreach}{/if}</p>
			</div>
			<div class="pnext">
			<span>上一篇：<a href="{$article.Prev.Url}">{$article.Prev.Title}</a> </span><span>下一篇：<a href="{$article.Next.Url}">{$article.Next.Title}</a></span>
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
