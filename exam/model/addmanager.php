<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>php</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="demo.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="html.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<style type="text/css">
	</style>
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
		<div title="管理员管理" >
			<ul>
				<li><a href="findmanager.php">查询管理员</a></li>
				<li><a href="#">添加管理员</a></li>
				<li><a href="#">修改管理员</a></li>
				<li><a href="#">删除管理员</a></li>
			</ul>
		</div>
		<div title="用户管理" selected="true">
			<ul>
				<li><a href="finduser.php">查询用户</a></li>
				<li><a href="adduser.php">添加用户</a></li>
				<li><a href="edituser.php">修改用户</a></li>
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
	<div class="easyui-panel" title="添加用户" style="width:810px;height:400px;padding:20px  250px;">
	<form id="fr" method="get" >
		<div>
		<input name="id"  hidden/>
		<input name="type"  hidden/>
		</div>
		<div>
		<table>
	<tr>
		<th>用户名：</th>
		<th><input name="name" class="easyui-validatebox" required="true"/></th>
	</tr>
	<tr>
		<th>性别：</th>
		<th style="text-align:left"><input name="sex" type="radio" value="男" checked/>男&nbsp;&nbsp;<input name="sex" type="radio" value="女"/>女</th>
	</tr>
	<tr>
		<th>年龄：</th>
		<th><input name="age" class="easyui-validatebox" required="true"/></th>
	</tr>
		<tr>
		<th>电话：</th>
		<th><input name="phone" class="easyui-validatebox" required="true"/></th>
	</tr>
	<tr>
		<th>邮箱：</th>
		<th><input name="email" class="easyui-validatebox" required="true" validateType="email"/></th>
	</tr>
	<tr>
		<th>密码提示问题：</th>
		<th><input name="question" class="easyui-validatebox" required="true"/></th>
	</tr>
	<tr>
		<th>答案：</th>
		<th><input name="answer" class="easyui-validatebox" required="true"/></th>
	</tr>
	</table>
	</div>
		<input type="button" value="添加" style="font-size:15px;margin-top:20px;margin-left:40px" onclick="newUser()"/>
		<input type="button" value="取消" style="font-size:15px;margin-top:20px;margin-left:50px"/>
	</form>
	</div>
	
	</div>
</body>
</html>