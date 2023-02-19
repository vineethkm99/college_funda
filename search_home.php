<?php 
	$keyword=$_GET["q"];

	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=collegedetails", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
	    console.log("Connection failed: " . $e->getMessage());
	}

	$sql="SELECT Id,CollegeName FROM collegedetails1 WHERE CollegeName LIKE '%".$keyword."%'";
	$q=$conn->prepare($sql);
	$q->execute();
	$i=0;
	
	while (($r=$q->fetch(PDO::FETCH_ASSOC))&& $i<=6) {
	    echo"<div class='searchelement'><a href='tryclgpage.php?data=".$r['Id']."&pageid=1'>".$r['CollegeName']."</a></div>";
	    $i++;
	}
	
	if($i==0){
		echo"<a>Sorry,No colleges found</p>";
	}
?>