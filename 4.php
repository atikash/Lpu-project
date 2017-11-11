<html>

<font size="10" color="white">
<body background="680411.jpg"><br>
<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$mail=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$course=$_POST['course'];

$country=$_POST['country'];

$con=mysqli_connect("localhost","root","root","form");
if(!$con)
{
die("Connection Failed :".mysqli_connect_error());
}

$sql=mysqli_query($con,"Insert into user values('$fname','$lname','$address',$zip,'$mail',$phn,'$password','$gender','$dob','$course','$country');");

$result=mysqli_query($con,$sql);
if(!$result)
{
echo "New Record Created Successfully";

while($row = mysqli_fetch_assoc($result))
{
echo "WELCOME ".$row["fname"];
}

}
else
{
echo "ERROR: ".$sql."<br>".mysqli_error($con);
}
?>

</font>

        
</body>
</html>
