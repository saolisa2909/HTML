<?php
 
$dbcon = mysqli_connect('localhost','root', '', 'dbcontactus') or die ('not Connected');

if($dbcon){

  $query = 'Insert into tbluser(Name, Email,Number,Description) Values("'.$_POST["Name"].'", "'.$_POST["Email"].'", "'.$_POST["Number"].'","'.$_POST["Description"].'")';
  mysqli_query($dbcon,$query);
header('location:Contact_Us.php');
}else {
  echo"Connection UnSuccessfull";
}
?>