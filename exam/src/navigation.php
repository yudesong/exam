<?php
	 echo
	'<div id="left">
	<div id="choce" class="easyui-accordion" data-options="multiple:true">
		<div title="管理员管理" >
			<ul>
				<li><a href="find.php?index=0">查询管理员</a></li>
				<li><a href="add.php?index=1">添加管理员</a></li>
				<li><a href="edit.php?index=2">修改管理员</a></li>
				<li><a href="delete.php?index=3">删除管理员</a></li>
			</ul>
		</div>
		<div title="用户管理" selected="true" >
			<ul>
				<li><a href="find.php?index=4">查询用户</a></li>
				<li><a href="add.php?index=5">添加用户</a></li>
				<li><a href="edit.php?index=6">修改用户</a></li>
				<li><a href="delete.php?index=7">删除用户</a></li>
			</ul>
		</div>
		<div title="科目管理" selected="true">
				<ul>
				<li><a href="find.php?index=8">查询科目</a></li>
				<li><a href="add.php?index=9">添加科目</a></li>
				<li><a href="edit.php?index=10">修改科目</a></li>
				<li><a href="delete.php?index=11">删除科目</a></li>
			</ul>
		</div>
		<div title="试题管理" selected="true">
				<ul>
				<li><a href="find.php?index=12">查询试题</a></li>
				<li><a href="add.php?index=13">添加试题</a></li>
				<li><a href="edit.php?index=14">修改试题</a></li>
				<li><a href="delete.php?index=15">删除试题</a></li>
			</ul>	
		</div>
		<div title="成绩管理" selected="true">
				<ul>
				<li><a href="find.php?index=16">查询成绩</a></li>
				<li><a href="edit.php?index=17">修改成绩</a></li>
				<li><a href="delete.php?index=18">删除成绩</a></li>
			</ul>
		</div>
	</div>
	</div>';
?>