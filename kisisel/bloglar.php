<?php require_once "admin/islem/baglan.php"; 
require_once "header.php";
 ?>
<!DOCTYPE html>
<html>
<head>

   <link href="font/css/all.css" rel="stylesheet">
  <title>Halit Ergül | Hakkımda</title>
</head>
<body>
<style type="text/css">
  </body>
</html>

body
{
  margin: 0;
  padding: 0;
  
  color: #cdcdcd;
  font-family: "Avenir Next", "Avenir", sans-serif;
}

#menuToggle
{
  display: block;
  position: relative;
  top: 50px;
  left: 50px;
  
  z-index: 1;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle a
{
  text-decoration: none;
  color: #232323;
  
  transition: color 0.5s ease;
}

#menuToggle a:hover
{
  color: tomato;
}


#menuToggle input
{
  display: block;
  width: 40px;
  height: 22px;
  position: absolute;
  top: -7px;
  left: -5px;
  
  cursor: pointer;
  
  opacity: 0; /* hide this */
  z-index: 2; /* and place it over the hamburger */
  
  -webkit-touch-callout: none;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  
  background: #cdcdcd;
  border-radius: 3px;
  
  z-index: 1;
  
  transform-origin: 4px 0px;
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #232323;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: absolute;
  width: 170px;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;
  
  background: #ededed;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: 10px 0;
  font-size: 22px;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}</style>
<style type="text/css">body {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  -webkit-animation: gradient 15s ease infinite;
          animation: gradient 15s ease infinite;
}

@-webkit-keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
body,h1,ul,li{
    margin: 0;
    padding: 0;

}
 
body{
    font-family: sans-serif;
    text-align: center;


}
 
.sayfa{
    width: 950px;
    margin:50px auto;
}
 
#baslik{
    float: left;
    font-size: 1.2em;
    color: white;
    text-decoration: none;
}
 
#menu{
    float: left;
    list-style: none;
    margin-top: 1em;
}
 
#menu li{
    float: left;
    
}
 
#menu li a{
    color: white;
    text-decoration: none;
    margin: 5px;
    padding: 10px 20px;
}
 
#menu a:hover{
    background: #4a804d;
    border-radius: 15px;
}
 
.orta{
    margin-top: 15px;
    background: white;
 
}
 
.orta-sol{
    float:right;
    width: 450px;
}
 
 
.orta-sag{
    float:left;
    margin: 135px;
    width: 650px;
    color: black;
}
 
.alt{
    background: #828282;
    padding: 20px;
    text-align: center;
    color: #fff;
}
.alt a{
     color: #97ffff;
}
 
.temizle{
    clear: both;
}
.haklarısaklıdır{
    color: #ffe413;
}
.tasarım{
    color: red;
}
}</style>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="css.css" rel="stylesheet">    
<div class="sayfa">
    <div class="ust">

    
<?php

$blog=$baglanti->prepare("SELECT * FROM  blog where blog_id=:blog_id");
$blog->execute(array(

'blog_id'=>$_GET['id']
));
$blogcek=$blog->fetch(PDO::FETCH_ASSOC);


?>
        <div class="temizle"></div>
    </div>
    <div class="orta">
    <div class="orta-sol">
    </div>
    <div class="orta-sag">
    
		<span><small>Tarih : <?php echo $blogcek['tarih'] ?> </small> | <small>Yazar : <?php echo $blogcek['kim'] ?> </small></span>
        <h1><?php echo $blogcek['baslik'] ?></h1>
        <p>
      <?php echo $blogcek['yazi'] ?>
        </p><br>
        <img src="admin/resimler/blog/<?php echo $blogcek['resim'] ?>" width="450" height="300">
    </div>
        <div class="temizle"></div>
    </div>
    <?php include "footer.php" ?>
<script src="https://dnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
<!-- partial -->
  <script  src="./script.js"></script>