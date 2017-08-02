{template:header}
<article class="post">
<div class="list">
<div class="post_l">
        {foreach $articles as $article}
        {if $article.IsTop}
        {template:post-istop}
        {else}
        {template:post-multi}
        {/if}
        {/foreach} 
<div class="pagebar">
	<ul>{template:pagebar}</ul>
</div>
<div class="clear"></div>
</div>
</div>    
<div class="post_r">
	{template:sidebar}
</div>
<div class="clear"></div>
</article>
{template:footer}