<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <style type="text/css">
    body{
      background-color:#FFE52F;
    }
      .nv ul{
  float:right;
      list-style-type: none;
      margin-top: -285px;
      margin-left: -50px;
 }
 .nv ul li{
display:inline-block;
 }
 .nv ul li a{
  font-family:'Dancing Script', 'cursive';
 text-decoration: none;
      padding:5px 10px;
      border:2px solid #F30A0A;
      /* border-width: 2px; */
      transition: 0.6s ease;
      position: relative;
      display: inline-block;
      padding: 12px 36px;
      margin: 2px;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 18px;
      letter-spacing: 2px;
      border-radius: 15px;
      color: black;
      z-index:0;
      overflow: hidden;
      cursor: pointer;
      text-shadow: 0.7px 0.7px black;
      background:transparent;
 }
 .nv ul li a:hover{
  color: white;
  background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
    }

    .nv ul li a:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 15s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.nv ul li a:active {
    color: #8cbed6;
}

.nv ul li a:active:after {
    background: transparent;
}

.df:hover:before {
    opacity: 1;
}

.nv ul li a:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    border-radius: 10px;
	/* border: 2px solid #28048a; */
	background:transparent;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
    </style>
  </head>
  <body>
    
    <div class="contact-info">
      <div  class="nv">
  <ul >
        <li class="active"><a class="df" href="index.php" >Home</a></li> </ul></div>
      <div style="background-color: gray;background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);" class="card">
        <i class="card-icon far fa-envelope"></i>
        <p>kushwahaanurag64@gmail.com</p>
      </div>
      <div style="background-color: gray;background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);" class="card">
        <i class="card-icon fas fa-phone"></i>
        <p>+91 6388229187</p>
      </div>
      <div style="background-color: gray;background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);" class="card">
        <i class="card-icon fas fa-map-marker-alt"></i>
        <center><p>Ambernath(w)-421505 <br>City: Mumbai<br> State: Maharashtra<br> Country: India</p></center>
      </div>
    </div>
    
  </body>
</html>