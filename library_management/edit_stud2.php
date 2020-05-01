<?php 
	$con = mysqli_connect("localhost","root","","library"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
	else 
	{  
        $studid = mysqli_real_escape_string($con, $_POST['s_id1']);    
		$course = mysqli_real_escape_string($con, $_POST['year1']); 
        $email = mysqli_real_escape_string($con, $_POST['email1']);  
		$phno = mysqli_real_escape_string($con, $_POST['mn1']);  
		$address = mysqli_real_escape_string($con, $_POST['address1']); 
        
        $query="UPDATE student SET  course_year='$course', email='$email', mobile_no='$phno', address='$address'
                WHERE student_ID='$studid'";

      if(mysqli_query($con,$query))
        {	
            
            echo "<script language='javascript'>
		        alert('Student record successfully Upadated');
		         window.location = 'edit_stud.php';
		        </script>";
            
        }
        else 
        {
            echo "<script language='javascript'>
		        alert('Student record updation failed');
		         window.location = 'edit_stud.php';
		        </script>";
            
        }
   }	

?>
