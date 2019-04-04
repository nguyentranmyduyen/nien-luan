<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="css/bootstrap-4.0.0-dist (1)/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
          
        <script src="css/bootstrap-4.0.0-dist (1)/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="css/jquery/jquery-3.3.1.min.js.js" type="text/javascript"></script>
        <link href="css/fontawesome-free-5.5.0-web/fontawesome-free-5.5.0-web/css/all.css" rel="stylesheet" type="text/css"/>
          <link href="css/index.css" rel="stylesheet" type="text/css"/>
          <style>
              html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.slider-container{
  height: 500px;
  width: 100%;
  position: relative;
  overflow: hidden; 
  text-align: center;
}

.menu {
    
  position: absolute;
  left: 0;
  z-index: 900;
  width: 100%;
  bottom: 0;
}

.menu label {
  cursor: pointer;
  display: inline-block;
  width: 16px;
  height: 16px;
  background: #fff;
  border-radius: 50px;
  margin: 0 .2em 1em;
  transition: all .3s ease;
  &:hover {
    background: red;
  }
}

.slide {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 100%;
  z-index: 10;
  padding: 8em 1em 0;
  background-size: cover;
  background-position: 50% 50%;
  transition: left 0s .75s;
}

[id^="slide"]:checked + .slide {
  left: 0;
  z-index: 100;
  transition: left .65s ease-out;
}

.slide-1 {
  background-image: url("css/image/2.jpg");
}
.slide-2 {
  background-image: url("css/image/20151104084502796.jpg");
}
.slide-3 {
  background-image: url("css/image/122.jpg");
}
              </style>
</head>
<body>
<div class="slider-container">
  <div class="menu">
      
    <label for="slide-dot-1"></label>
    <label for="slide-dot-2"></label>
    <label for="slide-dot-3"></label>
  </div>
  
  <input id="slide-dot-1" type="radio" name="slides" checked>
    <div class="slide slide-1"></div>
  
  <input id="slide-dot-2" type="radio" name="slides">
    <div class="slide slide-2"></div>
  
  <input id="slide-dot-3" type="radio" name="slides">
    <div class="slide slide-3"></div>
</div>
</body>
</html>