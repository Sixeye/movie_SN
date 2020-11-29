<?php
$con = mysqli_connect("localhost", "root", "root", "movie_SN");
if(mysqli_connect_errno()){
    echo "Fail to connect: " . mysqli_connect_errno();
}

// Declaring variables to avoid errors

$fname="";
$lname="";
$email="";
$email2="";
$password="";
$password2="";
$date="";
$error_array=""; //retrieve any kind of error

if(isset($_POST['register_button']))
{
    // Firstname
    $fname = strip_tags($_POST['reg_fname']);
    $fname = str_replace(' ','', $fname);
    $fname = ucfirst(strtolower($fname));

    // Lastname
    $lname = strip_tags($_POST['reg_lname']);
    $lname = str_replace(' ','', $lname);
    $lname = ucfirst(strtolower($lname));

    // Email
    $email = strip_tags($_POST['reg_email']);
    $email = str_replace(' ','', $email);
    $email = ucfirst(strtolower($email));

    // Email2
    $email2 = strip_tags($_POST['reg_email2']);
    $email2 = str_replace(' ','', $email2);
    $email2 = ucfirst(strtolower($email2));

    // Password
    $password = strip_tags($_POST['reg_password']);
    $password = str_replace(' ','', $password);
    $password = ucfirst(strtolower($password));

    // Password2
    $password2 = strip_tags($_POST['reg_password2']);
    $password2 = str_replace(' ','', $password2);
    $password2 = ucfirst(strtolower($password2));

    $date= date("Y-m-d");

    if($email == $email2)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        }else{
            echo "Invalid format";
        }

    }else{
        echo "Emails don't match";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
</head>
<body>

<form action="register.php" method="post">
    <input type="text" name="reg_fname" placeholder="first Name" required>
    <br/>
    <input type="text" name="reg_lname" placeholder="last Name" required>
    <br/>
    <input type="email" name="reg_email" placeholder="Email" required>
    <br/>
    <input type="email" name="reg_email2" placeholder="Confirm email" required>
    <br/>
    <input type="password" name="reg_password" placeholder="Password" required>
    <br/>
    <input type="password" name="reg_password2" placeholder="Confirm Password" required>
    <br/>
    <input type="submit" name="register_button" value="Register">
</form>

</body>
</html>