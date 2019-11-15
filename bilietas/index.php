<?php include 'bilietas.php';

if (isset($_POST['submit'])) {

    if ($_POST['Bagazas'] > 20) {
        $_POST{'Kaina'} += 20;
    }

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>Bilietas</title>
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link href="style.css" rel="stylesheet" integrity="">
</head>
<body>

<h1>Air ticket</h1>

  <div class="bilietas">
      <table>
          <tr>
              <th>Vardas:</th>
              <th>Pavardė:</th>
              <th>Skrydzio Nr.:</th>
          </tr>
          <tr>
              <td><?=$_POST['vardas'] ?> </td>
              <td><?=$_POST['pavarde'] ?> </td>
              <td><?=$_POST['Skrydzio_nr'] ?> </td>
          </tr>
          <tr>
              <th>Bagažas:</th>
              <th>Skrydis iš:</th>
              <th>Skrydžis į:</th>
          </tr>
          <tr>
              <td><?=$_POST['Bagazas'] ?> </td>
              <td><?=$_POST['Is'] ?> </td>
              <td><?=$_POST['I'] ?> </td>
          </tr>
          <tr>
              <th>Bagažas:</th>
              <th>Asmens kodas:</th>
              <th>Pastabos:</th>
          </tr>
          <tr>
              <td><?=$_POST['Bagazas'] ?> </td>
              <td><?=$_POST['asmens_kodas'] ?> </td>
              <td><?=$_POST['pastabos'] ?>  </td>
          </tr>
          <tr>
              <th></th>
              <th>Kaina: </th>
              <th></th>
          <tr>
              <td></td>
              <td><?=$_POST['Kaina'] ?> </td>
              <td></td>
          </tr>
      </table>



    </div>




</body>
</html>

<?php
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Bilietas</title>
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
<h2>Air Ticket</h2>
<form action="" method="post">
    <div class="form-group">
    <select name="Skrydzio_nr" class="form-control">
        echo "<option value ='' selected disabled>Skrydzio Nr</option>;
        <?php
        foreach ($skrydzionr as $info) {
            echo "<option>" . $info . "</option>";
        }
        ?>
    </select></div>
    <div class="form-group">
    <select name="Bagazas" class="form-control">
        echo "<option value ='' selected disabled> Bagažas </option>
        <?php
        foreach ($bagazas as $kg) {
            echo "<option>" . $kg . "</option>";
        }
        ?>
    </select></div>
    <div class="form-group">
    <select name="Is" class="form-control">
        echo "<option value ='' selected disabled>Skrydžio pradžia</option>
        <?php
        foreach ($pradzia as $is) {
            echo "<option>" . $is . "</option>";
        }
        ?>
    </select></div>
    <div class="form-group">
    <select name="I" class="form-control">
        echo "<option value ='' selected disabled>Skrydžio pabaiga</option>
        <?php
        foreach ($pabaiga as $i) {
            echo "<option>" . $i . "</option>";
        }
        ?>
    </select></div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Asmens kodas" name="asmens_kodas">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Vardas" name="vardas">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Pavardė" name="pavarde">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Kaina" name="Kaina">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Pastabos" name="pastabos">
    </div>
    <div class="form-group">
        <button type="submit" name="submit">Spausdinti</button>
    </div>

</form>
</section>



</body>
</html>