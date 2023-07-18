<html>
    <head>
        <title>
            Student Information
        </title>
    </head>
    <body>
        <div id="div1">CLASS 2</div>
        <form action="#" method="POST">

         <table border="1">

            <tr>
                <th scope="col">Registration No.</th>
                 <th scope="col">First Name</th>
                 <th scope="col">Last Name</th>
                 <th scope="col">Father</th>
                 <th scope="col">Mother</th>
                 <th scope="col">Gender</th>
                 <th scope="col">Date Of Birth</th>
                 <th scope="col">Address</th>
                 <th scope="col">Category</th>
                 <th scope="col">Religious</th>
                 <th scope="col">Religion</th>
                 <th scope="col">Hobby</th>
                 <th scope="col">Guardian Name</th>
                 <th scope="col">Guardian No.</th>
                 <th scope="col">Phone</th>
                 <th scope="col">Alternate Phone</th>
                 <th scope="col">Email</th>
                 <th scope="col">Admission Date</th>
                 <th scope="col">Class</th>
                 <th scope="col">Stream</th>
                 <th scope="col">Addmission No</th>
                 <th scope="col">Roll</th>


             </tr>
                <?php
                $conn=mysqli_connect("localhost","root","","intern");
			        	$query = "select * from reg where class=2";
			        	$s = 0;
			        	$result = mysqli_query($conn,$query)or die("select error");
			         	while($row = mysqli_fetch_array($result))
			        	{
			      		$s = $s + 1;
			      		echo ' <tr>
							  <td>'.$row["regno"].'</td>
                              <td>'.$row["fname"].'</td>
							  <td>'.$row["lname"].'</td>
                              <td>'.$row["father"].'</td>
                              <td>'.$row["mother"].'</td>
                              <td>'.$row["gender"].'</td>
                              <td>'.$row["dob"].'</td>
                              <td>'.$row["address"].'</td>
                              <td>'.$row["category"].'</td>
                              <td>'.$row["religious"].'</td>
                              <td>'.$row["religion"].'</td>
                              <td>'.$row["hobby"].'</td>
                              <td>'.$row["guardian"].'</td>
                              <td>'.$row["gno"].'</td>
                              <td>'.$row["phone"].'</td>
                              <td>'.$row["altno"].'</td>
                              <td>'.$row["email"].'</td>
                              <td>'.$row["admissiondate"].'</td>
                              <td>'.$row["class"].'</td>
                              <td>'.$row["stream"].'</td>
                              <td>'.$row["addnum"].'</td>
                              <td>'.$row["roll"].'</td>
                             </tr>';

			         	}
                         echo "</table>"
                         ?>

            </table>
        </form>
        <div id=div2><a href="afterlogin.php"><button>BACK TO HOME PAGE</button></a></div>

    </body>
    <style>
    body{
        background-image:url('todayclass1.jpg');
        background-size:cover;
        background-repeat:no-repeat;
            backdrop-filter:blur(9px);
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

                 font-size: 15px;
                 color:white;

                 width:auto;
             }
             th{
                 background-color: white;
 width:auto;
                 color: purple;
             }
             tr:hover{
               background-color:#E6E6FA;
               box-shadow: 2px 2px 6px 2px black;
               color: black;

             }
             td{
                width:auto;
             }
        </style>
</html>
