<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA IRSYAD</title>
    <link rel="stylesheet" href="My_Biodata.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
</head>

<body style="background-color: #D9D9D9;">
    <!-- Rumus menghitung umur -->
    <?php
    $kelahiran = new DateTime('2002-12-09'); // Tanggal lahir dalam format YYYY-MM-DD
    $hari_ini = new DateTime(); // Tanggal saat ini
    $diff = $hari_ini->diff($kelahiran); // Menghitung selisih antara tanggal lahir dan tanggal saat ini
    ?>

    <div class="borderatas">
        <center>
            <h1><?php echo "BIODATA" ?></h1>    
            <h3><?php echo "Irsyad" ?></h3>
        </center>
    </div">

    <div class="kotak">
        <div class="potokiri">
            <img src="IMG_20230227_194340.png" class="foto">
        </div>

        <div class="tulisankanan">
            <div class="tulisannamaku">
                <h2><?php echo "IRSYAD RAFI NAUFALDI" ?></h2>
            </div>
            <div class="isitulisankanan">
                <p><?php echo "Aku lahir pada hari Senin, 9 Desember 2002 di kabupaten Sidoarjo. 
                So, im $diff->y right know. Aku bertempat tinggal di Jl. Joyoboyo KAV A 25 Medaeng, 
                Waru, Sidoarjo. Saat ini aku sedang menempuh pendidikan di Universitas UPN “Veteran” 
                Jawa Timur. Mengambil jurusan informatika yang sudah berlangsung selama 4 semester." ?></p>
            </div>
        </div>
    </div>

    <div class="kotakbawah">
        <div class="JenjangPendidikan">
            <div class="Judulpendidikan">
                <h2><?php echo "Jenjang Pendidikan" ?></h2>
            </div>
            <div class="isipendidikan">
                <li><?php echo "SD Raudlatul Jannah" ?></li>
                <li><?php echo "SMP Kemala Bhayangkari 1 Surabaya" ?></li>
                <li><?php echo "SMA Kemala Bhayangkari 1 Surabaya" ?></li>
                <li><?php echo "UPN Veteran Jawa Timur" ?></li>
            </div>
        </div>
        <div class="SosialMedia">
            <div class="Judulmedia">
                <h2><?php echo "Social Media" ?></h2>
            </div>
            <div class="isimedia">
                <li><?php echo "Whatsapp : 087750967250" ?></li>
                <li><?php echo "Instagram : irsyadra_" ?></li>
                <li><?php echo "Line : ultramilk09" ?></li>
            </div>
        </div>
    </div>
    
    <div class="borderbawah">
    </div>
    
</body>
</html>