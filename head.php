<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网络投票后台</title>
	<link rel="stylesheet" type="text/css" href="css/sui-append.min.css">
	<link rel="stylesheet" type="text/css" href="css/sui.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
		.my-head{
			font-size: 25px;
			margin-top: 20px;
			margin-left:
		}
		.oBox{
			width: 1000px;
			height: 700px;
			margin: 50px auto;
		}
		.left{
			width: 30%;
			height: 100%;
			border: 1px solid skyblue;
			float: left;
		}
		.left ul{
			width: 80%;
			height: 80px;
			margin: 10px auto;
			border-bottom: none;
		}
		.left ul li{
			margin-top: 20px;
			width: 130px;
			height: 40px;
			font-size: 18px;
			line-height: 40px;
			margin-left:40px;
			text-align: center;
			border: 2px solid skyblue;
		}
		.left ul li a{
			display: block;
			width: 100%;
			height: 100%;
		}
		.left ul li:hover a{
			color: red;
		}
		.content{
			width: 70%;
			border: 1px solid skyblue;
			border-left: none;
			height: 100%;
			margin-left: 30%;
		}
	</style>
</head>
<body>
	<div class="sui-container">
		<div class="my-head">网络投票后台</div>
		<div class="oBox">
			<div class="left">
				<ul>
					<li><a href="vote-input.php">添加候选人</a></li>
					<li><a href="head.php">候选人列表</a></li>
				</ul>
			</div>