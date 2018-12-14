<?php
$gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie2</title>
</head>
<body>
    <?php if($gender != 'Homme'){ ?>
      <p id="woman">C'est une développeuse !!!</p>
    <?php }else{ ?>
      <p id="man">C'est un développeur !!!</p>
    <?php } ?>
</body>
</html>
