<?php
session_start();
$account = $_POST['account'];
$password = $_POST['password'];
$link = mysqli_connect('localhost', 'root','12345678', 'fjufreedge');
$sql = "select distinct * from login where account = '$account' and password = '$password'";
$result = mysqli_query($link, $sql);
if ($row = mysqli_fetch_assoc($result)) {
  $_SESSION['account'] = $row['account'];
  $_SESSION[''] = $row['password'];
  $_SESSION['level'] = $row['level'];
  header("location:volunteer.php?method=message&message=登入成功");
} else {
  header("location:volunteer.php?method=message&message=登入失敗");
}
?>