<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{



?>


<html >
<head>
    
    <title>Enroll History</title>
    
     <style>
body  {
  background-image: url("paper.gif");
  background-color: #cccccc;
}
</style>


<center><body>

<?php include('');?>

<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
 ?>
   

                      <h1>  <div >
                           Enroll History
                        </div></h1>
                        
                       
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Course Name </th>
                                            <th>Session </th>
                                            <th> Department</th>
                                             
                                                <th>Semester</th>
                                             <th>Enrollment Date</th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($con,"select courseenrolls.course as cid, course.courseName as courname,session.session as session,department.department as dept,courseenrolls.enrollDate as edate ,semester.semester as sem from courseenrolls join course on course.id=courseenrolls.course join session on session.id=courseenrolls.session join department on department.id=courseenrolls.department join semester on semester.id=courseenrolls.semester  where courseenrolls.studentRegno='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['courname']);?></td>
                                            <td><?php echo htmlentities($row['session']);?></td>
                                            <td><?php echo htmlentities($row['dept']);?></td>
                                          
                                            <td><?php echo htmlentities($row['sem']);?></td>
                                             <td><?php echo htmlentities($row['edate']);?></td>
                                            <td>
                                           

                                            </td>
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
                            



</body></center>
</html>
<?php } ?>
