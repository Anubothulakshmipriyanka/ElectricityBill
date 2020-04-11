
<?php
echo"Data is saved into database you can go back and again login into database";
$conn=new mysqli("localhost","root","P2!yanka","project");
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
if($conn->query("create table signup(username varchar(15),Email varchar(50),password varchar(8),confirm varchar(8));"))
{
echo "table signup is created";
}
else
echo"error caught";
}

?>
