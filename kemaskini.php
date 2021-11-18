<?php
    require 'conn.php';
    $idpelajar = $_GET['idpelajar'];
    $sql = "SELECT * FROM pelajar WHERE idpelajar = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $idpelajar);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_object();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemas Kini</title>
</head>
<body>
<form action="kemaskini_simpan.php" method="post">
<input type="hidden" name="idpelajar" value="<?php echo $row->idpelajar; ?>"/>
       
        <table>
            <tr>
                <td><label for="namapelajar">Nama Pelajar</label></td>
                <td>
                    <input id="namapelajar" type="text" step="any" name="namapelajar"
                           value="<?php echo $row->namapelajar; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="kelaspelajar">Kelas Pelajar</label></td>
                <td>
                    <input id="kelaspelajar" type="text" step="any" name="kelaspelajar"
                           value="<?php echo $row->kelaspelajar; ?>" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                    

                </td>
            </tr>
        </table>
    </form>
</body>
</html>