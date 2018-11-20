<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Créer une variable et l'initialiser à 0.
    Tant que cette variable n'atteint pas 10, il faut :
    </p>
    <ol>
      <li>l'afficher</li>
      <li>l'incrementer</li>
    </ol>
    <p>1er test</p>
    <?php $number = 0;
    while ($number <= 10)
    { ?>
    <p><?php echo $number;
    $number++;
    }?></p>
    <p>2eme test</p>
    <?php for ($number=0; $number <= 10; $number++) { ?>
    <p><?php echo $number; } ?></p>
  </body>
</html>
