<?php
include 'db.php';

date_default_timezone_set('kolkata');
$date=date("Y-m-d h:i:sa");
  
  $name= $_POST['name'];
  $mobile = $_POST['mobile'];
  $msg = $_POST['msg'];
 
  $insert = "insert into pamlate(id,name,mobile,msg,date) values('id','$name','$mobile','msg','$date')";
      
      if(mysqli_query($conn,$insert)) 
      {
        echo "Data Saved";
      }

      else 
      {
        echo "Data Not Saved";
      }


if(!$conn) 
{
  echo "server !";
}


?>