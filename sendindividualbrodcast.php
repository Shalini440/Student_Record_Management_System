<html>
    <head>
        <title>
            Brodcast Message
        </title>
        <meta name="viewport" content="width=device-width initial-scale-1.0">
    <script src="../bootstrap/jquery-3.6.0.js"></script>
    <script src="../bootstrap/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   </head>
    <body>
    
          <div id="mySidenav" class="sidenav" style="box-shadow: 4px 4px 4px 4px gray;">
            <a href="javascript:void(0)" onclick="closeNav()"></a>
            <span style="font-size:35px; cursor:pointer" onclick="closeNav()" style="margin-top: 5px;"> &#9776;</span>
            <a href="../login/tutorhome.php" style="color: white;font-family:Franklin;font-size: 20px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" 
              class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
            </svg>&nbsp;&nbsp;&nbsp;Home</a>
            <a href="../login/timetable.php"style="color: white;font-family:Franklin; font-size: 20px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
              </svg>&nbsp;&nbsp;&nbsp;Student Time Table </a>
            <a href="../login/Dairy.php"style="color: white;font-family:Franklin;font-size: 20px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
              </svg>&nbsp;&nbsp;&nbsp;Diary</a>
           
          </div>
          
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div><span style="font-size:30px; cursor:pointer;color: black;color: black;" 
        onclick="openNav()">&#9776; &nbsp;</span></div>
        <a class="navbar-brand" href="#" style="font-size: 30px;font-family:Franklin;color:purple;"><b>S3 SCHOOL</b></a>      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="width: 100px;text-align:right;float:left;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <div style="margin-left:850px;"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
               <?php
               session_start();               
               echo $_SESSION['username'];
               ?>
              </a>
              <div style="margin-left:850px;"class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../login/profile.php">Profile</a>
                <a class="dropdown-item" href="./resetpassword.php">Reset Password</a>
                <a class="dropdown-item" href="../internship/admin.php">Log Out</a></div></li></ul></div>          
                  
        </div>
      </nav>
        <a href="../login/classattendance.php"><button>Back to Student Status</button></a>

        <p>Brodcast Message<br>
         To,
         <?php
               $conn=mysqli_connect("localhost","root","","project");
               $sql="select * from student order by roll";
               $result = mysqli_query($conn,$sql)or die("select error");
               $row = mysqli_fetch_array($result);
               if($row>0)
              {
               $_SESSION["name"]=$row[2];
               echo $_SESSION["name"];
              }             
            ?>  
          <p id="stname" style="margin-left: 10px;"></p><br>
        <p style="margin-left: 40px;">
        <form action="../login/phpfile.php" method="POST">
        <p> Enter Date:  <input type="text" name="date1" id="date1"></p>
        Class 6B<br>
         Date:<br>
    </p></p>
    
      <input type="text" name="brodcast1" placeholder="Enter the Message Here:-"id="Brodcast" >
      <p>Upload Maximum 4 picture</p><input type="file" name="file1" id="file2">
      <p>Thanks,<br>
        <?php
               
        echo $_SESSION['username'];
        ?></p>
      <input type="submit" name="sub3" id="button1">
     
    </form>
    
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";      
        }      
        </script>
         <style>
           #file2{
            margin-left: 50px;}
           #Brodcast{
             width: 95%;
             height: 150px;
             border-radius: 16px;
             margin-left: 50px;
           }
           button:hover{
             box-shadow: 2px 2px 7px 2px navy;
           }
           #button1:hover{
             box-shadow: 2px 2px 7px 2px navy;
           }
         p{
           margin-left: 50px;
           font-size: 20px;
           font-family: Franklin;
           color: purple;
         } 
         #button1{
          width: 50%;
             height: 50px;
             background-color: purple;
             color: White;
             font-size: 25px;
             border-radius: 7px;
             text-align: center;
             margin-left: 400px;
             font-size: 15px;
             font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

         }
         button
         {
             width: 100%;
             height: 50px;
             background-color: purple;
             color: white;
             text-align: center;
             font-size: 15px;
             font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         }
           .container{
                margin-left: 5px;
                margin-top: 10px;
                width: 40%;
                height: 500px;
                background-color: #12121f;
                border-radius: 9px;
                color:#000;
                font-size: 20px;
                float:inline-end;  
                margin-right: 10px;      
                box-shadow: 5px 5px 5px gray;
                display: flex;
                justify-content: center;
                align-items: center;
              }
            
            body {
              font-family: "Lato", sans-serif;
              background-color: #DDA0DD
            }
            
            .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
            }
            
            .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
              transition: 0.3s;
            }
            
            .sidenav a:hover {
              color: #f1f1f1;
            }
            
            .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
            }
            
            @media screen and (max-height: 450px) {
              .sidenav {padding-top: 15px;}
              .sidenav a {font-size: 18px;}
            }
             #mysidenav{
                background-color: #800080;
                color: White;
            }
            </style>
            </body>

    </html>