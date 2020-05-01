<!DOCTYPE html>
<html>
<head>
	<title>Library System - Home</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/structure.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	 <?php
			echo "<script type=\"text/javascript\">\n"; 
			echo "function validate()\n"; 
			echo "{\n"; 

            echo "   if( document.myForm.studid.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide Student ID!\" );\n"; 
			echo "     document.myForm.studid.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
			echo "\n"; 

            echo "    if( document.myForm.studnm.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide Student name!\" );\n"; 
			echo "     document.myForm.studnm.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 

			echo "   if( document.myForm.bknm.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide book name!\" );\n"; 
			echo "     document.myForm.bknm.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
			echo "\n"; 

            echo "    if( document.myForm.arnm.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide author name!\" );\n"; 
			echo "     document.myForm.arnm.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
	
    		echo "    if( document.myForm.isbn.value == \"\" ||\n"; 
			echo "           isNaN( document.myForm.i_id.value ) )\n";
			echo "   {\n"; 
			echo "     alert( \"Please provide ISBN no \" );\n"; 
			echo "     document.myForm.isbn.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
			echo "   \n"; 

			echo " if( document.myForm.issue.value == \"dd-mm-yyyy\")\n"; 
			echo "\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide a dob in the format yyyy-mm-dd\" );\n"; 
			echo "     document.myForm.issue.focus() ;\n"; 
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
	<a href="borrow_bk.php"><button class="btnLogin5">  Issue Book</button></a>
	<a href="return_bk.php"><button class="btnLogin5"> Return Book</button></a>  
    <a href="logout.php"><button class="btnLogin5">Log-out</button></a>	
	</center>
	<center><h1 class="header-login" style="color:#3A5795"></br>Issue book</h1></div></center>
	</br></br>
	<center>
	<a href="borrow_bk2.php"><button id="z3" class="btnLogin">ISSUE A BOOK</button></a>
	<a href="borrow_bk3.php"><button id="z3" class="btnLogin">VIEW ISSUED BOOKS</button></a>
	</center>
    </br></br></br>


     <?php	echo "<form name=\"myForm\" class=\"box login\" onsubmit=\"return validate()\" action=\"borrow_bk4.php\" method=\"post\">\n"; ?>
            <label align="center"><font size="5"><h3 style="color:grey">ISSUE BOOK</h3></font></label>
	        <fieldset class="boxBody">
				<label><h5>Student ID:</h5></label>
				<input type="number"   name="studid">
                <label><h5>Student name:</h5></label>
				<input type="text"  name="studnm">
				<label><h5>Book Name:</h5></label>
				<input type="text"  name="bknm">
                <label><h5>Book Author</h5></label>
				<input type="text"  name="arnm">
				<label><h5>ISBN no:</h5></label>
				<input type="number"   name="isbn">
				<tr>
					<label><h5>Issue date:</h5></label>
					<td><input type="date" name="issue" /></td>
                </tr>
				</br></br>
				
			<center>
			<button id="btn" class="btn btn-primary">Issue</button><tab>
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