<!DOCTYPE HTML>
<html>
<head>
<title>Library System - Login</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/structure.css">
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
        <center><div id="header"><h1 class="header-login"></br>MITCOE IT DEPARTMENT LIBRARY SYSTEM</h1></div></center>
        <center> <img class="bg_img" src="img/lib.jpg"> </center>
        <form class="box login" method="post" action="index.php" >
            <label align="center"><font size="6"><h2 style="color:grey">LOGIN</h2></font></label>
	        <fieldset class="boxBody">
	        <label><h5>Username</h5></label>
            <input type="text"  placeholder="Username" name="username">
            <label><h5>Password:</h5></label>
            <input type="password" placeholder="Password" name="password"><br/>
            <input type="submit" class="btnLogin" value="Login">
            <input type="reset" class="btnLogin" value="Reset">
            </br></br></br>
       </form>
       



        <?php
            session_start();
            $username = "user";
            $password = "password";
            if(isset($_POST['username']) && isset($_POST['password']))
            {
                if($_POST['username']==$username && $_POST['password']==$password )
                {
                        $_SESSION['loggedin']=true;
                        header("Location:home.php");
                }
                else
                {
                    echo "<script language='javascript'>
		                                  alert('Incorrect Username or Password');
		                                   window.location = 'index.php';
		                              </script>";
                    
                }
            }
        ?>

    </body>
</html>




