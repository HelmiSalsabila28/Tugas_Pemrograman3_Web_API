<?php
function get_CURL($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);

    curl_close($curl);

    return json_decode($result, true);
}

// INSTAGRAM API
$userId = '17841436548615354';
$access_token = 'EAAFB9FFZAregBAJDU6ZC0cVzX0cMOxZAbRxOy4CYPBYVlg5AoBRbmLxaF72XYAU74HcLbgDVOZCatEJHzpP1nC3kyKkR4OpiQ4xTYyOZANyloEtsDzOizFUfX7u63AD1xI9UYbaLhLU7sGZCRCk0UMXFgHZAygPCrCsAnzrfFZCwQBdSKjsKZBe1BItlpyoyB5BRcykpZBSXAW1QZDZD';

$result = get_CURL('https://graph.facebook.com/v10.0/17841436548615354?access_token=EAAFB9FFZAregBAJDU6ZC0cVzX0cMOxZAbRxOy4CYPBYVlg5AoBRbmLxaF72XYAU74HcLbgDVOZCatEJHzpP1nC3kyKkR4OpiQ4xTYyOZANyloEtsDzOizFUfX7u63AD1xI9UYbaLhLU7sGZCRCk0UMXFgHZAygPCrCsAnzrfFZCwQBdSKjsKZBe1BItlpyoyB5BRcykpZBSXAW1QZDZD&fields=username,followers_count,biography,profile_picture_url,name,media_count,media');

$userNames = $result['username'];
$followers = $result['followers_count'];
$profiles = $result['profile_picture_url'];
$bios = $result['biography'];
$nama = $result['name'];
$mediaCount = $result['media_count'];

// feed ig
$result = get_CURL('https://graph.facebook.com/v10.0/17841436548615354/media?access_token=EAAFB9FFZAregBAJDU6ZC0cVzX0cMOxZAbRxOy4CYPBYVlg5AoBRbmLxaF72XYAU74HcLbgDVOZCatEJHzpP1nC3kyKkR4OpiQ4xTYyOZANyloEtsDzOizFUfX7u63AD1xI9UYbaLhLU7sGZCRCk0UMXFgHZAygPCrCsAnzrfFZCwQBdSKjsKZBe1BItlpyoyB5BRcykpZBSXAW1QZDZD&count=50&fields=id,media_url');


$gambar = [];
foreach ($result['data'] as $feed) {
    $gambar[] = $feed['media_url'];
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Convergence&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="business.css">

    <title>Business</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">HelmiSalsabila</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="portfolio.php">Portfolio</a>
                    <a class="nav-link" href="#">Business</a>
                    <a class="nav-link " href="about.php">About</a>
                    <a class="btn btn-primary tombol" href="#">Join Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Starting with the <span>intention</span><br>implemented
                <span>consistently</span><br>given
                <span>sincerely</span>
            </h1>
            <a href="" class="btn btn-primary tombol">JOIN US</a>
        </div>
    </div>

    <!-- Container -->
    <div class="container">

        <!-- info detail -->
        <div class="row justify-content-center">
            <div class="col-10 info-detail">
                <div class="row">
                    <div class="col-lg">
                        <img src="images/portfolio.png" alt="Portfolio" class="float-left">
                        <a href="portfolio.php">
                            <h4>PORTFOLIO</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-lg">
                        <img src="images/business.png" alt="Business" class="float-left">
                        <a href="business.php">
                            <h4>BUSINESS</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-lg">
                        <img src="images/about.png" alt="About" class="float-left">
                        <a href="about.php">
                            <h4>ABOUT</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- JUMBOTRON -->
        <section class="jumbotron-business text-center">
            <img src="images/np.png" alt="NP.Collection" width="300" class="rounded-circle img-thumbnail">
            <h1 class="display-4">NP.Collection</h1>
            <p class="lead">Daster | Tunik | Setelan | Atasan</p>
            <h6>
                <p class="lead">Pasar Sandang Tegalgubug, Cirebon, Jawa Barat, 45162</p>
            </h6>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffff" fill-opacity="1" d="M0,32L30,37.3C60,43,120,53,180,53.3C240,53,300,43,360,85.3C420,128,480,224,540,229.3C600,235,660,149,720,133.3C780,117,840,171,900,181.3C960,192,1020,160,1080,138.7C1140,117,1200,107,1260,112C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
            </svg>
        </section>

        <!-- ABOUT -->
        <section id="about">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>About NP.Collection</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis dolorum, illum reiciendis qui repudiandae culpa. Culpa aliquam nam quo placeat.!</p>
                    </div>
                    <div class="col-md-4">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum a asperiores enim accusantium saepe alias aut incidunt, natus perspiciatis quidem eum explicabo. Quisquam excepturi, dolorum ipsa a animi alias neque.</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#25a5a4" fill-opacity="1" d="M0,64L21.8,69.3C43.6,75,87,85,131,90.7C174.5,96,218,96,262,122.7C305.5,149,349,203,393,234.7C436.4,267,480,277,524,256C567.3,235,611,181,655,181.3C698.2,181,742,235,785,224C829.1,213,873,139,916,90.7C960,43,1004,21,1047,37.3C1090.9,53,1135,107,1178,117.3C1221.8,128,1265,96,1309,90.7C1352.7,85,1396,107,1418,117.3L1440,128L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
        </section>

        <!-- SOSIAL MEDIA -->
        <section id="sosmed">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>Sosial Media</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 media">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $profiles; ?>" alt="NP.Collection" class="rounded-circle img-thumbnail" width="250">
                            </div>
                            <div class="col-md-6 garis">
                                <h5><?= $nama; ?></h5>
                                <p><?= $mediaCount; ?> Kiriman <?= $followers; ?> Followers</p>
                                <p><?= $bios; ?></p>
                            </div>
                        </div>
                        <hr style="margin-top: 50px;">
                    </div>
                </div>
                <div class="row justify-content-center text-center mt-3 pb-3">
                    <div class="col">
                        <?php foreach ($gambar as $feed) : ?>
                            <div class="ig-thumbnil">
                                <img src="<?= $feed; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,128L40,138.7C80,149,160,171,240,192C320,213,400,235,480,234.7C560,235,640,213,720,176C800,139,880,85,960,96C1040,107,1120,181,1200,213.3C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            </svg>
        </section>

        <!-- CONTACT -->
        <section id="contact">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="number">Nomor Telepon</label>
                                <input type="number" class="form-control" id="number" aria-describedby="number">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="pesan">Textarea</label>
                                <textarea class="form-control" id="pesan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#25a5a4" fill-opacity="1" d="M0,224L21.8,192C43.6,160,87,96,131,90.7C174.5,85,218,139,262,165.3C305.5,192,349,192,393,170.7C436.4,149,480,107,524,117.3C567.3,128,611,192,655,202.7C698.2,213,742,171,785,128C829.1,85,873,43,916,48C960,53,1004,107,1047,133.3C1090.9,160,1135,160,1178,138.7C1221.8,117,1265,75,1309,64C1352.7,53,1396,75,1418,85.3L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
            </svg>
        </section>





        <!-- FOOTER -->
        <footer class="footer">
            <div class="col text-center">
                <p>2021 All Rights Reserved by <a href="https://www.instagram.com/hels.ae/">Helmi Salsabila</a> 1194018 | POLTEKPOS</p>
            </div>
        </footer>
















        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>