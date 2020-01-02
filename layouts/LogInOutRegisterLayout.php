<!DOCTYPE html>
<html lang="en-us">
<head>
    <title> eARTh </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css" />
    <link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="pencil.png" sizes="96x96">
    <script src="DarkMode.js"></script>
    <script src="SessionStorage.js"></script>
</head>
<body>
    <header id="header">
        eARTh
    </header>

    <script>
            function mouseOver(x){
              x.style.color = "#FFB200";
            };
        </script>

<nav>
                  
        <a onmouseover="mouseOver(this)" onmouseout={mouseOut(this)}  class="dark" href="index.html">Main page</a>
        <a onmouseover="mouseOver(this)" onmouseout={mouseOut(this)}  class="dark" href="my_artworks.html">My artworks</a>
        <a onmouseover="mouseOver(this)" onmouseout={mouseOut(this)}  class="dark" href="masterpieces">Your Masterpieces</a>
        <a onmouseover="mouseOver(this)" onmouseout={mouseOut(this)}  class="dark" href="me">Me</a>
        <div class="dropdown">
           <a id="dropbtn" onmouseover="mouseOver(this)" onmouseout={mouseOut(this)} class="dark">My references</a>
           <div class="dropdown-content">
              <a href="https://pin.it/tpb6xcwpyte6e2" target="blank">Pinterest</a>
              <a href="https://www.deviantart.com/" target="blank">DeviantArt</a>
            </div>
          </div>
     </nav>

<div class="col-21">
        <!-- <svg
        width="100%"
        height="100%"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
     <image
      id="stamp"
      transform="rotate(2 100 55) scale(0.9)"
      xlink:href="message.svg"
      height="100"
      width="100" 
     />
     <animate
      xlink:href="#stamp"
      attributeType="CSS"
      attributeName="x" 
      from="0"
      to="1600" 
      dur="7s"
      repeatCount="indefinite"
      />   
      </svg> -->
   <div class="col-5"></div>
    <div class="col-10">
           
            <fieldset>
                    <legend>Email me!</legend>
                 <a href="mailto:name@rapidtables.com" class="dark"><strong>Click here!</strong></a>
            </fieldset>         
            <br/><br/>
    </div>
    <?php if(!isset($_SESSION['user'])){
        include 'LogInRegisterLayout.php';
    }else{
        include 'UserLayout.php';
    }?>
    <div class="col-2 divider"></div>
  </div>
</div>
  

<footer class="col-21">
        <a href="#header">Up!</a>
             Hih and WAI project Kinga Władzińska 2019    .
             Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a>
             <button id="theButton">Dark mode</button>
         </footer>
</body>
</html>