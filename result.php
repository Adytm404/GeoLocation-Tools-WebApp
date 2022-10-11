<?php
$id = $_GET['id'];
$open = file_get_contents("result/".$id."/test.txt", 'r');
$file = explode('/', $open, 2);
$date = date('d-m-Y H:i:s', $file[0]);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>GetLo! - by Ogya Adyatma Putra</title>
  </head>
  <body>

  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light justify-content-between">
    <div class="container">
        <a href="/" class="navbar-brand">GetLoc!</a>
    </div>
</nav>
<!-- end navbar -->
<!-- Alert -->
<div class="container"><br>
    <div class="alert alert-warning" role="alert">
      Web ini masih dalam tahap pengembangan, <b>web GeoLocation v.0.1.</b>
    </div>
</div>
<!-- end alert -->
<!-- Jumbo -->
<div class="container">
    <div class="jumbotron">
      <div class="search">
        <h1 class="display-4 judul">List Result GeoLocation</h1>
        <form class="form-inline">
          <div class="form-group mb-2">
              <label for="inputPassword2" class="sr-only">Password</label>
              <input type="text" class="form-control" id="inputPassword2" placeholder="Input Your Token Here">
          </div>
          <div class="tombol justify-content-center">
            <button type="submit" class="btn btn-success mb-2 search-button" id="tombol-search">Search Token</button>
            <a href="./index.php"><button type="submit" class="btn btn-primary mb-2" id="btn-back">Generate More</button></a>
          </div>
        </form>
        </div>
    </div>
</div>
<!-- end jumbo -->

<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Article</a></li>
    <li class="breadcrumb-item active" aria-current="page">Result</li>
  </ol>
</nav>
</div>

<?php
    
    if($file[0] != null){
        $status = "DONE";
        $color = "success";
        $text = "Success";
    }else{
        $status = "FALSE";
        $color = "danger";
        $text = "Error";
    }
    
    
?>


<!-- card -->
<div class="container">
    <div class="alert alert-<?=$color?>" role="alert">
      [<?=$status?>] | Timestamp: <?=$date?> <a href="https://www.google.co.id/maps/place/<?=$file[1]?>" target="_blank" class="alert-link"><?=$file[1]?></a>. <?=$text?> Getting Data.
    </div>
</div>
<!-- card -->
<!-- Maps -->

<style>
 .map-container{
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
  margin-bottom:56px;
}
.map-container iframe{
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
}
.search-button{
  margin-right: 10px;
}
.judul{
  margin: 13px;
}

@media (min-width: 576px) { 
  .tombol{
    margin: 23px;
  }
  
}
</style>
<script>
  document.getElementById('tombol-search').onclick = function() {
        window.location = "/result.php?id=" + document.getElementById('inputPassword2').value;
        return false;
      }
  
  document.getElementById('btn-back').onclick = function() {
    window.location = "/index.php";
    return false;
  }
</script>

<!--Google map-->
<div class="container">
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=<?=$file[1]?>&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe><br><br><br>
</div>
</div>

<!--Google Maps-->
<div class="jumbotron jumbotron-fluid bg-white">
              <div class="container">
              </div>
</div>

<nav class="navbar navbar-light bg-light fixed-bottom">
  <span class="navbar-text">
    Copyright 2022 by Ogya Adyatma Putra
  </span>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>