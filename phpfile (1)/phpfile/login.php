<?php
echo "Registration Successful<br>";

$usr= $_POST['un'];
$ful= $_POST['fn'];
$em= $_POST['em'];
$ph= $_POST['ph'];
$pass= $_POST['pw'];
$gender= $_POST['ra'];
$edu= $_POST['cb'];

echo "Username: ".$usr;
echo "<br>Fullname: ".$ful;
echo "<br>Email: ".$em;
echo "<br>Phone: ".$ph;
echo "<br>Password : ".$pass;
echo "<br>Gender: ".$gender;
echo "<br>Education: ".$edu;

?>