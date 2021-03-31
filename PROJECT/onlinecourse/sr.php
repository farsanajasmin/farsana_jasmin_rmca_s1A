<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$studentname=$_POST['studentname'];
$studentregno=$_POST['studentregno'];
$password=md5($_POST['password']);
$pincode = rand(100000,999999);
$ret=mysqli_query($con,"insert into students(studentName,StudentRegno,password,pincode) values('$studentname','$studentregno','$password','$pincode')");
if($ret)
{
$_SESSION['msg']="Student Registered Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Student  not Register";
}
}
?>



<!DOCTYPE html>
<html >
<head>
    
    <title>student Registration</title>
      
     <style>
body  {
  background-image: url("paper.gif");
  background-color: #cccccc;
}
</style>
   
</head>

<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->

    <!-- MENU SECTION END-->
   
                      <center>  <h1>Student Registration  </h1></center>
                   
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                       
                       <form name="dept" method="post">
					   <table  border="1" align="center" cellpadding = "10">
   <tr>
    <td>Student Name  </td>
   <td> <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Student Name" required />
  </td>
  </tr>
  <tr>

 <td>
    Student Reg No   </td>
   <td> <input type="text" class="form-control" id="studentregno" name="studentregno" onBlur="userAvailability()" placeholder="Student Reg no" required />
     <span id="user-availability-status1" style="font-size:12px;"></td>
  </tr>



<tr>
    <td>Password  </td>
   <td> <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required />
  </td>   
</tr>
</table>
<center> <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button></center>
</form>
</body>
</html>
<?php } ?>
