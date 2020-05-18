<?php
$sorgu = $db->prepare('SELECT * FROM users');
$sorgu->execute();
$kullanicilar = $sorgu->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ad</th>
                <th scope="col">Soyad</th>
                <th scope="col">Mail</th>
                <th scope="col">Yaş</th>
                <th scope="col">Zaman</th>
                <th scope="col">Düzenle / Sil</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kullanicilar as $kullanici) : ?>
                <tr>
                    <?php foreach ($kullanici as $bilgi) : ?>
                        <td><?php echo $bilgi ?></td>
                    <?php endforeach; ?>
                    <td>
                        <a type="button" class="btn btn-success" href='?sayfa=duzenle&id=<?=$kullanici['id']?>'>Düzenle</a>
                        <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?')" type="button" class="btn btn-danger" href='?sayfa=sil&id=<?=$kullanici['id']?>'>Sil</a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>