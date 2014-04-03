<?php
$server='localhost:8888';
$user='root';
$pass='root';
$conn=mysql_connect($server,$user,$pass);
if (!$conn) {
	die('Could not Connect To Database'.mysql_error());
}
mysql_select_db("LoginDb");

$sql="SELECT UserName, Email, City,ProfilePic FROM Login";
$query=mysql_query($sql,$conn);

$temp=array();
$Response['Profiles']=array();

while ($row=mysql_fetch_array($query)) {
	
	$temp['UserName']=$row['UserName'];
	$temp['Email']=$row['Email'];
	$temp['ProfilePic']=$row['ProfilePic'];

	array_push($Response['Profiles'], $temp);
}
echo json_encode($Response);



?>