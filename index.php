
<html>
  <head>
    <title>task</title>
<style>

    body{
     background: url("2222.jpeg") no-repeat center center fixed;
     background-size: cover;
    }
    #t{
      display:inline-block;
      color: white;
      position: absolute;
      top: 25%;
      left: 40%;
      margin-top: 30px;
    }
    #t h1{
      color: white;
      text-decoration: underline;
      font-size: 50px;
      border-bottom: white;
      margin-bottom: 50px;
    }
    .user{
      border-bottom: 2px solid black;
    }
    .user input{
      background: none;
      font-size: 20px;
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 5px;
      margin-left: 5px;
      padding: 0px 12px;


    }
    .pass{
      border-bottom: 2px solid black;

    }
    .pass input{
      background: none;
      font-size: 20px;
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 5px;
      margin-left: 5px;
      padding: 0px 12px;
    }
    #bt{
      color: white;
    }

    .user img{
      background: none;
      height: 27px;
      width: 25px;
      text-align:center;
      margin-top: 10px;
      margin-bottom:0px;
      float: left;
    }
    .pass img{
      height: 27px;
      width: 25px;
      text-align:center;
      margin-top: 10px;
      margin-bottom:0px;
      float: left;

    }

    .forgot{
    margin-top: 10px;
    font-size: 20px;
    }
    .forgot a{
      color:white;
      text-decoration: none;
    }
    .forgot a:hover{
      color: teal;
      text-decoration: underline;
    }
    .login{
      color: white;
      margin: 5px 0px;
    }
    .logo{
      align-items:center;
      height:100px;
        margin-bottom: 50px;
        margin-left: 100px;
        margin-top: 30px;

    }
    .logo img{
      width:100px;
      height: 100px;

    }
    #email{
      text-decoration-color: white;
    }
    #bt{
      color: black;
      border-radius: 20%;
      border: 2px solid black;
      margin-top: 10px;
      background-color: purple;
      font-size: 20px;
    }
    h1{
      height: 20px;
    }
    #bt:hover{
      text-decoration: underline;
      background-color: teal;

    }
</style>
  </head>

  <body>
    <center>
    <form action="#" method="post">
    <div class="logo">
    <img src="logo1.Jpeg" alt="logo">
    <br>
    </div>
    <br>
  <div id="t">
    <h1> Student login</h1>
    <div class="user">
      <img src="22.png" alt="user">
     <input type="text" placeholder="Enter Your Email Id"  id="email" name="t1">
    </div>
    <div class="pass">
      <img src="pa.png" alt="password">
     <input type="password" placeholder="enter Your Password" id="pass" name="t2">
    </div>

  <div class="forgot">
  <a href="forgot.html">forgot password?</a>
</div>
  <input type="submit" name="sub" value="submit" id="bt">
  </div>
</form>
</center>
  </body>

</html>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","intern");
if(isset($_POST["sub"]))
{
$em=$_POST["t1"];
$pass=$_POST["t2"];
$sql="select * from signup where username='$em' and password='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row>0)
{
  $_SESSION["t1"]=$row[0];
  header("location:sdetail.html");
}
else {
echo "wrong password";
  echo mysqli_error($conn);
}
}
?>
