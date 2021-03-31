
<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT * FROM  students where pincode='".trim($_POST['pincode'])."' && StudentRegno='".$_SESSION['login']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$_SESSION['pcode']=$_POST['pincode'];
header("location:enroll.php");
}
else
{
$_SESSION['msg']="Error :Wrong Pincode. Please Enter a Valid Pincode !!";
}
}
?>


<html >
<head>
    
    <title>Pincode Verification</title>
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
   
    <div>
                        <h1 >Student Pincode Verification</h1>
                    </div>
               
<font color="red" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        
                      <center> <form name="pincodeverify" method="post"><br>
   <div>
    <label for="pincode">Enter Pincode</label>
    <input type="password"  id="pincode" name="pincode" placeholder="Pincode" required />
  </div><br>
 
 <center> <button type="submit" name="submit" class="btn btn-default">Verify</button><center>
                           <hr />
   



</form><center>
    </div>
   
</body></center>
</html>
<?php } ?>
