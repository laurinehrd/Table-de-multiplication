<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice PHP table de multiplication</title>
  </head>
  <body>

    <form class="" action="table_choisie.php" method="post">

      <label for="table">Choisir sa table :</label><br><br>

      <select class="" name="name_table">
        <option value="table1">Table de 1</option>
        <option value="table2">Table de 2</option>
        <option value="table3">Table de 3</option>
        <option value="table4">Table de 4</option>
        <option value="table5">Table de 5</option>
        <option value="table6">Table de 6</option>
        <option value="table7">Table de 7</option>
        <option value="table8">Table de 8</option>
        <option value="table9">Table de 9</option>
        <option value="table10">Table de 10</option>
      </select>

      <input type="submit" name="envoyer" value="Envoyer"/>
    </form>








    <?php include 'revision.php' ?>


  </body>
</html>
