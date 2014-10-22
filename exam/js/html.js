/* JavaScript Document */
	var url;	
	var i=0;
	//处理退出事件
	function closeWindow() { 
　　window.opener = null; 
　　window.open('', '_top', ''); 
　　window.parent.close(); 
　　} 
	
	//处理登陆事件
	function login()
	{
	var url="src/conn.php";
	$('#login_form').attr("action",url).submit();
	}
	
	//处理找回密码事件
	function find_question(name1)
	{
	var name=name1.value;
	if(name!=""){
	$.get("src/conn.php?type=find_question&name="+name,function(data,status){
	if(data.toString().trim()=="") { $('#show').html("<font color='red'>"+"该用户不存在"+"</font>");}
	else{
	$('#show').html("<font color='red'>"+"</font>");
	document.getElementById("question").value=data.toString().trim();
	document.getElementById("question").readonly;	}
	});
	}
	}
	
	function findpasswd()
	{
	url="src/conn.php";
	$('#find_passwd').attr("action",url).submit();
	}
	//处理管理员登陆
	function manager_login()
	{
	var url="src/conn.php";
	$('#manager_login').attr("action",url).submit();
	}
	
	//注册事件
	function user_zhuce()
	{
	var url="src/conn.php";
	$('#user_zhuce').attr("action",url).submit();
	}
	
	function check_name(name1)
	{
	var name=name1.value;
	if(name!=""){
	$.get("src/conn.php?type=check_user&name="+name,function(data,status){
	if(data.toString().trim()=="该用户名已被注册")    $('#show').html("<font color='red'>"+data+"</font>");
	if(data.toString().trim()=="可以注册")    $('#show').html("<font color='green'>"+data+"</font>");
	});
	}
	}
	
	function check_passwd(passwd)
	{
	if(document.getElementById("passwd").value!=passwd.value){
	$('#show1').html("<font color='red'>两次密码不一致</font>");
	passwd.value="";
	}
	}
	
	function choce_subject()
	{
	var select = $('#select').combobox('getText');
	url="exam.php?select="+select;
	$('#choceSubject').attr("action",url).submit();
	}
	
//	function show_next() 
//	{
//	i+=5;
//	alert();
//	url="exam.php?select=数据库技术&first="+i+"&last="+(i+5);
//	//window.location.href=url;
//	//
//	//window.parent.close();
//	url=encodeURI(url);
//	window.open(url,'self');
//	return true;
//	}	
	
	function insert_manager()
	{
	url="conn.php";	
	$('#fmanager').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '添加成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
	}
	
	function insert_user()
	{
	url="conn.php";	
	$('#fuser').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '添加成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
	}
	
	function insert_subject()
	{
	url="conn.php";	
	$('#fsubject').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '添加成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
	}
	
	function insert_test()
	{
	url="conn.php";	
	$('#ftest').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '添加成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
	}	

	function saveManager(){
		url = "conn.php?type=edit_manager";
		$('#fm-manager').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		
		function saveUser(){
		url = "conn.php?type=edit_user";
		$('#fm-user').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}

		function saveSubject(){
		url = "conn.php?type=edit_subject";
		$('#fm-subject').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}		
		
		function saveTest(){
		url = "conn.php?type=edit_test";
		$('#fm-test').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}			
		
		function saveScore(){
		url = "conn.php?type=edit_score";
		$('#fm-score').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}		
			
	function editManager()
	{
	var row=$('#dg-manager').datagrid('getSelected');
	if(row){
	$('#dlg-manager').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-manager').form('load',row);
	}
	}
	
	function editUser()
	{
	var row=$('#dg-user').datagrid('getSelected');
	if(row){
	$('#dlg-user').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-user').form('load',row);
	}
	}
	
	function editSubject()
	{
	var row=$('#dg-subject').datagrid('getSelected');
	if(row){
	$('#dlg-subject').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-subject').form('load',row);
	}
	}
	
	function editTest()
	{
	var row=$('#dg-test').datagrid('getSelected');
	if(row){
	$('#dlg-test').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-test').form('load',row);
	}
	}
	
	function editScore()
	{
	var row=$('#dg-score').datagrid('getSelected');
	if(row){
	$('#dlg-score').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-score').form('load',row);
	}
	}
	
	
	function closeDlg()
	{
	$("#dlg-manager").dialog("close");
	$("#dlg-user").dialog("close");	
	$("#dlg-subject").dialog("close");	
	$("#dlg-test").dialog("close");	
	$("#dlg-score").dialog("close");	
	}
	
	function deleteManager(){
	var row = $('#del-manager').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_manager',{id:row.id},function(result){
					if (result.success){
						$('#del-manager').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}

	function deleteUser(){
	var row = $('#del-user').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_user',{id:row.id},function(result){
					if (result.success){
						$('#del-user').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}

function deleteSubject(){
	var row = $('#del-subject').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_subject',{subjectid:row.subjectid},function(result){
					if (result.success){
						$('#del-subject').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}

	function deleteTest(){
	var row = $('#del-test').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_test',{testid:row.testid},function(result){
					if (result.success){
						$('#del-test').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}

	function deleteScore(){
	var row = $('#del-score').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_score',{id:row.id},function(result){
					if (result.success){
						$('#del-score').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}	
	function find_manager()
	{
		var user_name=$('#manager_name').val();	
		url="conn.php?type=find_manager&name="+user_name;
		$('#dg_manager').datagrid({
		url:url
		});
	   $('#dg_manager').datagrid('reload');	
	}
	
	
	function find_user()
	{
		var user_name=$('#user_name').val();	
		url="conn.php?type=find_user&name="+user_name;
		$('#dg_user').datagrid({
		url:url
		});
	   $('#dg_user').datagrid('reload');	
	}

	function find_subject()
	{
		var user_name=$('#subject_name').val();	
		url="conn.php?type=find_subject&name="+user_name;
		$('#dg_subject').datagrid({
		url:url
		});
	   $('#dg_subject').datagrid('reload');	
	}
	
	function find_test()
	{
		var testid=$('#testid').val();	
		url="conn.php?type=find_test&testid="+testid;
		$('#dg_test').datagrid({
		url:url
		});
	   $('#dg_test').datagrid('reload');	
	}	
	
	function find_score()
	{

		var name=$('#name').val();	
		url="conn.php?type=find_score&name="+name;
		$('#dg_score').datagrid({
		url:url
		});
	   $('#dg_score').datagrid('reload');	
	}