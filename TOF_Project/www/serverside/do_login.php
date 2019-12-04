// Database Structure 
CREATE TABLE 'user' (
 'email' text NOT NULL,
 'password' text NOT NULL,
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

<?php
session_start();
if(isset($_POST['do_login']))
{
 $host="localhost";
 $username="id8991015_root";
 $password="12345";
 $databasename="id8991015_androidlogin";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);

 $email=$_POST['email'];
 $pass=$_POST['password'];
 $select_data=mysql_query("select * from member where Email='$email' and Password='$pass'");
 if($row=mysql_fetch_array($select_data))
 {
  $_SESSION['email']=$row['email'];
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
?>