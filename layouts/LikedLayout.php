<!DOCTYPE html>
<html lang="en-us">
<head>
    <title> eARTh </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css" />
    <link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet' />
    <link rel="icon" type="image/png" href="pencil.png" sizes="96x96">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="DarkMode.js"></script>
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
        <a onmouseover="mouseOver(this)" onmouseout={mouseOut(this)}  class="dark" href="join_our_society.html">Contact Me</a>
        <div class="dropdown">
           <a id="dropbtn" onmouseover="mouseOver(this)" onmouseout={mouseOut(this)} class="dark">My references</a>
           <div class="dropdown-content">
              <a href="https://pin.it/tpb6xcwpyte6e2" target="blank">Pinterest</a>
              <a href="https://www.deviantart.com/" target="blank">DeviantArt</a>
            </div>
          </div>
     </nav>
     <div class="col-1 divider"></div>
     <div class="col-20">
     <?php
        $collection = DB::get_db()->liked;
        foreach ($liked as $artwork){
        ?>
            <div class="col-4 gallery">
                <p id="Author"><?= $artwork->author ?></p>
                <a href="/wtrmrk/<?php echo $artwork->picture ?>.png" class="imghref"><img class="gallerypic" src="images/<?php echo $artwork->picture ?>.png" alt="<?= $artwork->title ?>" title="<?= $artwork->title ?>"/></a>
                <form id="deleteform" method="get" action="/picture/remove">
                <input type="submit" name="submit" value="Delete">
                <input type="hidden" name="fileToDelete" class="fileToDelete" value="<?php echo $artwork->picture ?>">
                </form>
            </div>
            <div class="col-1 divider"></div>
        <?php }endforeach?>
     </div>
    
    <div class="col-21">
        <footer>
            <a href="#header">Up!</a>
            Hih and WAI project Kinga Władzińska 2019
            <button id="theButton">Dark mode</button>
        </footer>
    </div>
</body>
</html>