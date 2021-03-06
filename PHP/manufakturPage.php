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

        <title>manufaktur page</title>
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
                <h1>Manufaktur</h1>
                <p>Penggunaan kecerdasan buatan pada bidang manufaktur bertujuan untuk menghasilkan produk sebanyak mungkin dengan kualitas maksimal namun dengan waktu dan tenaga seminimal mungkin.</p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI untuk manufaktur 2.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>A.I. dalam Manufaktur</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=VgFuTU2Lyl4">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/VgFuTU2Lyl4/mqdefault.jpg">
                                    </div>
                                    <h2>How manufacturing can save costs with AI and neural networks </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=aRwhRwybKF0">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/aRwhRwybKF0/mqdefault.jpg">
                                    </div>
                                    <h2> Using AI in manufacturing for increased productivity </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=uobJbNyGVjo ">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/uobJbNyGVjo/mqdefault.jpg">
                                    </div>
                                    <h2>Inside Tesla's Crazy AI Manufacturing Revolution </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://www.neliti.com/publications/243902/artificial-intelligence-dalam-proses-industri-manufaktur">
                    <button class="linkPreview">
                        <img src="../resources/Assets/AI untuk manufaktur 2.jpg">
                        <h2>Artificial Intelligence dalam Proses Industri Manufaktur </h2>
                        <p>Permasalahan sistim manufaktur dan perencanaan engineering (sistem pabrikasi dan masalah desingrancang-bangun) pada Kenyataanya sangat kompleks dan sulit untuk diselesaikan melalui teknikkonvensional. Dalam beberapa tahun terahir ini teknik kecerdasan buatan (Artificial Intelligence) ataudisingkat AI mendapat perhatian dan mempunyai potensi sebagai teknik optimasi dalam industrimanufaktur</p>
                    </button>
                </a>
                <a href="https://student-activity.binus.ac.id/himtri/2020/12/27/penerapan-ai-pada-industri-manufaktur/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/manufaktur2.jpeg">
                        <h2>Penerapan AI pada Industri Manufaktur </h2>
                        <p>Industri 4.0 semakin berkembang di era digital ini sehingga semua sektor industri dituntut untuk dapat menerapkan sistem informasi pada bidangnya. Perkembangan industri 4.0 di Indonesia juga semakin menyebar karena dapat dilihat dari penggunaan artificial intelligence machine learning, dan Internet of Things (IoT) yang sudah marak di sektor manufaktur di Indonesia.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
