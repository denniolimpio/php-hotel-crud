<!-- pagina pricipale -->
<?php  include __DIR__ . '/database.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Boolean Hotel</title>
<link rel="stylesheet" href="dist/app.css">
</head>
<body>

  <header>
    <h1> Hotel Boolean</h1>
  </header>

<!-- lista stanze -->
  <main>

    <table>
      <thead>
        <tr>
          <th> ID</th>
          <th> Numero Stanza</th>
          <th> Piano</th>
        </tr>
      </thead>

      <tbody>

        <?php foreach ($rooms as $room)  { ?>
          <!-- stanza -->
          <tr class="singola_stanza">
            <td> <?php echo $room['id'] ?></td>
            <td><?php echo $room['room_number'] ?></td>
            <td> <?php echo $room['floor'] ?></td>
          </tr>
          <!-- fine stanza -->

         <?php } ?>

      </tbody>
    </table>
    <!-- Fine lista stanze -->

  </main>
</body>
</html>
