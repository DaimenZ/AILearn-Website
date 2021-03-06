<?php //tess
  require 'functions.php';
  if(isset($_COOKIE['key']) && isset($_COOKIE['key2'])){
    $id = $_COOKIE['key'];
    $key = $_COOKIE['key2'];

    $result = mysqli_query($conn, "SELECT username FROM
      users WHERE id = $id");

    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])){
      $_SESSION['masuk'] = true;
    }
  }

//sss ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Major Mono Display' rel='stylesheet'>
        <link rel="stylesheet" href="../CSS/outline.css">
        <link rel="stylesheet" href="../CSS/articlePageCSS.css">
        <script src="../JS/articlePageJS.js"></script>
        <script src="../external/slidePlugin.js"></script>
        <link rel="stylesheet" href="../external/slidePlugin.css">
        <script src="../external/videoPlugin.js"></script>
        <link rel="stylesheet" href="../external/videoPlugin.css">

        <title>asuransi page</title>
    </head>
    <body>
      <div class="navPlaceHolder"></div>
      <div class="navBar">
          <h1>aIlearn</h1>
          <div id="searchForm">
              <form role="search" id="form" action="cari.php" method="post">
                  <input type="text" id="query" name="cari" placeholder="Cari..." autocomplete="off">
                  <button id="searchImg">
                    <img id= "searchLogo" src="../resources/logos/logo search ailearn.png">
                  </button>
                </form>
          </div>

          <?php if(isset($_SESSION['masuk'])) : ?>
          <!--Login-->
          <div class="secNav">
              <a class="landing" href="fPage.php"><img src="../resources/logos/home.svg"></a>
              <a class="forum" href="forum.php"><img src="../resources/logos/forum.svg"></a>
              <div class="user">
                  <div class="userButton">
                      <div class="userButton2"><img src="../resources/logos/user.svg"></div>
                  </div>
                  <div class="userMenu">
                      <a class="user1" href="profile.php">Edit Profil</a>
                      <a class="user2" href="logout.php">Logout</a>
                  </div>
              </div>
          </div>


          <!--Normal-->
          <?php else :?>
          <div class="firstNav activeNav">
              <a id="home" href="fPage.php"><span class="blot0"></span>Beranda</a>
              <a id="login" href="login.php"><span class="blot0"></span>Masuk</a>
          </div>
          <?php endif;?>


      </div>
        <div class="footer">
            <h3>@2021. All rights reserved.</h3>
            <a class="igLink" href="https://www.instagram.com/"><img class="ig" src="../resources/logos/instagram.svg"></a>

            <a class="ytLink" href="https://www.youtube.com/"><img class="yt" src="../resources/logos/youtube.svg"></a>

          </div>
        <div class="gridContainer">
            <div id="content1A">
                <h1>Kesehatan</h1>
                <p>Artificial di bidang medis bergantung pada analisis dan interpretasi kumpulan data dalam jumlah besar agar dapat membantu dokter membuat keputusan yang lebih tepat dan akurat, mengelola informasi data pasien secara efisien dan efektif, membuat rencana pengobatan yang telah dipersonalisasi dari pengumpulan data kompleks, dan menemukan jenis obat baru.
                    Penggunaan A.I. di bidang kesehatan juga memudahkan tenaga kesehatan dalam menyelesaikan pekerjaannya, seperti melakukan pengecekan organ dalam tubuh pasien menggunakan X-Ray dan CT scan.
                    </p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI untuk kesehatan.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Kesehatan</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=JzB7yS9t1YE">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/JzB7yS9t1YE/mqdefault.jpg">
                                    </div>
                                    <h2>Bringing AI and machine learning innovations to healthcare</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=VePHPymCy2U">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/VePHPymCy2U/mqdefault.jpg">
                                    </div>
                                    <h2>Saving Lives with AI </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=CStXwaFNoXM">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/CStXwaFNoXM/mqdefault.jpg">
                                    </div>
                                    <h2>5 Uses of AI in Healthcare! | 5 Mins 5 Ideas </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=j5ASmVnATc0">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/j5ASmVnATc0/mqdefault.jpg">
                                    </div>
                                    <h2>Artificial Intelligence in Healthcare: Benefits and Risks </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href=" https://www.alomedika.com/peran-artificial-intelligence-dalam-kedokteran-kardiovaskular ">
                    <button class="linkPreview">
                        <img src="../resources/Assets/kesehatan1.jpg">
                        <h2>Peran Artificial Intelligence Dalam Kedokteran Kardiovaskular oleh dr. Alexandra Francesca Chandra </h2>
                        <p>Peran kecerdasan buatan / artificial intelligence di bidang kardiovaskular saat ini memiliki potensi pengembangan yang sangat luas, di antaranya untuk memprediksi prognosis dan luaran mortalitas pasien gagal jantung dengan fraksi ejeksi normal, serta memprediksi gagal jantung secara lebih cepat dibanding klinisi saja.</p>
                    </button>
                </a>
                <a href="https://jurnal.buddhidharma.ac.id/index.php/aksel/article/view/457 ">
                    <button class="linkPreview">
                        <img src="../resources/Assets/AI untuk kesehatan 3.jpg">
                        <h2>Pemanfaatan Kecerdasan Buatan Dalam Kesehatan dan Keselamatan Kerja Di Bidang Kelistrikan </h2>
                        <p>Kecerdasan buatan telah menjadi salah satu penemuan teknologi terbesar manusia. Dengan adanya kecerdasan buatan, pekerjaan manusia menjadi lebih mudah. Kecerdasan buatan dapat menjadi faktor kemajuan dalam bidang kelistrikan, terutama dalam hal keamanan. Salah satu fungsi pengembangan kecerdasan buatan dalam Kesehatan dan Keselamatan Kerja (K3) adalah dalam mendeteksi bahaya, seperti mendeteksi tenaga kerja yang belum memakai Personal Protective Equipment (PPE) dengan menggunakan teknologi seperti Neural Network, Computer Vision, dan Object Recognition atau mendeteksi keadaan tanah yang akan digunakan untuk Grounding dengan Fuzzy Logic. Hal ini diharapkan dapat mengurangi risiko bahaya di lingkungan kerja.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
