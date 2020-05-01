<?php 
	$con = mysqli_connect("localhost","root","","library"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
	else 
	{  
		// escape variables for security  
		$sid = mysqli_real_escape_string($con, $_POST['id']);   
		$sql="DELETE FROM student WHERE student_ID='$sid'";  
		if (mysqli_query($con,$sql)) 
		{     
             echo "<script language='javascript'>
		        alert('Student data Successfully Deleted');
		         window.location = 'delete_stud.php';
		        </script>";
		 } 
         else
         {
             echo "<script language='javascript'>
		        alert('Maybe student has issued some books or Wrong student ID');
		         window.location = 'delete_stud.php';
		        </script>";
         } 
	
	} 
	
mysqli_close($con); 
?>  







