<?php
session_start();
$conn=mysqli_connect("localhost","root","","intern");
if(isset($_POST["sub1"]))
{
    $email=$_POST["email1"];
    $name=$_POST["name1"];
    $phone=$_POST["phone1"];
    $comment=$_POST["comment1"];
    $sql="insert into contactus(email,name,contact,comment) values('$email','$name','$phone','$comment')";
    if(mysqli_query($conn,$sql)){

    }
    else{
        echo mysqli_error($conn);
    }
}
?>
<html>
    <head>
        <title>
            countact_us
        </title>
        <meta name="viewport" content="width=device-width initial-scale-1.0">
    <script src="../bootstrap/jquery-3.6.0.js"></script>
    <script src="../bootstrap/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">STUDENT RECORD MANAGMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
             data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="width: 40%;margin-left: 600px;">
              <div class="navbar-nav">
                <a class="nav-link active" href="../contact/contact.html">Contact Us<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="../adminlogin/adminlogin.html">Admin Login</a>
                <div style="border-radius: 3px;box-shadow:3px 3px 3px 3px lightblue; background-color:cadetblue;">
                    <a class="nav-link" href="../login/login.html">Login</a></div>
              </div>
            </div>
          </nav>

            <p>Get in touch</p>
            <p>Your Satisfaction is our priority.<br>
            Contact Us anytime</p>
            <form action="#" method="POST">
            <input type="email" name="email1"placeholder="Email Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"><br>
            <input type="text" name="name1" placeholder="Your Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"><br>
            <input type="tel" name="phone1"  placeholder="Contact No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"><br>
            <input type="text" style="padding-bottom: 100px;"name="comment1" placeholder="Comment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"> <br>
            <input type="submit" name="sub1"value="Submit"onclick="clicked()" id="submitbutton">
        </form>
    </body>
    <script>
        function clicked(){
            alert("submitted");
        }
    </script>

        <style>
           body{
               background-color: lightcyan;
               text-align: center;
               color: Black;

           }
           p{
               font-size: 20px;
               font-family: cursive;
           }
            input{
                background-color: deepskyblue;
                border-color: white;
                color: black;
                padding-left: 20px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-right: 150px;
                font-size: 15px;
                margin-top: 10px;
                border-radius: 25px;
                text-align: center;
            }


        </style>

</html>
