<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>form</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST"  enctype="multipart/form-data">
        <div class="title">
           Registation form
        </div>
        <div class="form">

        <div class="input_field">
                <label>Upload Image</label>
                <input type="file" name="uploadfile" style="width:100%;">
            </div>
            <div class="input_field">
                <label>Name</label>
                <input type="text" class="input" name="fname" required>
            </div>
            <div class="input_field">
                <label>last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>
            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" required>
            </div>
            <div class="input_field">
                <label>Confim Password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender" required>
                    <option value="Not Selected">select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="female">Transgender</option>
                </select>
                </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" >
            </div>

            <div class="input_field">
                <label style="margin-right: 100px">Caste</label>
                <input type="radio" name="r1" value="GENERAL" required><label style="margin-left: 5px;">GENERAL</label>
                <input type="radio" name="r1" value="OBC" required><label style="margin-left: 5px;">OBC</label>
                <input type="radio" name="r1" value="SC" required><label style="margin-left: 5px;">SC</label>
                <input type="radio" name="r1" value="ST" required><label style="margin-left: 5px;">ST</label>
            </div>
            <div class="input_field">
                <label style="margin-right: 100px">Language</label>
                <input type="checkbox" name="language[]" value="HINDI" ><label style="margin-left: 5px;">HINDI</label>
                <input type="checkbox" name="language[]" value="ENGLISH"><label style="margin-left: 5px;">ENGLISH</label>
                <input type="checkbox" name="language[]" value="GUJRATI"><label style="margin-left: 5px;">GUJRATI</label>
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>

            <div class="input_field terms">
                <label class="check" requied>
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>
            <div class="input_field">
            <input type="submit" value="Register" class="btn" name="register">
            </div>
</div>
</form>
</div>
</body>
</html>
<?php
if($_POST['register'])
{

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
// echo $folder;
move_uploaded_file($tempname,$folder);
 

    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $pwd     = $_POST['password'];
    $cpwd    = $_POST['conpassword'];
    $gender  = $_POST['gender'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $caste  = $_POST['r1'];

    $lang  = $_POST['language'];
    $lang1 = implode(",",$lang);
    $address = $_POST['address'];
    
    if($fname !="" && $lname !="" && $pwd !="" && $gender !="" && $email !="" && $phone !="" &&  $caste !="" &&  $lang1 !="" && $address !="")
    {

  $query = "INSERT INTO form(std_image,fname,PIN,password,cppassword,gender,email,phone,caste,language,address)
   values('$folder','$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$lang1','$address')";

  $data = mysqli_query($conn,$query);

  if($data)
  {
    echo "<script> alert('Data Inserted into Database') </script>";
  }
 
  else
  {
    echo "<script> alert('Data Inserted into Database Failed') </script>";
   }
}
}
?>
