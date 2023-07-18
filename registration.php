<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        background-color:#ff4dff;
        background-image: url('regper.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      img{
        width:150px;
        height:150px;
      }

      h1{
        font-size:40px;
        font-family:castellar;
      }
      table{
        font-size:20px;
      }
      div{
        background-color: rgba(0,0,0,0.7);
         color:white;
        width:90%;
        margin-left: 100px;
        border-radius: 30px 30px;

      }
      #d2{
        border:none;
        display: none;
      }
      #d3{
        border:none;
        display: none;
      }
      #d4{
        border:none;
        display: none;
      }
      #d5{
        border:none;
        display: none;
      }
select{
  width:350px;
  height:30px;
  border-radius: 30px 30px;

}
textarea{
  border-radius: 30px 30px;
}
input,textarea,select:hover{
  cursor: pointer;
}
INPUT{
  border-radius: 30px 30px;
  height:25px;
}
    </style>
    <script>
      function dil(){
        a=parseInt(document.getElementById("t1").value);
        if(a<=10){
        document.getElementById("d2").style.display="none";
        }
        else if(a>=11 && a<=12){
        document.getElementById("d2").style.display="block";
      }
      }
      function sub() {
      b=document.getElementById("se1").value;
      if (b==science) {
      document.getElementById("d3").style.display="block";
      }
      else if (b==commerce) {
          document.getElementById("d4").style.display="block";
      }
      else if (b==arts) {
        document.getElementById("d5").style.display="block";
      }
      }
    </script>
  </head>
  <body>
    <form action="#" method="post">
  <a href="afterlogin.php" >  <button type="button" name="button">Back to Home page</button></a>
   <center>
  <img src="blue.png" alt="">
  <h1><u>Registration Form</u></h1></center>
    <table>
  <tr>
  <td><label><b>STUDENT PERSONAL DETAILS</b></label></td></tr>

</table>
<hr>
<div class="shruti">
  <table cellspacing="10">
    <tr>
      <th>Student Name:</th>
      </tr>
      <tr>
        <td><label>First Name:</label></td>
        <td><input type="text" name="fname" value="" style="width:350px"></td>
        <td><label>Last Name:</label></td>
        <td><input type="text" name="lname" value="" style="width:350px"></td>
      </tr>
      <tr>
        <th>Father Name:</th>
        <td><input type="text" name="fathername" value="" style="width:500px"></td>
      </tr>
      <tr>
        <th>Mother Name:</th>
        <td><input type="text" name="mothername" value=""style="width:500px"></td>
      </tr><tr>
        <th>Gender:</th>
        <td>MALE<input type="radio" name="r1" value="MALE">
          FEMALE<input type="radio" name="r1" value="FEMALE">
          </td>
        </tr>
        <tr>
            <th>Date Of Birth:</th>
              <td><input type="date" name="dob" value=""></td>
            </tr><tr>
                  <tr>
                      <th>Address:</th>
                      <td><textarea name="address" rows="5" cols="70"></textarea>
                       </td>
                   </tr>
                 <tr>
        <th>Category:</th>
        <td><select class="" name="category">
           <option value="--select category--">--select Category--</option>
            <option value="GENERAL">GENERAL</option>
            <option value="ST">ST</option>
            <option value="SC">SC</option>
            <option value="OBC">OTHER</option>
        </select></td>
      </tr>
        <th>Religious:</th>
        <td><select class="" name="regis">
          <option value="--Select Religious--">--Select Religious--</option>

          <option value="HINDU">HINDU</option>
          <option value="MUSLIM">MUSLIM</option>1
          <option value="CHRISTIAN">CHRISTIAN</option>
        </select></td>
      </tr>
      <tr>
        <th>Religion:</th>
        <td><select class="" name="relin">
          <option value="--Select Religion--">--Select Religion--</option>
          <option value="INDIAN">INDIAN</option>
          <option value="">FHGJJ</option>
          <option value="">HFHVHBHN</option>
        </select></td>
      </tr>
      <tr>
        <th>Hobby:</th>
        <td><input type="text" name="hobby" value=""style="width:500px"></td>
      </tr>
    </table>
   </div>
   <br>
   <br><br>
   <table>
  <tr>
  <td><label><b>CONTACT DETAILS</b></label></td></tr>

   </table>
   <hr>
   <div class="shruti">
  <table cellspacing="10">
   <tr>
  <th>Guardian Name:</th>
  <td><input type="text" name="gname" value="">
  </td>
</tr>
<tr>
  <th>Guardian Phone no.:</th>
  <td><input type="text" name="guardianno" value="">
  </td>
</tr>
    <tr>
      <th>Phone No.:</th>
      <td><input type="text" name="phone" value="">
      </td>
      <th>Alternative phone no.:</th>
      <td><input type="text" name="alt" value="">
      </td>
    </tr>
    <tr>
      <th>E-mail:</th>
      <td><input type="email" name="email" value="">
      </td>
    </tr>

  </table>
</div>
<br><br>
<table>
  <tr>
    <td><label><b>ACADEMIC DETAILS </b></label>
    </td>
  </tr>
</table ><hr>
<div id="d1">
<table cellspacing="10">
  <tr>
    <th>Admission Date:</th>
    <td><input type="date" name="admissiondate" value="">
    </td>
  </tr>
  <tr>
    <th>Class:</th>
    <td><input type="text" name="class" id="t1"value=""></td>
    <td><input type="button" name="" onclick="dil()" value="proceed"></td>
  </tr>
    <tr id="d2">
    <th>Stream:</th>
    <td><select class="" name="stream" id="se1" onchange="sub()">
      <option value=""></option>
      <option value="science">science</option>
      <option value="commerce">commerce</option>
      <option value="arts">arts</option>
    </select>
  </td>


   </tr>
   <tr id="d3">
  <th>Subjects:</th>
  <td>Math<input type="checkbox" name="" value="">
    Physics<input type="checkbox" name="" value="">
    Chemistry<input type="checkbox" name="" value="">
    Biology<input type="checkbox" name="" value="">
    English<input type="checkbox" name="" value="">
    Hindi<input type="checkbox" name="" value="">
    Computer<input type="checkbox" name="" value="">
  </td>

</tr>
<tr id="d4">
  <th>Subjects:</th>
  <td>Accounts<input type="checkbox" name="" value="">
    economics<input type="checkbox" name="" value="">
    fgyt<input type="checkbox" name="" value="">
    Biology<input type="checkbox" name="" value="">
    English<input type="checkbox" name="" value="">
    Hindi<input type="checkbox" name="" value="">
    Computer<input type="checkbox" name="" value="">
  </td>
</tr>

<tr id="d5">
  <th>Subjects:</th>
  <td>History<input type="checkbox" name="subject[]" value="History">
    Physics<input type="checkbox" name="subject[]" value="Physics">
    Chemistry<input type="checkbox" name="subject[]" value="Chemistry">
    Biology<input type="checkbox" name="subject[]" value="Biology">
    English<input type="checkbox" name="subject[]" value="English">
    Hindi<input type="checkbox" name="subject[]" value="Hindi">
    Computer<input type="checkbox" name="subject[]" value="Computer">
  </td>
</tr>
<tr>
  <th>Admission number:</th>
  <td><input type="text" name="addnum">
  </td>
</tr>
<tr>
<th>Roll:</th>
<td><input type="text" name="roll">
</td>
</tr>

</table>
<center>
  <input style="border-radius:0px" type="submit" name="sub" value="SUBMIT">
  <input style="border-radius:0px" type="submit" name="button" value="SAVE & RETURN LATER">
</form>
  </body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","intern");
if (isset($_POST["sub"]))
{
$fname=$_POST["fname"];$lname=$_POST["lname"];$father=$_POST["fathername"];
$mother=$_POST["mothername"];$gender=$_POST["r1"];
$dob=$_POST["dob"];$address=$_POST["address"];
$category=$_POST["category"];$religious=$_POST["regis"];
$religion=$_POST["relin"];$hobby=$_POST["hobby"];
$gname=$_POST["gname"];$gno=$_POST["guardianno"];
$phone=$_POST["phone"];$altnum=$_POST["alt"];
$email=$_POST["email"];$admissiondate=$_POST["admissiondate"];
$class=$_POST["class"];$stream=$_POST["stream"];$addnum=$_POST["addnum"];
$roll=$_POST["roll"];$str="sss";$num=rand(1000,10000); $str1=$str.$num;
 $conn=mysqli_connect("localhost","root","","intern");
$sql="insert into reg(regno,fname,lname,father,mother,gender,dob,address,category,religious,religion,hobby,guardian,gno,phone,altno,email,admissiondate,class,stream,addnum,roll) values('$str1','$fname','$lname','$father','$mother','$gender','$dob','$address','$category','$religious','$religion','$hobby','$gname',$gno,$phone,$altnum,'$email','$admissiondate',$class,'$stream',$addnum,$roll)";
if(mysqli_query($conn,$sql)){
  echo "successfully inserted";
  $p=$_SERVER['PHP_SELF'];
  $s=1;
 // header("Refresh:$s;url=$p");

}
else{
  echo "not done";
  echo mysqli_error($conn);
}
}
?>
