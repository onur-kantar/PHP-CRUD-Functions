<?php
require_once 'baglan.php';

$ad = isset($_POST['ad']) ? $_POST['ad'] : null;
$soyad = isset($_POST['soyad']) ? $_POST['soyad'] : null;
$mail = isset($_POST['mail']) ? $_POST['mail'] : null;
$yas = isset($_POST['yas']) ? $_POST['yas'] : null;

$sorgu = $db->prepare('INSERT INTO `users` SET ad=?, soyad=?, mail=?, yas=?');

$ekle = $sorgu->execute([$ad, $soyad, $mail, $yas]);

if ($ekle) {
    header('Location:index.php');
} else {
    $hata = $sorgu->errorInfo();
    echo 'MySQL Hatası : ' . $hata[2];
}
