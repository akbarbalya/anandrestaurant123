<?php
$servername = "localhost";
$username = "root";
$passwordname = "";
$dbname = "order";

$conn= mysqli_connect($servername,$username,$passwordname,$dbname);

if($conn){
  //  echo "connected";
}
else{
   echo "notconnect".mysqli_connect_error (); 
}

?>