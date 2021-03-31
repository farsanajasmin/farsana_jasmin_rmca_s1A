<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0 or strlen($_SESSION['pcode'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$studentregno=$_POST['studentregno'];
$pincode=$_POST['Pincode'];
$session=$_POST['session'];
$dept=$_POST['department'];
$level=$_POST['level'];
$course=$_POST['course'];
$sem=$_POST['sem'];
$ret=mysqli_query($con,"insert into courseenrolls(studentRegno,pincode,session,department,level,course,semester) values('$studentregno','$pincode','$session','$dept','$level','$course','$sem')");
if($ret)
{
$_SESSION['msg']="Enroll Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Not Enroll";
}
}
?>


<html >
<head>
    
    <title>Course Enroll</title>
    
     <style>
body  {
  background-image: url("paper.gif");
  background-color: #cccccc;
}
</style>
   
</head>

<center><body>
<?php include('');?>
   
<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
 ?>

   
   
               <center>     <div>
                        <h1 >Course Enroll </h1>
                    </div>
                
                
                       
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($con,"select * from students where StudentRegno='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        
                       <form name="dept" method="post" enctype="multipart/form-data">
					   <table  border="1" align="center" cellpadding = "10">
  <tr>
    <td>Student Name  </td>
    <td><input type="text" class="form-control" id="studentname" name="studentname" value="<?php echo htmlentities($row['studentName']);?>"  />
  </td>
  </tr>

 <tr >
    <td>Student Reg No   </td>
    <td><input type="text" class="form-control" id="studentregno" name="studentregno" value="<?php echo htmlentities($row['StudentRegno']);?>"  placeholder="Student Reg no" readonly />
    
  </td>
  </tr>



<tr>
    <td>Pincode  </td>
   <td> <input type="text" class="form-control" id="Pincode" name="Pincode" readonly value="<?php echo htmlentities($row['pincode']);?>" required />
  </td>  
</tr>  


 <?php } ?>

<tr>
    <td>Session  </td>
   <td> <select  name="session" required="required">
   <option value="">Select Session</option>  
   <?php 
$sql=mysqli_query($con,"select * from session");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['session']);?></option>
<?php } ?>

    </td> 
  </tr> 



<tr>
    <td>Department  </td>
  <td>  <select class="form-control" name="department" required="required">
   <option value="">Select Depertment</option>   
   <?php 
$sql=mysqli_query($con,"select * from department");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['department']);?></option>
<?php } ?>

    </td> 
  </tr> 


<!--<tr >
    <td>Level  </td>
    <td><select class="form-control" name="level" required="required">
   <option value="">Select Level</option> 
   
   <?php 
$sql=mysqli_query($con,"select * from level");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['level']);?></option>
<?php } ?>

    </td> 
  </tr>-->  

<tr>
    <td>Semester  </td>
 <td>   <select class="form-control" name="sem" required="required">
   <option value="">Select Semester</option>   
   <?php 
$sql=mysqli_query($con,"select * from semester");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['semester']);?></option>
<?php } ?></td>

     
  </tr>


<tr >
    <td>Course  </td>
    <td><select class="form-control" name="course" id="course" onBlur="courseAvailability()" required="required">
   <option value="">Select Course</option>  
   <?php 
$sql=mysqli_query($con,"select * from course");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['courseName']);?></option>
<?php } ?>
    </td> 
    <span id="course-availability-status1" style="font-size:12px;">
  </tr>





</center>
</table>
<br><button type="submit" name="submit" id="submit" >&nbsp;Enroll</button>
</form>
                            </div>

</body>
</html>
<?php } ?>
