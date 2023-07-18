<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <style media="screen">
  table{
    background-color:white;
  }
      body{
        background-color:pink;
      }
      .divno1{
        background-color:black;
        width:800px;
        height:600px;
        border-radius:10px 10px;
      }
      #div2{
        margin-top:10px;
        content-align:center;
    }
    button{
        width:50%; 
        height:50px;
        background-color:white;
        color:purple;
        font-size:30px;
        margin-left:300px;
        font-family:Arial;
    }
      h2{
        color:white;
      }
      .divinner1{
        margin-left:30px;
        width:350px;
        height:550px;
        background-color:gray;
        float:left;
        border-radius:30px 30px;
      }
      .divinner2{
          margin-left:370px;
        width:350px;
        height:548px;
        background-color:gray;
        border-radius:30px 30px;
        padding-top: 2px;
      }
  </style>
  </head>
  <body>
    <center>
      <div class="divno1">
        <center>
        <h2><b>NOTICE BOARD</b></h2>
        </center>
        <div class="divinner1">
          <h3>uploaded by teacher</h3>
          <form action="#" method="POST">
            <table  cellspacing="5">
            <tr>
               <th scope="col">Notice</th>
               <th scope="col">File</th>
           </tr>
                <?php
                $conn=mysqli_connect("localhost","root","","project");
			        	$query = "select * from brodcastmsg";               
			        	$s = 0;
			        	$result = mysqli_query($conn,$query)or die("select error");
			         	while($row = mysqli_fetch_array($result))
			        	{
			      		$s = $s + 1;
			      		echo ' <tr>
							  <td>'.$row["message"].'</td>
                              <td>'.$row["file"].'</td></tr>';
               
			         	}
                       echo "</table>";
	        		?>
            </table>

                 
            <input class="chose" type="submit" name="upload" value="Uploaded By Teacher" style="margin-top:20px;">

        </div>
        <div class="divinner2">
        <h3>uploaded by admin</h3>
        <textarea name="area" rows="28" cols="40"></textarea>
         <input class="chose" type="submit" name="upload1" value="upload ByAdmin">
          </div>
          </form>   

      </div>
      </center>
      <div id=div2><a href="afterlogin.php"><button>BACK TO HOME PAGE</button></a></div>
 
  </body>
  
</html>
