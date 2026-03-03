<?php

include "db.php";

$result = $connection->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h3 class="mb-4">Users List</h3>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Name</th>
<th>Country</th>
<th>Email</th>
<th>Actions</th>
</tr>

<?php

while($row = $result->fetch(PDO::FETCH_ASSOC)){

echo "<tr>";

echo "<td>{$row['id']}</td>";
echo "<td>{$row['fname']} {$row['lname']}</td>";
echo "<td>{$row['country']}</td>";
echo "<td>{$row['email']}</td>";

echo "<td>

<a class='btn btn-info btn-sm' href='view.php?id={$row['id']}'>View</a>

<a class='btn btn-warning btn-sm' href='edit.php?id={$row['id']}'>Edit</a>

<a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>Delete</a>

</td>";

echo "</tr>";

}

?>

</table>

<a href="registration.php" class="btn btn-primary">Add User</a>

</div>

</body>
</html>