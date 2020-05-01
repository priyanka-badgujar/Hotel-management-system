<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Library System - Home</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/structure.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
    <?php
			echo "<script type=\"text/javascript\">\n"; 
			echo "function validate()\n"; 
			echo "{\n"; 

			echo "   if( document.myForm.bnm.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide book name!\" );\n"; 
			echo "     document.myForm.bnm.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
			echo "\n"; 
			
			echo "    if( document.myForm.anm.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide author name!\" );\n"; 
			echo "     document.myForm.anm.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 

			echo "    if( document.myForm.pnm.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide publisher name!\" );\n"; 
			echo "     document.myForm.pnm.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 

			echo "    if( document.myForm.i_id.value == \"\" ||\n"; 
			echo "           isNaN( document.myForm.i_id.value ) )\n";
			echo "   {\n"; 
			echo "     alert( \"Please provide book id \" );\n"; 
			echo "     document.myForm.i_id.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
			echo "   \n"; 
			echo "     confirm(\"Are you sure you want to submit\");\n"; 
			echo "    document.myForm.submit.onsubmit();\n"; 
			echo "}\n"; 
			echo "</script>\n"; 
	?>
</head>
<body>
	 <center><div id="header"><h1 class="header-login"></br>MITCOE IT DEPARTMENT LIBRARY</h1></div></center>
	<center>
	<a href="home.php"><button  class="btnLogin5">Home</button></a>
	<a href="student.php"><button  class="btnLogin5"> Students</button></a>
	<a href="book.php"><button class="btnLogin5"> Books</button></a>
	<a href="borrow_bk.php"><button class="btnLogin5"> Issue Book</button></a>
	<a href="return_bk.php"><button class="btnLogin5"> Return Book</button></a>  
    <a href="logout.php"><button class="btnLogin5">Log-out</button></a>	
	</center>

	<center><h1 class="header-login" style="color:#3A5795"></br>BOOKS</h1></div></center>
	</br><center>
	<a href="add_bk.php"><button id="z3" class="btnLogin">ADD</button></a>
	<a href="search_bk.php"><button id="z3" class="btnLogin">SEARCH</button></a> 
	<a href="display_bk.php"><button id="z3" class="btnLogin">DISPLAY</button></a>
	<a href="delete_bk.php"><button id="z3" class="btnLogin">DELETE</button></a></center>

<?php	echo "<form name=\"myForm\" class=\"box login\" onsubmit=\"return validate()\" action=\"add_bk2.php\" method=\"post\">\n"; ?>
		    <label align="center"><font size="6"><h3 style="color:grey">ADD BOOKS</h3></font></label>
	        <fieldset class="boxBody">
				<label><h5>Book name</h5></label>
				<input type="text"  name="bnm">
				<label><h5>Author name</h5></label>
				<input type="text"  name="anm">
				<label><h5>Publisher name</h5></label>
				<input type="text"   name="pnm">
				<label><h5>ISBN no:</h5></label>
				<input type="number"   name="i_id">
			<center></br></br>
			<button id="btn" class="btn btn-primary">Insert</button>
			<button id="btnc" type="reset">Cancel</button>
			</center>
				</br>
			</fieldset>
       </form>

	


	
<div id="footer_text" align="center">
    <p style="color:white">MITCOE IT department LibSys : &copy 2016</p>
</div>				

</body>
</html>