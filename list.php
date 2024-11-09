<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="user.html">create user </a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age </th>
                <th>Gender</th>
                <th> Action</th>
            </tr>
        </thead>
        <tbody>
            <?php



            $con = mysqli_connect("localhost", "root", "", "sample") or die('cant connect');

            //create database

            $result = mysqli_query($con, "select * from users");
            while ($row = mysqli_fetch_assoc($result)) {

            ?>
                <tr>
                    <td><?php echo $row['name']; ?> <?php echo $row['id']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td> <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">delete</a>
                    </td>
                </tr>
            <?php
            }

            ?>
        </tbody>
    </table>

</body>

</html>