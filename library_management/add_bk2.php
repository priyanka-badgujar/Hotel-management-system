<?php 
	$con = mysqli_connect("localhost","root","","library"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
	else 
	{  
		// escape variables for security  
		$book = mysqli_real_escape_string($con, $_POST['bnm']);  
		$author = mysqli_real_escape_string($con, $_POST['anm']);  
		$publisher = mysqli_real_escape_string($con, $_POST['pnm']);  
		$isbn = mysqli_real_escape_string($con, $_POST['i_id']);  
		    
		$sql="INSERT INTO book (booknm, author, publisher,isbn)   
			   VALUES ('$book', '$author', '$publisher', '$isbn')";  
			   
		if (mysqli_query($con,$sql)) 
		{     
             echo "<script language='javascript'>
		    alert('BOOK ADDED SUCCESSFULLY');
		     window.location = 'add_bk.php';
		    </script>"; 
		 } 
         else
         {
              echo "<script language='javascript'>
		       alert('Error, Duplicate Book Entry Please Use Unique ID');
		     window.location = 'add_bk.php';
		    </script>"; 
         } 
	
	} 
mysqli_close($con); 
?>  
