<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title><?= $title; ?></title>
</head>
<body>
<?= $this->include('template/header_view'); ?>
<div class="container pt-5">
<h1><?= $title; ?></h1>
<hr>
<div class="container pt-5">
<p><?= $content; ?></p>
<br>
<div class="row">
<div class="container">
     <br>
                <img src="profil.JPG" title="Gunawan" alt="Gunawan" class="image" width="150" style="float: left; border: 2px solid black;">
                <br>
                <div class="container pt-4">
                <center><h1>GUNAWAN</h1></center>
                <center><p>Mahasiswa Teknik Informatika di <strong>Universitas Pelita Bangsa</strong> 
                Kelas : T120B1.
                Sekarang Tinggal Di Cikarang,Bekasi.
                </p></center>
            </div>
            <br>
<?= $this->include('template/footer_view'); ?>
</body>
</html>