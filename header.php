<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bullets</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="fonts.css">

	<style type="text/css">
		body {
			margin:0px;
		}

		.header {
			background: #f26765;
			height: 105px;
			width: 100%;
			border-bottom: 15px solid #f26765;
		}

		.header .back {
			cursor: pointer;
			width: 105px;
			height: 105px;
			background: url('gfx/back.png') center center no-repeat;
			float:left;
			display: block;
		}

		.header .categories {
			cursor: pointer;
			width: 105px;
			height: 105px;
			background: url('gfx/categories.png') center center no-repeat;
			float:right;
			display: block;
		}

		.header .name {
			height: 105px;
			line-height: 105px;
			color:white;
			font-family:'Conv_news-701-bt-italic-1361519698',Sans-Serif;
			font-size:30pt;
			display: inline-block;
			margin-top: 0px;
		}

		.article .cover {
			height: 365px;
			width: 100%;
			overflow: hidden;
			height: 365px;
			width: 100%;
			background-size: cover;
		}

		.article .cover .labels {
			height: 365px;
			width: 100%;
			z-index: 3;
			background-image: url(gfx/gradient.png);
			background-position: bottom left;
			background-repeat: repeat-x;
		}

		.article .cover .labels .internal {
			z-index: 4;
			display: table-cell;
			height: 355px;
			width: 100%;
			vertical-align: bottom;
			padding-left: 20px;
			padding-bottom: 10px;
			padding-right: 20px;
		}

		.article .cover .labels .internal .top {
			font-family:'Conv_HelveticaNeueLTPro-Lt',Sans-Serif;
			font-size:20pt;
			color:#93df8d;
		}
		.article .cover .labels .internal .title {
			font-family:'Conv_HelveticaNeueLTPro-Lt',Sans-Serif;
			font-size:26pt;
			color:white;
		}
		.article .shortcuts {
			width: 100%;
			overflow-x: hidden;
		}
		.article .shortcuts .internal {
			width:9999999px;
		}
		.article .shortcuts .shortcut {
			width: 100%;
			display: block;
		}
		.article .shortcuts .shortcut .user {
			background: #463f53;
			padding-left: 30px;
			padding-top: 20px;
			padding-bottom: 20px;
			padding-right: 20px;
			color:#837696;
			line-height: 80px;
			height:70px;
			font-family:'Conv_HelveticaNeueLTPro-Lt',Sans-Serif;
			font-size:26pt;
		}
		.article .shortcuts .shortcut .user .avatar{
			width: 65px;
			height: 65px;
			margin-right:30px;

			border-radius: 150px;
			-webkit-border-radius: 150px;
			-moz-border-radius: 150px;

			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;

			overflow: hidden;
			float:left;
		}
		.article .bullets{
			margin-bottom:50px;
		}
		.article .bullets .bullet{
			margin-left:100px;
			margin-top:50px;
		}
		.article .bullets .bullet .icon{
			width:15px;
			height:15px;
			border-radius: 7px;
			-webkit-border-radius: 7px;
			-moz-border-radius: 7px;
			background: #93df8d;
			float:left;
			margin-top: 10px;
		}
		.article .bullets .bullet .text{
			font-family:'Conv_HelveticaNeueLTPro-Lt',Sans-Serif;
			font-size:26pt;
			color:#777777;
			margin-left:40px;
		}
		.article .nav {
			width: 100%;
			position: absolute;
			width: 100%;
			margin-top:250px;
		}
		.article .nav .left{
			float:left;
			height: 91px;
			width: 47px;
			background-image: url(gfx/short_left.png);
			background-position: bottom left;
			background-repeat: repeat-x;
		}
		.article .nav .right{
			float:right;
			height: 91px;
			width: 47px;
			background-image: url(gfx/short_right.png);
			background-position: bottom left;
			background-repeat: repeat-x;
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.article .nav .left').click(function(){
				var i = $(this).parents('.article').data('index');

				if(!i) {
					$(this).parents('.article').data('index', 1);
					i = 1;
				}

				var l = $(this).parents('.article').find('.shortcuts .shortcut').length
				if(l < 2)
				{
					return false;
				}

				$(this).parents('.article').find('.shortcuts .internal').animate({'marginLeft': '-=100%'}, 500);
				return false;
			});
			$('.article .nav .right').click(function(){
				var i = $(this).parents('.article').data('index');

				if(!i) {
					$(this).parents('.article').data('index', 1);
					i = 1;
				}

				var l = $(this).parents('.article').find('.shortcuts .shortcut').length
				if(l < 2)
				{
					return false;
				}
				$(this).parents('.article').find('.shortcuts .internal').animate({'marginLeft': '+=100%'}, 500);
				return false;
			});

			$('.article .bullets .text').css('width', $(window).width() - 250);
		});
	</script>
</head>
<body>