
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale-1.0">
    <script src="../bootstrap/jquery-3.6.0.js"></script>
    <script src="../bootstrap/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <title></title>
  <style media="screen">
    body{
      background-image: url('reg.jpg');
      background-attachment: fixed;
      background-size: cover;
      backdrop-filter:blur(8px);

    }
      form{
        color:white;
        font-family: algerian;
        width:500px;
        height:500px;
        border-radius:50px 50px;
        background-repeat:no-repeat;
        background-size:500px 500px;
        margin-top:50px;
       background-color: rgba(0,0,0,0.7);
      }
    .log1  {
        background-color:#1a75ff;
        border-radius:5px 5px;
        height:30px;
        width:80px;

        font-size:15px;
      }
      .log  {
          background-color:green;
          border-radius:5px 5px;
          border:1px solid green;
          height:30px;
          width:80px;
          margin-left:200px;
          font-size:15px;

        }
      td{
        font-family: arial;
        font-size:23px;
        color:white;
      }
      .in{
        border-radius:50px 50px;
        width:250px;
        height:30px;

      }
      img{
        width:`150px;
        height:150px;
        border-radius: 50%;
        margin-top:30px;
      }
      h1{
        margin-bottom:30px;
      }
      input{
        border:none;
        font-weight: bolder;
      }

    </style>
    <script>
      function shr(){

      }
    </script>

  </head>

  <body><center>
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
    <form action="#" method="POST">
      <center>
        <img src="icon.png" alt="">
         <h1><b><u>ADMIN LOGIN</u></b></h1></center>

       <table cellpadding="10">
        <tr>
          <td><b>Enter username</b></td><td><input class="in" type="text" name="t1" value=""></td>
        </tr>
        <td><b>Enter password</b></td><td><input class="in" type="password" name="t2" value=""></td>
       </table>

         <input class="log1" type="submit" name="sub" value="LOGIN">
         <a href="signup.php"><button class="log"type="button" name="button">SIGN UP</button></a>
         <a href="forgot.html"><h3 style="font-family:none;color:white;margin-right:250px;"><u>Forget password</u></h3></a>
         </a>
         </center>
      </form>

  </body>
</html>
 <?php
   session_start();
   $conn=mysqli_connect("localhost","root","","intern");
   if (isset($_POST["sub"])) {
  $user=$_POST["t1"];
  $pass=$_POST["t2"];
  $sql="select * from signup where username='$user' and password='$pass'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_row($result);
  if ($row>0)
   {
    $_SESSION["t2"]=$row[2];
    header("location:afterlogin.php");
    }
   else {
   echo "<script>";
   echo "alert('wrong password')";

    echo "</script>";

    echo mysqli_error($conn);
   }
   }
?>
