<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NVa System</title>

	<style type="text/css">
	body{
		background:url(https://cn.bing.com/az/hprichbg/rb/Forest_ZH-CN16430313748_1920x1080.jpg) no-repeat;
		background-size:auto;
	}
	.welcome{
		position:absolute;
		font-size:50px;
		color:#fff;
		text-shadow:1px 2px 10px #000;
		top:200px;
		left:300px;
	}
	.welcome p{
	font-size:20px;
	
	}
	.login_form{
	margin-top:100px;
	font-size:14px;
	float:left;
	}
	.login_name{
	font-size:15px;
	background:rgba(255,255,255,0.5);
	padding:7px;
	border:1px solid #fff;
	
	}
	.login_pwd{
	font-size:15px;
	background:rgba(255,255,255,0.5);
	border:1px solid #fff;
	padding:7px
	}
	.login_btn{
	margin-top:100px;
	float:right;
	padding:15px;
	}
	.submit{
	width:50px;
	height:50px;
	border-radius:50px;
	background:rgba(255,255,255,0.5);
	border:1px solid #fff;
	color:#fff;
	text-shadow:1px 2px 10px #000;
	font-size:20px
	}
	</style>
</head>
<body>
<div class="welcome">NVa System<p>LenDATA SoftWare Inc. Version:1.56 Beta</p><p>糕小姐综合业务辅助管理系统</p><form action=""><div class="login_form"><p><input type="" name="login_name" value="" id="login_name" class="login_name" placeholder="Username"/></p><p><input type="password" name="login_pwd" value="" id="login_pwd" class="login_pwd" placeholder="Pwd"/></p></div><div class="login_btn"><button type="submit" class="submit">></button></div></form></div>

</body>
</html>