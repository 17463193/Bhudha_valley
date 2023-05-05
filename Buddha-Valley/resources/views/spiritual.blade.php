<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/spiritual.css">


    <link rel="stylesheet" href="font-awesome/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>Buddha valley</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
    
    <?php include('nav.php')?>
   
<!--header ends-->

<!-- home secction starts -->
<section class="home" id="home">
    <div class="row">
        <div class="content">
       <center><h3>Spiritual Teaching</h3></center> 
        <div class="swiper books-slider">
            <div class="swiper-wrapper">
            <a href="#" class="swiper-slide"><img src="image/sp.jpg" alt=""></a>
        </div>
        
        </div><br><br>
     <?php include('content/spiritual/spiritual_c.php') ?>
        </div>
        
    </div>
    
</section>
<section class="video">
<main>         
        <section class="video-player">                                          
               <iframe width="385" height="315" src="https://www.youtube.com/embed/aZF1z83NLmk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                       
                <h2>Precious Teachings -HH Tulku Jigme Choeda ||<br> 70th Jekhenpo preaching Dharma || Buddhism</h2>               
                   </section>
        </main>
        <main>         
        <section class="video-player">                                           
               <iframe width="385" height="315" src="https://www.youtube.com/embed/XokE6yKhH8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                       
                 <h2>Jekhenpo of Bhutan. Buddhism, Bhutan 2022</h2>
                 <h2>Watch now</h2>              

                   </section>
        </main>
        <main>         
        <section class="video-player">                                       
               <iframe width="385" height="315" src="https://www.youtube.com/embed/PmXOwGNv3CE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                       
                 <h2>The Need of Wildlife Conservation from the Buddhist Perspective | HH Jekhenpo</h2>              
                   </section>
        </main>
        </section>

     <?php include('footer.php')?>
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
   
    
</body>
</html>