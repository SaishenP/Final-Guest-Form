<?php
require 'config.php';
if(isset($_POST["submit"])){
  $FullName = $_POST["FullName"];
  $DOB = $_POST["DOB"];
  $Email = $_POST["Email"];
  $Phone = $_POST["Phone"];
  $Gender = $_POST["Gender"];
  $IDnum = $_POST["IDnum"];
  $Address1 = $_POST["Address1"];
  $Address2 = $_POST["Address2"];
  $Address3 = $_POST["Address3"];
  $City = $_POST["City"];
  $Suburb = $_POST["Suburb"];
  $Province = $_POST["Province"];

  $user = mysqli_query($conn, "SELECT * FROM tb_information WHERE FullName = '$FullName' OR Email = '$Email'");
  if(mysqli_num_rows($user) > 0){
    echo
    "<script> alert('FullName/Email Has Already Been Taken'); </script>";
  }
  else{
    $query= "INSERT INTO tb_information VALUES('','$FullName','$DOB','$Email','$Phone','$Gender','$IDnum','$Address1','$Address2','$Address3','$City','$Suburb','$Province')";
    mysqli_query($conn, $query);
    "<script> alert('Information has been submitted!'); </script>";
  }
}
?>