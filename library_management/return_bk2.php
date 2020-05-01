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
		$sql="DELETE FROM issue_book WHERE ISBN_no='$isbn'";  
		if (mysqli_query($con,$sql)) 
		{     
            echo "<script language='javascript'>
		        alert('Book Returned successfully');
		         window.location = 'return_bk.php';
		        </script>";
		 } 
         else
         {
             echo "<script language='javascript'>
		         alert('This book is not borrowed');
		        window.location = 'return_bk.php';
		        </script>";
         } 
	
	} 
	
mysqli_close($con); 
?>  












