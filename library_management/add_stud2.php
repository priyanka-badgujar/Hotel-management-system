<?php 
	$con = mysqli_connect("localhost","root","","library"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
	else 
	{  
		// escape variables for security  
		$studid = mysqli_real_escape_string($con, $_POST['s_id']);  
		$studnm = mysqli_real_escape_string($con, $_POST['s_name']);  
		$gender = mysqli_real_escape_string($con, $_POST['g']);  
		$birth = mysqli_real_escape_string($con, $_POST['dob']);  
		$course = mysqli_real_escape_string($con, $_POST['year']); 
        $email = mysqli_real_escape_string($con, $_POST['email']);  
		$phno = mysqli_real_escape_string($con, $_POST['mn']);  
		$address = mysqli_real_escape_string($con, $_POST['address']); 

		$sql="INSERT INTO student (student_ID,student_name,gender,DOB,course_year,email,mobile_no,address)   
			   VALUES ('$studid', '$studnm', '$gender', '$birth', '$course','$email', '$phno', '$address')";  
			   
		if (mysqli_query($con,$sql)) 
		{     
             echo "<script language='javascript'>
		    alert('Student successfully Added');
		     window.location = 'add_stud.php';
		    </script>"; 
		 } 
         else
         {
                echo "<script language='javascript'>
		        alert('Student data Not Added');
		         window.location = 'add_stud.php';
		        </script>";
         } 
	
	} 
mysqli_close($con); 
?>  



















     $p = new MongoClient();
     $db = $p->library;
   
    if(!$p)
    {
        echo"connection not established";
    }
    else
    {
            $studid = $_GET["s_id"];
            $studname  = $_GET["s_name"];
            $gender = $_GET["g"];
            $birth = $_GET["dob"];
            $course = $_GET["year"];
            $email = $_GET["email"];
            $mobile = $_GET["mn"];
            $address = $_GET["address"];
            
            $data = array('ID'=>$studid,'SName'=>$studname,'Gender'=>$gender,'DOB'=>$birth,'Course_Year'=>$course,
                          'Email_ID'=>$email,'Mobile_number'=>$mobile,'Address'=>$address);
    
            if($db->student->insert($data))
            {
                
               	echo "<script language='javascript'>
		        alert('Student successfully Added');
		         window.location = 'add_stud.php';
		        </script>";
            }
            else
            
            	echo "<script language='javascript'>
		        alert('Student Not Added');
		         window.location = 'add_stud.php';
		        </script>";

     }
