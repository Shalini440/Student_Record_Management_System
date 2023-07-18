<?php
session_start();
$conn=mysqli_connect("localhost","root","","intern");
if (isset($_POST["sub"])) {
$reg=@$_POST["reg"];
$sql="select regno,fname,lname,father,mother from reg where regno='$reg'";
$result=mysqli_query($conn,$sql);
$row=@mysqli_fetch_array($result);
echo mysqli_error($conn);
}
if (isset($_POST["sub1"])) {
  $conn=mysqli_connect("localhost","root","","intern");
  
  $reg1=$_POST["rnum"];
  $fname=$_POST["t1"];
  $lname=$_POST["t2"];
  $father=$_POST["t3"];
  $mother=$_POST["t4"];
  $sql="update reg set regno='$reg1',fname='$fname',lname='$lname',father='$father',mother='$mother' where regno='$reg'";
  if (mysqli_query($conn,$sql)) {
    echo "ok";
  }
  else {
    echo "not ok";
    echo mysqli_error($conn);
  }
  }

?>
<html>
<head>
  <style media="screen">
    body{
      background-image: url('todayclass2.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
        backdrop-filter:blur(8px);
    }
  </style>
</head>
<div><center>
    <form action="#" method="post" style="background-color:rgba(0,0,0,0.9);font-size:30px;padding:30px;color:white;width:500px;height:200px;border-radius:20px 20px">
      ENTER THE REGISTRATION NUMBER OF STUDENT:
      <input style="width:400px;margin-top:40px;height:40px;border-radius:20px 20px" type="text" name="reg" value=""><br><br>
      <input style="width:90px;height:40px;font-size:20px;background-color:#1a53ff;border:none;border-radius:10px 10px" type="submit" name="sub">
    </form ></center><div>
      <div>
    <form action="#" method="post" style="color:white">
    <label>REGISTRATION NUMBER</label><input type="text" name="rnum" value="<?php echo @$row[0];?>"><br>
    <label>FIRST NAME</label><input type="text" name="t1" value="<?php echo @$row[1];?>"><br>
    <label>LAST NAME</label><input type="text" name="t2" value="<?php echo @$row[2];?>"><br>
    <label>FATHER NAME</label><input type="text" name="t3" value="<?php echo @$row[3];?>"><br>
    <label>MOTHER NAME</label><input type="text" name="t4" value="<?php echo @$row[4];?>"><br>
    <input type="submit" name="sub1" value="SUBMIT">
    </form>
</div>
</html>

