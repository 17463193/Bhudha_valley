<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/guided.css">

    <link rel="stylesheet" href="font-awesome/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- url img -->
    <link rel="icon" type="image/png"  href="title.png" style="width:512px; height: 512px;">
    <!-- end -->
    <title>Guided Meditation</title>
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
       <center><h3>Guided Meditation</h3></center> 
        <div class="swiper books-slider">
            <div class="swiper-wrapper">
            <a href="#" class="swiper-slide"><img src="image/guid.jpg" alt=""></a>
        </div>
        
        </div><br><br>
     <?php include('content/spiritual/guided.php') ?>
          
        </div>
        
    </div>
    
</section>


     <?php include('footer.php')?>
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
   
    
</body>
</html>