<?php include('frontend/navbar.php');?>
<link rel="stylesheet" href="frontend/css/admin.css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript" src="frontend/js/admin.js"> </script>
<div class="container">

  <div class="mt-5 row">
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Visit</h5>
        <i class="text-success float-left far fa-chart-bar"></i>
        <p id="visit" class="float-right text-success card-text"></p>

      </div>
    </div>
  </div>
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Page Views</h5>
          <i class="text-primary float-left far fa-chart-bar"></i>
          <p id ="page" class="float-right text-primary card-text"></p>

      </div>
    </div>
  </div>
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Unique Visitor</h5>
        <i class="text-warning float-left far fa-chart-bar"></i>
          <p id="unique" class="float-right text-warning card-text"></p>
      </div>
    </div>
  </div>
</div>
<br><br>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div><br><br>
<h2 class = "text-success">Top Singers</h2><br><br>
<div class="row">
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <img class="mr-3 float-left" src = "https://buddybits.com/wp-content/uploads/2018/04/These-15-Songs-Are-The-Reason-Why-We-Love-Arijit-Singh-768x514.jpg" class="rounded" width="100" height="80">
        <h4 class="card-text">Arijit Singh</h4>
        <p class="card-text"><i class="fas fa-headphones"></i> 7809 times</p>
      </div>
    </div>
  </div>
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <img class="mr-3 float-left" src = "https://i.ytimg.com/vi/Bs2FvwDgW_Q/maxresdefault.jpg" class="rounded" width="100" height="80">
        <h4 class="card-text">Atif Aslam </h4>
        <p class="card-text"><i class="fas fa-headphones"></i> 5208 times</p>
      </div>
    </div>
  </div>
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <img class="mr-3 float-left" src = "https://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2017/02/01/Pictures/_1f3527b2-e856-11e6-a2d8-09470c086dd7.JPG" class="rounded" width="100" height="80">
        <h4 class="card-text">Neha Kakkar</h4>
        <p class="card-text"><i class="fas fa-headphones"></i> 1980 times</p>
      </div>
    </div>
  </div>

</div>


</div>
  </body>
</html>
