<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>考试登陆</title>
<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="themes/icon.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
<script type="text/javascript" src="js/html.js"></script>
</head>
<body>
		<?php  include 'src/log_head.php'?>
		<div id="log_zhuce">
			<div class="zhuce">
					<div class="zhu_ce_info">
						<form id="choceSubject" method="post">	
							<label style="font-size:15px;color:white;font-family:'黑体';">选择考试科目：</label>
							<input id="select" class="easyui-combobox"  data-options="valueField:'subjectid',textField:'subject',url:'src/conn.php?type=select_subject'" />  
							<div class="zhuce_but"><button style="font-size:15px;margin:70px  30px;color:white;font-family:'黑体';" class="but_log" onclick="choce_subject()">确定</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="font-size:15px;color:white;font-family:'黑体';" class="but_log">取消</button></div>						
						</form>
					</div>
			</div>
		</div>
</body>
</html>