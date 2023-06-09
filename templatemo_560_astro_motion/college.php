<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>輔大食享冰箱</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->



</head>

<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/refri_video.mp4" type="video/mp4" />
    </video>
    <div class="page-container">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cd-slider-nav">
                        <nav class="navbar navbar-expand-lg" id="tm-nav">
                            <a class="navbar-brand" href="index.php">輔大食享冰箱</a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-supported-content">
                                <ul class="navbar-nav mb-2 mb-lg-0">

                                    <?php
                                    session_start();
                                    if ($_SESSION['level'] == "admin") {
                                        ?>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                                style="padding-left: 50px; padding-right: 50px">首頁</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item  selected">
                                            <a class="nav-link" href="item.php" data-no="2"
                                                style="padding-left: 50px; padding-right: 50px">領取物資</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="upload.php" data-no="3"
                                                style="padding-left: 50px; padding-right: 50px">上架/下架</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="volunteer.php" data-no="4"
                                                style="padding-left: 50px; padding-right: 50px">志工專區</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="logouttest.php"
                                                style="padding-left: 50px; padding-right: 50px">登出</a>
                                            <div class="circle"></div>
                                        </li>
                                        <?php
                                    } else {
                                        ?>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                                style="padding-left: 130px; padding-right: 130ox;padding-right: 130px">首頁</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="volunteer.php" data-no="4"
                                                style="padding-left: 130px; padding-right: 130px">聯絡我們</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php" data-no="5"
                                                style="padding-left: 130px; padding-right: 130px">登入</a>
                                            <div class="circle"></div>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <div class="container-fluid tm-content-container">

            <div style=" padding-left: 10%;">
                <h1>是誰來領取的</h1>
                <h4>請點選您的學院</h4>
            </div>


            <div class="mx-auto position-relative gallery-container tm-border-bottom">
                <div class="circle intro-circle-1"></div>
                <div class="circle intro-circle-2"></div>
                <div class="mx-auto tm-border-top gallery-slider ">

                    <!-- 學院 -->
                    <figure class="effect-julia item"style="margin-top:25px">
                        <img src="img/worker.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>教職員工</p>
                                </a>
                            </div>
                            <!-- <a href="item2.php"></a> -->
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item"style="margin-top:25px">
                        <img src="img/liberal.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>文學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item"style="margin-top:25px">
                        <img src="img/artist.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>藝術學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item"style="margin-top:25px">
                        <img src="img/smedia.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>傳播學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item"style="margin-top:25px">
                        <img src="img/education.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>教育學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item"  style="margin-top:25px">
                        <img src="img/tech.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>理工學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/language.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>外語學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/human.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>民生學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/Lawyer.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>法律學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/social.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>社科學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/management.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>管理學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/fashion.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>織品服裝學院</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/med.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>醫學院</p>
                            </div>
                        </figcaption>
                    </figure>

                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/f.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>進修部</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item" style="margin-top:25px">
                        <img src="img/g.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>其他/訪客</p>
                            </div>
                        </figcaption>
                    </figure>



                    <div class="circle intro-circle-3"></div>
                    <div class="circle intro-circle-4"></div>
                    </li>

                </div>
                
            </div>
            <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
            <div id="loader-wrapper">
                <div id="loader"></div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
            <script src="js/jquery-3.5.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/slick.js"></script>
            <script src="js/templatemo-script.js"></script>
</body>

</html>