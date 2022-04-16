<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $baseUrl ?>public/css/<?= $style ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/58054f5d7c.js" crossorigin="anonymous"></script>
</head>
<header>
    <?php include "view/frontend/header.php" ?>
</header>
<body>
    <?= $body ?>
</body>
<footer>
</footer>
</html>