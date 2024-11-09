<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

<div class="container mt-4">
  <h2>User Details</h2>
<div style="font-size:11px;color:red">
	<?php
		$error_array = [0=>"",1=>'Name is required',2=>'Name contains special characters',3=>'Gender is required',4=>'DOB is required',5=>'DOB is invalid'];
		$error_number = $_GET['error'] ?? 0 ; // if isset($_GET['error']) $_GET['error'] else 0
		echo $error_array[$error_number];
	    
?>

</div>
  <form action="insert.php" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Enter Name:</label>
      <input type="text" class="form-control w-25" id="name" value="<?php echo isset($_SESSION['name']) ?$_SESSION['name'] : ''?>" placeholder="Enter the name" name="name" >
    </div>

    <div class="mb-3">
      <label for="dob" class="form-label">Enter DOB:</label>
      <input type="date" class="form-control w-25" id="dob" value="<?php echo isset($_SESSION['dob']) ?$_SESSION['dob'] : ''?>"name="dob" >

    </div>

    <div class="mb-3">
      <label class="form-label">Select gender:</label>
	  <div class="form-check form-check-inline">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="female" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] == "female") ? 'checked' : ''; ?> id="female" >
		
        <label class="form-check-label" for="female">Female</label>
	  </div>
      </div>
	  <div class="form-check form-check-inline">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="male" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] == "male") ? 'checked' : ''; ?> id="male" >
        <label class="form-check-label" for="male">Male</label>
	  </div>
      </div>
	  <div class="form-check form-check-inline">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="others" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] == "others") ? 'checked' : ''; ?> id="others" >
        <label class="form-check-label" for="others">Others</label><br>
		
      </div>
	  </div>
    </div><br>

    <button type="submit" class="btn btn-primary">Submit</button>
	
	
  </form>
  
</div>
<div class="container mt-3">
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
