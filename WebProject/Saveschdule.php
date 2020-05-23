<?php
     session_start();
 
if (!filter_input(INPUT_POST, 'submit')) {
	header("Location: applyaccount.html");
	exit;
}

$mysqli = mysqli_connect("localhost", "cs264user", "letmein", "testDB");



$Kamloops1 = filter_input(INPUT_POST, 'Kamloops1');
$Kamloops2 = filter_input(INPUT_POST, 'Kamloops2');
$Banff1 = filter_input(INPUT_POST, 'Banff1');
$Banff2 = filter_input(INPUT_POST, 'Banff2');
$Kelowna1 = filter_input(INPUT_POST, 'Kelowna1');
$Kelowna2 = filter_input(INPUT_POST, 'Kelowna2');
$cost = filter_input(INPUT_POST, 'Hotel');


  $sql = "INSERT INTO schdule (Kamloops1,Kamloops2,Banff1,Banff2,Kelowna1,Kelowna2,cost) VALUES ('$Kamloops1','$Kamloops2','$Banff1','$Banff2','$Kelowna1','$Kelowna2','$cost')";
  $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
  if($result == TRUE){
        echo"Your schdule has just been created.Thank you for using our schdule generater.<br>";
        echo "<a href = 'index.php'>Go to home page</a>";
 }
  else{
        echo "Fail to generate schdule.";
    }
