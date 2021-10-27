<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
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
            <li><a href="http://localhost/Edlab/contact.html">Contact</a></li>
            <li><a href="http://localhost/Edlab/login.php">Sign In</a></li>
			<li><a href="http://localhost/Edlab/register.php" class="active">Sign Up</a></li>
         </ul>
      </nav>
      <section></section>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/register.svg">
		</div>
		<div class="login-content">
			<form action="register.php" method = "post" autocomplete="off">
			<?php include('errors.php'); ?>
				<img src="img/avatar.svg">
				<h2 class="title">Sign Up</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username" value="<?php echo $username; ?>" required>
           		   </div>
           		</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="email" value="<?php echo $email; ?>" required>
           		   </div>
           		</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Password</h5>
           		   		<input type="password" class="input" name = "password_1" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm Password</h5>
           		    	<input type="password" class="input" name="password_2" required>
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Sign up" name = "reg_user">
				<p>
					Already have an account? <br>
					<a href="login.php">Sign in</a>
				</p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

