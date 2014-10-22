<?php
	class Conn{
	
	//连接数据库
	function get_conn(){
	$conn = @mysql_connect('127.0.0.1','root','mysql');
	if (!$conn) {
	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('db_exam', $conn);
	}

	//查询所有用户信息
	function  get_user(){
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	include 'conn.php';
	$rs = mysql_query("select count(*) from tb_user");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("select * from tb_user limit $offset,$rows");
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	//添加用户信息
	function insert_user(){
	$name = $_REQUEST['name'];
	$age = intval($_REQUEST['age']);
	$sex = $_REQUEST['sex'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$question = $_REQUEST['question'];
	$answer = $_REQUEST['answer'];
	$sql = "insert into tb_user(name,age,sex,phone,email,question,answer) values('$name','$age','$sex','$phone','$email','$question','$answer')";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'.$sql));
	}
	}
	
	function remove_user()
	{
	$id = intval($_REQUEST['id']);
	$sql = "delete from tb_user where id=$id";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
	}
	}
	
	//修改用户信息
	function  update_user(){
	$id=intval($_REQUEST['id']);
	$name = $_REQUEST['name'];
	$age = $_REQUEST['age'];
	$sex = $_REQUEST['sex'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$question = $_REQUEST['question'];
	$answer = $_REQUEST['answer'];
	$sql = "update tb_user set name='$name', age='$age', sex='$sex' ,phone='$phone', email='$email' ,question='$question',answer='$answer' where id=$id";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Error is !'));
	}
	}
	
}	
	$con=new Conn;
	$con->get_conn();
	$con->get_user();

?>



