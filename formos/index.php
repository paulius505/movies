<?php

if (isset ($_POST['submit'])) {
   foreach ($_POST as $key => $value){
       echo "<b>".$key.":</b>  ". $value."<br>";

   }
   $vidurkis = round(($_POST ['matematika']+$_POST ['lietuviu_kalba']+$_POST {'programavimas'}+$_POST {'anglu_kalba'})/4, 2 );
   echo"<br><b>vidurkis: </b> $vidurkis";

    if ($vidurkis < 4) {
        echo ' Neatestuotas';
    }
   die;
}

?>

<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        section {
            width: 80%;
            margin: 0 auto;
            padding: 20px;

        }
    </style>

</head>
<body>
<section>
    <h2>Forma</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Vardas" name="vardas">
        </div>
            <div class="form-group">
                 <input type="text" class="form-control" placeholder="Pavarde" name="pavarde">
            </div>
            <div class="form-group">
                 <input type="number" class="form-control" placeholder="Klase" name="klase">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Matematika" name="matematika">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Lietuvių kalba" name="lietuviu_kalba">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Programavimas" name="programavimas">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Anglų kalba" name="anglu_kalba">
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Skaičiuoti</button>
            </div>
        </form>
</section>

</body>
</html>