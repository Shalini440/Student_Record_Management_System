
<html>
    <head>
        <title>
           Take Class Attendance
        </title>
        <meta name="viewport" content="width=device-width initial-scale-1.0">
    <script src="../bootstrap/jquery-3.6.0.js">
    </script>
    <script src="../bootstrap/bootstrap-4.6.0-dist/js/bootstrap.min.js">
    </script>
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
        <a class="navbar-brand" href="#" style="font-size: 30px;font-family:Franklin;color:darkmagenta;"><b>S3 SCHOOL</b></a>      
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
        <div><span style="font-size:30px; cursor:pointer;color: black;color: black;" 
            onclick="openNav()"> &nbsp; &nbsp; &nbsp; &nbsp;Student View </span></div>
            <a href="./classattendance.php"><button class="button1">Back to Student Status </button></a>
     <form action="phpfile.php"method="POST">
            <div class="buttonclass">
            <b style="color: purple;font-size:20px;font-family:Franklin;">Select Today's Date: </b>
              &nbsp;&nbsp;
              <select name="day" id="day">
              <option value="-select day--">-select day--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option  value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                
              </select>
              <select name="month" id="month">
                <option value="--select Month--">--select Month--</option>
                <option value="January">January</option>
                <option value="Feburary">Feburary</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
             </select>
               <select name="year" id="year">
                 <option value="--select year--">--select year--</option>
                   <option value="2021-22">2021-22</option>
                 </option>
               </select>
               
              </div>
         <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Roll no.</th>
                    <th scope="col">Addmission no.</th>
                    <th scope="col">Name</th>                    
                    <th scope="col"><input type="checkbox" name="sample[]"class="selectall"/> Mark Attendance</th>
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
                <td><input type=checkbox name='.$row["roll"].' onclick="getatt(this.checked);"/></td>
							</tr>';
			         	}
                 echo "</table>";
	        		?>
         </table>
             <input type="submit" name="subattend" value="Upload Attendance" 
             class="btn btn-primary"id="uploadattendance" data-toggle="modal" data-target="#staticBackdrop"> 
             
              <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel" style="color: blue;font-size:20px;font-family:Verdana;">Attendance Status</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                   <div class="modal-body" style="color: blue;font-size:20px;font-family:Verdana;">
                     <center>Successfully Uploaded!</center> 
                   </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 </div>
               </div>
            </div>
           </div>
     </form>
<table width="100px" align="right" style="margin-left:35px">
            	<tr>
                	<td> Total Absent : <input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Present : <input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Strength : <input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>
         
</body>
  <script type="text/javascript">
	    function getatt(value)
	    {
	  	if(value == true)
	   	{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
	   	}
	    	else
	    	{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
	    	}
    	}

      function check1(){
        if(document.getElementById("c1").checked==true){
          document.getElementById("1").innerHTML="Present";
          
        }
        else{
          document.getElementById("1").innerHTML="Absent";
        }        
      }
      function check2(){
        if(document.getElementById("c2").checked==true){
          document.getElementById("2").innerHTML="Present";
        }
        else{
          document.getElementById("2").innerHTML="Absent";
        }        
      }
      function check3(){
        if(document.getElementById("c3").checked==true){
          document.getElementById("3").innerHTML="Present";
        }
        else{
          document.getElementById("3").innerHTML="Absent";
        }        
      }
      function check4(){
        if(document.getElementById("c4").checked==true){
          document.getElementById("4").innerHTML="Present";
        }
        else{
          document.getElementById("4").innerHTML="Absent";
        }        
      }
      function check5(){
        if(document.getElementById("c5").checked==true){
          document.getElementById("5").innerHTML="Present";
        }
        else{
          document.getElementById("5").innerHTML="Absent";
        }        
      }
      function check6(){
        if(document.getElementById("c6").checked==true){
          document.getElementById("6").innerHTML="Present";
         
        }
        else{
          document.getElementById("6").innerHTML="Absent";
        }        
      }
      function check7(){
        if(document.getElementById("c7").checked==true){
          document.getElementById("7").innerHTML="Present";
        }
        else{
          document.getElementById("7").innerHTML="Absent";
        }        
      }
      function check8(){
        if(document.getElementById("c8").checked==true){
          document.getElementById("8").innerHTML="Present";
        }
        else{
          document.getElementById("8").innerHTML="Absent";
        }        
      }
      function check9(){
        if(document.getElementById("c9").checked==true){
          document.getElementById("9").innerHTML="Present";
        }
        else{
          document.getElementById("9").innerHTML="Absent";
        }        
      }
      function check10(){
        if(document.getElementById("c10").checked==true){
          document.getElementById("10").innerHTML="Present";
        }
        else{
          document.getElementById("10").innerHTML="Absent";
        }        
      }
      function check11(){
        if(document.getElementById("c11").checked==true){
          document.getElementById("11").innerHTML="Present";
          
        }
        else{
          document.getElementById("11").innerHTML="Absent";
        }        
      }
      function check12(){
        if(document.getElementById("c12").checked==true){
          document.getElementById("12").innerHTML="Present";
        }
        else{
          document.getElementById("12").innerHTML="Absent";
        }        
      }
      function check13(){
        if(document.getElementById("c13").checked==true){
          document.getElementById("13").innerHTML="Present";
        }
        else{
          document.getElementById("13").innerHTML="Absent";
        }        
      }
      function check14(){
        if(document.getElementById("c14").checked==true){
          document.getElementById("14").innerHTML="Present";
        }
        else{
          document.getElementById("14").innerHTML="Absent";
        }        
      }
      function check15(){
        if(document.getElementById("c15").checked==true){
          document.getElementById("15").innerHTML="Present";
        }
        else{
          document.getElementById("15").innerHTML="Absent";
        }        
      }
      function check16(){
        if(document.getElementById("c16").checked==true){
          document.getElementById("16").innerHTML="Present";
         
        }
        else{
          document.getElementById("16").innerHTML="Absent";
        }        
      }
      function check17(){
        if(document.getElementById("c17").checked==true){
          document.getElementById("17").innerHTML="Present";
        }
        else{
          document.getElementById("17").innerHTML="Absent";
        }        
      }
      function check18(){
        if(document.getElementById("c18").checked==true){
          document.getElementById("18").innerHTML="Present";
        }
        else{
          document.getElementById("18").innerHTML="Absent";
        }        
      }
      function check19(){
        if(document.getElementById("c19").checked==true){
          document.getElementById("19").innerHTML="Present";
        }
        else{
          document.getElementById("19").innerHTML="Absent";
        }        
      }
      function check20(){
        if(document.getElementById("c20").checked==true){
          document.getElementById("20").innerHTML="Present";
        }
        else{
          document.getElementById("20").innerHTML="Absent";
        }        
      }
      
      function check21(){
        if(document.getElementById("c21").checked==true){
          document.getElementById("21").innerHTML="Present";
        }
        else{
          document.getElementById("21").innerHTML="Absent";
        }        
      }
      function check22(){
        if(document.getElementById("c22").checked==true){
          document.getElementById("22").innerHTML="Present";
        }
        else{
          document.getElementById("22").innerHTML="Absent";
        }        
      }
      function check23(){
        if(document.getElementById("c23").checked==true){
          document.getElementById("23").innerHTML="Present";
        }
        else{
          document.getElementById("23").innerHTML="Absent";
        }        
      }
      function check24(){
        if(document.getElementById("c24").checked==true){
          document.getElementById("24").innerHTML="Present";
        }
        else{
          document.getElementById("24").innerHTML="Absent";
        }        
      }
      
      $('.selectall').click(function(){
        if($(this).is(':checked')){
          $('tbody input').attr('checked',true); 
          }
        else{
          $('tbody input').attr('checked',false);          
        }
        });
       
    
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";      
        }    
       
 </script>
   <style>
           
           .buttonclass>input{
             border-radius: 5px;
             width:170px;
             margin-right: 20px;
             color: purple;
           }
           #uploadattendance{
             margin-top: 10px;
             margin-left: 600px;
             background-color: darkviolet;
           }
             table{
                 margin-top: 20px;
                 margin-left: 30px;
                 font-size: 20px;
                 float:left;
               }
             th{
                 background-color: purple;
                 color: white;
             }
            
             .button1:hover{
                 background-color: #E6E6FA;
                 color: black;
             }
             .buttonclass{
                 margin-left: 400px;

             }
             .button1{
               width:100%;

                 background-color: pink;
                 color:navy;
                 border-radius: 14px;
                 font-size: 15px;
                 font-family: Arial;
                 margin-left: 5px;
             }
             tr:hover{
               background-color:#E6E6FA;
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
                background-color: #8B008B;
                color: White;
              
            }  
     </style>
 </html>