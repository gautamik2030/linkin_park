<?php
require_once('connect.php'); // Database connection file
require_once('functions.php');  // PHP functions file
$page_id = 3;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
      
    <link rel="stylesheet" href="responsivedare.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Linkin Park</title>
    </head>
  <body>

    <style>
        .tab1 {
            tab-size: 2;
        }

        .tab2 {
            tab-size: 4;
        }

        .tab4 {
            tab-size: 8;
        }
    </style>
  
    <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="https://2.bp.blogspot.com/-k4JtCwJnljA/Uj7Ln2IWN9I/AAAAAAAAAJE/18NHenz3s8Q/s1600/83869.gif">
          <h1><pre class="tab1">   LINKIN PARK</pre></h1>

        </div>
        <div>
  <?php
  $total_website_views = total_views($conn, $page_id); // Returns total website views
  echo "<strong>Website Views:</strong> " . $total_website_views;
  ?>
</div>
      <div class="header-center">
        <a href="#opening" class="header1-item">Contact</a>
        
       <a href="Tour.php" class="header1-item">Music</a>
     
       <a href="Band.php" class="header1-item">Band Members</a>
     
          </div>
  
        </div>
    </header>
    
      <section>
        
        <img class="mySlides" src="https://www.gannett-cdn.com/-mm-/3e427e8ddf1c93c318b89c40923e6008e7c69517/c=0-503-4669-3141/local/-/media/2017/10/28/USATODAY/USATODAY/636447878064210762-GTY-867307222.jpg" style="width:100%">
        
        <img class="mySlides" src="https://www.altrevolt.com/wp-content/uploads/2017/03/JHL8023.jpg" style="width:100%">
          
        <img class="mySlides" src="https://www.entertainmentwallpaper.com/images/desktops/celebrity/linkin_park10.jpg" style="width:100%">
     
        <img class="mySlides" src="https://i.pinimg.com/originals/46/5d/ed/465dedf24903becab77ac23db3dac89a.jpg" style="width:100%">
        
        
        <img class="mySlides" src="https://akns-images.eonline.com/eol_images/Entire_Site/2017620/rs_1024x759-170720143824-1024.Linkin-Park-Grammy-Awards-Los-Angeles.kg.072017.jpg?fit=inside|900:auto&output-quality=90" style="width:100%">
        
        <img class="mySlides" src="https://i.neoseeker.com/n/7/linkinpark.jpg">
        
        <img class="mySlides" src="https://img.nordjyske.dk/s3/nj-prod-public-images/SBsu9doqpKtkMkwLtc8NumAuvdI.jpg?w=960&h=540&scale=both&mode=crop" style="width:100%">
          
          


      </section>
      <script>
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
      }
    </script>
      
    <div class="top-wrapper">
      <div class="container">
        <h1> THE ROCK BAND </h1>
        <p>Linkin Park is an American rock band from Agoura Hills, California. The band's current lineup comprises vocalist/rhythm guitarist Mike Shinoda, lead guitarist Brad Delson, bassist Dave Farrell, DJ/keyboardist Joe Hahn and drummer Rob Bourdon, all of whom are founding members. Vocalists Mark Wakefield and Chester Bennington and bassist Kyle Christner are former members of the band. Categorized as alternative rock, Linkin Park has experimented with their music throughout their career by incorporating heavy metal, hard rock, hip hop, pop, and electronica.</p>
        
        <p>Linkin Park is among the best-selling bands of the 21st century and the world's best-selling music artists, having sold over 100 million records worldwide.[10] They have won two Grammy Awards, six American Music Awards, two Billboard Music Awards, four MTV Video Music Awards, 10 MTV Europe Music Awards and three World Music Awards. In 2003, MTV2 named Linkin Park the sixth-greatest band of the music video era and the third-best of the new millennium. Billboard ranked Linkin Park No. 19 on the Best Artists of the Decade list. In 2012, the band was voted as the greatest artist of the 2000s in a Bracket Madness poll on VH1. In 2014, the band was declared as "The Biggest Rock Band in the World Right Now" by Kerrang!.</p>
        </div>
        </div>
      
    <footer>
      <div class="container">
          <p id="opening">CONTACT US THROUGH</p>
          <a href="https://www.youtube.com/channel/UCZU9T1ceaOgwfLRq7OKFU4Q" class="btn youtube">
        <i class="fa fa-youtube-play" fa-10x>
            YouTube</i></a>
          
          <a href="https://twitter.com/linkinpark?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="btn twitter">
        <i class="fa fa-twitter" fa-10x>
          Twitter</i></a>
          
          <a href="https://open.spotify.com/artist/6XyY86QOPPrYVGvF9ch6wz?autoplay=true&v=A" class="btn spotify"><i class="fa fa-spotify" fa-10x>
              Spotify</i></a>
          
          <a href="https://www.instagram.com/linkinpark/?hl=en" class="btn instagram"><i class="fa fa-instagram" fa-10x>
          Instagram</i></a>
          
          <a href="https://linkinpark.tumblr.com/" class="btn tumblr">
          <i class="fa fa-tumblr-square" fa-10x> Tumblr</i></a>
      </div>
    </footer>
  </body>
</html>
