<?php 
	header("Content-type: text/html; charset=utf-8"); 

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="css/css.css">
 	<title>留言板页面  每一次留言提交一次账号即可，密码、手机号随意</title>
 </head>
 <body>
 	<form action="add.php?act=addMes" method="post">
		<table>
			<tr><th>用户名</th><th><input type="text" name="username"></th></tr>
			<tr><th>密码</th><th><input type="password" name="password"></th></tr>
			<tr><th>留言</th><th><input type="text" name="addres"></th></tr>
			<tr><th>手机号</th><th><input type="text" name="phone"></th></tr>
			<tr><th>头像</th><th><input type="radio" name="photo" checked value="1.jpg"><img src="img/1.jpg" alt="">
								 <input type="radio" name="photo" value="2.jpg"><img src="img/2.jpg" alt="">
								 <input type="radio" name="photo" value="3.jpg"><img src="img/3.jpg" alt="">
								 <input type="radio" name="photo" value="4.jpg"><img src="img/4.jpg" alt="">
			</th></tr>
			<tr><th><input type="submit" value="提交"></th><th></th></tr>
		</table>
 	</form>
 	<a href="list.php"><input type="submit" value="列表"></a>
 	<a href="text.php"><input type="submit" value="测试"></a>
 	<a href="index.php"><input type="submit" value="首页"></a>
 	<a href="update.php"><input type="submit" value="修改"></a>
 </body>
 </html>
