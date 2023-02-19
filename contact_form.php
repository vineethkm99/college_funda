<?php 
$name = $_POST['name1'] ;
$email = $_POST['email1'] ;
$message = $_POST['message1'] ;
$contact = $_POST['contact1'] ;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedetails";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO feedback (Name, Email, Message , Contact)
    VALUES ('$name' , '$email', '$message' , '$contact')";
    // use exec() because no results are returned
    $conn->exec($sql);
	echo "Thanks for your suggestion.";
    }
catch(PDOException $e)
    {
    // echo $sql . "<br>" . $e->getMessage();
    echo "Sorry, There is an error on our side.";
    }

$conn = null;
?>