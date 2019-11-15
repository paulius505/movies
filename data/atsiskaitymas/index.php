<?php include 'masyvas.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lentele</title>

    <style>
        table,td {
            border: 1px solid black;
            padding: 3px;
            text-align: center;
            margin: 0 auto;
        }
        tr:first-child {
            font-weight: bold;
            font-size:15px ;
        }

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<table>
    <tr>
        <td>Klase</td>
        <td>Kodas</td>
        <td>Vardas</td>
        <td>Pavarde</td>
        <td>Vidurikis</td>
        <td>Duomenu formavimo data</td>
    </tr>


    <?php
    foreach ($mokiniai as $info => $value) {
        foreach ($value as $id => $Moksleivis) {
            $vidurkis = round(($Moksleivis['Ivertinimas']['Matematika']+$Moksleivis['Ivertinimas']['Informacines technologijos']+$Moksleivis['Ivertinimas']['Anglu kalba'])/3, 2);
            echo"
        <tr>
            <td>".$info."</td>
            <td>".$id."</td>
            <td>".strtoupper($Moksleivis['Vardas'])."</td>
            <td>".strtoupper($Moksleivis['Pavarde'])."</td>
            <td>".$vidurkis."</td>
            <td>".$Moksleivis['Data']."</td>
         </tr>
         </tr>";
        }
    }
    ?>
</table>
</body>
</html>