<?php
$servername = "db";
$username = "user";
$password = "user_password";
$dbname = "my_database";

// Crea connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connesso con successo";

// Dati da inserire
$user = "testuser";
$pass = "password";

// Query di inserimento
$sql = "INSERT INTO user (username, password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Inserimento Effettuato con successo !!!";
} else {
    echo "Errore Inserimento: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
