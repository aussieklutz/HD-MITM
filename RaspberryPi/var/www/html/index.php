<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>HD-MI(TM)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Image refresh
  -------------------------------------------------- -->
  <script>
    index = 0;
    setInterval(function () {
      document.getElementById('view').src="nextframe.php?" + index;
      index++;
    }, 1000);

    function sendOperation(op) {
      xhttp = new XMLHttpRequest();
      xhttp.open("POST", "sendkeys.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("keys=" + op);
      //document.getElementById("serialout").innerHTML += "<br />" + xhttp.responseText;
    }
  </script>

</head>
<body bgcolor="#000000;">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <h3><font color="#00ff00;">HD</font><font color="#ff4080;">MI(TM)</font></h3>
    </div>
    <div class="row">
      <div class="eight columns">
        <img id="view" width="100%" src="nextframe.php" />
      </div>
      <div class="four columns">
        <div><font color="#ff0000;">Mouse Input</font></div>
        <div class="button" onClick="sendOperation('d');">Up</div>
        <div class="button" onClick="sendOperation('b');">Down</div>
        <div class="button" onClick="sendOperation('c');">Left</div>
        <div class="button" onClick="sendOperation('a');">Right</div>
        <div class="button" onClick="sendOperation('e');">Left Click</div>
        <div class="button" onClick="sendOperation('f');">Right Click</div>
        <div><font color="#ff0000;">Keyboard Input</font></div>
        <div class="button" onClick="sendOperation('g');">Ctrl+Alt+Del</div>
        <div class="button" onClick="sendOperation('h');">Esc</div>
        <div class="button" onClick="sendOperation('i');">Run Dialog</div>
        <div class="button" onClick="sendOperation('j');">Restart</div>
        <div class="button" onClick="sendOperation('k');">Enter</div>
        <div class="button" onClick="sendOperation('l');">Boot Interrupt</div>
        <div class="button" onClick="sendOperation('m');">Up</div>
        <div class="button" onClick="sendOperation('n');">Down</div>
        <div class="button" onClick="sendOperation('o');">Left</div>
        <div class="button" onClick="sendOperation('p');">Right</div>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
