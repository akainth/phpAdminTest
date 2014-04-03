<?php

# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  // we will fill this out next
  
  return "dbname=dccogtnrjh49bm host=ec2-54-204-41-178.compute-1.amazonaws.com  port=5432 user=cjcqnksjxlrzub password=xy4w2sHeIix_OFR7rnp9FZFUlx sslmode=require";
}
 echo 'Registration Successfull';
# Establish db connection
// $db = pg_connect(pg_connection_string());
 
// $result = pg_query($db, "SELECT statement goes here");



// $server='localhost:8888';
// $user='root';
// $pass='root';
// $conn=mysql_connect($server,$user,$pass);
// if (!$conn) {
// 	die('Could not Connect To Database'.mysql_error());
// }
// mysql_select_db("LoginDb");

// $json=file_get_contents("php://input");
// $data=json_decode($json,true);
// $Name=$data['UserName'];
// $Email=$data['Email'];
// $password=$data['Password'];
// $City=$data['City'];
// $pic=$data['ProfilePic'];

// $salt='SEASIA';
// $EncryptedPass=crypt($password,$salt);

// $path='/Applications/MAMP/htdocs/session2/Pics/';
// $fp=fopen($path.$Name.".jpg", "w");
// $fw=fwrite($fp, base64_decode($pic));
// fclose($fp);

// $imageSqlPath="http://$server/session2/Pics/".$Name.".jpg";

// //Validation
// $checkUserID=mysql_query("SELECT Email FROM Login WHERE Email='$Email'");
// $row=mysql_fetch_array($checkUserID);
// if ($row) {
// 	die('Email Id Already Exist'.mysql_error());
// }

// $sql="INSERT INTO Login(UserName,Password,Email,City,ProfilePic)VALUES ('CronTest','1234','a@b.com','abc','xyz')"; 
// 
// $query=pg_query($sql,$db);
// if (!$query)
// {
// 	die('Failed to Insert Data'.mysql_error());
// }
// echo 'Registration Successfull';
?>
