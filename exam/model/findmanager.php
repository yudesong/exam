<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>php</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="demo.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript" src="html.js"></script>
</head>
<body>
		<!-- header -->
	<div id="header"></div>
	<div id="navi">
		<div class="hd_log">
		<img class="" src="head_log.jpg" alt="" width="25px" height="15px"/>&nbsp;&nbsp;
		<label style="font-size:15px;">系统管理员 您好</label>
		</div>
		<div class="hd_sel">
				<div class="hd_sel_con">
					<ul>
						<li><a href="#">首页</a></li>
						<li><a href="#">修改密码</a></li>
						<li><a href="#">帮助</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="#">注销</a></li>
					</ul>
				</div>
		</div>
		<div  class="clear"></div>
	</div>
	<div id="left">
	<div id="choce" class="easyui-accordion">
		<div title="管理员管理" selected="true">
			<ul>
				<li><a href="findmanager.php">查询管理员</a></li>
				<li><a href="#">添加管理员</a></li>
				<li><a href="#">修改管理员</a></li>
				<li><a href="#">删除管理员</a></li>
			</ul>
		</div>
		<div title="用户管理">
			<ul>
				<li><a href="finduser.php">查询用户</a></li>
				<li><a href="adduser.php">添加用户</a></li>
				<li><a href="edituser.html">修改用户</a></li>
				<li><a href="deluser.php">删除用户</a></li>
			</ul>
		</div>
		<div title="科目管理">
				<ul>
				<li><a href="#">查询科目</a></li>
				<li><a href="#">添加科目</a></li>
				<li><a href="#">修改科目</a></li>
				<li><a href="#">删除科目</a></li>
			</ul>
		</div>
		<div title="试题管理">
				<ul>
				<li><a href="#">查询试题</a></li>
				<li><a href="#">修改试题</a></li>
				<li><a href="#">删除试题</a></li>
			</ul>	
		</div>
		<div title="成绩管理">
				<ul>
				<li><a href="#">查询成绩</a></li>
				<li><a href="#">修改成绩</a></li>
				<li><a href="#">删除成绩</a></li>
			</ul>
		</div>
	</div>
	</div>
	<div id="right">
	<!-- 模板 -->

	</div>
</body>
</html>