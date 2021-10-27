<?php 
 include('paymentdata.php')


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
	<link rel="stylesheet" href="navcss.css">
    <link rel="stylesheet" href="payment.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	
	
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<nav id ="nav">
         <label class="logo">EDLAB</label>
         
      </nav>
      <section></section>
	<form method="post" action="payment.php" autocomplete="off">
  	<?php include('errors.php'); ?>
	<div id = "align">
    <div class="container" action="payment.php">
        <h1>Confirm Your Payment</h1>
        <div class="second-row">
            <div class="card-number">
                <h3>Course Name</h3>
                <div class="input-field">
                    <input type="text" id="cname" name="coursename" value="<?php echo $coursename; ?>" required>
                </div>
            </div>
        </div>
		<div class="second-row">
            <div class="card-number">
                <h3>Instructor Name</h3>
                <div class="input-field">
                    <input type="text" name="insname" value="<?php echo $insname; ?>" required>
                </div>
            </div>
        </div>
		<div class="second-row">
            <div class="card-number">
                <h3>Email</h3>
                <div class="input-field">
                    <input type="text" name="email" value="<?php echo $email; ?>" required>
                </div>
            </div>
        </div>
		<div class="first-row">
                <div class="trx">
                <h3>Bkash Transaction ID</h3>
					<div class="input-field">
						<input type="text" name="transid" value="<?php echo $transid; ?>" required>
					</div> 
				</div>
                
              
        </div>
			<div class="input-group">
				<button type="submit" class="btn" name="add_payment">Confirm Payment</button>
				<button type="submit" class="btn"><a id = "home" href="http://localhost/Edlab/Homesignin.html">Return to Homepage</a></button>
			</div>
    </div>
	
	
	</form>
	
	</div>

		
	</script>
</body>
</html>