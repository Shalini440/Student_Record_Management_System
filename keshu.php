<?php
$conn=mysqli_connect("localhost","root","","jwc");
if (isset($_POST["sub"]))
 {

  $sql="insert into saving(total)
select sum(income1.total+expense.total)
from income1 inner join expense on income1.slno=expense.slno where income1.slno=1;"
if(mysqli_query($conn,$sql)){
  echo "successfully signup";
}
else{
  echo "not done";
  echo mysqli_error($conn);
}

}
?>
