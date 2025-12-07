<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "test_terakorp";

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}

$query = 'SELECT person.nama AS "Nama", person.alamat AS "Alamat", hobi.hobi AS "Hobi" FROM person JOIN hobi ON hobi.person_id = person.id';


// search 
echo '<form action="" method="GET">
Nama:
<input type="text" name="nama"> <br>
Alamat:
<input type="text" name="alamat">
<input type="submit" value="Searchx"></form>';

$nama   = $_GET["nama"]   ?? "";
$alamat = $_GET["alamat"] ?? "";  

if ($nama !== "" || $alamat !== "") {
    $query .= " WHERE";
    if ($nama !== "") {
        $query .= ' person.nama = "'.$nama.'"';
    }
    if ($nama !== "" && $alamat !== "") {
        $query .= " AND";
    }
    if ($alamat !== "") {
        $query .= ' person.alamat = "'.$alamat.'"';
    }
}

$result = $conn->query($query);

// table
if ($result->num_rows > 0) {
    echo "<table border=1><thead><tr><td>Nama</td><td>Alamat</td><td>Hobi</td></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Nama"]. "</td><td>". $row["Alamat"]. "</td><td>" . $row["Hobi"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "tidak ditemukan";
}