<?php
function doYouWantCookie(){

if (isset($_GET['checkBox'])) {
    echo "Here have a cookie";
    echo "<br>";
    $name = "YummyCookie";
    $value = "Warm cookie dough is so good";
    $expiration = time() + (60*60*24*7);
    setcookie($name,$value,$expiration);

    } else {
      echo "No cookies :'(";
      echo "<br>";
    }
}





























    ?>