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
                 if($_SESSION['level']=="admin"){
                     ?>
                                    <li class="nav-item ">
                                        <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                            style="padding-left: 50px; padding-right: 50px">首頁</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="item.php" data-no="2"
                                            style="padding-left: 50px; padding-right: 50px">領取物資</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="upload.php" data-no="3"
                                            style="padding-left: 50px; padding-right: 50px">上架/下架</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item selected">
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
                 } 
                 else{
                 ?>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                            style="padding-left: 85px; padding-right: 85px;padding-right: 85px">首頁</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="inventory.php" data-no="6"
                                            style="padding-left: 85px; padding-right: 85px">庫存查詢</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item selected">
                                        <a class="nav-link" href="volunteer.php" data-no="4"
                                            style="padding-left: 85px; padding-right: 85px">志工專區</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php" data-no="5"
                                            style="padding-left: 85px; padding-right: 85px">登入</a>
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



        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <div class="container-fluid tm-content-container">
            <div class="mx-auto page-width-2">
                <form action="account_dblink.php" method="post" class="contact-form">
                    <input type=hidden name="dbaction" value="insert">
                    <div class="row justify-content-evenly">
                        <div class="col-4">
                            <h2>註冊志工帳號</h2>
                        </div>
                        <div class="col-4">
                            <h2>聯絡我們Contact us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 tm-contact-left">
                            <div class="input-group tm-mb-30">
                                <input name="id" type="text"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="帳號 Account（學號）">
                            </div>
                            <div class="input-group tm-mb-30">
                                <input name="name" type="text"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="姓名">
                            </div>
                            <div class="input-group tm-mb-30">
                                <input name="password" type="text"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="密碼 Password">
                            </div>

                            <div class="input-group justify-content-start">
                                <input type="submit" class="btn btn-primary tm-btn-pad-2" value="Send" name="send">
                            </div>
                </form>
            </div>

            <div class="col-md-6 tm-contact-right">
                <br></br>
                <p class="mb-4">
                    有任何問題歡迎聯絡我們!
                </p>
                <div>
                    Email:
                    <a href="mailto:info@company.com" class="tm-link-white">info@company.com</a>
                </div>
                <div class="tm-mb-45">
                    Tel:
                    <a href="tel:0100200340" class="tm-link-white">010-020-0340</a>
                </div>
                <!-- Map -->
                <div class="map-outer">
                    <div class="gmap-canvas">
                        <iframe width="100%" height="400" id="gmap-canvas"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.9337615467116!2d121.43007997525291!3d25.036321877814927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7dd8be91eaf%3A0xe342a67d6574f896!2z5aSp5Li75pWZ6LyU5LuB5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1681382439705!5m2!1szh-TW!2stw"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>






    </div>
    <div class="container-fluid">
        <footer class="row mx-auto tm-footer">
        </footer>
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