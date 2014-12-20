	<html>
	<head>
		<link rel="shortcut icon" href="/~saltuk/favicon.ico" type="image/x-icon">
		<meta charset="utf-8">
		<script type="text/javascript" src="fancybox/jquery-1.9.0.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
 
        var $menu = $("#menu");
 
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 118 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 118 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default");
            }
        });
		});
		</script>
		<style>
			body{padding: 0; margin:0 } 
			@font-face {
  			  font-family: Segoeu UI;
  			  src: url(fonts/segoeuil.ttf);
			 }
			p{
				text-align: center;
			}
			h1,h4 {
				font-family: Segoeu UI, 'Segoeu UL Light';
				color: #0664F1;
				font-weight: 1000;
				font-size: 17;
				line-height: 0;
			}
			h1{font-size: 50; font-weight: 300; line-height: 0.5}
			#menu {
				z-index:2;
				position:absolute;
				width: 100%;
				text-align: center;
				line-height: 32px;
				background: #1E9AB0;
			}
			  #menu ul {
				padding:0;
				margin:0;
			  }
			  #menu li{
				font-family: Segoeu UI, 'Segoeu UL Light';
				color:#fff;
				font-weight: bolder;
			    cursor:pointer;
				padding-right:4%;
				padding-left:4%;
				display: inline-block;
				list-style:none;
				margin:0;
				height:33px;
			  }
			  #menu li:hover{
				background: #fff;
				color: #1E9AB0;
				
	  		 }
			 #menu.default {
			 top:118px;
			 left:0;
			}
			#menu.fixed {
				position:fixed;
				top:0; left:0;
			}
		</style>	
        </head>
	<body style="height:100%;" link="ffffff" vlink="#ffffff"  alink="#ffffff" bgcolor="ffffff" background="images/fon.jpg">
		<style href>a {text-decoration: none} </style>
		<div style="width:100%; min-height:100%; height:auto !important;">
		<table  border="0" cellpadding="0" cellspacing="0" width=100% height=150px>
			<tr><td colspan="2" background="images/header.jpg">
					<h1 align="center"><br>Салтук Константин</h1>
					<h4 align="center"> <a href="/~saltuk/" style="color: #0664F1; text-decoration:none;"> Кликните, чтобы перейти на мою главную страницу</a></h4></td>
			</tr>
			<tr height=32px>
			</tr>
		</table>
		<div id="menu" class="default">
		<ul>
		<li onClick="document.location='/~saltuk/Hobbies/'">Вернуться к списку хобби</li>
		</ul>
		</div>
