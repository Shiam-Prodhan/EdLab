<?php 
 
 include('paymentdata.php')


?> 
<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Payment</h2>
  </div>
	
  <form method="post" action="payment.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Course Name</label>
  	  <input type="text" name="coursename" value="<?php echo $coursename; ?>">
  	</div>
    <div class="input-group">
      <label>Instructor Name</label>
      <input type="text" name="insname" value="<?php echo $insname; ?>">
    </div>

  	<div class="input-group">
  	  <label>Your email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
    <div class="input-group">
      <label>Bkash Transaction id</label>
      <input type="text" name="transid" value="<?php echo $transid; ?>">
    </div>
  	
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="add_payment">Enroll</button>
  	</div>
  	
  </form>
</body>
</html>