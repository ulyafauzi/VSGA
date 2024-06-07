<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #profile {
      position: relative;
      color: white;
    }
    #profile img {
      width: 100%;
      height: auto;
    }
    .hero {
    
      min-height: 100vh;
      display: flex;
   
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .hero::after {
      content: "";
      display: block;
      position: absolute;
      width: 100%;
      height: 30%;
      bottom: 0;
      background: linear-gradient(
        0deg,
        rgba(1, 1, 3, 1) 8%,
        rgba(255, 255, 255, 0) 30%
      );
    }
    #profile .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;
    }
    #profile::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }
    #map {
      height: 100%;
      width: 100%;
    }
    .section-title {
      text-align: center;
      margin-bottom: 40px;
      color: #343a40;
    }
    .icon {
      font-size: 50px;
      color: #17a2b8;
    }
    .section {
      margin-bottom: 30px;
      padding: 20px;
      border-radius: 10px;
      background: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .section h3 {
      color: #343a40;
      font-size: 28px;
      margin-bottom: 15px;
    }
    

  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo1.jpg" width="50px" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#profile">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
</nav>


  <section class="hero" id="profile">
    <img src="img/motor1.jpeg" alt="Profile Image">
    <div class="content">
      <h1 class="mb-3">-Kisik Street Rascals-</h1>
      <h5>Kecepatan, Solidaritas, dan Rekreasi!  </h5>
      <br>
      <p>"Ayo bergabung dengan Kisik Street Rascals Club dan rasakan sensasi berkendara bersama keluarga besar penggemar Kisik Street Rascals. Nikmati perjalanan yang penuh petualangan, buat kenangan yang indah, dan bangun persahabatan yang abadi dengan sesama pengendara yang berbagi semangat yang sama!"</p>
    </div>
  </section>
  <br>

  <section id="aboutus">
  <div class="container">
    <div>
      <h1 class="section-title">Tentang Kami</h1>
      <p>Selamat datang di KSR Club, tempat di mana passion terhadap sepeda motor berpadu dengan pelayanan terbaik untuk masyarakat. Didirikan oleh sekelompok penggemar sepeda motor sejati, KSR Club adalah rumah bagi para pencinta roda dua yang mengutamakan kualitas dan kebersamaan. Kami tidak hanya sekadar klub motor, tetapi juga komunitas yang memiliki bengkel berkelas dan toko yang menjual berbagai produk berkualitas untuk kebutuhan motor Anda.
Di KSR Club, kami memahami bahwa setiap sepeda motor memiliki jiwa dan karakteristiknya sendiri. Oleh karena itu, bengkel kami dilengkapi dengan teknisi ahli yang berdedikasi tinggi dalam memberikan layanan perawatan, perbaikan, dan modifikasi terbaik. Kami berkomitmen untuk memastikan setiap motor yang keluar dari bengkel kami berada dalam kondisi optimal dan sesuai dengan keinginan pemiliknya.

Selain layanan bengkel, kami juga menyediakan berbagai produk berkualitas untuk keperluan sepeda motor Anda. Dari suku cadang hingga aksesori, toko kami menawarkan berbagai pilihan untuk memenuhi kebutuhan para pengendara. Kami percaya bahwa dengan produk yang tepat, pengalaman berkendara Anda akan menjadi lebih menyenangkan dan aman.

Namun, KSR Club tidak hanya tentang motor dan produk. Kami juga memiliki misi untuk melayani dan berkontribusi kepada masyarakat. Kami secara rutin mengadakan acara-acara komunitas, seperti pelatihan keselamatan berkendara, lokakarya teknis, dan kegiatan sosial. Kami ingin memastikan bahwa setiap anggota komunitas kami mendapatkan manfaat dan merasa didukung oleh keberadaan kami.

Bergabunglah dengan KSR Club dan jadilah bagian dari keluarga besar yang menghargai kebersamaan, kualitas, dan pelayanan. Bersama-sama, kita akan terus melaju menuju masa depan yang penuh dengan petualangan dan inovasi. Di KSR Club, perjalanan Anda adalah perjalanan kami.</p>

<h2>Sejarah</h2>
<p>"Club motor KSR, singkatan dari Kisik Street Rascals, telah menjadi bagian integral dari budaya motor Indonesia sejak didirikan pada tahun 1969. Berawal dari sekelompok pemuda yang berbagi minat dan semangat untuk menjelajahi jalan-jalan Indonesia, KSR telah tumbuh menjadi komunitas yang kuat dan solid, memperkuat persahabatan dan kebersamaan di antara para anggotanya.

Seiring berjalannya waktu, KSR bukan hanya sekadar sebuah klub motor, tetapi juga menjadi wadah untuk berbagi pengalaman, pengetahuan, dan keahlian dalam dunia motor. Melalui berbagai kegiatan seperti touring, kopdar (kopi darat), dan event-event sosial, anggota KSR terus memperkaya pengalaman mereka dalam budaya motor Indonesia.

Di balik setiap kendaraan dan gear, terdapat cerita dan pengalaman yang membentuk ikatan yang erat di antara anggota KSR. Dari perjalanan panjang di jalanan aspal hingga petualangan menantang di jalur off-road, setiap momen di dalam KSR merupakan bagian dari sejarah yang membentuk identitas dan semangat komunitas ini.

Dengan semangat persaudaraan dan kebersamaan yang tak tergoyahkan, club motor KSR terus menjadi simbol kekompakan dan keberanian dalam menghadapi tantangan di jalan raya, serta menjadi inspirasi bagi generasi motoris Indonesia yang akan datang."</p>
    </div>
  </section>
  <div class="container">
    <div class="section-title">
      <h1>Visi dan Misi</h1>
    </div>
    <div class="section">
      <div class="text-center">
        <i class="bi bi-bullseye icon"></i>
      </div>
      <h3>Visi</h3>
      <p>
        Knalpot Garage bercita-cita menjadi bengkel custom motor terkemuka yang dikenal karena inovasi, kualitas, dan kepuasan pelanggan. Kami ingin menjadi inspirasi dalam dunia otomotif custom di Indonesia, menciptakan karya-karya yang tidak hanya indah tetapi juga fungsional dan berkualitas tinggi.
      </p>
    </div>
    <div class="section">
      <div class="text-center">
        <i class="bi bi-tasks icon"></i>
      </div>
      <h3>Misi</h3>
      <p>
        Memberikan Layanan Terbaik: Kami berkomitmen untuk menyediakan layanan modifikasi motor yang berkualitas tinggi dengan fokus pada detail, estetika, dan performa, memastikan setiap motor yang keluar dari bengkel kami adalah refleksi dari dedikasi kami terhadap kesempurnaan.
      </p>
      <p>
        Inovasi dan Kreativitas: Kami selalu mengembangkan desain-desain custom motor yang inovatif dan unik, mengikuti tren terbaru serta memenuhi kebutuhan dan keinginan pelanggan kami.
      </p>
    </div>
  </div>


  <section id="layanan">
    <div class="container" style="margin-top: 2rem">
      <div class="row mb-3">
        <div class="col text-center"><h2>Layanan Kami</h2></div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-2"><a href="modif.php" class="text-decoration-none text-dark"><i class="bi bi-screwdriver"></i><p>Modif</p></a></div>
        <div class="col-md-2"><a href="repair.php" class="text-decoration-none text-dark"><i class="bi bi-wrench"></i><p>Repair</p></a></div>
        <div class="col-md-2"><a href="produk.php" class="text-decoration-none text-dark"><i class="bi bi-circle-fill"></i><p>Produk</p></a></div>
        <div class="col-md-2"><a href="ulasan.php" class="text-decoration-none text-dark"><i class="bi bi-boxes"></i><p>Ulasan</p></a></div>
      </div>
    </div>
  </section>


  <section id="Artikel">
    <div class="container" style="margin-top: 1rem">
      <div class="row text-center">
        <div class="col"><h2>Artikel</h2></div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-3 m-2 shadow-sm">
          <div class="card">
            <img src="img/foto1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Ubah pengalaman berkendara Anda dengan shock belakang custom kami, yang dirancang untuk memberikan performa dan kenyamanan terbaik. Didesain dengan presisi, shock ini menawarkan peredaman dan penyesuaian yang superior untuk menghadapi segala medan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 m-2 shadow-sm">
          <div class="card">
            <img src="img/foto2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Rangka motor custom kami dirancang untuk memberikan kenyamanan berkendara yang optimal. Dengan teknologi terbaru dan material pilihan, rangka ini mampu menyerap getaran dan guncangan, memberikan stabilitas yang luar biasa. Nikmati perjalanan yang lebih nyaman dan aman dengan rangka custom inovatif dari Knalpot Garage.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 m-2 shadow-sm">
          <div class="card">
            <img src="img/foto3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Optimalkan performa motor Anda dengan ban custom kami yang dirancang untuk memberikan traksi dan kestabilan terbaik. Dibuat dengan bahan berkualitas tinggi dan teknologi terkini, ban ini menawarkan daya cengkeram yang superior di segala kondisi jalan. Baik untuk kecepatan tinggi di jalan raya atau ketangguhan di medan off-road, ban custom kami memastikan pengalaman berkendara yang aman dan nyaman.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 m-2 shadow-sm">
          <div class="card">
            <img src="img/foto4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Tampilkan gaya unik Anda dengan rangka motor custom kami. Tersedia dalam berbagai desain dan finishing, rangka kami tidak hanya memperkuat struktur motor tetapi juga menambah sentuhan estetika yang sesuai dengan kepribadian Anda. Dengan rangka custom dari Knalpot Garage, motor Anda akan menjadi pusat perhatian di mana pun Anda berada.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 m-2 shadow-sm">
          <div class="card">
            <img src="img/foto5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Untuk Anda yang gemar berpetualang, mesin motor custom kami dibuat untuk menaklukkan segala medan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 m-2 shadow-sm">
          <div class="card">
            <img src="img/foto6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Rasakan kekuatan sejati dengan mesin motor custom kami yang dirancang untuk memberikan performa maksimal. Dengan teknologi canggih dan bahan berkualitas tinggi, mesin ini menawarkan tenaga yang luar biasa dan respons gas yang cepat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="kontak" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mb-4">Kontak Kami</h2>
        <div class="d-flex align-items-center mb-4">
          <img src="img/kantor.png" width="50px" alt="Alamat Kantor" class="me-3">
          <h5 class="mb-0">Kisik, Banjarasri, Kalibawang, KulonProgo, Yogyakarta</h5>
        </div>
        <div class="d-flex align-items-center mb-4">
          <img src="img/email.png" width="50px" alt="Email" class="me-3">
          <h5 class="mb-0">ulyaiqbalfauzi@gmail.com</h5>
        </div>
        <div class="d-flex align-items-center mb-4">
          <a href="https://www.instagram.com/@ulyaaiq__" target="_blank" class="d-flex align-items-center text-decoration-none text-dark">
            <img src="img/ig.png" width="50px" alt="Instagram" class="me-3">
            <h5 class="mb-0">@ulyaaiq__</h5>
          </a>
        </div>
        <div class="d-flex align-items-center mb-4">
          <a href="https://wa.me/085868144268" target="_blank" class="d-flex align-items-center text-decoration-none text-dark">
            <img src="img/telpon.png" width="50px" alt="WhatsApp" class="me-3">
            <h5 class="mb-0">085868144268</h5>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="text-center mb-4">Lokasi Kami</h2>
        <div id="map" class="shadow-sm mb-4" style="height: 300px;"></div>
      </div>
    </div>
  </div>
</section>

  <footer class="bg-secondary text-white text-center p-3">
    <p>Created By <a href="#" class="text-white fw-bold">Ulya Fauzi</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    var map = L.map('map').setView([-7.797068, 110.370529], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-7.797068, 110.370529]).addTo(map)
      .bindPopup('Lokasi Kami')
      .openPopup();
  </script>

</body>
</html>
