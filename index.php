<?php
require_once "dbConnect.php";

if (!isset($_GET['module']))
{
    $_GET['module'] = "ky-039";
    $_GET['ln'] = "ee";
}

$query = "SELECT * FROM `info`";
$res = mysqli_query($link, $query);
while($row = mysqli_fetch_array($res))
{
    if ($row['deviceCode'] == $_GET['module'] && $row['lang'] == $_GET['ln'])
    {
        $pic1 = $row['pic1'];
        $module = $row['module'];
        $descriptH = $row['module'];
        $descript = $row['descript'];
        $pic2 = $row['pic2'];
        $pic3 = $row['pic3'];
        $pic4 = $row['pic4'];
        $linkH = $row['linkH'];
        $link1 = $row['link1'];
        $link2 = $row['link2'];
        $schemeH = $row['schemeH'];
        $schemePic = $row['schemePic'];
        $code = $row['code'];
    }
}

$query2 = "SELECT * FROM `infoheaders`";
$res2 = mysqli_query($link, $query2);
while($row2 = mysqli_fetch_array($res2))
{
    if ($row2['language'] == $_GET['ln'])
    {
        $menu = $row2['menu'];
        $pictures = $row2['pictures'];
        $information = $row2['information'];
        $links = $row2['links'];
        $progcode = $row2['progcode'];
    }
}
?>

<html lang="en">
<head>
    <title>Modules</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- <div class="KW_progressContainer">
  <div class="KW_progressBar">

  </div>
</div> -->
<div class="page">

    <ul class="nav fixed-top navbar-dark bg-dark justify-content-end" style="height: 50px; width: auto">

        <li class="nav-item" style="margin-top: 5px; margin-left: -550px">
            <a href="?module=<?php print_r($_GET['module'])?>&ln=ee" class="btn btn-outline-primary">EE</a>
        </li>
        <li class="nav-item"style="margin-left: 10px; margin-top: 5px">
            <a href="?module=<?php print_r($_GET['module'])?>&ln=en" class="btn btn-outline-primary">EN</a>
        </li>
        <li class="nav-item"style="margin-left: 10px; margin-top: 5px; margin-right: 10px  ">
            <a href="?module=<?php print_r($_GET['module'])?>&ln=ru" class="btn btn-outline-primary">RU</a>
        </li>
    </ul>

    <div id="colorlib-page">

        <section class="home-slider owl-carousel">
            <a href="index.php?module=ky-039&ln=<?php print_r($_GET['ln'])?>" class="slider-item" style="height: 400px; background-image: url(images/1.jfif);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-end justify-content-center">
                        <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                            <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">KY-039</h1>
                        </div>
                    </div>
                </div>
            </a>

            <a href="index.php?module=ky-023&ln=<?php print_r($_GET['ln'])?>" class="slider-item" style="height: 400px; background-image: url('images/6.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-end justify-content-center">
                        <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                            <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">KY-023</h1>
                        </div>
                    </div>
                </div>
            </a>

            <a href="index.php?module=ky-020&ln=<?php print_r($_GET['ln'])?>" class="slider-item" style="height: 400px; background-image: url('images/11.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-end justify-content-center">
                        <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                            <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">KY-020</h1>
                        </div>
                    </div>
                </div>
            </a>

        </section>
        <!-- END slider -->
        <section class="ftco-services">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-5 ftco-animate py-5 nav-link-wrap aside-stretch">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <h3 class="ml-3"><?php print_r($_GET['module'])?></h3>
                            <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-house-plans"></span> <?php echo $pictures ?></a>

                            <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 flaticon-ideas"></span> <?php echo $information ?></a>

                            <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3 flaticon-modern-house"></span> <?php echo $links ?></a>

                            <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 flaticon-skyline"></span> <?php echo $progcode ?></a>
                        </div>
                    </div>
                    <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">

                        <div class="tab-content pl-md-5" id="v-pills-tabContent">

                            <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab" style="width: auto">
                                <img src="images/<?php echo $pic2 ?>" style="margin-left: 10vw; margin-top: 20px; height: 30vh">
                                <img src="images/<?php echo $pic3 ?>" style="margin-left: 10vw; margin-top: 20px; height: 30vh">
                                <img src="images/<?php echo $pic4 ?>" style="margin-left: 10vw; margin-top: 20px; height: 30vh">
                            </div>

                            <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                                <h2 class="mb-4"><?php echo $descriptH ?></h2>
                                <p><?php echo $descript ?></p>
                            </div>

                            <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab" style="width: auto">
                                <h2 class="mb-4"><?php echo $linkH ?></h2>
                                <a href="<?php echo $link1 ?>" style="font-size: 1.7vh"><?php echo $link1 ?></a>
                                <br><br>
                                <a href="<?php echo $link2 ?>" style="font-size: 1.7vh"><?php echo $link2 ?></a>
                            </div>


                            <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab" style="width: auto">
                                <h2 class="mb-4"><?php echo $schemeH ?></h2>
                                <img src="images/<?php echo $schemePic ?>" style="margin-bottom: 30px; margin-top: 20px; height: 20vmax">
                                <pre style="font-size: 1.8vh"><?php echo $code ?></pre>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-5 text-center">
                        <div class="ftco-footer-widget">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Artpeace. All rights reserved.
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>


        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/main.js"></script>

</body>
</html>