<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$studentname=$_POST['studentname'];
$photo=$_FILES["photo"]["name"];
$cgpa=$_POST['cgpa'];
move_uploaded_file($_FILES["photo"]["tmp_name"],"studentphoto/".$_FILES["photo"]["name"]);
$ret=mysqli_query($con,"update students set studentName='$studentname',studentPhoto='$photo',cgpa='$cgpa'  where StudentRegno='".$_SESSION['login']."'");
if($ret)
{
$_SESSION['msg']="Student Record updated Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Student Record not update";
}
}
?>


<html >
<head>
    
    <title>Student Profile</title>
	 
     <style>
body  {
  background-image: url("paper.gif");
  background-color: #cccccc;
}
</style>
    
</head>

<body>
<?php include('includes');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
 ?>
    

                      <center>  <h1>Student Registration  </h1></center>
                   
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($con,"select * from students where StudentRegno='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>
<form>
                        <table  border="1" align="center" cellpadding = "10">
						<tr>
						
    <td>Student Name  </td>
    <td><input type="text" class="form-control" id="studentname" name="studentname"readonly value="<?php echo htmlentities($row['studentName']);?>"  /></td>
  </tr>

 <tr>
    <td>Student Reg No   </td>
    <td><input type="text" class="form-control" id="studentregno" name="studentregno" value="<?php echo htmlentities($row['StudentRegno']);?>"  placeholder="Student Reg no" readonly /></td>
    
  </tr>



<tr>
    <td>Pincode  </td>
    <td><input type="text" class="form-control" id="Pincode" name="Pincode" readonly value="<?php echo htmlentities($row['pincode']);?>" required /></td>
  </tr>   

<!--<tr>
    <td>CGPA  </td>
    <td><input type="text" class="form-control" id="cgpa" name="cgpa" readonly value="<?php echo htmlentities($row['cgpa']);?>" required /></td>
  </tr>  

<tr>

    <td>Student Photo  </td>
   <?php if($row['studentPhoto']==""){ ?>
  <td> <img src="studentphoto/ab.png" width="200" height="200"><?php } else {?>
  <td> <img src="studentphoto/<?php echo htmlentities($row['studentPhoto']);?>" width="200" height="200"></td>
   <?php } ?></td>
   </tr>
  
<tr>
    <td>Upload New Photo  </td>
    <td><input type="file" class="form-control" id="photo" name="photo"  value="<?php echo htmlentities($row['studentPhoto']);?>" /></td>
  </tr>-->
  </table>


  <?php } ?>

<!-- <center><button type="submit" name="submit" id="submit" class="btn btn-default">Update</button></center>-->
  <?php include('includes/footer.php');?>
    

</body>
</html>
<?php } ?>
