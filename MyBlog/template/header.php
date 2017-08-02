<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{template:seo}
    <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css">
    <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/font/css/font-awesome.min.css">
    <script src="{$host}zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
    <script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
</head>
<body>
<div id="main">
<header>
	<div class="nav">
		<div class="l_nav">
			<h1><a href="{$host}">{$name}</a></h1>
		</div>
		<div class="r_nav">
			<h2>{module:navbar}</h2>
			<span>
				<form name="search" method="post" action="{$host}zb_system/cmd.php?act=search">
					<input type="text" name="q" size="11"  class="text_s" /> 
					<button type="submit" class="search"><i class="fa fa-search"></i></button>
				</form>
			</span>
		</div>	
	</div>
</header>
