<?php
require 'conn.php';

$namapelajar = $_POST['namapelajar'];
$kelaspelajar = $_POST['kelaspelajar'];


$sql = "INSERT INTO pelajar (namapelajar, kelaspelajar) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sd',$namapelajar, $kelaspelajar);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}