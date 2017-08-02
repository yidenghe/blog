{* Template Name:列表页 *}

<articel>
<ul>
	<li>
		{foreachGetList(10,{$category.ID})as$related}{$related.Time('Y-m-d')}{$related.Title}{/foreach}
	</li>
</ul>
</articel>
