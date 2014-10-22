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
		<div id="exam">
		<form  id="exam_submit"  method="post">
		<?php		
		include 'src/conn.php';
		$subject=$_REQUEST['select'];
		if( isset($_GET['page']) ){
			$page = intval( $_GET['page'] );
		}else{ 
			$page = 1;
		} 	
		$pagesize=5;
		$con=new ConnDB;
		$con->get_conn();
		$sql0="select  count(*) from tb_test where subject='$subject'";
		$rs0=@mysql_query($sql);
		$row0=@mysql_fetch_array($rs0);
		$numrows = $row0[0];
	    $pages = intval($numrows / $pagesize);
        if ($numrows % $pagesize)
       {
        $pages++;
       }
		$offset = $pagesize * ($page - 1);
		
		$sql="select testid,question,answera,answerb,answerc,answerd from tb_test where subject='$subject' limit $offset,$pagesize";
		
		$rs=@mysql_query($sql);
		while($row=@mysql_fetch_array($rs))
			{
		
			#------题号   试题
			echo '<div class="exam-test">&nbsp;&nbsp;<label style="font-size:15px;">';
			echo $row[0];
			echo '.</label>&nbsp;&nbsp;<label style="font-size:15px;">';
			echo  $row[1];
			echo '</label></div>';
			
			#-----答案
			echo '<div class="exam-test">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="A" name="';
			echo $row[0];
			echo '"/>&nbsp;<label style="font-size:15px;">';
			echo $row[2];
			echo '</label></div><div class="exam-test">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  value="B"  name="';
			echo $row[0];
			echo '"/>&nbsp;<label style="font-size:15px;">';
			echo $row[3];	
			echo '</label></div><div class="exam-test">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  value="C"  name="';
			echo $row[0];
			echo '"/>&nbsp;<label style="font-size:15px;">';
			echo $row[4];	
			echo '</label></div><div class="exam-test">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  value="D"  name="';
			echo $row[0];
			echo '"/>&nbsp;<label style="font-size:15px;">';
			echo $row[5];				
			echo '</label>';
			echo '</div>';
			}
			
			echo '<div class="exam-button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="exam.php?select='.$subject."&page=".($page-1).' style="font-size:25px;color:white;" class="but_log">上一页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="exam.php?select='.$subject."&page=".($page+1).' style="font-size:25px;color:white;" class="but_log">下一页</a></div>';

		?>
		</form>
		</div>
</body>
</html>