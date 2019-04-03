<?php
  header("Content-Type: text/html");
  $title = "Pizza Shop";
?>
<!DOCTYPE html>
<html lang="de">
<?php
echo <<<EOT
  <head>
      <meta charset="UTF-8" />
      <!-- für später: CSS include -->
      <!-- <link rel="stylesheet" href="XXX.css"/> -->
      <!-- für später: JavaScript include -->
      <!-- <script src="XXX.js"></script> -->
      <title>$title</title>
  </head>
EOT;
?>
<body>
  <?php
  echo <<<EOT
    <section>
      <h1>Bestellung</h1>
        <section>
          <h2>Speisekarte</h2>
          <img src="../img/pizza_1.png" width="150" alt="pizza_1"> <br>
          Margherita <br><br>
          4.00€ <br><br>
          <img src="../img/pizza_1.png" width="150" alt="pizza_2"> <br>
          Salami <br><br>
          4.50€ <br><br>
          <img src="../img/pizza_1.png" width="150" alt="pizza_3"> <br>
          Hawaii <br><br>
          5.50€ <br><br>
        </section>

        <section>
          <h2>Warenkorb</h2>
          <form>
            <select name="warenkorb" size="7">
              <option label="Salami">Salami</option>
              <option label="Hawaii" selected="true">Hawaii</option>
              <option label="Salami">Salami</option>
            </select>
            <br><br>
            14.50€
            <br><br>

            <input type="text" placeholder="Ihre Adresse"><br>

            <button>Alle Löschen</button>
            <button>Auswahl Löschen</button>
            <button>Bestellen</button>
          </form>
        </section>

    </section>
EOT;
  ?>
</body>
