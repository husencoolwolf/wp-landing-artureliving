<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/dist/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
  <title>Arture Living</title>


  <script src="/dist/js/jquery-3.5.1.js"></script>
  <script src="/dist/js/bootstrap.js"></script>
  <style>
    .logo {
      width: 200px;
    }

    h1 {
      font-family: Open Sans;
      font-weight: 800;
      font-size: 65px;
    }

    h2 {
      font-family: Open Sans;
      font-weight: 800;
    }

    h2.title {
      font-size: 35px;
    }

    h2.subtitle {
      font-size: 25px;
      font-weight: 400;
    }

    .background {
      width: 100%;
      background-position: center;
      background-repeat: no-repeat;
    }

    .background.full-bg {
      height: 100vh;
    }

    .backgroud.half-bg {
      min-height: 50vh;
    }

    .background.cafe {
      background-image: url("assets/cafe.jpg");
    }

    .background.backdroptv1 {
      background-image: url("assets/backdrop tv/backdroptv1.png");
    }

    .background.konsepruangan1 {
      background-size: cover;
      background-image: url("assets/konsep ruangan/konsep1.jpeg");
    }

    .background.konsepruangan2 {
      background-size: cover;
      background-image: url("assets/konsep ruangan/konsep2.jpeg");
    }

    .bg-kuning {
      background-color: #f0cf18;
    }

    .garis-kanan {
      position: relative;
      background-color: #f0cf18;
      top: 18vh;
      left: 4%;
      width: 96%;
      height: 10px;
      z-index: 1000;
    }

    .garis-kiri {
      position: relative;
      background-color: #f0cf18;
      top: 18vh;
      right: 4%;
      width: 96%;
      height: 10px;
      z-index: 1000;
    }

    /* .carousel-item img {
      display: block;
      margin: 0 auto;
      object-fit: contain;
    } */
    .carousel-inner img {
      width: auto;
      height: 100vh;
    }

    .carousel {
      height: 100vh;
      width: 100%;
    }
  </style>
</head>


<body>
  <!-- jumbotron -->
  <div class="background full-bg d-flex align-items-center justify-content-center cafe">
    <div class="container">
      <div class="row mx-5">
        <div class="col-lg-5">
          <div class="d-flex h-100 align-items-center justify-content-center">
            <img class="logo" src="assets/Logo-transparent.png" alt="">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="d-flex h-100 align-items-center justify-content-center">
            <h1 class="text-lg-center">ARTURE FURNITURE</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center">
            <div class="bg-kuning px-5 py-2 d-flex">
              <strong>
                <h5 class="text-center" style="font-size: 20px; font-family: Source Sans Pro; font-weight: 600;">Menjawab Semua Keinginan anda</h5>
              </strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Profil -->
  <div class="row w-100 mx-0">
    <div class="garis-kanan"></div>

    <div class="col-md-7 shadow-lg bg-white rounded">
      <div class="container mx-2">
        <h2 class="title"><strong>Tentang Perusahaan</strong></h2>
        <h2 class="subtitle"><strong>Arture (Art</strong> in <strong>Furniture)</strong></h2>
        <br><br>
        <p class="text-justify">Kami memulai usaha ini sejak tahun 2015, kami bergerak
          di bidang interior yang mencakup pekerjaan furniture. Awal
          mula tujuan usaha ini terbentuk atas dasar ingin mendapat
          kepuasan secara visual, kenyamanan dalam penggunaan,
          dan kualitas yang terjaga. Seiring berjalannya waktu,
          cakupan kami bertambah luas ke area perkantoran,
          restoran, dan cafe. Maka dari itu kami bertekad untuk
          memprioritaskan kualiatas yang terbaik untuk semua
          pekerjaan.
        </p>
        <p class="text-justify ml-5">
          Arture seperti tim yang tumbuh besar serta dilandasi oleh
          orang-orang yang memiliki jiwa dan budaya baik, adanya
          nilai-nilai artistik seperti keindahan, kesenian, keunikan,
          kreativitas, inovasi dalam bekerja serta selalu menjunjung
          semangat bekerja keras, kedisiplinan dan kejujuran.
          Sehingga layaknya sebuah pohon yang besar dan rindang
          maka tim ini dapat membawa kenyamanan, keteduhan,
          keindahan, serta menghasilkan produktifitas yang baik.
        </p>
      </div>

    </div>
    <div class="col-md-5 px-0">
      <div class="background h-100 w-100 half-bg konsepruangan1">
        <!-- <br><br><br><br> -->
      </div>
    </div>
  </div>


  <!-- Why Us -->
  <div class="row w-100 mx-0">
    <div class="garis-kiri"></div>
    <div class="col-md-5 px-0">
      <div class="background h-100 w-100 half-bg backdroptv1">
        <!-- <br><br><br><br> -->
      </div>

    </div>
    <div class="col-md-7 shadow-lg bg-white rounded">
      <div class="container mx-2">
        <h2 class="title"><strong>Kenapa Harus Kami?</strong></h2>
        <h2 class="subtitle">ARTURE MEMILIKI 3 KEUTAMAAN :</h2>
        <br><br>
        <div class="mx-4">
          <h5>MUDAH</h5>
          <p class="text-justify">Melakukan konsultasi, menentukan konsep, dan
            survey ukuran ke rumah demi kemudahan dan
            kepuasan pelanggan
          </p>
          <h5>MURAH</h5>
          <p class="text-justify">Tidak perlu menghabiskan biaya besar untuk rumah
            idaman anda, kami selalu memberi promo atau
            diskon setiap saat.
          </p>
          <h5>MEWAH</h5>
          <p class="text-justify">Selain kualitas yang diutamakan ada tampilan juga
            yang harus dipuaskan.
          </p>

        </div>

      </div>

    </div>

  </div>

  <!-- Jasa -->
  <div class="row w-100 mx-0">
    <div class="garis-kanan"></div>

    <div class="col-md-7 shadow-lg bg-white rounded">
      <div class="container mx-2">
        <h2 class="title"><strong>Apa yang kami tawarkan?</strong></h2>
        <h2 class="subtitle">ARTURE MEMILIKI PENGALAMAN PADA :</h2>
        <br><br>
        <div class="mx-4">
          <h5>FURNITURE</h5>
          <p class="text-justify">Kitchen set, meja, kursi, lemari pakaian, lemari bawah
            tangga, dipan, backdrop tv, nakas, partisi, lantai vinyl,
            wallpaper, pintu geser, sofa, dan lainnya.
          </p>
          <h5>EKSTERIOR</h5>
          <p class="text-justify">Kanopi, kanopi balkon, bata roaster, batu alam,
            gazebo, pintu kaca alumunium, dan lainnya.
          </p>
          <h5>KONSTRUKSI</h5>
          <p class="text-justify">Pemasangan keramik, pengecatan, gypsum,
            pengelasan, pembangunan rumah, renovasi, peningkatan lantai rumah, dan lainnya.
          </p>
          <h5>INTERIOR</h5>
          <p class="text-justify">Rumah, apartemen, hotel, kantor, restoran, cafe, bar,
            salon, rumah sakit, klinik, universitas, dan lainnya.
          </p>

        </div>
      </div>
    </div>
    <div class="col-md-5 px-0">
      <div class="background h-100 w-100 half-bg konsepruangan2">
        <!-- <br><br><br><br> -->
      </div>
    </div>
  </div>


  <!-- projects -->
  <div class="row w-100 mx-0">

    <div class="col-md-6 shadow-lg bg-white rounded">
      <div class="container mx-2">
        <h2 class="title"><strong>MINIMALIST</strong> PROJECT</h2>
        <hr class="bg-warning">
        <br><br>
        <div class="mx-4">

          <p class="text-justify " style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><strong>Rumah minimalis</strong> merupakan rumah yang
            dibangun dengan bentuk dan luas yang tidak
            terlalu besar atau tidak. Mulai dari desain
            bangunan interior dan eksteriornya. Rumah
            ini dibangun dengan konsep yang sesuai
            kebutuhan yang paling mendasar. Selain
            desainya yang menekankan kepada konsep
            kesederhanaan, rumah ini pun dibangun
            diatas tanah yang tidak terlalu luas.
          </p>

        </div>
      </div>
    </div>
    <div class="col-md-6 px-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item h-100 active">
            <img src="assets/konsep ruangan/minimalis project/minimalis1.jpeg" class="w-100 img-fluid">
          </div>
          <div class="carousel-item h-100">
            <img src="assets/konsep ruangan/minimalis project/minimalis2.jpeg" class="w-100 img-fluid mx-auto">
          </div>
          <div class="carousel-item h-100">
            <img src="assets/konsep ruangan/minimalis project/minimalis3.jpeg" class="w-100 img-fluid">
          </div>
          <div class="carousel-item h-100">
            <img src="assets/konsep ruangan/minimalis project/minimalis4.jpeg" class="w-100 img-fluid">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <img src="assets/cafe.jpg" alt="">

</body>

</html>