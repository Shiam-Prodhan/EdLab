<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="navcss.css">
</head>
<body>
	<nav id ="nav">
         <label class="logo">EDLAB</label>
         <ul>
            <li><a href="http://localhost/Edlab/Home.html">Home</a></li>
            <li>
               <a href="#">Course Catalog
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="#">Engineering</a></li>
                  <li><a href="#">Others</a></li>
				  
               </ul>
            </li>
            <li><a  href="http://localhost/Edlab/contact.html">Contact</a></li>
            <li><a href="http://localhost/Edlab/login.php" class="active">Sign In</a></li>
			<li><a href="http://localhost/Edlab/register.php" >Sign Up</a></li>
         </ul>
      </nav>
      <section></section>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/log.svg">
		</div>
		<div class="login-content">
			<form action="login.php" method = "post" autocomplete="off" >
			<?php include('errors.php'); ?>
				<img src="img/avatar.svg">
				<h2 class="title">Sign In</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username" required>
           		   </div>
           		</div>
				
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Password</h5>
           		   		<input type="password" class="input" name = "password" required>
           		   </div>
           		</div>
           		
            
            	<input type="submit" class="btn" value="Log in" name = "login_user" required>
				<p>
					Does not have an account? <br> 
					<a href="register.php">Sign up</a>
				</p>
            </form>
        </div>
    </div>
    
</body>
</html>

