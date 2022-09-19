<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname="crud";
$conn=mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die('Could not Connect My Sql:' . mysql_error());
}

////// Alternative Code in(PDO)
// $servername='localhost';
// $username='root';
// $password='';
// $dbname = "crud";
// try {
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $city_name = $_POST['city_name'];
//     $email = $_POST['email'];
//     date_default_timezone_set("Asia/Calcutta");
//     $insertdate = date("Y-m-d H:i:s");
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     /* set the PDO error mode to exception */
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "INSERT INTO employee (first_name,last_name,city_name,email)
//     VALUES ('$first_name', '$last_name','$city_name','$email')";
//     $conn->exec($sql);
//     echo "New record created successfully";
//     }
// catch(PDOException $e)
//     {

//     	echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
?>