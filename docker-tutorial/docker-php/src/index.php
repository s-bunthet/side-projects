
<?php

echo "<h1>Hello from the docker container!</h1>";

$mysqli = new mysqli("mysql", "root", "root", "my-company-db");

// For the first time, uncomment the following queries to add the record to the table.

// $sql = "INSERT INTO users (name, fav_color) VALUES('Lil Sneazy', 'Yellow')";
// $result = $mysqli->query($sql);
// $sql = "INSERT INTO users (name, fav_color) VALUES('Nick Jonas', 'Brown')";
// $result = $mysqli->query($sql);
// $sql = "INSERT INTO users (name, fav_color) VALUES('Maroon 5', 'Maroon')";
// $result = $mysqli->query($sql);
// $sql = "INSERT INTO users (name, fav_color) VALUES('Tommy Baker', '043A2B')";
// $result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " => " . $user->fav_color;
    echo "<br>";
}
