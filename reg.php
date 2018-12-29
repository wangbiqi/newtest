<?php
	header("content-type:text/html;charset=utf-8");
	
	$username = $_POST["username"];
	$pwd = $_POST["pwd"];
	
	echo "您输入的用户名是".$username."<br><br><br>";
	
	/*
	 * 
	 增加
	 insert into user ()values();
	 删除
	 delete from user where username='haha';
	 改
	 查
	 * */
	
	$conn = new mysqli("localhost", "root", "", "nj1802");
	
	$conn->query("set names 'utf8'");
	
	$sql = "SELECT * FROM `user` where username='".$username."'";
	$result = $conn->query($sql);
	
	$row = $result->fetch_assoc();
	if($row){
		echo "已经存在此用户名,此用户名的密码是";
		echo $row["password"];
		echo "<br><a href='../login/login.html'>点我登录</a>";
	}else{
		echo "没有此用户名<br>";
		$newSql = "insert into user (username,password,ip,time)values('".$username."','".$pwd."','".$_SERVER['REMOTE_ADDR']."','now()')";
		$conn->query($newSql);
		echo "创建成功！";
	}

	/*while( $row=$result->fetch_assoc() ){
		echo $row["id"];
	}
*/
		
?>