<?php
@include("./connection.php");
$sql = "SELECT id, name, fname, mname, number, email, pass FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Father name</th>
    <th>Mother name</th>
    <th>Moblie</th>
    <th>Email</th>
    <th>Password</th>
    <th>Action</th>
    </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['name'] . "</td>
        <td>" . $row['fname'] . "</td>
        <td>" . $row['mname'] . "</td>
        <td>" . $row['number'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['pass'] . "</td>
        <td><a href='delete.php?id=" . $row['id'] . "'>DELETE</a> | <a href='update.php?id=" . $row['id'] . "'>UPDATE</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No Records Found...................";
}