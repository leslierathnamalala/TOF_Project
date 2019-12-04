<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $email=$_POST['email'];
 $pass=$_POST['pass'];

 $FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$DLNumber=$_POST['DLNumber'];
$Phone=$_POST['Phone'];

$CardName=$_POST['CardName'];
$CardNumber=$_POST['CardNumber'];
$ExpMonth=$_POST['ExpMonth'];
$ExpYear=$_POST['ExpYear'];
$CVV=$_POST['CVV'];
$address=$_POST['address'];

try {
 $q=mysqli_query($con,"INSERT INTO `member` (`Email`,`Password`,`FirstName`,`LastName`,`DL`,`tel`,`CardName',`CardNumber`,`EMonth`,`Eyear`,`CVV`,`BillingAdd`) VALUES ('$email','$pass','$FirstName','$LastName','$DLNumber','$Phone','$CardName','$CardNumber','$ExpMonth','$ExpYear','$CVV','$address')");
 if($q)
  echo "success";
 else
  echo "error";
}
catch (Exception $e) {
    echo $e->getMessage();
}
  
 }
 ?>
