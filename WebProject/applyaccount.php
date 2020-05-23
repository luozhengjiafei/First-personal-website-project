<?php
    session_start();
 
if (!filter_input(INPUT_POST, 'submit')) {
	header("Location: applyaccount.html");
	exit;
}

$mysqli = mysqli_connect("localhost", "cs264user", "letmein", "testDB");



$targetfirstname = filter_input(INPUT_POST, 'firstname');
$targetlastname = filter_input(INPUT_POST, 'lastname');
$targetemail = filter_input(INPUT_POST, 'email');
$targetpassword = filter_input(INPUT_POST, 'password');
$targetage = filter_input(INPUT_POST, 'age');
$targetgender = filter_input(INPUT_POST, 'gender');

if($targetgender == 0 ){
    $targetgender = "male";
}
elseif($targetgender == 1){
    $targetgender = "female";
}

strtolower($targetemail);
$sql = "SELECT email from members where email = '$targetemail'";


$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

if (mysqli_num_rows($result) == 1) {
    echo "Your " .$targetemail. " email address has already been used.Try again !<br>";  
    header("Location: applyaccount.php");
    exit;
}
 else {
  $sql = "INSERT INTO members (firstname,lastname,email,password,age,gender) VALUES ('$targetfirstname','$targetlastname','$targetemail',PASSWORD('$targetpassword'),'$targetage','$targetgender')";
  $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
  if($result == TRUE){
        mkdir("/var/www/html/uploaddir/".$targetemail , 0755);   //From the picture his permission is actually 0755,but I just followed the instruction made it as 0733.
        echo"<body><p style='font-size:25px'>Your account: ".$targetemail. "  has just been created.Thank you for joining us.</p><br></body>";
 }
  else{
        echo "Fail to store data.";
    }
 }
 ?>
<html>
    <style>
        body{
            background-image: url(https://media.giphy.com/media/3oKIPtjElfqwMOTbH2/giphy.gif);
            background-size: cover;
            color: whitesmoke;
        }
        p{
            color: whitesmoke;
        }
        img{
            height: 100px;
            width: 250px;
        }
    </style>
    <body>
        <a href = "userlogin.html"><img src="https://t3.ftcdn.net/jpg/00/30/04/86/240_F_30048672_i821J9He2xtIkyxQTPAX7Rsn1s8FUI72.jpg"></img></a> 
    </body>
</html>
 