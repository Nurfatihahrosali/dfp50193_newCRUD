<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
require 'conn.php';

$idpelajar = $_POST['idpelajar'];
$namapelajar = $_POST['namapelajar'];
$kelaspelajar = $_POST['kelaspelajar'];

$sql = "UPDATE pelajar SET namapelajar = ?, kelaspelajar = ? WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $namapelajar, $kelaspelajar,$idpelajar);
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
?>

</body>
</html>