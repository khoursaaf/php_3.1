<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Exercise</title>
</head>
<body>
  <p>Créer une variable et l'initialiser à 0.
    Tant que cette variable n'atteint pas 10, il faut :</p>
    <ol>
      <li>l'afficher</li>
      <li>l'incrementer</li>
    </ol>
    <?php
    $nombre = 0;
    while ($nombre <= 10) {
      echo "$nombre <br />";
      $nombre++;
    }
     ?>
  </body>
  </html>
