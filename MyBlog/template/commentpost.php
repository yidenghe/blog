<div class="commentpost">
	<div class="posttop"><a name="comment">{if $user.ID>0}{$user.StaticName}{/if}发表评论:</a><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><small>取消回复</small></a></div>
	<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />


{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
{else}
	<div><input type="text" name="inpName" id="inpName" class="text" value="{$user.Name}" size="28" tabindex="1" /> <label for="inpName">昵称(*)</label></div>
	<div><input type="text" name="inpEmail" id="inpEmail" class="text" value="{$user.Email}" size="28" tabindex="2" /> <label for="inpEmail">邮箱</label></div>
	<div><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="{$user.HomePage}" size="28" tabindex="3" /> <label for="inpHomePage">网址</label></div>
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<div><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" /> <label for="inpVerify">验证码(*)</label>
	<img style="width:{$option['ZC_VERIFYCODE_WIDTH']}px;height:{$option['ZC_VERIFYCODE_HEIGHT']}px;cursor:pointer;" src="{$article.ValidCodeUrl}" alt="" title="" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
	</div>
{/if}

{/if}



	<div><label for="txaArticle">正文(*)</label></div>
	<div><textarea name="txaArticle" id="txaArticle" class="text_c" cols="50" rows="4" tabindex="5" ></textarea></div>
	<div><input name="sumbit" type="submit" tabindex="6" value="发表评论" onclick="return VerifyMessage()" class="button" /></div>
	</form>
	<div class="postbottom">◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</div>
</div>