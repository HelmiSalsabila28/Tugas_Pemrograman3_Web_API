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

// YOUTUBE
$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCV3nFQJw1bf03Ds9Pf5JcxA&key=AIzaSyDjOOgFKNOdIrV0pzO9Cwjm7NPa5ih4Mag');

$youtubeProfile = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];
$view = $result['items'][0]['statistics']['viewCount'];

// playlist

$result = get_CURL('https://www.googleapis.com/youtube/v3/playlists?part=snippet,contentDetails&channelId=UCV3nFQJw1bf03Ds9Pf5JcxA&maxResults=8&key=AIzaSyDjOOgFKNOdIrV0pzO9Cwjm7NPa5ih4Mag');

$title = $result['items'][0]['snippet']['title'];

$playlist = [];
foreach ($result['items'] as $play) {
    $playlist[] = $play['snippet']['thumbnails']['medium']['url'];
}

// News2
$result = get_CURL('https://newsapi.org/v2/top-headlines?country=id&category=business&apiKey=99ee1fc5952546d68ae6a846fad9ca1c');

$titles = $result['articles'][0]['title'];
$url = $result['articles'][0]['url'];

$newsh = [];
foreach ($result['articles'] as $news) {
    $newsh[] = $news['urlToImage'];
}

// Nasa
$result = get_CURL('https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-07&end_date=2015-09-08&api_key=b72tRoQlD9j9Z1TAobGvFHuXx9PHkDj59U0OT1kA');

$name = $result['near_earth_objects']['2015-09-08'][0]['name'];
$jpl_url = $result['near_earth_objects']['2015-09-08'][0]['namnasa_jpl_urle'];
$absolute = $result['near_earth_objects']['2015-09-08'][0]['absolute_magnitude_h'];
$kilo = $result['near_earth_objects']['2015-09-08'][0]['estimated_diameter']['kilometers']['estimated_diameter_max'];

$result = get_CURL('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&page=1&api_key=b72tRoQlD9j9Z1TAobGvFHuXx9PHkDj59U0OT1kA');

$image = $result['photos'][0]['img_src'];

// project
$result = get_CURL('https://api.nasa.gov/techport/api/projects/17792?api_key=b72tRoQlD9j9Z1TAobGvFHuXx9PHkDj59U0OT1kA');

$desc = $result['project']['description'];


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
    <link rel="stylesheet" href="style.css">

    <title>Home</title>
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
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="portfolio.php">Portfolio</a>
                    <a class="nav-link" href="business.php">Business</a>
                    <a class="nav-link " href="#">About</a>
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

        <!-- Youtube -->
        <section id="sosmed">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col" style="margin-top: 70px;">
                        <h2>YouTube</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 media">
                    <div class="col">
                        <div class="row">
                            <div class="col text-center">
                                <img src="<?= $youtubeProfile; ?>" alt="NP.Collection" class="rounded-circle img-thumbnail" width="200" style="margin-top: 50px;">
                                <h5 style="margin-top: 35px;"><?= $channelName; ?></h5>
                                <p><b><?= $subscriber; ?></b> Subscriber <b><?= $view; ?></b> Viewers</p>
                            </div>
                        </div>
                        <hr style="margin-top: 10px;">
                        <h5 style="text-align: center;">Playlist</h5>
                    </div>
                </div>
                <div class="row justify-content-center text-center mt-3 pb-3 fs-5">
                    <div class="col">
                        <div class="play">
                            <?php foreach ($playlist as $play) : ?>
                                <div class="playlist">
                                    <img src="<?= $play; ?>">
                                    <p><?= $title; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BRITA -->
        <section id="business">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col" style="margin-top: 70px;">
                        <h2>News</h2>
                    </div>
                </div>
                <hr style="margin-top: 10px;">
                <div class="row mt-3 pb-3 fs-5">
                    <div class="col">
                        <div class="new">
                            <?php foreach ($newsh as $news) : ?>
                                <div class="news">
                                    <a href="<?= $url; ?>"><img src="<?= $news; ?>"></a>
                                    <a href="<?= $url; ?>">
                                        <p><?= $titles; ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nasa -->
        <section id="nasa">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col" style="margin-top: 70px;">
                        <h2>Nasa Info</h2>
                    </div>
                </div>
                <hr style="margin-top: 10px;">
                <div class="row justify-content-center mt-3 pb-3 fs-5">
                    <div class="col">
                        <div class="new">
                            <div class="nasa">
                                <a href="<?= $jpl_url; ?>">
                                    <img src="<?= $image; ?>">
                                </a>
                                <p><?= $name; ?></p>
                                <p><?= $absolute; ?></p>
                                <p><?= $kilo; ?></p>
                            </div>
                            <div class="row justify-content-center text-justify">
                                <div class="col">
                                    <div class="descrip">
                                        <p><?= $desc; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- Workspace -->
        <div class="row workbusiness">
            <div class="col-lg-6">
                <img src="images/workbusiness.png" alt="Work Business" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h3>YOU CAN <span>BUSINESS</span><br>FROM <span>HOME</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ab
                    vitae illum animi, alias hic consectetur neque fugiat commodi dolor adipisci eaque necessitatibus
                    quae aliquam. Neque magnam tenetur corrupti veniam!</p>
                <a href="" class="btn btn-primary tombol">BUSINESS</a>
            </div>
        </div>


        <!-- Ulasan -->
        <section class="ulasan">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4>CLIENT JOIN</h4>
                    <hr>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-2">
                    <figure class="figure">
                        <img src="images/client1.png" class="figure-img img-fluid rounded" alt="Programmer">
                        <h6>DAVID WES</h6>
                        <figcaption class="figure-caption">"Programmer"</figcaption>
                    </figure>
                </div>
                <div class="col-2">
                    <figure class="figure">
                        <img src="images/client2.png" class="figure-img img-fluid rounded" alt="Designer">
                        <h6>BOY GET</h6>
                        <figcaption class="figure-caption">"Designer"</figcaption>
                    </figure>
                </div>
                <div class="col-2">
                    <figure class="figure">
                        <img src="images/client3.png" class="figure-img img-fluid rounded" alt="Analys">
                        <h6>WILIAM</h6>
                        <figcaption class="figure-caption">"Analys"</figcaption>
                    </figure>
                </div>
                <div class="col-2">
                    <figure class="figure">
                        <img src="images/client4.png" class="figure-img img-fluid rounded" alt="Team Creative">
                        <h6>SAFINDA</h6>
                        <figcaption class="figure-caption">"Team Creative"</figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </div>

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