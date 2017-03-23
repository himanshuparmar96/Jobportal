<html lang="en">
<head>
  <title>Welcome</title>
  <script src="js/jquery-3.1.1.min.js">

   $(document).ready(function(){
   $('.carousel').carousel({
    interval: 2000
});
});

  </script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000"><!--data-interval="time"-->
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       
        <img src="img/slider7.jpg" alt="slider3" width="800" height="250">
        <!--text in image-->
      </div>

      <div class="item">
        <img src="img/slider5.jpg" alt="slider4" width="800" height="250">
      </div>

      <div class="item">
        <img src="img/slider6.jpg" alt="slider5" width="800" height="250">
      </div>
      
      <div class="item">
        <img src="img/slider3.jpg" alt="slider5" width="800" height="250">
      </div>

    </div>

    <!-- Left and right controls -->
    
  </div>
</div>

</body>
</html>
