
<html>
    <head>
        <title>
           Class Attendance
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
        </svg>&nbsp;&nbsp;&nbsp;<b>Home</b></a>
        <a href="../login/timetable.php"style="color: white;font-family:Franklin; font-size: 20px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
            <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
          </svg>&nbsp;&nbsp;&nbsp;<b>Student Time Table</b> </a>
        <a href="../login/Dairy.php"style="color: white;font-family:Franklin;font-size: 20px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
            <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
            <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
          </svg>&nbsp;&nbsp;&nbsp;<b>Diary</b></a>
        
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
                <a class="dropdown-item" href="../login/profile.html">Profile</a>
                <a class="dropdown-item" href="./resetpassword.html">Reset Password</a>
                <a class="dropdown-item" href="../internship/admin.php">Log Out</a></div></li></ul></div>          
                  
        </div>
      </nav>
        <div><span  style="font-size:30px; cursor:pointer;color: #800880;" 
            onclick="openNav()"> &nbsp; &nbsp; &nbsp; &nbsp;Student View 
          <br>
          &nbsp; &nbsp;&nbsp; &nbsp;Class 6B </span>
          </div>
            <div class="buttonclass"><a href="../login/takeclassattendance.php"><button class="button1"> Take Class Attendance</button></a>
              
                <a href="../login/sendBrodcastmessage.php"><button class="button1">Send Brodcast Message</button></a>
                      </div>
            <form action="phpfile.php" method="POST">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Roll no.</th>
                    <th scope="col">Addmission no.</th>
                    <th scope="col">Name</th>                    
                    <th scope="col">Student Diary</th>
                  </tr>
                </thead>
               <tbody id="ckeckboxlist">
                <?php
                $conn=mysqli_connect("localhost","root","","project");
			        	$query = "select * from student order by roll";
			        	$s = 0;
			        	$result = mysqli_query($conn,$query)or die("select error");
			         	while($row = mysqli_fetch_array($result))
			        	{
			      		$s = $s + 1;
			      		echo ' <tr>
							  <td>'.$row["roll"].'</td>
                <td>'.$row["addmission"].'</td>
							  <td>'.$row["name"].'</td>
                <td><div class="icon">
                <a href="../login/sendindividualbrodcast.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                   <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                 </svg></a> 
                 <div class="tooltip">Send Diary </div>
                 </div></td>
					    		</tr>';
			         	}
                 echo "</table>";
	        		?>
              </tbody>
         </table>
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
           .icon{
             justify-content: center;
             flex-direction: column;
             display: flex;
             margin-left: 50px;
             position:relative ;
             z-index:2;
             float: left;
           }
           .icon svg{
             position:relative ;
             height:25px;
             width: 25px;
             display: block;
             text-align: center;
             z-index: 2;
            
           }
           .icon .tooltip{
             width: 200px;
             background-color:purple;
             font-size: 15px;
             color: white;
             position:absolute;
             bottom: -25px;
             border-radius: 10px;
             box-shadow: 0 10px 10px rgba(0, 0, 0, 0,1);
             opacity: 0;
             pointer-events: none;
            
           }
           .icon:hover .tooltip{
             opacity: 1;
            
             pointer-events: auto;
           }
           .icon.tooltip::before{
             position: absolute;
             content:"";
             height: 15px;
             width: 15px;
             background: #fff;
             bottom:-8px;
             left: 50%;
             z-index: 9;
             transform: translate(-50%) rotate(45deg);
           }
            svg:hover{
             color: blue;
             cursor:pointer;
           }
             table{
                 margin-top: 20px;
                 margin-left: 30px;
                 font-size: 20px;;
                 
             }
             th{
              background-color: purple;
                 color: white;
             }
            
             .button1:hover{
                 background-color: purple;
                 color: white;
             }
             .buttonclass{
                 margin-left: 600px;
             }
             .button1{
                 background-color: darkgray;
                 color:navy;
                 border-radius: 14px;
                 font-size: 15px;
                 font-family: Arial;
                 margin-left: 5px;
             }
             tr:hover{
              background-color:#D8DFD8;
               box-shadow: 2px 2px 6px 2px black;
               color: black;
             }
            body {
              font-family: "Lato", sans-serif;
              background-color: white;
            }
            
            .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #EE82EE;
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
                background-color: #8B008B;
                color: White;
              
            }  
            </style>
            </body>

    </html>