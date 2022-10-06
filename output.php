<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil!</title>
    <link rel="stylesheet" href="graph.css">
</head>
<body>
    <div class="bagian1">
        
        <center>
            <h1>Data Motor</h1>
            <div class="dalam1">
                <fieldset>
                    <p>Data motor sudah terupdate!</p>
                    <table>
                            <tr>
                                <td>Merk Motor yg digunakan : </td>
                                <td><?php echo $_GET["merkmotor"]; ?></td>
                            </tr>
                            <br>
                            <tr>
                                <td>Tahun Pembuatan : </td>
                                <td><?php echo $_GET["tahunmotor"]; ?></td>
                            </tr>
                    </table>
                </fieldset>
                <img src="logo.png" width="350" height="260">
            </div>
        </center>
    </div>
</body>
</html>
