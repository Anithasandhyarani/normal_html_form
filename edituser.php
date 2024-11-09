<!DOCTYPE html>

<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
 
<div class="container mt-4">
  <h2>Edit user Details</h2>
    <?php


    $id = $_GET['id'];
    $con = mysqli_connect("localhost", "root", "", "sample") or die('cant connect');

    

    $result = mysqli_query($con, "select * from users WHERE id ='$id'");
    while ($row = mysqli_fetch_assoc($result)){

    ?>
        <form action="updateuser.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> <br>
			 <div class="mb-3">
      <label for="name" class="form-label">Enter Name:</label>
      <input type="text" class="form-control w-25" id="name" name="name" value="<?php echo $row['name']; ?>" required>
    </div>
			<div class="mb-3">
        <label for="dob" class="form-label">Enter DOB:</label>
        <input type="date" class="form-control w-25" id="dob" name="dob" value="<?php echo $row['DOB']; ?>"required>
      </div>
          <div class="mb-3">
      <label class="form-label">Select gender:</label>
	  <div class="form-check form-check-inline">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="female" <?php if($row['gender'] == 'female') echo 'checked'?> id="female" required>
        <label class="form-check-label" for="female">Female</label>
	  </div>
      </div>
	   <div class="form-check form-check-inline">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="male" <?php if($row['gender'] == 'male') echo 'checked'?> id="male" required>
        <label class="form-check-label" for="male">Male</label>
		</div>
      </div>
	   <div class="form-check form-check-inline">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="others" <?php if($row['gender'] == 'others') echo 'checked'?> id="others" required>
        <label class="form-check-label" for="others">Others</label>
      </div>
	  </div>
    </div>
	 <button type="update" class="btn btn-primary">update</button>

        </form>

	<?php } ?>
  </body>

</html> 