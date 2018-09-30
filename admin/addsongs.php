<?php include('frontend/navbar.php');?>
<script type="text/javascript" src="frontend/js/addsongs.js"></script>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="frontend/css/addsongs.css">
<div style="display:none;" id="progress"></div>

<div id="hidn" style="display:none;" class="center">
<div id="register">

  <i id="progressButton" class="ion-android-arrow-forward next"></i>

  <div id="inputContainer">
    <input id="inputField" />
    <label id="inputLabel"></label>
    <div id="inputProgress"></div>
  </div>

</div>
</div>
<div id="upload" class="center">

  <button onclick="sarthak()" id="get_file" class="btn btn-success btn-lg " name="button">Upload Music File</button>
  <input onchange="sarthaksadh()"  type="file" id="my_file">

</div>

  </body>

</html>
