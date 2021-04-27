<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D4DL</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/media.css">
</head>

<body>
    <?php include("./components/header.php"); ?>

    <div class="slider-container">
        <?php include("./components/slider.php"); ?>
    </div>
    <div class="container-xxl">
        <?php include("./components/category.php"); ?>
        <?php include("./components/search.php"); ?>
        <div class="row">
            <div class="col-sm-3 col-md-4 col-lg-3 col-xxl-2">
                <?php include("./components/sidebar.php"); ?>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-9 col-xxl-10">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xxl-9 radio-group">
                        <label>
                            <input name="filter" checked type="radio" class="radio">
                            <span>فروشی</span>
                        </label>
                        <label>
                            <input name="filter" type="radio" class="radio">
                            <span>ویژه</span>
                        </label>
                        <label>
                            <input name="filter" type="radio" class="radio">
                            <span>رایگان</span>
                        </label>
                        <label>
                            <input name="filter" type="radio" class="radio">
                            <span>همه محصولات</span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5 col-xxl-3">
                        <div class="select-group">
                            <div class="select">
                                <select>
                                    <option readonly>براساس دانلود</option>
                                    <option value="#">بیشترین دانلود</option>
                                    <option value="#">کمترین دانلود</option>
                                </select>
                            </div>
                            <div class="select">
                                <select>
                                    <option readonly>تعداد نمایش</option>
                                    <option value="#">48</option>
                                    <option value="#">72</option>
                                    <option value="#">96</option>
                                    <option value="#">120</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php include("./components/products.php"); ?>
                    </div>
                </div>
                <div class="row">
                    <nav class="pagination">
                        <ul class="pagination">
                            <li>
                                <a href="#">
                                    <i class=" feather-arrow-left"></i>
                                </a>
                            </li>
                            <li><a class="" href="#"> 1 </a></li>
                            <li><span class="current-page"> 2 </span></li>
                            <li><a class="" href="#"> 3 </a></li>
                            <li><a class="" href="#"> 4 </a></li>
                            <li><a class="" href="#"> 5 </a></li>
                            <li>
                                <a href="#">
                                    <i class=" feather-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php include("./components/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>