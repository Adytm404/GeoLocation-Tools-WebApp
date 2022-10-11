<?php
error_reporting(E_ALL ^ E_WARNING);
error_reporting (E_ALL ^ E_NOTICE);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$linkweb = "http://localhost:8080/";

$generate = $_GET['generate'];
$id = $_GET['id'];
$select = $generate;



switch ($select) {
    case "yes":
        $random = substr(md5(mt_rand()), 0, 7);
        $linkcopy = $linkweb."contoh-website-artikel-berita/?id=".$random;
        mkdir("result");
        mkdir("result/".$random);
        $file = fopen("result/".$random."/test.txt", "w") or die ("File tidak bisa dibuat!");


        $time = time();
        $isi = $time."/"."Ini adalah Test File";
        // fwrite($file, $isi);
        fclose($file);
        break;
    case null:
        $random = "______";
        break;
    default:

        break;
}

function generateLink(){
    if($select === "yes"){
        $path = "contoh-website-artikel-berita". $random;
        $link = "http://localhost:8881". $path;
        echo $link;
    }else{
        $link = "Tidak ada data untuk ditampilkan";
        echo $link;
    }
}

function copyLink(){
    if($select != "yes"){
        $linkcopy = "";
        echo $linkcopy;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>GetLocation! - by Ogya Adyatma Putra</title>
</head>
<body>



<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">GetLo!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </div>
</nav>
<!-- End navbar -->

<!-- image -->
<center>
    <div class="col-8"><br>
        <img src="/img/iocn-maps.png" alt="image" class="img-thumbnail" width="150px" height="150px">
    </div>
</center>
<!-- image -->
<!-- Jumbo -->
<div class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
        <!-- Isinya -->

        <center>
            <h3>Your token: <?=$random?></h3>
            <!-- Form -->
            <div class="col-8">
                <input class="form-control form-control-lg" type="text" placeholder="Input Token Here" id="form-input" value="">
            </div>

            <!-- End Form -->
            <br>
            <!-- Button -->
            <div class="col-8">
                <a href="./index.php?generate=yes"><button type="button" class="btn btn-primary btn-lg" id="tombol-generate">Generate</button></a>
                <button type="button" class="btn btn-success btn-lg" id="tombol-input">Check Result</button>

                <iframe src="https://getlo.nyancorp.tech/stats.html" frameborder="0" scolling="no" width="0px" height="0px"></iframe>


            </div>

            <div class="container"><br>
                <h5>Share This Link</h5>
                <div class="input-group mb-3 col-8">
                    <input type="text" class="form-control" placeholder="Generate to get link..." aria-label="Copy Link Here..." aria-describedby="basic-addon2" id="myInput" value="<?=$linkcopy?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" onclick="myFunction()" type="button">Copy</button>
                    </div>
                </div>
            </div>

        </center>
        <!-- End Button -->
        <!-- End Isi -->
    </div>

</div>
<!-- Jumbo -->


<!-- Javascript -->
<script>
    document.getElementById('tombol-input').onclick = function() {
        window.location = "./result.php?id=" + document.getElementById('form-input').value;
        return false;
    }

    function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Alert the copied text */
        alert("Link berhasil di copy!");
    }
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- 
    <h1>Ini link: <?php generateLink();?></h1>
    <h1>Ini select: <?php echo $select;?></h1> -->


<div class="support">
    <center><h5>Support Me</h5>
        <script type='text/javascript' src='https://assets.trakteer.id/js/trbtn-overlay.min.js'></script><script type='text/javascript' class='troverlay'>(function() {var trbtnId = trbtnOverlay.init('Dukung Saya di Trakteer','#be1e2d','https://trakteer.id/ogya-adytm/tip/embed/modal','https://cdn.trakteer.id/images/embed/trbtn-icon.png','40','inline');trbtnOverlay.draw(trbtnId);})();</script>
    </center>
</div>
<div class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
    </div>
</div>




<nav class="navbar navbar-light bg-light fixed-bottom">
    <center>
  <span class="navbar-text">
    <a href="https://github.com/Adytm404" action="_blank">Copyright 2022 by Ogya Adyatma Putra</a>
  </span>
    </center>
</nav>


</body>
</html>