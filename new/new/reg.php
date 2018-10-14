
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php 
$fullnameErr = $emailErr = $passwordErr = $genderErr = $confirmpasswordErr ="";
$username = $fullname = $email = $phone = $password = $confirmpassword = $gender = $education = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
    $username = test_input($_POST["username"]);
	$phone = test_input($_POST["phone"]);
	
  if (empty($_POST["fullname"])) {
    $fullnameErr = "Name is required";
  } else {
    $fullname = test_input($_POST["fullname"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
      $fullnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  if (empty($_POST["password"]))  {
    $passwordErr = "Password is required";
  }
   else {
    $password = test_input($_POST["password"]);
	}
   if (empty($_POST["confirmpassword"])) {
    $confirmpasswordErr = "Confirm Password is required";
  }
   else {
 $confirmpassword = test_input($_POST["confirmpassword"]);
 }
    if ($_POST['password'] != $_POST['confirmpassword'])
 {
    $confirmpasswordErr ="Oops! Password did not match! Try again. ";
 }
 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<h2>Sign up form</h2>
<p><span class="error">*field required</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<form name ="" method = "post" action ="login.php">
username:<input type="text" name = "username" value="<?php echo $username;?>"/>
<br>
Fullname:<input type="text" name = "fullname" value="<?php echo $fullname;?>">
  <span class="error">* <?php echo $fullnameErr;?></span>
<br>
Email:<input type="text" name = "email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
<br>
Phone:<input type = "text" name = "phone" value="<?php echo $phone;?>"/>
<br>
Password:<input type = "password" name ="password" value="<?php echo $password;?>"/>
 <span class="error">* <?php echo $passwordErr;?></span>
<br>
Confirm Password:<input type="password" name = "confirmpassword" value="<?php echo $confirmpassword;?>"/>
 <span class="error">* <?php echo $confirmpasswordErr;?></span>
<br>
Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
<br>
Education: <input type = "checkbox" name ="education[]" value = "SSC"/>SSC
 <input type = "checkbox" name ="education[]" value = "HSC"/>HSC
 <input type = "checkbox" name ="education[]" value = "BSC"/>BSC
 <input type = "checkbox" name ="education[]" value = "MSC"/>MSC
 <br>
 
<input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $fullname;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $password;
echo "<br>";
echo $confirmpassword;
echo "<br>";
echo $gender;
echo "<br>";
echo $education;
?>
</body>
</html>