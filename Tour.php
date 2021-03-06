<?php
require_once('connect.php'); // Database connection file
require_once('functions.php');  // PHP functions file
$page_id = 1;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="toursheet.css">
      
    <link rel="stylesheet" href="responsivetour.css">
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Linkin Park Albums and Tours</title>
    </head>
  <body>
  
    <header>

      <div class="container">
        <div class="header-left">
          <h1>ALBUMS AND TOURS </h1>

        </div>

      </div>
    
  
          <div class="message-wrapper">

      <div class="container">
    <span class="btn message"><a href="index.php">HOME</a></span>
        </div>

      </div>
<div style="color: white;">
<?php
  $total_page_views = total_views($conn, $page_id); // Returns total views of this page
  echo "<strong>Views:</strong> " . $total_page_views;
  ?>
</div>
        </header>
       <section>
         
             
           <a href="https://www.youtube.com/watch?v=9Dq9q6afIP8">
           
        <img class="mySlides" src="https://i.pinimg.com/originals/05/42/92/0542922396e406fb268dcbbac27a9cd4.jpg">
           </a>

       
           
        <a href="https://en.wikipedia.org/wiki/Hybrid_Theory_World_Tour">
            <img class="mySlides" src="https://s3.amazonaws.com/images.charitybuzz.com/images/182597/original.JPG?1437419106"></a>
        
        <a href="https://www.youtube.com/watch?v=ig-fyQqf510">
            <img class="mySlides" src="https://i.pinimg.com/originals/6c/f7/3c/6cf73ce6218327106d87dfb9ef27d02a.jpg"></a>
           
              
        <a href="https://www.youtube.com/watch?v=kXYiU_JCYtU">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b9/Linkin_Park_-_Numb_CD_cover.jpg/220px-Linkin_Park_-_Numb_CD_cover.jpg">
           </a>

        
        <a href="https://www.youtube.com/watch?v=Tm8LGxTLtQk">
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/4/46/One_More_Light_Remix.jpg"></a>
        
           
           
        <a href="https://www.youtube.com/watch?v=ScNNfyq3d_w">
        
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/7/77/Linkin_Park_-_Castle_of_Glass.jpg">
           </a>
           
        <a href="https://www.youtube.com/watch?v=jZSPAp8kCl4">
        
        <img class="mySlides" src="https://f4.bcbits.com/img/a0425422724_10.jpg">
           </a>
           
        
           <a href="https://www.youtube.com/watch?v=Gd9OhYroLN0">
        
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/2/26/Linkin_Park_-_Crawling_CD_cover.jpg">
           </a>
           
        <a href="https://en.wikipedia.org/wiki/Crawling_(song)">
           
        <img class="mySlides" src="https://i.ytimg.com/vi/sjN-NGsRg9g/maxresdefault.jpg">
           </a>
           
        <a href="https://www.youtube.com/watch?v=cEaEdLQbAFM">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Guilty_all_the_same.jpg/220px-Guilty_all_the_same.jpg">
           </a>
           
        <a href="https://en.wikipedia.org/wiki/Projekt_Revolution">
           
        <img class="mySlides" src="https://lastfm.freetls.fastly.net/i/u/500x500/210224a357174842c8bd1abf51be10bf.jpg">
           </a>
           
        <a href="https://en.wikipedia.org/wiki/Projekt_Revolution">
           
        <img class="mySlides" src="https://img.discogs.com/c8Fel27EFV44aFDX23imI6CTwbU=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-5280402-1389469334-6861.jpeg.jpg">
           </a>
        
           
        <a href="https://www.youtube.com/watch?v=NjdgcHdzvac">
           
        <img class="mySlides" src="https://data.whicdn.com/images/104974207/original.jpg">
           </a>

              
        <a href="https://en.wikipedia.org/wiki/Lying_from_You">
           
        <img class="mySlides" src="https://i.pinimg.com/originals/fd/94/44/fd944436287f7083f64557cc6af5e7a1.jpg">
           </a>

        
        <a href="https://www.youtube.com/watch?v=vjVkXlxsO8Q">
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e8/Linkin_Park_-_Papercut_CD_cover.jpg/220px-Linkin_Park_-_Papercut_CD_cover.jpg">
           </a>
        
           
       <a href="https://www.youtube.com/watch?v=ysSxxIqKNN0">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b1/New_Divide_%28Linkin_Park_single_-_cover_art%29.jpg/220px-New_Divide_%28Linkin_Park_single_-_cover_art%29.jpg">
           </a>


              
        <a href="https://www.youtube.com/watch?v=n1PCW0C1aiM">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a8/Shadow_of_the_Day_single.jpg/220px-Shadow_of_the_Day_single.jpg">
           </a>

              
        <a href="https://www.youtube.com/watch?v=4qlCC1GOwFw">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1a/Linkin_Park_-_One_Step_Closer_CD_cover.jpg/220px-Linkin_Park_-_One_Step_Closer_CD_cover.jpg">
           </a>

              
        <a href="https://www.youtube.com/playlist?list=PLlqZM4covn1Hwm1mBboaE3m_O_A5yEqiP">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Minutes_to_Midnight_cover.jpg/220px-Minutes_to_Midnight_cover.jpg">
           </a>

              
        <a href="https://www.youtube.com/watch?v=OnuuYcqhzCE">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/Bleed_It_Out_single.jpg/220px-Bleed_It_Out_single.jpg">
           </a>

            <a href="https://www.youtube.com/watch?v=OnuuYcqhzCE">
           
        <img class="mySlides" src="https://i.pinimg.com/originals/f3/3b/79/f33b79cab908424ed547583084965475.jpg">
           </a>

              
        <a href="https://en.wikipedia.org/wiki/LP_Underground_Tour">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5c/LP_Underground_Tour.jpg/200px-LP_Underground_Tour.jpg">
           </a>

              
        <a href="https://en.wikipedia.org/wiki/LP_Underground_Tour">
           
        <img class="mySlides" src="https://img.discogs.com/fIW2nEvYOD0VlzP2QJd4pY_Hxhs=/fit-in/600x540/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-1280840-1366657392-2304.jpeg.jpg">
           </a>

            <a href="https://en.wikipedia.org/wiki/LP_Underground_Tour">
           
        <img class="mySlides" src="https://s3.scoopwhoop.com/anj/chester_bennington_lyrics/6d68b603-7df2-4d7c-9852-8ca39f9a24d8.jpg">
           </a>

           
        <a href="https://en.wikipedia.org/wiki/Minutes_to_Midnight_World_Tour">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4b/Minutes_tour.jpg/200px-Minutes_tour.jpg">
           </a>

           <a href="https://www.youtube.com/watch?v=zsCD5XCu6CM">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/6/6e/Linkin_Park_-_Somewhere_I_Belong_CD_cover.jpg/220px-Linkin_Park_-_Somewhere_I_Belong_CD_cover.jpg">
           </a>

           <a href="https://en.wikipedia.org/wiki/International_Tour">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5d/International_Tour.jpg/200px-International_Tour.jpg">
           </a>


            <a href="https://www.youtube.com/watch?v=QLFiuNdQrzI">
           
        <img class="mySlides" src="https://i.pinimg.com/originals/58/fe/35/58fe352796d2dfac6274c5acb6b4a557.jpg">
           </a>

           
           <a href="youtube.com/watch?v=yZIummTz9mM">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/74/Leave_Out_All_The_Rest_artwork.jpg/220px-Leave_Out_All_The_Rest_artwork.jpg">
           </a>

           <a href="https://www.youtube.com/watch?v=v2H4l9RpkwM">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/e/ec/Linkin_park_breaking_the_habit.png">
           </a>

        <a href="https://www.youtube.com/watch?v=xLYiIBCN9ec">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c1/24_Iridescent.jpg/220px-24_Iridescent.jpg">
           </a>

           <a href="https://en.wikipedia.org/wiki/A_Thousand_Suns_World_Tour">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/ATSTour.jpg/220px-ATSTour.jpg">
           </a>

           <a href="https://www.youtube.com/watch?v=51iquRYKPbs">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/c/cd/The-catalyst-single-cover-500x500.png/220px-The-catalyst-single-cover-500x500.png">
           </a>

           
           <a href="youtube.com/watch?v=5qF_qbaWt3Q">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/44/Wfte_Cover02.jpg/220px-Wfte_Cover02.jpg">
           </a>

           
           <a href="https://en.wikipedia.org/wiki/Living_Things_World_Tour">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/8/87/Living_Things_World_Tour.gif/200px-Living_Things_World_Tour.gif">
           </a>

           
           <a href="https://en.wikipedia.org/wiki/One_More_Light_World_Tour">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a3/One_More_Light_Tour.jpg/170px-One_More_Light_Tour.jpg">
           </a>

           
           <a href="https://www.youtube.com/watch?v=0xyxtzD54rM">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/44/Given_Up_Linkin_Park.jpg/220px-Given_Up_Linkin_Park.jpg">
           </a>

           
           <a href="https://www.youtube.com/watch?v=kh_YCSW5lPc">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4f/Linkin_Park_Burning_in_the_Skies_single_cover.jpg/220px-Linkin_Park_Burning_in_the_Skies_single_cover.jpg">
           </a>

           
           <a href="https://www.youtube.com/watch?v=ToHo29kD9Go">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/02/Linkin_Park_Steve_Aoki_A_Light_that_never_comes.jpg/220px-Linkin_Park_Steve_Aoki_A_Light_that_never_comes.jpg">
           </a>

           
           <a href="https://www.youtube.com/watch?v=i1P1ClJcSPc">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ad/Darker_Than_Blood.png/220px-Darker_Than_Blood.png">
           </a>

           
           <a href="https://www.youtube.com/watch?v=LYU-8IFcDPw">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/73/Linkin_Park_-_Faint_CD_cover.jpg/220px-Linkin_Park_-_Faint_CD_cover.jpg">
           </a>

           
           <a href="https://www.youtube.com/watch?v=lrbL1s9qwBs&has_verified=1">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1a/LP_Not_Alone.jpg/220px-LP_Not_Alone.jpg">
           </a>

           
           <a href="https://www.youtube.com/watch?v=phVQZrb2AdA">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1a/Linkin_Park_Good_Goodbye.jpg/220px-Linkin_Park_Good_Goodbye.jpg">
           </a>

       
          <a href="https://www.youtube.com/watch?v=YLHpvjrFpe0"><img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a1/Linkin_Park_-_From_The_Inside_CD_cover.jpg/220px-Linkin_Park_-_From_The_Inside_CD_cover.jpg"></a>
       
         
           <a href="https://www.youtube.com/watch?v=co4YpHTqmfQ">
           
        <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/thumb/6/6c/Linkin_Park_-_Lost_in_the_Echo_%28Promotional%29.jpg/220px-Linkin_Park_-_Lost_in_the_Echo_%28Promotional%29.jpg">
           </a>

           

      </section>
     
    </body>
</html>
