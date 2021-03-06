<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="backend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="backend/assets/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <title><?= $title ?></title>
</head>

<body>
<!-- Header-->
<header>
    <?php
    require "menu.php";
    ?>
</header>
<!-- Content-->

<div class="mt-5 container-fluid">
    <br>
    <?= $content ?>
</div>

<!-- Footer-->
<footer>
    <?php
    require "footer.php";
    ?>
</footer>

</body>
</html>
