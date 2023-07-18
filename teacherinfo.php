<html>
    <head>
        <title>
            Teacher Information
        </title>
    </head>
    <body>
        <div id="div1">TEACHERS INFORMATION</div>
        <form action="#" method="POST">
            <table  cellspacing="5">
            <tr>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PHONE NO.</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">EMAIL ID</th>
                    <th scope="col">DATE OF BIRTH</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">DATE OF JOINING</th>
                    <th scope="col">DESIGNATION</th>
                    <th scope="col">GRADE</th>
                    <th scope="col">JOB TYPE</th>
                    </tr>
                <?php
                $conn=mysqli_connect("localhost","root","","project");
			        	$query = "select * from signup order by phone";
			        	$s = 0;
			        	$result = mysqli_query($conn,$query)or die("select error");
			         	while($row = mysqli_fetch_array($result))
			        	{
			      		$s = $s + 1;
			      		echo ' <tr>
							  <td>'.$row["username"].'</td>
                              <td>'.$row["phone"].'</td>
							  <td>'.$row["password"].'</td>
                              <td>'.$row["email"].'</td>
                              <td>'.$row["dob"].'</td>
                              <td>'.$row["gender"].'</td>
                              <td>'.$row["date_of_joining"].'</td>
                              <td>'.$row["designation"].'</td>
                              <td>'.$row["grade"].'</td>
                              <td>'.$row["jobtype"].'</td></tr>';

			         	}
                       echo "</table>";
	        		?>
            </table>
        </form>
        <div id=div2><a href="afterlogin.php"><button>BACK TO HOME PAGE</button></a></div>

    </body>
    <style>
    body{
        background-image:url('teacherinfo.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        backdrop-filter:blur(8px);
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
    #div2{
        content-align:center;
    }

        #div1{
            width:100%;
            height:50px;
            text-align:center;
            font-size:30px;
            color:purple;
            background-color:white;
            float:left;

        }
         table{

                 margin-top: 50px;
                 margin-left: 30px;
                 font-size: 20px;
                 color:white;


             }
             th{
                 background-color: white;
                 color: purple;
             }
             tr:hover{
               background-color:#E6E6FA;
               box-shadow: 2px 2px 6px 2px black;
               color: black;

             }
        </style>
</html>
