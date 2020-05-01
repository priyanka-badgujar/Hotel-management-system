<?php 
	$con = mysqli_connect("localhost","root","","library"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
	else 
	{  
	
        $stud_id = mysqli_real_escape_string($con, $_POST['studid']);  
		$stud_nm = mysqli_real_escape_string($con, $_POST['studnm']);
		$book_nm = mysqli_real_escape_string($con, $_POST['bknm']);  
		$bk_author = mysqli_real_escape_string($con, $_POST['arnm']);  
		$bk_isbn = mysqli_real_escape_string($con, $_POST['isbn']);  
		$issue = mysqli_real_escape_string($con, $_POST['issue']);  
		
		 $result = mysqli_query($con,"SELECT * FROM issue_book where isbn = '$bk_isbn' ");

				 $sql="INSERT INTO issue_book (Stud_ID,Stud_name,Book_name, Author_name,ISBN_no,Issue)   
							   VALUES (' $stud_id', '$stud_nm','$book_nm', '$bk_author', '$bk_isbn', '$issue')";	   

						if (mysqli_query($con,$sql)) 
						{     
							echo "<script language='javascript'>
									alert('BOOK ISSUED SUCCESSFULLY');
									window.location = 'borrow_bk2.php';
									</script>"; 
						} 
						else
						{
								echo "<script language='javascript'>
									alert('Error,while issuing books');
									window.location = 'borrow_bk2.php';
									</script>";
						} 
	

	
		
	} 
mysqli_close($con); 
?>  


