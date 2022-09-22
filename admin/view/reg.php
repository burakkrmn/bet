<?php
$username = $_POST["username"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$passport = $_POST["identity"];
$balance = $_POST["balance"];
$device = $_POST["device"];

$connect = new mysqli ("localhost", "golden", "Gt05b3v5?" , "Gt05b3v5?");
$new = mysqli_set_charset($connect,"utf8");

$ekle = "INSERT INTO users(login, password, balance, phone, passport, device) values('$username', '$password', '$balance', '$phone', '$passport', '$device')";

if (mysqli_query($connect, $ekle)) {

      $giris = "SELECT * FROM users where login='$username' and password='$password' and balance='$balance' and phone='$phone' and passport='$passport' and device='$device'";
      $getir = $connect->query($giris);
            if ($getir->num_rows>0) {
                  echo '<script>location.href = "users";</script>' ;
            }
} else {
      echo 'Kayıt Başarısız';

}

?>