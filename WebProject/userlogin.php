<?php
session_start();
//check for required fields from the form
if ((!filter_input(INPUT_POST, 'username'))
        || (!filter_input(INPUT_POST, 'password'))) {
//if ((!isset($_POST["username"])) || (!isset($_POST["password"]))) {
	header("Location: userlogin.html");
	exit;
}

//connect to server and select database
$mysqli = mysqli_connect("localhost", "cs264user", "letmein", "testDB");

//For more info about mysqli functions, go to the site below:
//http://www.w3schools.com/php/php_ref_mysqli.asp

/* create and issue the query
$sql = "SELECT f_name, l_name FROM auth_users WHERE username = '".$_POST["username"].
        "' AND password = PASSWORD('".$_POST["password"]."')";
*/

//create and issue the query
$targetname = filter_input(INPUT_POST, 'username');
$targetpasswd = filter_input(INPUT_POST, 'password');
$sql = "SELECT firstname, lastname FROM members WHERE email = '".$targetname.
        "' AND password = PASSWORD('".$targetpasswd."')";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

//get the number of rows in the result set; should be 1 if a match
if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $targetname ;

	//if authorized, get the values of f_name l_name
	while ($info = mysqli_fetch_array($result)) {
		$firstname = stripslashes($info['firstname']);
		$lastname = stripslashes($info['lastname']);
	}

	
	//set authorization cookie using curent Session ID
	setcookie("auth", session_id(), time()+60*30, "/", "", 0);

	//create display string
	$display_block = "   
        <body>
        
	<h2>".$firstname." ".$lastname." is authorized!</h2>
	<h2>Authorized Users' Menu:</h2>
        <div id='parent'>
        
        <fieldset> <legend><h2> File to Upload</h2></legend>
        <p><strong>Please Choice a file to upload: </p></strong>
        <form action ='Fileupload.php' enctype='multipart/form-data' method ='POST' id='formstyle'>
        <input type ='hidden' name='Max_size' value ='40000'/>
        <p>Brower<input type='file' name='fileupload' multiple/></p>
        <p><input type='submit' value='upload'/></p>
        </form>
        </fieldset>
        </div>
        <header style=\"text-align: right\"> <a href=\"logout.php\">
          <img src=\"greenlogout.png\" alt=\"Logout\" width=\"65\" height=\"25\"></img></a></header>
        </body>";
} else {
	//redirect back to login form if not authorized
	header("Location: userlogin.html");
	exit;
}
?>
<html>
<style>
body{
    background-image: url(https://media.giphy.com/media/gCUNAjq0nZzkk/giphy.gif);
    background-size: cover;
}
#parent {
   display: table;
   width: 100%;
}
#formstyle {
   color: whitesmoke;
   display: table-cell;
   text-align: center;
   vertical-align: middle;
}
p,h2,fieldset{
    color: whitesmoke;
}
li{
  color: whitesmoke; 
  list-style-type: none;
}

    </style>
<head>
<title>User Login</title>
</head>
<body>
<?php echo "$display_block"; ?>
    <a href="schdule.html" style="color: whitesmoke; font-size: 25px">Create you own schdule plan with the estimate traveling cost !</a>

</body>
</html>

