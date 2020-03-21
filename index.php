<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php  
    $sumber_ina = 'http://api.kawalcorona.com';
    $konten_ina = file_get_contents($sumber_ina);
    $data_ina = json_decode($konten_ina, true);
    ?> 

      <title>COVID-19 Live Data Monitoring</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css'><link rel="stylesheet" href="./style.css">

      
    </head>
    <body>


<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function myFunction2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}
</script>
    <nav class="navbar navbar-default navbar-expand-lg navbar-dark fixed-top">
            <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
     
        <ul class="nav navbar-nav">
          <li class="nav-item"><a href="#" class="nav-link">Hi - | </a></li>
          <li class="nav-item popup" onclick="myFunction()"><a class="nav-link">About</a>
          <span class="popuptext" id="myPopup"> COVID-19 Live Data Monitoring </span>
        </li>			
        <li class="nav-item popup" onclick="myFunction2()"><a class="nav-link">Contact</a>
          <span class="popuptext" id="myPopup2"> <a href="mailto:februrian.dev@gmail.com" style="color:white;" > februrian.dev@gmail.com</a> </span>
        </li>
        </ul>		
        
      </div>
    </nav>    
    
    <!-- partial:index.partial.html -->
    <div class="slide-container">
      
      <div class="wrapper">
        <div class="clash-card konten">
          <div class="clash-card__level clash-card__level--konten">COVID-19 on</div>
          <div class="clash-card__unit-name">Indonesia</div>
          <div class="clash-card__image clash-card__image--konten">
            <img src="indo.png" alt="konten" />
          </div>
          
          <div class="clash-card__unit-description">
            Update terakhir : <?php $currentDate = date("l jS \of F Y h:i:s A"); echo ($currentDate); ?>
            </div>

          <div class="clash-card__unit-stats clash-card__unit-stats--konten clearfix">
            <div class="one-third">
              <div class="stat"><?php echo $data_ina['37']['attributes']['Confirmed']; ?></div>
              <div class="stat-value">Positif</div>
            </div>

            <div class="one-third">
              <div class="stat"><?php echo $data_ina['37']['attributes']['Recovered']; ?></div>
              <div class="stat-value">Sembuh</div>
            </div>

            <div class="one-third no-border">
              <div class="stat"><?php echo $data_ina['37']['attributes']['Deaths']; ?></div>
              <div class="stat-value">Meninggal</div>
            </div>

          </div>

        </div> <!-- end clash-card konten-->
      </div> <!-- end wrapper -->
    
    </div> <!-- end container -->

 <center style="color:white;">API by http://api.kawalcorona.com | Made by Februrian</center>
    <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script><script  src="./script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>