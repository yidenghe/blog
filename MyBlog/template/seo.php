{if $type=='article'}
 <title>{$title}_{$article.Category.Name}_{$name}</title>
 <meta name="keywords" content="{foreach $article.Tags as $tag}{$tag.Name}{/foreach}" />
 <meta name="description" content="{$article.Title}是{$name}中一篇关于{foreach $article.Tags as $tag}{$tag.Name}{/foreach}的文章，欢迎您阅读和评论,{$name}" />
{elseif $type=='page'}
  <title>{$title}_{$name}</title>
  <meta name="keywords" content="{$title},{$name}"/>
  {php}
    $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
  {/php}
  <meta name="description" content="{$description}"/>
  <meta name="author" content="{$article.Author.StaticName}">
{elseif $type=='index'}
  <title>{$name}{$subname}</title>
  <meta name="Keywords" content="仪登贺,web前端">
  <meta name="description" content="仪登贺的web前端学习笔记">
{elseif $type=='category'}
  <title>{$title}_{$name}_第{$pagebar.PageNow}页</title>
  <meta name="Keywords" content="{$title},{$name}">
  <meta name="description" content="{$title}_{$name}_当前是第{$pagebar.PageNow}页">
{else}
  <title>{$title}_{$name}</title>
{/if}