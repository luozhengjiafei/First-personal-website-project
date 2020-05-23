
<?php echo "<body style='background-image: url(https://media.giphy.com/media/OxwuhoLnIcWk0/giphy.gif);background-size: cover;'></body>";
session_start();

$email = $_SESSION['email'];
$target_path = "/var/www/html/uploaddir/".$email."/";
$file_path = $target_path.basename($_FILES['fileupload']['name']);

if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $file_path)) {
    		echo "The file \"".basename($_FILES['fileupload']['name']). 
    			"\" has been uploaded. <br/>";
                echo"<a href='index.php'>Back to User Page</a>";
	} else {
    		echo "There was an error uploading the file, please try again! <br/>";
	}
?>