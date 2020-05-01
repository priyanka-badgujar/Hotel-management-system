<?php 
	$con = mysqli_connect("localhost","root","","library"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
	else 
	{  
		// escape variables for security  
		$isbn = mysqli_real_escape_string($con, $_POST['u_id']);   
		$sql="DELETE FROM book WHERE isbn='$isbn'";  
		if (mysqli_query($con,$sql)) 
		{     
            echo "<script language='javascript'>
		        alert('Book Successfully Deleted');
		         window.location = 'delete_bk.php';
		        </script>";
		 } 
         else
         {
            echo "<script language='javascript'>
		        alert('Wrong Book ID');
		         window.location = 'delete_bk.php';
		        </script>";
         } 
	
	} 
	
mysqli_close($con); 
?>  



