<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GALERİ</title>
</head>
 <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,500&display=swap" rel="stylesheet">
 <style type="text/css">

body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("koyu.png");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 33.33%;
  padding: 100px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
 </style>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <h1>MUSTAFA BİLGİN</h1>
  <p>OGUZ33TİMİ GALERİSİ</p>
</div>
<br><br><center><b><u>MÜCADELE YILLARIMDAN KARELER</u></b></center>
<div class="row">
  <div class="column">
   <a href="oguz33timi.php" target="_blank"><img src="2497.jpg" alt="Snow" height="300px"></a>
  </div>
  <div class="column">
    <img src="bbb.jpg" alt="Forest" height="300px">
  </div>
  <div class="column">
    <img src="ekran.png" alt="Mountains" height="300px">
  </div>
</div>
	<div class="row">
  <div class="column">
    <img src="img_snow.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="img_forest.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="img_mountains.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
	

</body>
</html>