<?php
	
	function executeResult($sql){
		$connect = mysqli_connect("localhost","root","","library")or die("Connect faild");
		mysqli_set_charset($connect,'utf8');
		$data = [];// nơi chứa dữ liệu đầu ra, nó chứa 1 mảng các trường
		
		$result = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($result))
		{
			$data[]= $row;
		}
		
		mysqli_close($connect);
		return $data;
		
	}
	
	
	function execute($sql)
	{
		$conn = mysqli_connect("localhost","root","","library")or die("Connect faild");
		mysqli_set_charset($connect,'utf8');
		
		mysqli_query($conn,$sql);
		mysqli_close($connect);
		
		
	}
?>