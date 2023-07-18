<?php
session_start();
//STUDENT ATTENDANCE PHP CODE OF CLASS 6 B
$conn=mysqli_connect("localhost","root","","project");
if(isset($_POST["subattend"]))
{
    
    $day=$_POST["day"];
     $month=$_POST["month"];
    $year=$_POST["year"];
    $sql="Select * from student";
    $result=mysqli_query($conn,$sql)or die("select error");

     while($row=mysqli_fetch_array($result))
    {
        $pre=$row["roll"];
        if(isset($_POST[$pre]))
        {
            $sql1="insert into stu_attend(roll,day,month,year,present) values($pre,$day,'$month','$year','Present')";
            
        }
        else{
            $sql1="insert into stu_attend(roll,day,month,year,present) values($pre,$day,'$month','$year','absent')";

        }
        if(mysqli_query($conn,$sql1))
        {
            print "<script>";
			print "alert('Attendance get successfully....');";
			print "</script>";
            header("location:./classattendance.php");

            
        }
        else{
             echo mysqli_error($conn);
        }
    }
    
}

//CONTACT US PHP CODE
$conn1=mysqli_connect("localhost","root","","project");
if(isset($_POST["sub1"]))
{
    $email=$_POST["email1"];
    $name=$_POST["name1"];
    $phone=$_POST["phone1"];
    $comment=$_POST["comment1"];
    $sql1="insert into contactus(email,name,contact,comment) values('$email','$name','$phone','$comment')";
    if(mysqli_query($conn1,$sql1)){

    }
    else{
        echo mysqli_error($conn1);
    }
}
// BRODCAST MESSAGE OR NOTICE BY TEACHER PHP CODE
$conn2=mysqli_connect("localhost","root","","project");
if(isset($_POST["sub2"]))
{
    $date=$_POST["date3"];
    $msg=$_POST["brodcast"];
    $file=$_POST["file"];
    $sql2="insert into brodcastmsg(date,message,file) values('$date','$msg','$file')";
    if(mysqli_query($conn2,$sql2)){
        header("location:sendbrodcastmessage.php");
     }
    else{
        echo mysqli_error($conn2);
    }
     $sql2="select * from brodcastmsg where message='$msg' and file='$file'";
     $result1=mysqli_query($conn2,$sql2);
     $row=mysqli_fetch_row($result1);
     if($row>0)
     {
        $_SESSION["date"]=$row[0];
        $_SESSION["message"]=$row[1];
        $_SESSION["file"]=$row[2];

     }   
}
//INDIVIDUAL BRODCAST MESSAGE OR NOTICE BY TEACHER PHP CODE
$conn3=mysqli_connect("localhost","root","","project");
if(isset($_POST["sub3"]))
{
    $date=$_POST["date1"];
    $msg=$_POST["brodcast1"];
    $file=$_POST["file1"];
   
    $sql3="insert into indbrodmsg(date,messageind,file) values('$date','$msg','$file')";
    if(mysqli_query($conn3,$sql3)){
        header("location:sendindividualbrodcast.php");

    }
    else{
        echo mysqli_error($conn3);
    }
    $sql3="select * from indbrodmsg where messageind='$msg' and file='$file'";
    $result1=mysqli_query($conn3,$sql3);
    $row=mysqli_fetch_row($result1);
    if($row>0)
    {
        $_SESSION["date"]=$row[0];
       $_SESSION["messageind"]=$row[1];
       $_SESSION["file"]=$row[2];

    }   
}
//SignUP Page PHP code
$conn4=mysqli_connect("localhost","root","","project");
if(isset($_POST["subsign"]))
{
   $username=$_POST["username"];
   $phone=$_POST["phone"];
   $password=$_POST["password"];
   $email=$_POST["email"];
   $dob=$_POST['DOB'];
   $gender=$_POST["gender"];
   $dateofjoing=$_POST['DateOfJoining'];
   $designation=$_POST['designation'];
   $Grade=$_POST['grade'];
   $Job_Type=$_POST['jobtype'];
   $sql4="insert into signup(username,phone,password,email,dob,gender,date_of_joining,designation,grade,jobtype)
    values('$username',$phone,'$password','$email','$dob','$gender','$dateofjoing','$designation','$Grade','$Job_Type')";
    if(mysqli_query($conn4,$sql4)){
        header("location:../login/login.html");

    }
    else{
        echo mysqli_error($conn4);
    }
}
//LOGIN AS TEACHER PHP CODE
$conn5=mysqli_connect("localhost","root","","project");
if(isset($_POST["sublogin"]))
{
   $username=$_POST["username1"];
   $password=$_POST["password1"];
   $sql5="select * from signup where username='$username' and password='$password'";
   $result=mysqli_query($conn5,$sql5);
   $row=mysqli_fetch_row($result);
   if($row>0)
   {
       $_SESSION["username"]=$row[0];
       $_SESSION["phone"]=$row[1];
       $_SESSION["password"]=$row[2];
       $_SESSION["email"]=$row[3];
       $_SESSION["dob"]=$row[4];
       $_SESSION["gender"]=$row[5];
       $_SESSION["date_of_joining"]=$row[6];
       $_SESSION["designation"]=$row[7];
       $_SESSION["grade"]=$row[8];
       $_SESSION["jobtype"]=$row[9];
       header("location:./tutorhome.php");
   }
   else{
       echo "Password Not ok";

   }
   
   
}
//Dairy Post 
$conn6=mysqli_connect("localhost","root","","project");
if(isset($_POST["subdiary"]))
{
    $date1=$_POST["date2"];
    $msg1=$_POST["diarymsg"];
    $file1=$_POST["filediary"];
    $sql6="insert into brodcastmsg(date,message,file) values(''$date1,'$msg1','$file1')";
    if(mysqli_query($conn6,$sql6))
    {
         header("location:Dairy.php");

    }
    else{
        echo mysqli_error($conn6);
    }
    $sql6="select * from brodcastmsg where message='$msg1' and file='$file1'";
    $result1=mysqli_query($conn6,$sql6);
    $row=mysqli_fetch_row($result1);
    if($row>0)
    {
        $_SESSION["date"]=$row[0];
       $_SESSION["message"]=$row[1];
       $_SESSION["file"]=$row[2];

    }   
}
//UPDATE PASSWORD
$conn7=mysqli_connect("localhost","root","","project");
if(isset($_POST["subsign"]))
{
    $password1=@$_POST["password"];
    $sql7="select * from singup where password=$password1";
    $result1=mysqli_query($conn7,$sql7);
    $row=@mysqli_fetch_array($result1);
}
    if(isset($_POST["subpass"]))
{
    $conn7=mysqli_connect("localhost","root","","project");
     $password=$_POST['currentpassword'];
    $newpassword=$_POST["Newpass"];
    $confirmpassword=$_POST["confirmpass"];
    $sql7="update signup set password='$confirmpassword' where password='$password'";
    if(mysqli_query($conn7,$sql7))
    {
        header("location:resetpassword.php");
      }
    else{
        echo "not ok";
        echo mysqli-error($conn7);
    }
}
?>
