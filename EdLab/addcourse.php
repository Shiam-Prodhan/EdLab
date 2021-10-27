<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Courses</title>
  <link rel="stylesheet" href="payment.css">
  <link rel="stylesheet" href="navcss.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<nav id="nav">
         <label class="logo">EDLAB</label>
         <ul>
            <li><a href="http://localhost/Edlab/Homesignin.html">Home</a></li>
            <li>
               <a href="#">Course Catalog
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="http://localhost/Edlab/Engineering1.html">Engineering</a></li>
                  <li><a href="http://localhost/Edlab/Others1.html" class="active">Others</a></li>
				 
               </ul>
            </li>
			 <li><a href="http://localhost/Edlab/addcourse.php" class="active">Add Course</a></li>
         </ul>
      </nav>
      <section></section>
	<form method="post" action="addcourse.php" autocomplete="off">
  	<?php include('errors.php'); ?>
	<div id = "align">
    <div class="container" action="addcourse.php">
        <h1>Add New Course</h1>
        <div class="second-row">
            <div class="card-number">
                <h3>Course Name</h3>
                <div class="input-field">
                    <input type="text" name="coursename" value="<?php echo $coursename; ?>" required>
                </div>
            </div>
        </div>
		<div class="second-row">
            <div class="card-number">
                <h3>Course Description</h3>
                <div class="input-field">
                    <input type="text" name="coursedesc" value="<?php echo $coursedesc; ?>" required>
                </div>
            </div>
        </div>
		
			<div class="input-group">
				<button type="submit" class="btn" name="add_course">Add Course</button>
			</div>
    </div>
	
	
	</form>
	
	</div>
</body>
</html>

































