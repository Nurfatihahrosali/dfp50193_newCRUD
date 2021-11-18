<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelajar</title>
</head>

<body>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#FFB6C1">
            <th>ID Pelajar</th>
            <th>Nama Pelajar</th>
            <th>Kelas Pelajar</th>
            <th>Tindakan</th>
        </tr>
    
        <?php
        $sql = "SELECT * FROM pelajar";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $row->idpelajar; ?></td>
                    <td><?php echo $row->namapelajar; ?></td>
                    <td><?php echo $row->kelaspelajar; ?></td>
                    <td>
                        <a href="kemaskini.php?idpelajar=<?php echo $row->idpelajar; ?>">Edit</a>
                        |
                        <a href="padam.php?idpelajar=<?php echo $row->idpelajar; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                        |
                        <a href="simpan.php?idpelajar=<?php echo $row->idpelajar; ?>">Tambah</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>