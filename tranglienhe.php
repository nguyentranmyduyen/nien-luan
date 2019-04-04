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
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="css/lienhe.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var gmap = new google.maps.LatLng(10.0341851,105.7225506,13);
var marker;
function initialize()
{
    var mapProp = {
         center:new google.maps.LatLng(10.765974,106.689422),
         zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
 
    var map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);
 
  var styles = [
    {
      featureType: 'road.arterial',
      elementType: 'all',
      stylers: [
        { hue: '#fff' },
        { saturation: 100 },
        { lightness: -48 },
        { visibility: 'on' }
      ]
    },{
      featureType: 'road',
      elementType: 'all',
      stylers: [
 
      ]
    },
    {
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [
            { color: '#adc9b8' }
        ]
    },{
        featureType: 'landscape.natural',
        elementType: 'all',
        stylers: [
            { hue: '#809f80' },
            { lightness: -35 }
        ]
    }
  ];
 
  var styledMapType = new google.maps.StyledMapType(styles);
  map.mapTypes.set('Styled', styledMapType);
 
  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: gmap
  });
  google.maps.event.addListener(marker, 'click', toggleBounce);
}
 
function toggleBounce() {
 
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
 
google.maps.event.addDomListener(window, 'load', initialize);
</script>
    </head>
    <body>
        <div ><?php include 'header.php'; ?></div>
        <div class="lienhe">
            <p class="home"> <a href="index.php">Trang chủ</a> /<a href="tranglienhe.php">Liên hệ </a></p>
           <div id="googleMap" style="width: 100%; height: 500px;">Google Map</div>
           <div class="lienhe1">
               <h2> Liên Hệ Với Chúng Tôi</h2>
               <p>Bạn cần đăng ký dịch vụ hoặc có câu hỏi thắc mắc. Hãy để lại thông tin của mình, nhân viên của chúng tôi sẽ liên hệ lại với bạn.</p>
               <div class="row"style="margin-left: 15px;margin-right: 15px">
                   <div class="col-md-3">
                       <h2>ĐỊA CHỈ</h2>
                       <a href="">179b, Đường 3/2, Phường Xân Khánh, Quận Ninh Kiều, TP.Cần Thơ. </a>
                   </div>
                   <div class="col-md-3">
                       <h2>PHONE</h2>
                       <a href="">0934675802</a>
                   </div>
                   <div class="col-md-3">
                       <h2>EMAIL</h2>
                       <a href="">lova@con.vn</a>
                   </div>
                   <div class="col-md-3">
                       <h2>WEBSITE</h2>
                       <a href="">http://lova.vn</a>
                   </div>
           </div>   
        </div>
           <div class="lienhe2">
               <h5 style="margin-left: 150px;margin-top: 30px;margin-bottom: 20px;">Bạn vui lòng nhập thông tin </h5>
               <input name="HOTEN_KH" id="dien" type="text" placeholder="Name" /> <br><br>
               <input name="HOTEN_KH" id="dien" type="text" placeholder="Email" /> <br><br>
               <input name="HOTEN_KH"id="dien"  type="text" placeholder="Title" /> <br><br>
               <textarea name="HOTEN_KH"id="dien" type="text" placeholder="Message"></textarea>
               <p class="gui">Gửi chúng tôi</p>
           </div>
        <div><?php include 'footer.php'; ?></div>
    </body>
</html>