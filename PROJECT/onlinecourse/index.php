<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
    $regno=$_POST['regno'];
    $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM students WHERE StudentRegno='$regno' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="pincode-verification.php";//
$_SESSION['login']=$_POST['regno'];
$_SESSION['id']=$num['studentRegno'];
$_SESSION['sname']=$num['studentName'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(studentRegno,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid Reg no or Password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


<html>
<head>
    
    <title>Student Login</title>
   <style>
body  {
  background-image: url("paper.gif");
  background-color: #cccccc;
}
</style>
    


</head>
<body>

    <?php include('includes/header.php');?>
    <br><br><br><br><br>
	<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
          <center><form name="admin" method="post">
            
	<table  border="1" align="center" cellpadding = "10">
                   <center> <h3>Please Login To Enter </h3><center>

                

            
             
               
				<tr>
                     <td>Enter Reg no : </td>
                    <td> <input type="text" name="regno" class="form-control"  /></td>
					 </tr>
					 <br>
					 <tr>
            <td>Enter Password :  </td>
                        <td><input type="password" name="password" class="form-control"  /><td>
                        </tr >
						</table><br>
                        <center> <button type="submit" name="submit" class="btn btn-info"><span></span> &nbsp;LOGIN </button>&nbsp;<br>
						
                        </center>
					
						
						
               
          </form>
<a href="abcde.php">Register Here  </a>
               

    
	

</body>
</html>
