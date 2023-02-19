<!DOCTYPE html>
<html lang="en">
<head>
  <title>Campus Fundae</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="collegepage.css">
</head>
<body id="myPage">

<?php
  $clgid = $_REQUEST["data"];
  $page_id = $_REQUEST['pageid'];
  $servername = "localhost";
  $username = "root";
  $password = "";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=collegedetails", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
  catch(PDOException $e)
      {
      console.log("Connection failed: " . $e->getMessage());
      }

  $sql="SELECT * FROM collegedetails1 WHERE Id=".$clgid ;
  $q=$conn->prepare($sql);
  $q->execute();
  $row = $q->fetch(PDO::FETCH_ASSOC);
  if($row === false){
      echo "<script type='text/javascript'>alert('Sorry,College details are missing...Click ok to redirect to homepage');window.stop();window.location.href='homepage.html';</script>";
  } 
  $i=0;
  $columns = array();
  foreach ($row as $key => $value) {
  	$columns[$i] = $key;
  	$i++;
  }
?>

<div class="container-fluid head1">
  
  <div id="logo"><a href="homepage.php">Campus Fundae</a>
    <script>
      (function() {
        var cx = '010405588079499945329:wwcifnxrufg';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    <gcse:search></gcse:search>
  </div>
</div>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand""><?php echo $row['CollegeName']?></div>
    </div>
   
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php
        $subject_array = array('College', 'Campuslife', 'Events', 'Placements', 'Study Material');
        for($i=1;$i<=5;$i++){
        	echo "<li>";
        	$x = 6*$i-5;
        	echo '<div class="dropdown">
             	<button class="dropbtn drop1"><a href="tryclgpage.php?data='.$clgid.'&pageid='.$x.'">'.$subject_array[$i-1].'</a></button>
             	';
        	echo '<div class="dropdown-content">
        	';
        	for($j=1; $j<=6;$j++){
        		$k = (6*$i)+$j-6;
        		if($k<count($columns)){
	        		echo '<a href="tryclgpage.php?data='.$clgid.'&pageid='.$k.'">'.$columns[$k].'</a>
	        		';
	        	}else{
	        		break;
	        	}
        	}
        	echo '</div>
          		</div>
          ';
        	echo "</li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox"> <!-- Wrapper for slides -->
    <div class="item active">
      <img src="slideshow3.jpg" class="img-caro img-center"></img>
    </div>
    <div class="item">
      <img src="slideshow9.jpg" class="img-caro img-center"></img>
    </div>
    <div class="item">
      <img src="slideshow12.jpg" class="img-caro img-center"></img>
    </div>
    <div class="item">
      <img src="slideshow17.jpg" class="img-caro img-center"></img>
    </div>
  </div>
              
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" width="100px">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <!--<span class="sr-only">Previous</span>-->
  </a>

  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid text-center" id="wholeinfo">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
    	<div id="sidenav-left">
    	<?php
        	if(!($page_id%6)){
	        	$x=$page_id/6;
	        	$y=(6*(int)$x)-6;
	        }else{
	        	$x=$page_id/6;
	        	$y=6*(int)$x;
	        }
    		for($i=1;$i<=6;$i++){
    			
    			$k=$y+$i;
    			if($k<count($columns)){
	    			echo "<p>";
	    			echo '<a href="tryclgpage.php?data='.$clgid.'&pageid='.$k.'">'.$columns[$k].'</a>';
	    			echo "</p>";
	    		}else{
	    			break;
	    		}
    		}
    	?>
    	</div>
    </div>
    <div class="col-sm-7 text-left" id="matter">
    	<?php 
    		$x= $columns[$page_id];
    		echo $row[$x];
    		// echo print_r($row);
    	?>
    </div>
    <div class="col-sm-2 sidenav">
      <div id="sidenav-right">
        <div class="well">
          <p>ADS</p>
        </div>
        <div class="well">
          <p>ADS</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php");?>
<?php include("modal_meet_team.php");?>
<?php include("modalfeedback.php");?>


<script type="text/javascript">
  $(document).ready(function(){
    if($(this).width() < 230){
      $(".navbar").affix({offset: {top: "127"}  }); 
    } else if ($(this).width() < 480) {
      $(".navbar").affix({offset: {top: "92"}  }); 
    } else {
      $(".navbar").affix({offset: {top: "57"}  }); 
    }
  });
  var i="";
</script>
<script type="text/javascript" src="feedbackvalidator.js"></script>

</body>
</html>
