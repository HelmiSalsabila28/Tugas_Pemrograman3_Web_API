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

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCV3nFQJw1bf03Ds9Pf5JcxA&key=AIzaSyDjOOgFKNOdIrV0pzO9Cwjm7NPa5ih4Mag');

$youtubeProfile = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];
$view = $result['items'][0]['statistics']['viewCount'];

//Latest Video
$urlVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDjOOgFKNOdIrV0pzO9Cwjm7NPa5ih4Mag&channelId=UCV3nFQJw1bf03Ds9Pf5JcxA&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlVideo);

$videoId = $result['items'][0]['id']['videoId'];

// INSTAGRAM API
// $userId = '17841433268960981';
// $access_token = 'EAADSqnSTSpwBAAedjYYIclOl4X32X0KXEOQenfGUOMNPMYRWzQZAXlq0VS1OEKMjij3SCwKa4ODlZAVbc7A2id0oD0CAUoRWYkrxqgNQf6kxLpjwjRYxGSdSPldaDKFIftyKcIcE3owdABXR65tzi3G1NRWevWc5QX1IuXNXogMNKaSrfZByaHT7oTLDj2OTm0hAsUZBZBgZDZD';

// $result = get_CURL('https://graph.facebook.com/v10.0/17841433268960981?fields=biography,followers_count,username,profile_picture_url&access_token=EAADSqnSTSpwBAAedjYYIclOl4X32X0KXEOQenfGUOMNPMYRWzQZAXlq0VS1OEKMjij3SCwKa4ODlZAVbc7A2id0oD0CAUoRWYkrxqgNQf6kxLpjwjRYxGSdSPldaDKFIftyKcIcE3owdABXR65tzi3G1NRWevWc5QX1IuXNXogMNKaSrfZByaHT7oTLDj2OTm0hAsUZBZBgZDZD');

// $userName = $result['username'];
// $follower = $result['followers_count'];
// $profile = $result['profile_picture_url'];
// $bio = $result['biography'];

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

    <!-- CSS -->
    <link rel="stylesheet" href="portfolio.css">

    <title>Portfoolio</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">HelmiSalsabila</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="#">Portfolio</a>
                    <a class="nav-link" href="business.php">Business</a>
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
        <section class="jumbotron-portfolio text-center">
            <img src="images/hels.png" alt="Helmi Salsabila" width="300" class="rounded-circle img-thumbnail">
            <h1 class="display-4">Helmi Salsabila</h1>
            <p class="lead">D4 Teknik Informatika | Poltekpos</p>
            <h6>
                <p class="lead">Bandung</p>
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
                        <h2>About Me</h2>
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
                        <path fill="#e2edff" fill-opacity="1" d="M0,32L30,37.3C60,43,120,53,180,53.3C240,53,300,43,360,85.3C420,128,480,224,540,229.3C600,235,660,149,720,133.3C780,117,840,171,900,181.3C960,192,1020,160,1080,138.7C1140,117,1200,107,1260,112C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
        </section>

        <!-- SOSIAL MEDIA API -->
        <section id="sosmed">
            <div class="container">
                <div class="row text-center mb-3 fs-5">
                    <div class="col">
                        <h2>Sosial Media</h2>
                    </div>
                </div>

                <div class="row justify-content-center fs-5">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= $youtubeProfile; ?>" width="200" class="rounded-circle img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <h5><?= $channelName; ?></h5>
                                <?= $subscriber; ?> Subscriber
                                <p><?= $view; ?> Viewers</p>
                                <div class="g-ytsubscribe" data-channelid="UCV3nFQJw1bf03Ds9Pf5JcxA" data-layout="default" data-count="default"></div>
                            </div>
                        </div>
                        <div class="row mt-3 pb-3">
                            <div class="col">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $videoId; ?>?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/hels.png" width="200" class="rounded-circle img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <h5>hels.ae</h5>
                                330 Followers
                                <p>Love your life.</p>

                            </div>
                        </div>
                        <div class="row mt-3 pb-3">
                            <div class="col">
                                <div class="ig-thumbnil">
                                    <img src="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
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
                <path fill="#e2edff" fill-opacity="1" d="M0,256L21.8,245.3C43.6,235,87,213,131,202.7C174.5,192,218,192,262,165.3C305.5,139,349,85,393,64C436.4,43,480,53,524,74.7C567.3,96,611,128,655,165.3C698.2,203,742,245,785,250.7C829.1,256,873,224,916,197.3C960,171,1004,149,1047,154.7C1090.9,160,1135,192,1178,181.3C1221.8,171,1265,117,1309,112C1352.7,107,1396,149,1418,170.7L1440,192L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
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
        <!-- SUBSCRIBE -->
        <script src="https://apis.google.com/js/platform.js"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>