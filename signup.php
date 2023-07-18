<html >
<head>
<meta name="viewport" content="width=device-width initial-scale-1.0">
    <script src="../bootstrap/jquery-3.6.0.js"></script>
    <script src="../bootstrap/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap-4.6.0-dist/css/bootstrap.min.css">

    <style media="screen">
      form{
        background-color:purple;
        color:white;
        width:600px;
        height:300px;
        border-radius:30px 30px;
        padding:3px;
        margin-top:150px;
      }
      th{
        color:white;
      }
      .in{
        font-size:17px;
        width:240px;
        height:25px;
      }
      .in:hover{
        cursor: pointer;
        background-color:black;
        color:white;
        border-color:lightpurple;
      }
      .sub{
       background-color:black;
       border:none;
       width:500px;
        height:30px;
       color:white;
        font-size:20px;
        border-radius:30px 30px;
      }
      .sub:hover{
        cursor: pointer;
      }

      h2{
        font-size:30px;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#" style="color:#800080;font-family: Franklin;font-size: 20px ;">STUDENT RECORD MANAGMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
             data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left:500px;">
              <div class="navbar-nav">
                <a class="nav-link active" href="../contact/contact.php">Contact Us<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="../internship/login.php">Admin Login</a>
                <div style="border-radius: 3px;box-shadow:5px 5px 5px 5px purple; background-color:white;">
                    <a class="nav-link" href="../login/login.html">Login AS Tutor/Student</a></div>
              </div>
            </div>
    </nav>

    <center>
      <form class="" action="#" method="post">
        <h2 >NEW USER</h2><br>
        <table cellspacing="15" cellpadding="3">
        <tr>
           <th>Name:</th>
            <td><input class="in" type="text" name="adminname" value=""></td>
          </tr>
          <tr>
           <th>ENTER YOUR EMAIL ID:</th>
            <td><input class="in" type="email" name="t1" value=""></td>
          </tr>
          <tr>
            <th>ENTER YOUR PASSWORD:</th>
            <td><input class="in" type="password" name="t2" value=""></td>
          </tr>
        </table>
      <center>
        <br>
      <input class="sub" type="submit" name="submit" value="SIGN UP"></center>
      </form>
      </center>
  </body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","intern");
if(isset($_POST["submit"]))
{
  $adminname=$_POST["adminname"];
  $uname=$_POST["t1"];
  $password=$_POST["t2"];
   $sql="insert into signup(adminname,username,password) values('$adminname','$uname','$password')";
   if(mysqli_query($conn,$sql)){
    echo "successfully signup";
    header("location:login.php");
     }
else{
  echo "not done";
  echo mysqli_error($conn);
}
}
?>
