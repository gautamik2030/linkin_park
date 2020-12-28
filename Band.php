<?php
require_once('connect.php'); // Database connection file
require_once('functions.php');  // PHP functions file
$page_id = 2;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bandsheet.css">
      
    <link rel="stylesheet" href="responsiveband.css">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <title>Linkin Park Band</title>
    
  </head>
  <body>
    <div class="header">
      <div class="header-logo">BAND MEMBERS</div>
      </div>

    <div class="message-wrapper">
      <div class="container">
    <span class="btn message"><a href="index.php">HOME</a></span>
        </div>
<div style="color:white;">
  <?php
  $total_page_views = total_views($conn, $page_id); // Returns total views of this page
  echo "<strong>Views:</strong> " . $total_page_views;
  ?>
</div>
      </div>

    <div class="main">
      
      <div class="contents">
        <div class="contents-item">
          <a href="https://en.wikipedia.org/wiki/Chester_Bennington"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Linkin_Park-Rock_im_Park_2014-_by_2eight_3SC0327.jpg/220px-Linkin_Park-Rock_im_Park_2014-_by_2eight_3SC0327.jpg">
          <p>Chester Bennington</p></a>
        </div>
        <div class="contents-item">
          <a href="https://en.wikipedia.org/wiki/Mike_Shinoda"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Linkin_Park-Rock_im_Park_2014-_by_2eight_3SC0450.jpg/220px-Linkin_Park-Rock_im_Park_2014-_by_2eight_3SC0450.jpg">
          <p>Mike Shinoda</p></a>
        </div>
        
        <div class="contents-item">
          <a href="https://en.wikipedia.org/wiki/Brad_Delson"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Linkin_Park-Rock_im_Park_2014-_by_2eight_3SC0285.jpg/220px-Linkin_Park-Rock_im_Park_2014-_by_2eight_3SC0285.jpg">
          <p>Brad Delson</p></a>
        </div>
        <div class="contents-item">
          <a href="https://en.wikipedia.org/wiki/Dave_Farrell"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Normal_MSC_SecretShowLA_76.jpg/220px-Normal_MSC_SecretShowLA_76.jpg">
          <p>Dave Farrell</p></a>
        </div>
          
        <div class="contents-item">
          <a href="https://en.wikipedia.org/wiki/Joe_Hahn"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Joe-hahn-linkinpark-singapore-2011.jpg/300px-Joe-hahn-linkinpark-singapore-2011.jpg">
          <p>Joe Hahn</p></a>
        </div>
          
        <div class="contents-item1">
          <a href="https://en.wikipedia.org/wiki/Rob_Bourdon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Linkin_Park-Rock_im_Park_2014-_by_2eight_3SC0692.jpg/220px-Linkin_Park-Rock_im_Park_2014-_by_2eight_3SC0692.jpg">
          <p>Rob Bourdon</p></a>
        </div>
          
        
      </div>
     
    
      <div class="contact-form">
        <h1>Chester Bennington</h1>
        <p align="left">Chester Charles Bennington (March 20, 1976 – July 20, 2017) was an American singer, songwriter, musician, and actor. He was best known as the lead vocalist for Linkin Park and was also lead vocalist for the bands Dead by Sunrise, Stone Temple Pilots, and Grey Daze. As an actor, he appeared in films such as Crank (2006), Crank: High Voltage (2009), and Saw 3D (2010).</p>
          
        <h1>Mike Shinoda</h1>
        <p>Michael Kenji Shinoda (/ʃɪˈnoʊdə/, born February 11, 1977) is an American musician, singer, songwriter, rapper, record producer, and graphic designer. He co-founded Linkin Park in 1996 and is the band's rhythm guitarist, primary songwriter, keyboardist, producer, and co-lead vocalist. Shinoda later created a hip-hop-driven side project, Fort Minor, in 2004. He has also served as a producer for tracks and albums by Lupe Fiasco, Styles of Beyond and the X-Ecutioners.</p>
        
        <h1>Brad Delson</h1>
        <p>Bradford Phillip Delson (born December 1, 1977) is an American musician and record producer, best known as the lead guitarist and one of the founding members of the American rock band Linkin Park.</p>
        
        <h1>Dave Farrell</h1>
        <p>David Michael "Dave" Farrell, better known by his stage name Phoenix (born February 8, 1977) is an American musician, best known as the bassist and backing vocalist of the rock band Linkin Park.[2] He was also a member of Tasty Snax, a Christian rock and ska band.</p>
        
        <h1>Joe Hahn</h1>
        <p>Joseph Hahn (born March 15, 1977) is an American musician, DJ, director and visual artist. He is best known as the DJ of the American rock band Linkin Park, doing the scratching, turntables, sampling, and programming for all seven of Linkin Park's albums. Hahn, along with bandmate Mike Shinoda, are responsible for most of Linkin Park's album artwork.</p>
        
        <h1>Rob Bourdon</h1>
        <p>Robert Gregory Bourdon (born January 20, 1979) is an American musician, best known as the drummer and founding member of the American rock band Linkin Park. The youngest member of the band, Bourdon met Aerosmith drummer Joey Kramer, and was inspired to learn how to play the drums.[4] After joining his high school's jazz band in his sophomore year, he met Brad Delson and Mike Shinoda, who both lived nearby in the San Fernando Valley. Eventually, Bourdon and Delson would form their own band, Relative Degree. The band achieved their goal of playing one show and broke up soon afterwards, and rejoined Shinoda in 1996.</p>
        
    </div>
</div>
    
  </body>
</html>
