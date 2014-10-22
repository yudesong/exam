<?php	
		$con=mysqli_connect("localhost","root","mysql","user");
		if(mysqli_connect_errno())
		{
		echo "Fail to".mysqli_connect_error();
		}
		$result=array();
		$result["total"]="2";
		$sql="select * from tb_use";
		$rs=mysqli_query($con,$sql);
		$items=array();
		while($row=mysql_fetch_row($rs))
		{
			array_push($items,$row);
		}
		$result["row"]=$items;
		
		echo json_encode($result);
		
?>