<!DOCTYPE html>
<html>
<head>
	<title>Library System - Home</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/structure.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	
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
	</br></br></br>
	<center><h3 class="header-login" style="color:#3A5795"></br>RETURN BOOK</h3></div></center>
	<form class="box login" method="post" action="return_bk2.php" >
		<fieldset class="boxBody">
			<label><h3>ISBN number of book:</h3></label>
			<input type="number"   name="u_id"></br></br></br>
				<button id="btn" class="btn btn-primary">Return</button>
			    <button id="btnc" type="reset">Cancel</button>
		</fieldset>
	</form>



<div id="footer_text" align="center">
    <p style="color:white">MITCOE IT department LibSys : &copy 2016</p>
</div>
 
</body>
</html>