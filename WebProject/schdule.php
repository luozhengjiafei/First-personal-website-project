<html>
<head> 
    <style>
    th,td,table {
        border: 1px solid white;

    }
    </style>
</head>
<?php
session_start();
$email = $_SESSION['email'];
// Check to see if the current access has been authorized
$mysqli = mysqli_connect("localhost", "cs264user", "letmein", "testDB");
if ((filter_input(INPUT_POST,'Kamloops')== '1')&&( filter_input(INPUT_POST,'Banff')== '1')&&( filter_input(INPUT_POST,'Kelowna')== '1')){
    $sql = "SELECT schdules.Kamloops1, schdules.Banff1,schdules.Kelowna1,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email your schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
        while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops1'];
            $Banff = $rowResult['Banff1'];
            $Kelowna = $rowResult['Kelowna1'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '1')&& (filter_input(INPUT_POST,'Banff')== '1')&& (filter_input(INPUT_POST,'Kelowna')== '2')){
    $sql = "SELECT schdules.Kamloops1, schdules.Banff1,schdules.Kelowna2,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
         while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops1'];
            $Banff = $rowResult['Banff1'];
            $Kelowna = $rowResult['Kelowna2'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '1')&& (filter_input(INPUT_POST,'Banff')== '2')&& (filter_input(INPUT_POST,'Kelowna')== '1')){
    $sql = "SELECT schdules.Kamloops1, schdules.Banff2,schdules.Kelowna1,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
         while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops1'];
            $Banff = $rowResult['Banff2'];
            $Kelowna = $rowResult['Kelowna1'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '1')&& (filter_input(INPUT_POST,'Banff')== '3')&& (filter_input(INPUT_POST,'Kelowna')== '1')){
    $sql = "SELECT schdules.Kamloops1, schdules.Banff3,schdules.Kelowna1,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
         while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops1'];
            $Banff = $rowResult['Banff3'];
            $Kelowna = $rowResult['Kelowna1'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '1')&& (filter_input(INPUT_POST,'Banff')== '2')&& (filter_input(INPUT_POST,'Kelowna')== '2')){
    $sql = "SELECT schdules.Kamloops1, schdules.Banff2,schdules.Kelowna2,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
         while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops1'];
            $Banff = $rowResult['Banff2'];
            $Kelowna = $rowResult['Kelowna2'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '1')&& (filter_input(INPUT_POST,'Banff')== '3')&& (filter_input(INPUT_POST,'Kelowna')== '2')){
    $sql = "SELECT schdules.Kamloops1, schdules.Banff3,schdules.Kelowna2,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
        while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops1'];
            $Banff = $rowResult['Banff3'];
            $Kelowna = $rowResult['Kelowna2'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '2')&& (filter_input(INPUT_POST,'Banff')== '1')&& (filter_input(INPUT_POST,'Kelowna')== '1')){
    $sql = "SELECT schdules.Kamloops2, schdules.Banff1,schdules.Kelowna1,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
         while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops2'];
            $Banff = $rowResult['Banff1'];
            $Kelowna = $rowResult['Kelowna1'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '2')&& (filter_input(INPUT_POST,'Banff')== '2')&& (filter_input(INPUT_POST,'Kelowna')== '1')){
    $sql = "SELECT schdules.Kamloops2, schdules.Banff2,schdules.Kelowna1,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
         while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops2'];
            $Banff = $rowResult['Banff2'];
            $Kelowna = $rowResult['Kelowna1'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '2')&& (filter_input(INPUT_POST,'Banff')== '3')&& (filter_input(INPUT_POST,'Kelowna')== '1')){
    $sql = "SELECT schdules.Kamloops2, schdules.Banff3,schdules.Kelowna1,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
         while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops2'];
            $Banff = $rowResult['Banff3'];
            $Kelowna = $rowResult['Kelowna1'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '2')&& (filter_input(INPUT_POST,'Banff')== '2')&& (filter_input(INPUT_POST,'Kelowna')== '2')){
    $sql = "SELECT schdules.Kamloops2, schdules.Banff2,schdules.Kelowna2,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
        while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops2'];
            $Banff = $rowResult['Banff2'];
            $Kelowna = $rowResult['Kelowna2'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}
elseif((filter_input(INPUT_POST,'Kamloops')== '2')&& (filter_input(INPUT_POST,'Banff')== '3')&& (filter_input(INPUT_POST,'Kelowna')== '2')){
    $sql = "SELECT schdules.Kamloops2, schdules.Banff3,schdules.Kelowna2,schdules.cost,members.email from schdules,members WHERE members.email = schdules.email;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result)< 1){
        header ("Location: schdule.html");
        exit;
    }
    else {
        echo "<h2> $email Schdule: </h2>";
        echo "<table>";
        echo "<tr><th>Kamloops</th><th>Banff</th><th>Kelowna</th><th>Cost</th><th>Email</th></tr>";
         while ($rowResult = mysqli_fetch_array($result)){
            $Kamloops = $rowResult['Kamloops2'];
            $Banff = $rowResult['Banff3'];
            $Kelowna = $rowResult['Kelowna2'];
            $Cost = $rowResult['cost'];
            $Email = $rowResult['email'];
     
            echo "<tr> <td>".$Kamloops."</td>"
                    . "<td>".$Banff."</td>"
                    . "<td>".$Kelowna."</td>"
                    . "<td>".$Cost."</td>"
                    . "<td>".$Email."</td></tr>";
        
        }  
        echo "</table>";
    } 
}


?>

<html>
<head>
<title>Schdule Page</title>
</head>
<style>
body{
    background-image: url(https://media.giphy.com/media/RoFXqXWN639Qs/giphy.gif);
    background-size: cover;
}
table{
    align: center;
    color:whitesmoke;
    border-color: whitesmoke;
    
}
h2,p{
    color: whitesmoke;
}
</style>
<body>
<header style="text-align: center"> <a href="logout.php">
<img src="greenlogout.png" alt="Logout" width="65" height="25"></img></a></header>
<?php echo "<body>".
        "$display_block"."</body>"; ?>
    
</body>
</html>
