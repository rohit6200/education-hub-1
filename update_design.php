
<?php include("connection.php");
session_start();

$id =  $_GET['id'];
$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{

}
else{
    header('location:index.php');
}

$query = "SELECT * FROM form where Id='$id'";
$data = mysqli_query($conn , $query);

$total = mysqli_num_rows($data);
($result = mysqli_fetch_assoc($data));

$language = $result['language'];
$language1 = explode(",", $language);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update Details</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="POST">
        <div class="title">
           Update Student Details
        </div>
        <div class="form">
            <div class="input_field">
                <label>Full Name</label>
                <input type="text" value="<?php echo $result['fname'];?>" class="input" name="fname" required>
            </div>
            <div class="input_field">
                <label>Pin Code</label>
                <input type="text" value="<?php echo $result['PIN'];?>" class="input" name="lname" required>
            </div>
            <div class="input_field">
                <label>Password</label>
                <input type="password" value="<?php echo $result['password'];?>" class="input" name="password" required>
            </div>
            <div class="input_field">
                <label>Confim Password</label>
                <input type="password" value="<?php echo $result['cppassword'];?>" class="input" name="conpassword" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">

                <select name="gender" required>
                    <option value="">select</option>
                    <option value="male"
                    <?php
                    if($result['gender'] == 'male')
                    {
                        echo "selected";
                    }
                    ?>
                    >Male</option>
                    <option value="female"
                    <?php
                    if($result['gender'] == 'female')
                    {
                    echo "selected";
                    }
                    ?>
                    >Female</option>
                    <option value="Transgender"
                    <?php
                    if($result['gender'] == 'Transgender')
                    {
                    echo "selected";
                    }
                    ?>
                    >Transgender</option>
                </select>
                </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" value="<?php echo $result['email'];?>" class="input" name="email" required>
            </div>
            <div class="input_field">
            <label>Phone Number</label>
            <input type="text" value="<?php echo $result['phone'];?>" class="input" name="phone" >
            </div>

            <div class="input_field">
            <label style="margin-right: 100px">caste</label>
            <input type="radio" name="r1" value="General" required
            ><label style="margin-left: 5px;">General</label>
            <input type="radio" name="r1" value="OBC" required>
            <label style="margin-left: 5px;">OBC</label>
            <input type="radio" name="r1" value="SC" required>
            <label style="margin-left: 5px;">SC</label>
            <input type="radio" name="r1" value="ST" required>
            <label style="margin-left: 5px;">ST</label>
            </div>
            <div class="input_field">
            <label style="margin-right: 100px">Language</label>
            <input type="checkbox" name="language[]" value="HINDI"

            >
            <label style="margin-left: 5px;">HINDI</label>

            <input type="checkbox" name="language[]" value="ENGLISH">
            <label style="margin-left: 5px;">ENGLISH</label>

            <input type="checkbox" name="language[]" value="GUJRATI">
            <label style="margin-left: 5px;">GUJRATI</label>
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address" required>
                 <?php echo $result['address']; ?>
                </textarea>
            </div>

            <div class="input_field terms">
                <label class="check" required>
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <p required>Agree to terms and conditions</p>
            </div>
            <div class="input_field">
            <input type="submit" value="Update Details" class="btn" name="update">
            </div>
</div>
</form>
</div>
</body>
</html>
<?php
if($_POST['update'])
{
    $fname   = $_POST['fname'];
    $PIN   = $_POST['PIN'];
    $pwd     = $_POST['password'];
    $cpwd    = $_POST['conpassword'];
    $gender  = $_POST['gender'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $caste   = $_POST['r1'];
    $address = $_POST['address'];

    if($fname !="" && $PIN !="" && $pwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
    {

    $query = "update form set fname='$fname',lname='$PIN',
    password='$pwd',cppassword='$cpwd',gender='$gender'
    ,email='$email',phone='$phone',caste='$caste',address='$address' WHERE id='$id'";

  $data = mysqli_query($conn,$query);
  if($data)
  {
    echo "<script>alert('Record updated')</script>";
    ?>

    <meta http-equiv = "refresh" content = "0; 
    url= http://localhost/crud/display.php" />

    <?php

  }
  else
  {
    echo "Failed Record";
  }
  }
}
?>
