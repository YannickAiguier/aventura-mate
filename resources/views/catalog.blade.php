<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre catalogue complet</title>
</head>
<body>
<h1>Tout notre choix de maté</h1>
<?php foreach ($products as $product) { ?>
<h2><?=$product->title?></h2>
<p><?=$product->description?></p>
<hr>
<?php } ?>
</body>
</html>
