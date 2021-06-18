<!-- navbar --> 
<!DOCTYPE html>
      <html>
      <head>
        <style type="text/css">
        body{margin-top: 15px;
        }
       
          .btn {
                  border: 2px solid black;
                  background-color: white;
                  color: black;
                  padding: 5px 10px;
                  font-size: 10px;
                  cursor: pointer;
                  margin: 2px;
                }
            
            .df:hover {
        color: white;
        font-size: 16px;
    background-color: #9dc5c3;
background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
}

.btn {
  font-family: 'Dancing Script', cursive; 
    width: 120px;
    height: 41px;
    outline: none;
    color: white;
	font-size:18px;
	background:transparent;
	text-shadow: 0.7px 0.7px black;
	overflow: hidden;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 15px;
	border: 1px solid #00FFFF;
}

.btn:before {
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

.btn:active {
    color: #8cbed6;
}

.btn:active:after {
    background: transparent;
}

.df:hover:before {
    opacity: 1;
}

.btn:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    border-radius: 10px;
	border: 2px solid #28048a;
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
      
      <nav  class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php"><img class="img-fluid rounded-circle" href="index.php" src="img/logo2.png" style="max-width:10%;"></a>
      
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="btn df" class="nav-link" href="createuser.php">Create User</a>
              </li>

              <li class="nav-item">
                <a class="btn df" class="nav-link" href="index.php">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="contact.php">Contact Me</a>
              </li>

              <li class="nav-item">
                <a class="btn df" class="nav-link" href="transfermoney.php">Transfer</a>
              </li>
          </div>
       </nav>
     </body>
     </html>