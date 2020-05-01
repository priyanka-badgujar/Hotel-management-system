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

			echo "   if( document.myForm.s_id1.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide Student ID!\" );\n"; 
			echo "     document.myForm.s_id1.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 

			echo "   if( document.myForm.year1.value == \"-1\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please select Course year!\" );\n"; 
			echo "     document.myForm.year1.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 
			echo "\n"; 

			echo "    if( document.myForm.email1.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide Email ID!\" );\n"; 
			echo "     document.myForm.email1.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n"; 

			echo "    if( document.myForm.mn.value == \"\" ||\n"; 
			echo "           isNaN( document.myForm.mn1.value ) ||\n"; 
			echo "           document.myForm.mn1.value.length != 10 || document.myForm.mn1.value < 1000000000 )\n"; 
			echo "\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide a mob in the format ##########.\" );\n"; 
			echo "     document.myForm.mn1.focus() ;\n"; 
			echo "     return false;\n"; 
			echo "   }\n";  

			echo "    if( document.myForm.address1.value == \"\" )\n"; 
			echo "   {\n"; 
			echo "     alert( \"Please provide address!\" );\n"; 
			echo "     document.myForm.address1.focus() ;\n"; 
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

	<center><h1 class="header-login" style="color:#3A5795"></br>STUDENTS</h1></div></center>
	</br><center>
	<a href="add_stud.php"><button id="z3" class="btnLogin">ADD</button></a>
	<a href="display_stud.php"><button id="z3" class="btnLogin">DISPLAY</button></a> 
	<a href="edit_stud.php"><button id="z3" class="btnLogin">EDIT</button></a>
	<a href="delete_stud.php"><button id="z3" class="btnLogin">DELETE</button></a></center>
	</br></br>

	 <?php	echo "<form name=\"myForm\" class=\"box login\" onsubmit=\"return validate()\" action=\"edit_stud2.php\" method=\"post\">\n"; ?>
            <label align="center"><font size="4"><h3 style="color:grey">EDIT STUDENT INFO</h3></font></label>
	        <fieldset class="boxBody">
				<label><h5>Please enter Student ID:</h5></label>
				<input type="number"   name="s_id1">
				</br></br></br></br>
				<tr>
					<td>Course Year:</td>
			     	<td> <select name="year1">
						<option value="-1">--Select--</option>
						<option value="FE">FE</option>
						<option value="SE">SE</option>
						<option value="TE">TE</option>
						<option value="BE">BE</option>
				        </select>
				   </td> 
			  </tr>
			  <tr>
					<label><h5>Email ID:</h5></label>
					<td><input type="email" name="email1" /></td>
             </tr>
			 <tr>
				<label><h5>Mobile number:</h5></label>
				<td><input type="number" name="mn1" /></td>
             </tr>
			 <tr>
				<label><h5>Address:</h5></label>
	             <td> <textarea rows="3" cols="22" name="address1"></textarea></td>
             </tr></br></br></br>
			<center>
			<button id="btn" class="btn btn-primary">Submit</button><tab>
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