<!DOCTYPE html>
<html>
<?php
			 echo "<script type=\"text/javascript\">\n"; 
			echo "function validate()\n"; 
			echo "{\n"; 

			echo "   if( document.myForm.abc.value == \"-1\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please select Course year!\" );\n"; 
			echo "     document.myForm.abc.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
			echo "\n";  

			echo "   if( document.myForm.search.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please enter value for your search type!\" );\n"; 
			echo "     document.myForm.search.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
			echo "\n"; 
			
			echo "     confirm(\"Are you sure you want to submit\");\n"; 
			echo "    document.myForm.submit.onsubmit();\n"; 
			echo "}\n"; 
			echo "</script>\n";
?>
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
	 <center><div id="header"><h1 class="header-login"></br>MITCOE IT DEPARTMENT LIBRARY</h1></div></center>
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
	
<?php	echo "<form name=\"myForm\" class=\"box login\" onsubmit=\"return validate()\" action=\"search_bk2.php\" method=\"post\">\n"; ?>	
		<fieldset class="boxBody">
			
				   <label><h5>Enter ISBN no:</h5></label>
					<input type="text"  name="search">
			<center></br></br>
			<button id="btn" class="btn btn-primary">Search</button>
			<button id="btnc" type="reset">Cancel</button>
			</center>
		</fieldset>
	</form>


<div id="footer_text" align="center">
    <p style="color:white">MITCOE IT department LibSys : &copy 2016</p>
</div>
 
</body>
</html>



