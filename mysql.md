千锋教育 HTML5 讲师：王杨

# PHP 操作 Mysql

```html
<?php
//允许跨域	
//header('Access-Control-Allow-Origin: *');
//设置编码
//header("Content-type:text/html; charset=utf-8");

//mysql账户
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";


//创建数据库
/*
$sql = "CREATE DATABASE $dbname DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$conn = new mysqli($servername, $username, $password);//在创建数据库时，不要写第4个数据库名称的参数
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "数据库创建失败: " . $conn->error;
} 
*/


//删除数据库
/*
$sql = "DROP DATABASE $dbname";
$conn = new mysqli($servername, $username, $password);
if ($conn->query($sql) === TRUE) {
    echo "数据库删除成功";
} else {
    echo "数据库删除失败: " . $conn->error;
}
*/


//连接数据库
/*
$conn = new mysqli($servername, $username, $password, $dbname);
//设置连接字符集编码
$sql="SET CHARACTER SET 'UTF8'";
$conn->query($sql);
//告诉服务器将来从这个客户端传来的信息采用字符集utf8
$sql="SET NAMES 'UTF8'";
$conn->query($sql);
*/


//创建数据表（创建数据表的前提是，必须连接到数据库）
/*
$sql = "CREATE TABLE UserList (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(60) NOT NULL,
height INT(6) NOT NULL,
weight decimal(10,4),
date1 TIMESTAMP,
nation VARCHAR(60),
sex VARCHAR(60),
like1 VARCHAR(60),
intro VARCHAR(100)
)ENGINE = MYISAM DEFAULT CHARSET=utf8";
//decimal(10,6)，数值中共有10位数，其中整数占4位，小数占6位。
if ($conn->query($sql) === TRUE) {
    echo "创建数据表成功";
} else {
    echo "创建数据表错误: " . $conn->error;
}
*/


//删除数据表
/*
$sql = "DROP TABLE UserList";
if ($conn->query($sql) === TRUE) {
    echo "删除数据表成功";
} else {
    echo "删除数据表错误: " . $conn->error;
}
*/


//插入数据
/*
//$ip=$_SERVER["REMOTE_ADDR"];
$sql = "insert into UserList (name,height,weight,date1,nation,sex,like1,intro) values ('name',1,2,now(),'a','a','a','intro')";
if( $conn->query($sql) === true ){
    echo "数据插入成功";
}else{
    echo "数据插入失败";
}
echo mysqli_insert_id($conn);//取出插入的数据的编号
*/


//删除
/*
$sql = "delete from UserList";
//$sql = "delete from UserList where id>1 and id<3";
//$sql = "delete from UserList where id=3 or height=2";
//$sql = "delete from UserList where id in (5, 7, 9)";
if( $conn->query($sql) === true ){
    echo "数据删除成功";
}else{
    echo "数据删除失败";
}
echo "受影响的行数: " . mysqli_affected_rows($conn); 
*/


//修改
/*
$sql = "update UserList set name='新名称',height=200 where id>=2 and id<=6";
if( $conn->query($sql) === true ){
    echo "数据修改成功";
}else{
    echo "数据修改失败";
}
echo "受影响的行数: " . mysqli_affected_rows($conn); //如果没有造成事实上的修改，则返回0
*/

//查询
/*
//$sql = "SELECT id, name, date1, height FROM UserList where height>10";
$sql = "select * from UserList order by id asc limit 2, 5";//从下标2开始，取5条数据
$result = $conn->query($sql);
//fetch_assoc() 函数从结果集中取得一行作为关联数组。
//返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false。
while($row = $result->fetch_assoc()) {
    echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["height"];
}
echo "<br>受影响的行数: " . mysqli_affected_rows($conn);
*/


//关闭先前打开的数据库连接
//$conn->close();

?>
```


















