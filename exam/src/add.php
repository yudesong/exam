
		<!-- header -->
			<?php  include 'header.php' ;?>
		<!-- header -->		
		
		<!-- header -->
			<?php  	include 'head.php' ; ?>
		<!-- header -->		
		
		<!-- navigation -->
			<?php  	include 'navigation.php' ; ?>
		<!-- navigation -->
		
		<!-- wrapper -->
			<?php
					echo '<div id="right">';
			?>
				
			<?php
					$index=$_GET['index'];
			?>
			<!-- add_manager-->
			<?php
			if($index==1){
			echo 
			'<div class="easyui-panel" title="添加管理员" style="width:800px;height:500px;padding:20px  250px;">
			<form id="fmanager" method="get" >
			<div>
			<input type="text" id="type" name="type" value="insert_manager" hidden/>
			</div>
			<div>
					<div><label>用户名：</label><input  id="name"  name="name"  required="true"/></div>
					<label>密&nbsp;&nbsp;码：</label><input  id="passwd"  name="passwd"  required="true"/></div>
					<label>重复密码：</label><input name="passwd1"  required="true"/></div>
			</div>
				<input type="button" value="添加" style="margin-top:20px;margin-left:40px" onclick="insert_manager()"/>
				<input type="button" value="取消" style="margin-top:20px;margin-left:50px"/>
			</form>
			</div>';
			?>
			<?php }?>
			<!-- add_manager -->
			
			<!-- add_user -->
			<?php
			if($index==5){
			echo	
			'<div class="easyui-panel" title="添加用户" style="width:800px;height:500px;padding:20px  250px;">
			<form id="fuser" method="get" >
			<div>
			<input name="id"  hidden/>
			<input name="type" value="insert_user" hidden/>
			</div>
			<div>
							<div class="info"><label>用户名：</label><input type="text"  required="true" name="name" style="width:130px;" onblur="check_name(this)"/><span id="show"></span></div>
							<div class="info"><label>密&nbsp;&nbsp;码：</label><input type="password"  required="true"id="passwd" name="passwd" style="width:130px;"/></div>
							<div class="info_left"><label>确认密码：</label><input type="password"  required="true" name="passwd1" style="width:130px;" onblur="check_passwd(this)"/><span id="show1"></span></div>
							<div class="info"><label>年&nbsp;&nbsp;龄：</label><select style="width:50px" name="age"><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option>
							<option value="27">27</option><option value="28">28</option><option value="29">29</option></select></div>
							<div class="info"><label>性&nbsp;&nbsp;别：</label><input type="radio" name="sex" value="男" checked>男&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="女">女</div>
							<div class="info"><label>电&nbsp;&nbsp;话：</label><input type="text"  required="true" name="phone" style="width:130px;"/></div>
							<div class="info"><label>邮&nbsp;&nbsp;箱：</label><input type="text"  required="true" name="email" style="width:130px;"/></div>
							<div class="info_left"><label>密码问题：</label><select name="question" style="width:130px"><option value="我在哪个学校上学？">我在哪个学校上学？</option><option value="我是哪里人？">我是哪里人？</option>
							<option value="我的QQ号是多少?">我的QQ号是多少?</option><option value="我在寝室号多少?">我在寝室号多少?</option></select></div>
							<div class="info"><label>答&nbsp;&nbsp;案：</label><input type="text"  required="true" name="answer" style="width:130px;"/></div>
			</div>
				<input type="button" value="添加" style="font-size:15px;margin-top:20px;margin-left:40px" onclick="insert_user()"/>
				<input type="button" value="取消" style="font-size:15px;margin-top:20px;margin-left:50px"/>
			</form>
			</div>';
			?>
			<?php  }?>
			<!-- add_user -->
			
			<!-- add_subject -->
			<?php
			if($index==9){
			echo	
			'<div class="easyui-panel" title="添加科目" style="width:800px;height:500px;padding:20px  250px;">
			<form id="fsubject" method="get" >
			<div>
						<input name="type" value="insert_subject" hidden/>
			<table>
				<tr>
					<th>科目名称：</th>
					<th><input name="name"  required="true"/></th>
				</tr>
			</table>
			</div>
				<input type="button" value="添加" style="font-size:15px;margin-top:20px;margin-left:40px" onclick="insert_subject()"/>
				<input type="button" value="取消" style="font-size:15px;margin-top:20px;margin-left:50px"/>
			</form>
			</div>';
			?>
			<?php  }?>
			<!-- addd_subject -->			
			
			<!-- add_test-->
			<?php
			if($index==13){
			echo	
			'<div class="easyui-panel" title="添加试题" style="width:800px;height:500px;padding:50px  250px;">
			<form id="ftest" method="get" >
			<div>
			<input name="type" value="insert_test" hidden/>
			</div>
			<div>
			<table>
				<tr>
					<th>题号：</th>
					<th><input name="testid"  required="true"/></th>
				</tr>
				<tr>
					<th>科目：</th>
					<th><input name="subject"  required="true"/></th>
				</tr>
				<tr>
					<th>试题：</th>
					<th><input name="question"  required="true"/></th>
				</tr>
				<tr>
					<th>答案A：</th>
					<th><input name="answera"  required="true"/></th>
				</tr>
				<tr>
					<th>答案B：</th>
					<th><input name="answerb"  required="true"/></th>
				</tr>
					<th>答案C：</th>
					<th><input name="answerc"  required="true"/></th>
				</tr>
				<tr>
					<th>答案D：</th>
					<th><input name="answerd"  required="true"/></th>
				</tr>				
					<th>正确答案：</th>
					<th><input name="rightanswer"  required="true"/></th>
				</tr>
				<tr>
					<th>解析：</th>
					<th><input name="jiexi"  required="true"/></th>
				</tr>	
				<tr>
					<th>分值：</th>
					<th><input name="score"  required="true"/></th>
				</tr>
			</table>
			</div>
				<input type="button" value="添加" style="font-size:15px;margin-top:20px;margin-left:40px" onclick="insert_test()"/>
				<input type="button" value="取消" style="font-size:15px;margin-top:20px;margin-left:50px"/>
			</form>
			</div>';
			?>
			<?php  }?>
			<?php
			echo '<script type="text/javascript">

			</script>';
			?>
			
			<!-- add_test -->		
			<?php
				echo '</div>';
				?>
				
		<!-- wrapper -->
		<?php
			echo   
			'<script type="text/javascript">
			$(function(){
			$("#choce").accordion({
			animate:false
			});
			$("#choce").accordion("select",';
		?>	
		<?php
		echo	 intval($index/4);
		echo');
		});
	</script>';
		?>
		<!-- footer -->
			<?php include 'footer.php'?>
		<!-- footer -->