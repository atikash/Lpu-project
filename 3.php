

<html>

<font size="10" color="white">
<body background="680411.jpg"><br>
<?php

$phone=$_POST['phone'];
$password=$_POST['password'];


$con=mysqli_connect("localhost","root","root","form");

$sql="select * from user where phn='$phone' AND password='$password';";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
while($row = mysqli_fetch_assoc($result))
{
echo "WELCOME ".$row["fname"];
}
}
else
{
echo "invalid credentials";
}
?>

  
</font>

        
</body>
</html>
