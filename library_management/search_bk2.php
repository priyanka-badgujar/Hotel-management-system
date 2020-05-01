<!DOCTYPE html>
<html>
<head>
	<title>Library System - Home</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/structure.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<style type="text/css">
		.myTable { background-color:#eee;border-collapse:collapse;text-align:center;font-size:20px;}
		.myTable th { background-color: #3A5795;color:white; }
		.myTable td, .myTable th { padding:10px;border:1px solid #3A5795; }
	</style>
</head>
<body>
	 <center><div id="header"><h1 class="header-login"></br>MITCOE IT LIBRARY SYSTEM</h1></div></center>
	<center>
	<a href="home.php"><button  class="btnLogin5">Home</button></a>
	<a href="student.php"><button  class="btnLogin5"> Students</button></a>
	<a href="book.php"><button class="btnLogin5"> Books</button></a>
	<a href="borrow_bk.php"><button class="btnLogin5">  Issue Book</button></a>
	<a href="return_bk.php"><button class="btnLogin5"> Return Book</button></a>  
    <a href="logout.php"><button class="btnLogin5">Log-out</button></a>	
	</center>
	<center><h1 class="header-login" style="color:#3A5795"></br>BOOKS</h1></div></center>
	</br><center>
	<a href="add_bk.php"><button id="z3" class="btnLogin">ADD</button></a>
	<a href="search_bk.php"><button id="z3" class="btnLogin">SEARCH</button></a> 
	<a href="display_bk.php"><button id="z3" class="btnLogin">DISPLAY</button></a>
	<a href="delete_bk.php"><button id="z3" class="btnLogin">DELETE</button></a></center>
	</br></br></br>
    <div align="center">


  <?php
	$con = mysqli_connect("localhost","root","","library");   
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
		else
		{
			if (session_status() == PHP_SESSION_DISABLED)
			{
			echo"<script>alert('login 1st')</script>";
			header('Location: index.php');
			
			}
			else
			{
                $search = mysqli_real_escape_string($con, $_POST['search']); 
                $result = mysqli_query($con,"SELECT * FROM book where isbn= $search "); 
                if($result)
                {
                        echo "<table class=\"myTable\">  
                        <tr>  
                            <th>ISBN no</th>   
                            <th>Name</th>   
                            <th>Author</th>   
                            <th>Publisher</th>      
                        </tr>  ";  
                        echo "</thead>";
                        echo "<tbody>";
                    
                        while($row = mysqli_fetch_array($result))   
                        {
                            echo "<td>".$row['isbn']."</td>";   
                            echo "<td>".$row['booknm']."</td>";   
                            echo "<td>".$row['author']."</td>";   
                            echo "<td>".$row['publisher']."</td>";    
                            echo "</tr>"; 
                        }
                        echo "</tbody>";
                        echo "</table>";
                        
                }
                    else
                    {
                        echo "<script language='javascript'>
                            alert('Book doesn't exist');
                            window.location = 'search_bk.php';
                            </script>"; 
                    }	
                    }
                }
                mysqli_close($con);
	?>


    </div>
    <div id="footer_text" align="center">
    <p style="color:white">MITCOE IT department LibSys : &copy 2016</p>
</div>
 
</body>
</html>





