<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="user2.html">create user </a>
    <br>
    <?php $msg = $_GET['msg'] ?? ''; ?>
	<?php $upd = $_GET['upd'] ?? ''; ?>
	<?php $sucmsg = $_GET['sucmsg'] ?? '';?>
  
    <table>
        <thead>
            <tr><th>ID</th>
                <th>Name</th>
                <th>DOB </th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php



            $con = mysqli_connect("localhost", "root", "", "sample") or die('cant connect');

           

            $result = mysqli_query($con, "select * from users");
            while ($row = mysqli_fetch_assoc($result)) {

            ?>
                <tr><td><?php echo $row ['id'];?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['DOB']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td> <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }

            ?>
        </tbody>
    </table>
	 <p><?php echo $msg ;?> </p>
	 <p><?php echo $upd ;?> </p>
    
</body>

</html>