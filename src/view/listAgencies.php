<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1>Liste des agences</h1>
  <ul>
    <?php foreach ($agencies as $agency): ?>
      <li><?= $agency ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>