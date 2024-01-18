<?php
include('connect.php');
$host = "localhost";
$user = "root";
$pass = "";
$db = "demo";

$conn = mysqli_connect($host, $user, $pass, $db);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
</head>

<body>
</body>

</html>
<table class="table">
    <thead>
        <button class="btn btn-primary"><a href="insert.php" class="text-light">Add User</a></button>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">E-mail</th>
            <th scope="row">Action 1</th>
            <th scope="row">Action 2</th>
        </tr>
    </thead>
    <?php
    $query = "SELECT * FROM student";
    $data = mysqli_query($conn, $query);
    $result = mysqli_num_rows($data);

    if ($result) {
        while ($row = mysqli_fetch_array($data)) {
    ?>
            <tr>
                <td><?php echo $row['firstname']; ?>
                </td>
                <td><?php echo $row['lastname']; ?>
                </td>
                <td><?php echo $row['email']; ?></td>
                <td><button class="btn btn-primary"><a href="update.php?id=<?php echo $row['id']; ?>" class="text-light">Update</a></td></button>

                <td><button class="btn btn-danger"><a onclick="return confirm('Are You Sure to Delete?')" href="delete.php?id=<?php echo $row['id']; ?>" class="text-light">Delete</a></td></button>

            </tr>

        <?php
        }
    } else {
        ?>
        <tr>
            <td>No record found</td>
        </tr>

    <?php
    } ?>

</table>