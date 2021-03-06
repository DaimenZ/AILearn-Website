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
                <h1>Pendidikan</h1>
                <p>Pada bidang pendidikan, A.I. membantu untuk menemukan apa yang murid ketahui dan tidak ketahui, membentuk jadwal belajar yang dipersonalisasi untuk siswa dengan mempertimbangkan kesenjangan dalam pengetahuan. Pada dasarnya, A.I. membantu siswa dengan menyesuaikan studi dengan kebutuhan agar dapat meningkatkan efisiensi mereka.
                    Selain itu, A.I. juga dapat digunakan oleh guru untuk mengoptimalkan tugas-tugas administratif seperti menilai dan menjawab siswa yang merupakan aktivitas memakan waktu.
                    </p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam pendidikan 2.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Pendidikan</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=LgkgaXl8j_w">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/LgkgaXl8j_w/mqdefault.jpg">
                                    </div>
                                    <h2>Kecerdasan Buatan dalam Bidang Pendidikan - Humanities, Explained </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=JMLsHI8aV0g">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/JMLsHI8aV0g/mqdefault.jpg">
                                    </div>
                                    <h2>How China Is Using Artificial Intelligence in Classrooms </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=Dr499PgPB7A">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/Dr499PgPB7A/mqdefault.jpg">
                                    </div>
                                    <h2> Learning with Artificial Intelligence </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=X93Xn1YfY7k">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/X93Xn1YfY7k/mqdefault.jpg">
                                    </div>
                                    <h2>Artificial Intelligence and High School Students -- Trying AIY for the First Time!</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://www.technologyreview.com/2020/03/04/905535/unleashing-the-power-of-ai-for-education/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/pendidikan1.jpg">
                        <h2>unleashing-the-power-of-ai-for-education</h2>
                        <p>Artificial intelligence (AI) is a major influence on the state of education today, and the implications are huge. AI has the potential to transform how our education system operates, heighten the competitiveness of institutions, and empower teachers and learners of all abilities.</p>
                    </button>
                </a>
                <a href="https://infokomputer.grid.id/read/122141500/contoh-penerapan-artificial-intelligence-di-perusahaan-asuransi">
                    <button class="linkPreview">
                        <img src="../resources/Assets/pendidikan2.jpg">
                        <h2>Pentingnya Aritificial Intelligence (AI) di Bidang Pendidikan</h2>
                        <p>Artificial Intelligence (AI) has the potential to address some of the biggest challenges in education today, innovate teaching and learning practices, and ultimately accelerate the progress towards SDG 4. However, these rapid technological developments inevitably bring multiple risks and challenges, which have so far outpaced policy debates and regulatory frameworks. UNESCO is committed to supporting Member States to harness the potential of AI technologies for achieving the Education 2030 Agenda, while ensuring that the application of AI in educational contexts is guided by the core principles of inclusion and equity.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
