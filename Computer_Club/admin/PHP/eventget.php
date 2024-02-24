<?php
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "project_3";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT date, title, description, image FROM events";
$result = $conn->query($sql);

echo "<table border='1'>
        <tr>
            <th>Date</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
        </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['date']}</td>
                <td>{$row['title']}</td>
                <td>{$row['description']}</td>
                <td><img src='{$row['image']}' alt='Event Image' width='100'></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

$conn->close();
?>
