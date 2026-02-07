<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Client Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Add Client</h2>

<form method="POST" action="add_client.php">
    <input type="text" name="name" placeholder="Client Name" required>
    <input type="text" name="phone" placeholder="Phone">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Add Client</button>
</form>

<h2>Client List</h2>

<table>
<tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php
$result = $db->query("SELECT * FROM clients");
while ($row = $result->fetchArray()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['email']}</td>
        <td><a href='delete_client.php?id={$row['id']}'>Delete</a></td>
    </tr>";
}
?>
</table>
</div>

</body>
</html>
