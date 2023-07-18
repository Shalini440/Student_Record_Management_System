<div class="welcome"style="margin-left:450px;background-color:pink,padding:0px;" >
<div style="font-family:algerian" >
<?php
session_start();
if ($_SESSION['t2']) {
echo "Welcome"." "." ".$_SESSION['t2'];
}
else{
header('location:login.php');
}
?> </div><div style="float:left"> <img onclick="dis()" style="height:400px;margin-left:490px;" src="wel2.png" alt="">
</div>
</div>
<html lang="en" dir="ltr">
  <head>
  <meta name="viewport"
  		content="width=device-width, initial-scale=1">
      <script src="../bootstrap/jquery-3.6.0.js"></script>
      <script src="../bootstrap/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../bootstrap/bootstrap-4.6.0-dist/css/bootstrap.min.css">

  	<link rel="stylesheet" href=ss"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>
      home page admin
    </title>
<style media="screen">
    body{
      background-image: url('afterlogin.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      backdrop-filter:blur(8px);
      background-color: purple;
      margin:0;
      padding:0;
      top: 0;
    }
    /* Navigation bar styling */
    .menu-list {

      max-width: 300px;
      color: white;
      background-color: green;
      border-radius: 10px;

    }

    /* logo, navigation menu styling */
    .shruti {
      overflow: hidden;
      background-color: #111;
      width:250px;
      position: absolute;

    }

    /* stylinf navigation menu */
    .shruti #menus {
      display: none;
    }

    /* link specifi styling */
    .shruti a {
      text-decoration: none;
      color: white;
      padding: 14px 16px;
      font-size: 16px;
      display: block;
    }

    /* navigation toggle menu styling */
    .shruti a.icon {
      display: block;
      position: absolute;
      right: 0;
      top: 0;
    }

    /* hover effect on navigation logo and menu */
    .shruti a:hover {
      background-color: #ddd;
      color: black;
    }

      input{
        width:100px;
        height:50px;
        float:left;
      }
      h1{
        margin-left: 500px;
      }

      .welcome{
        height:70px;
        font-size: 40px;
        color:white;
        font-weight: bolder;
        position: absolute;
      }
      #hu3{
        position: absolute;
        display: none;
        margin-left: 900px;
      }
      span:hover{
        cursor:pointer;
    }

   .set:hover{
  cursor: pointer;
  color:black;
   }
</style>
<script type="text/javascript">
      function shrutiaf() {
      var x = document.getElementById("menus");
      if (x.style.display === "none") {
           x.style.display = "block";
         } else {
          x.style.display = "none";
        }
      }
  // Function to toggle the plus menu into minus
    function myFunction(x) {
      x.classList.toggle("fa-minus-circle");
    }
    //not displaying alert
    function dis() {
      document.getElementById("hu3").style.display = "block";
    }

    //closing icon of alert
    function sp2(){
      document.getElementById("hu3").style.display = "none";
    }
    function setting1() {
      document.body.style.backgroundImage="url('sdetailback.jpg')";
    }

</script>
</head>
  <body>
   <div class="menu-list">
  		<!-- Logo and navigation menu -->
  		<div class="shruti">
  			<a href="#"class="">DASHBOARD</a>
  			<div id="menus">
  				<a href="shrutinotice.php">NOTICE</a>
  				<a href="registration.php">NEW REGISTRATION</a>
  				<a href="edit.php">EDIT STUDENT DETAILS</a>
  				<a href="teacherinfo.php">TEACHER INFO</a>
	       <a href="studentinfo.php">STUDENT INFO</a>
         	<a class="set" onclick="setting1()" >SETTINGS</a>
         	<a href="logout.php">LOGOUT</a>
      </div><div style="padding:0px;">
     	<!-- Bar icon for navigation -->
  			<a style="padding:0px;margin-top:6px;" href="javascript:void(0);" class="icon"
  					onclick="shrutiaf()">
  <nav class="navbar navbar-light bg-light"> <span class="navbar-toggler-icon"></span></nav>
   </a></div>
  		</div>
  	</div>
<div class="card" style="width:16rem;position:absolute;margin-left:250px;margin-top:100px">
  <img style="width:100px;height:100px" src="teachercount.jpg" class="card-img-top" alt="wrong path">
  <div class="card-body">
    <h5 class="card-title">TOTAL TEACHERS</h5>
    <?php
	// Setting up connection with database project
	$connection = mysqli_connect("localhost", "root", "","project");

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Database connection failed.";
	}

	// query to fetch phone from
	// the table signup
	$query = "SELECT phone FROM signup";

	// Execute the query and store the result set
	$result = mysqli_query($connection, $query);

	if ($result)
	{
		// it return number of rows in the table.
		$row = mysqli_num_rows($result);

		if ($row)
			{
				echo "$row";
			}
		// close the result.
		mysqli_free_result($result);
	}

	// Connection close
	mysqli_close($connection);
?>
<br><br>

    <a href="teacherinfo.php" class="btn btn-primary">Teacher Information</a>
  </div>
</div>
<div class="card" style="width:16rem;position:absolute;margin-left:520px;margin-top:100px">
  <img style="width:100px;height:100px" src="studentcount.jpg" class="card-img-top" alt="wrong path">
  <div class="card-body">
    <h5 class="card-title">TOTAL STUDENTS</h5>
    <?php
  // Setting up connection with database project
  $connection = mysqli_connect("localhost", "root", "",
                        "intern");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Database connection failed.";
  }

  // query to fetch phone from
  // the table signup
  $query = "SELECT category FROM reg";

  // Execute the query and store the result set
  $result = mysqli_query($connection, $query);

  if ($result)
  {
    // it return number of rows in the table.
    $row = mysqli_num_rows($result);

    if ($row)
      {
        echo "$row";
      }
    // close the result.
    mysqli_free_result($result);
  }

  // Connection close
  mysqli_close($connection);
  ?>
  <br><br>
    <a href="studentinfo.php" class="btn btn-primary">Student Information</a>
  </div>
</div>
<div class="card" style="width:16rem;position:absolute;margin-left:790px; margin-top:100px">
  <img style="width:100px;height:100px" src="classcount.jpg" class="card-img-top" alt="wrong path">
  <div class="card-body">
    <h5 class="card-title">TOTAL CLASSROOMS</h5>
<p style="margin-bottom:24px">45</p>
    <a  href="studentinfo.php" class="btn btn-primary">Student Information</a>
  </div>
</div>
<div style="width:16rem;position:absolute; margin-top:450px;margin-left:400px">
<center>
<a href="classone.php"><button style="background-color:black;width:500px" type="button" class="btn btn-primary btn-lg btn-block">CLASS 1</button></a>
<a href="classtwo.php"><button style="width:500px"type="button" class="btn btn-secondary btn-lg btn-block">CLASS 2</button>
<a href="classthree.php"><button style="background-color:BLACK;width:500px" type="button" class="btn btn-primary btn-lg btn-block">CLASS 3</button>
<a href="classfour.php"><button style="width:500px"type="button" class="btn btn-secondary btn-lg btn-block">CLASS 4</button>
<a href="classfive.php"><button style="background-color:BLACK;width:500px" type="button" class="btn btn-primary btn-lg btn-block">CLASS 5</button>
<a href="classsix.php"><button style="width:500px"type="button" class="btn btn-secondary btn-lg btn-block">CLASS 6</button>
<a href="classseven.php"><button style="background-color:BLACK;width:500px" type="button" class="btn btn-primary btn-lg btn-block">CLASS 7</button>
<a href="classeight.php"><button style="width:500px"type="button" class="btn btn-secondary btn-lg btn-block">CLASS 8</button>
<a href="classnine.php"><button style="background-color:BLACK;width:500px" type="button" class="btn btn-primary btn-lg btn-block">CLASS 9</button>
<a href="classten.php"><button style="width:500px"type="button" class="btn btn-secondary btn-lg btn-block">CLASS 10</button>
<a href="classelev.php"><button style="background-color:BLACK;width:500px" type="button" class="btn btn-primary btn-lg btn-block">CLASS 11</button>
<a href="classtwe.php"><button style="width:500px"type="button" class="btn btn-secondary btn-lg btn-block">CLASS 12</button>
</center>
</div>
<div id="hu3" class="alert alert-success" style="background-color:WHITE"  role="alert">
  <span onclick="sp2()" class="close">&times;</span>
<h4 class="alert-heading">Welcome Back!</h4>
</div>
  </body>
</html>
