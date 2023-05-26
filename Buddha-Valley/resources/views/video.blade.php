<!DOCTYPE html>
<html>
<head>
  <!-- url img -->
  <link rel="icon" type="image/png"  href="title.png" style="width:512px; height: 512px;">
    <!-- end -->
	<title>Video Stream</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="font-awesome/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   
</head>

<body>
<?php include('nav.php')?>
     <!-- home secction starts -->
<section class="home" id="home">
    <div class="row">

    @foreach ($buddhas as $buddha)
        <div class="card mb-3">
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="350" class="embed-responsive-item" src="{{ $buddha->video }}" allowfullscreen></iframe>
                </div>

               <center> <h3 class="card-title" style="font-size:25px">{{ $buddha->title }}</h3></center>
            </div>
        </div>
    @endforeach
    {{ $buddhas->links() }}


</div>   
</section>

    

     
     <?php include('footer.php')?>

</body>
</html>
