<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>标题</title>
	
</head>
<body>
<style>
	#divAll{
		width: 80%;
		height: 500px;
		text-align: center;
		margin: 200px auto;
		background: #fff;
	}

	.logo{
		width: 80px;
		height:80px;
		margin: 0 auto;

	}
	h1{
		font-size: 2rem;
	}
	p{
		height: 28px;
		line-height: 28px;
		font-size: 1rem;
	}
    .nav{
    	width: 80%;
    	height: 30px;
    }
	li{
		font-size: 1rem;
		float: left;
		margin-right: 30px;	
	}

</style>
<div id="divAll">
<div class="logo">
	<img src="http://y.lizhi8.com/zb_users/theme/user.jpg" width=80px height=80px alt="头像"/>
</div>
<h1>{$name}</h1>
<p>Work @ Shanghai Pharmaceutical Group, Network programming team leader.</p>
<p>ShangHai · China</p>
<div class="nav">
	<ul>
		<li>{module:navbar}</li>
	</ul>
</div>
</div>
</body>
</html>
