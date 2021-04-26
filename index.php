<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D4DL</title>
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/media.css">
</head>

<body>
    <?php include("./components/header.php"); ?>
    <?php include("./components/slider.php"); ?>

    <div class="container">
        <?php include("./components/category.php"); ?>
        <?php include("./components/search.php"); ?>
        <div class="row">
            <div class="col-lg-3">
                <?php include("./components/sidebar.php") ;?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>