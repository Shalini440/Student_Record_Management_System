
<html>
    <head>
        <title>
            tutor Home Page
        </title>
        <meta name="viewport" content="width=device-width initial-scale-1.0">
    <script src="../bootstrap/jquery-3.6.0.js"></script>
    <script src="../bootstrap/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   </head>
    <body>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>
            <?php
             session_start();
              if($_SESSION['username'])
              {
                  echo "Welcome !".$_SESSION['username'];
    
               }
               else{
                   header('location:login.html');
               }
              ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    
          <div id="mySidenav" class="sidenav" style="box-shadow: 4px 4px 4px 4px gray;">
            <a href="javascript:void(0)" onclick="closeNav()"></a>
            <span style="font-size:35px; cursor:pointer" onclick="closeNav()" style="margin-top: 5px;"> &#9776;</span>
            <a href="../login/tutorhome.php" style="color: white;font-family:Franklin;font-size: 20px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" 
              class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
            </svg>&nbsp;&nbsp;&nbsp;<b>Home</b></a>
            <a href="../login/timetable.php"style="color: white;font-family:Franklin; font-size: 20px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
              </svg>&nbsp;&nbsp;&nbsp;<b> Student Time Table</b> </a>
            <a href="../login/Dairy.php"style="color: white;font-family:Franklin;font-size: 20px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
              </svg>&nbsp;&nbsp;&nbsp;<b>Diary</b></a>
           
          </div>
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div><span style="font-size:30px; cursor:pointer;color: black;" 
        onclick="openNav()">&#9776; &nbsp;</span></div>
        <a class="navbar-brand" href="#" style="font-size: 30px;font-family:Franklin;color:purple;"><b>S3 SCHOOL</b></a>      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="width: 100px;text-align:right;float:left;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <div style="margin-left:850px;"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
               <?php
               if($_SESSION['username'])
              {
                  echo $_SESSION['username'];
                }
               else{
                   header('location:login.html');
               }
               ?> 
              </a>
              <div style="margin-left:850px;"class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../login/profile.php">Profile</a>
                <a class="dropdown-item" href="./resetpassword.php">Reset Password</a>
                <a class="dropdown-item" href="../internship/admin.php">Log Out</a></div></li></ul></div>          
                  
        </div>
      </nav>
        <div><span style="font-size:30px; cursor:pointer;color: white;" 
            onclick="openNav()" > 
            <?php
            
              if($_SESSION['username'])
              {
                  echo "Welcome Back !".$_SESSION['username'];
    
               }
               else{
                   header('location:login.html');
               }
               ?> 
               </span>
          
        </div>
        <div id="div1">
            <p style="padding-top: 40px;padding-left: 30px;font-size: 25px;color: dodgerblue;">Class Teacher</p>
            <a href="../login/classattendance.php">
              <button class="subjecteacher"id="classteacher"onmouseover="mouseon()" onmouseout="mouseout()" style="font-size: 20px;
              font-family: Arial;">6 B</button></a>
        </div>
        <div id="div3">
          <p style="padding-top: 40px;padding-left: 30px;font-size: 25px;color: dodgerblue;">Subject Teacher</p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary subjecteacher" id="7B"data-toggle="modal"
           data-target="#exampleModal1">7B<br>Hindi
          </button>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">7 B </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <P>Select The Work Flow</P>
        <a href="../login/7B/takeclassattendance.php"><div style="width: 30%;height:fit-content;
        text-align:center;padding:10px;color: Black;;
        border: 2px solid purple;margin:20px;float:left;align-content: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-hand-index-thumb" viewBox="0 0 16 16">
          <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z"/>
        </svg>
          <p>Take Attendance</p>
        </div>
     
       <a href="../login/7B/sendBrodcastmessage.php"><div  style="width: 30%;height:fit-content;
        text-align:center;padding:10px;color: Black;;
        border: 2px solid purple;margin:20px;float:left;align-content: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
          <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
          <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
        </svg><p>Student Diary</p></div></a> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-primary subjecteacher" id="7B"data-toggle="modal"
           data-target="#exampleModal">7C<br>Hindi
          </button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">7C</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <P>Select The Work Flow</P>
        <a href="../login/7C/takeclassattendance.php"><div style="width: 30%;height:fit-content;
        text-align:center;padding:10px;color: Black;;
        border: 2px solid purple;margin:20px;float:left;align-content: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-hand-index-thumb" viewBox="0 0 16 16">
          <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z"/>
        </svg>
          <p>Take Attendance</p>
        </div>
       
       <a href="../login/7C/sendBrodcastmessage.php"><div  style="width: 30%;height:fit-content;
        text-align:center;padding:10px;color: Black;align-content: center;;
        border: 2px solid purple;margin:20px;float:left;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
          <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
          <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
        </svg><p>Student Diary</p></div></a> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   </div>
  </body>    
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";      
        }
        function mouseon()
        {
            document.getElementById("classteacher").style.width="160px";
            document.getElementById("classteacher").style.height="65px";
        }
        function mouseout()
        {
            document.getElementById("classteacher").style.width="150";
            document.getElementById("classteacher").style.height="60px";
         } 
         </script>      
   
         <style> 
        
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
              background-image: url('./bg6.jpg');
              background-repeat: no-repeat;
              background-size: cover;
          
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
                background-color: purple;
                color: White;
              
            }
            #div1{
                margin-left: 200px;
                margin-top: 10px;
                width: 400px;
                height: 260px;
                background-color: white;   
                 
                 box-shadow: 5px 5px 5px gray;
                float: left;
            }

            #calendar1{
                margin-left: 5px;
                margin-top: 10px;
                width: 40%;
                height: 500px;
                background-color: white ;
                border-radius: 9px;
                color:grey;
                font-size: 20px;
                float:inline-end;  
                margin-right: 10px;      
                box-shadow: 5px 5px 5px gray;
                
            }
            #div3{
                margin-left: 100px;
                margin-top: 20px;
                width:400px;
                height: 250px;
                background-color: white ;
                
                color:grey;
                font-size: 20px;
                font-family: Arial;
                box-shadow: 5px 5px 5px gray;
                float: left;
                
            }
            #classteacher
            {
                background-color:purple;
                color: white;
                margin-left: 40px;
                border-radius: 14px;
                width: 150px;
                height:50px;
                text-align: center;
            }
            .subjecteacher{
                margin-top: 25px;
                background-color:purple;
                color: white;
                margin-left: 40px;
                border-radius: 14px;
                width: 150px;
                height:60px;
                text-align: center;

            }
            .subjecteacher:hover
            {
                box-shadow: 4px 4px 4px 4px gray;
            }

            
            </style>
      

    </html>