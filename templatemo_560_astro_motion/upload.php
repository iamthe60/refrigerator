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
                                    <li class="nav-item ">
                                        <a class="nav-link" href="item.php" data-no="2"
                                            style="padding-left: 50px; padding-right: 50px">領取物資</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item selected">
                                        <a class="nav-link" href="upload.php" data-no="3"
                                            style="padding-left: 50px; padding-right: 50px">上架/下架</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="volunteerlogin.php" data-no="4"
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
                                    <li class="nav-item selected">
                                        <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                            style="padding-left: 85px; padding-right: 85px;padding-right: 85px">首頁</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="inventory.php" data-no="6"
                                            style="padding-left: 85px; padding-right: 85px">庫存查詢</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="volunteerlogin.php" data-no="4"
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

        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        <div class="container-fluid tm-content-container">
            <div class="position-relative page-width-1 page-right tm-border-top tm-border-bottom"
                style="margin-left: 340px;" ;>
                <div class="circle intro-circle-1"></div>
                <div class="circle intro-circle-2"></div>
                <div class="circle intro-circle-3"></div>
                <div class="circle intro-circle-4"></div>
                <form method='post' action='upload.php'>
                    <input type="submit" name="but_update" class="btn btn-primary tm-btn-pad-2" value="上傳">
                    <div class="input-group tm-mb-30">
                        <input name="password" type="password"
                            class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                            placeholder="Password 密碼" required>
                        <?php
if (isset($_POST['password'])) {
  $password = $_POST['password'];

  $link = mysqli_connect('localhost','root','12345678','fjufreedge');
  $sql = "select * from login where password = '$password'";
  $result = mysqli_query($link, $sql);
  if($row = mysqli_fetch_assoc($result)) {
    $_SESSION['password'] = $row['password'];
    $_SESSION['level'] = $row['level'];

    $conn = new mysqli('localhost','root','12345678','fjufreedge');
    if(isset($_POST['but_update'])){
      if(isset($_POST['update'])){
        foreach($_POST['update'] as $updatenum){
          $amount = $_POST['amount_'.$updatenum];
          $name = $_POST['name_'.$updatenum];
          $area = $_POST['area_'.$updatenum];
          $image = $_POST['image_'.$updatenum];

          if($name !='' && $area != '' ){
            $updateUser = "UPDATE item SET `amount`='".$amount."', `image`='".$image."' WHERE `num`=".$updatenum;
            mysqli_query($conn,$updateUser);
          }
        }
      }
    }
  }
  else {
    echo "<script>alert('密碼錯誤，更新庫存失敗')</script>"; 
  }
}
?>
                    </div>


                    &nbsp;


                    <table class="table table-bordered">

                        <tr style='background: black;'>
                            <th><input type='checkbox' id='checkAll'>
                                <font color="white">Check</font>
                            </th>
                            <p>
                                <th class="product-thumbnail">
                                    <font color="white">Image</font>
                                </th>
                                <th class="product-name">
                                    <font color="white">Name</font>
                                </th>
                                <th class="product-price">
                                    <font color="white">Area</font>
                                </th>
                                <th class="product-quantity">
                                    <font color="white">Amount</font>
                                </th>
                        </tr>
                        <?php
                  $conn = new mysqli('localhost','root','12345678','fjufreedge');
                  $query = "SELECT * from item ;";
                  $result = mysqli_query($conn,$query);

                  while($row = mysqli_fetch_array($result)){
                    $num = $row['num'];
                    $name = $row['name'];
                    $image = $row['image'];
                    $area = $row['area'];
                    $amount = $row['amount'];
                 
                  ?>
                        <tr>
                            <td><input type='checkbox' name='update[]' value='<?= $num ?>'></td>
                            <td>
                                <div>
                                    <p><img src="img/<?php echo $row['image']?>"width="150px" height="150px"></p>
                            </td>
                            
                            <td><input type='text' name='name_<?= $num ?>' value='<?= $name ?>'></td>
                            <td><input type='text' size=3 name='area_<?= $num ?>' value='<?= $area ?>'></td>
                            <td><input type='text' size=10 name='amount_<?= $num ?>' value='<?= $amount ?>'></td>
                        </tr>
                        <?php
                  }
                  ?>

                    </table>

                    <script type="text/javascript">
                    $(document).ready(function() {
                        $('#checkAll').change(function() {
                            if ($(this).is(':checked')) {
                                $('input[name="update[]"]').prop('checked', true);
                            } else {
                                $('input[name="update[]"]').each(function() {
                                    $(this).prop('checked', false);
                                });
                            }
                        });


                        $('input[name="update[]"]').click(function() {
                            var total_checkboxes = $('input[name="update[]"]').length;
                            var total_checkboxes_checked = $('input[name="update[]"]:checked').length;

                            if (total_checkboxes_checked == total_checkboxes) {
                                $('#checkAll').prop('checked', true);
                            } else {
                                $('#checkAll').prop('checked', false);


                            }
                        });
                    });
                    </script>
                </form>
            </div>





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