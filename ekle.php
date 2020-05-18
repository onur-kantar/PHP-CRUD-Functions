<?php

if(isset($_POST['submit'])){

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
}

?>

<div class="container mb-5 mt-3">
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Ad</label>
            <input required type="text" class="form-control" placeholder="Adınızı Giriniz" name="ad">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Soyad</label>
            <input required type="text" class="form-control" placeholder="Soyadınızı Giriniz" name="soyad">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mail</label>
            <input required type="email" class="form-control" placeholder="Mail Adresinizi Giriniz" name="mail">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Yaş</label>
            <input required type="number" class="form-control" placeholder="Yaşınızı Giriniz" name="yas">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Gönder</button>
    </form>
</div>