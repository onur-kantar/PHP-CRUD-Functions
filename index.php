<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <?php
    require_once 'baglan.php';

    if (!isset($_GET['sayfa'])) {
        $_GET['sayfa'] = 'index';
    }
    switch ($_GET['sayfa']) {
        case 'index':
            require_once 'ekle.php';
            require_once 'listele.php';
            break;
        case 'duzenle':
            require_once 'duzenle.php';
            break;
        case 'sil':
            require_once 'sil.php';
            break;
    }
    ?>

</body>

</html>