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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guest Registration</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/dd8ca4d5e5.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <header>Guest Registration</header>

      <form action="information.php" method="post">
        <div class="firstform">
          <div class="detail_personal">
            <span class="title">Personal Details</span>

            <div class="fields">
              <div class="input-field">
                <label>Full Name</label>
                <input type="text" placeholder="Enter your Name" name="FullName" required />
              </div>
              <div class="input-field">
                <label>Date of Birth</label>
                <input type="date" placeholder="Enter your Name" name="DOB" required />
              </div>
              <div class="input-field">
                <label>Email</label>
                <input type="email" placeholder="Enter your Email" name="Email" required />
              </div>
              <div class="input-field">
                <label>Phone Number</label>
                <input
                  type="tel" placeholder="Enter your Phone Number" name="Phone" required/>
              </div>
              <div class="input-field">
                <label>Gender</label>
                <input type="text" placeholder="Enter your Gender" name="Gender" required />
              </div>
              <div class="input-field">
                <label>ID Number</label>
                <input type="email" placeholder="Enter your ID Number" name="IDnum" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="form_Second">
          <div class="details_address">
            <span class="title">Address Details</span>

            <div class="fields">
              <div class="input-field">
                <label>Address 1</label>
                <input type="text"placeholder="Enter your Address " name="Address1" required/>
              </div>
              <div class="input-field">
                <label>Address 2</label>
                <input type="text" placeholder="Enter your Address " name="Address2" required/>
              </div>
              <div class="input-field">
                <label>Address 3</label>
                <input type="text" placeholder="Enter your Address" name="Address3" required />
              </div>
              <div class="input-field">
                <label>City</label>
                <input type="text" placeholder="Enter your City" name="City" required/>
              </div>
              <div class="input-field">
                <label>Suburb</label>
                <input type="text" placeholder="Enter Suburb" name="Suburb" required />
              </div>
              <div class="input-field">
                <label>Province</label>
                <input type="text" placeholder="Enter Province"  name="Province" required />
              </div>
            </div>
            <div class="button">
                <button class ="Btn">
                <input type="submit">
                <i class="fa fa-arrow-right"></i>
                </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
