<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '';
echo '<head>';
echo '<title>Safe parking</title>';
echo '<link rel="stylesheet" type="text/css" href="../css/home.css">';
echo '<script src="js/home.js"></script>';
echo '';
echo '</head>';
echo '<body>';
echo '';
echo '<div class="cpName">';
echo '<header class="header">';
echo '<h2>Safe Parking </h2>';
echo '';
echo '</header>';
echo '<header class="header2">';
echo '<nav class="navbar">';
echo '<a href="LoginPage.html" class="navLogo">';
echo '<img class="logoImage" src="..\images\logo.png">';
echo '';
echo '</a>';
echo '<div class="navbar" style="float: left;">';
echo '<a href="../html/Home.html" >Home</a>';
echo '<a href="../html/help&support.html" >Help</a>';
echo '<a href="../html/Contact.html" >Contact us</a>';
echo '<a href="" >About</a>';
echo '';
echo '</div>';
echo '<div class="navbar" style="float: right;">';
echo '<a href="../html/LoginPage.html" >Login</a>';
echo '<a href="../html/Sign up.html" >Sign up</a>';
echo '</div>';
echo '';
echo '<h3 class="inside">';
echo '<div class="form1">';
echo '<form class="form" action="home.php" method="post">';
echo '';
echo '<label class="Pplace">Parking place</label>';
echo '<input type="text" id="Pplace" name="Pplace" placeholder="Your parking place..">';
echo '';
echo '<label class="Adatetime">Arrival date and time</label>';
echo '<input type="text" id="Adatetime" name="Adatetime" placeholder="Your arrival date and time..">';
echo '';
echo '<label class="Ddatetime">Departure date and time</label>';
echo '<input type="text" id="Ddatetime" name="Ddatetime" placeholder="Your departure date and time..">';
echo '';
echo '';
echo '<div class="btn">';
echo '<input type="submit" name="submitbn"id="submitbn" value="submit">';
echo '</div>';
echo '';
echo '</form>';
echo '</div>';
echo '</h3>';
echo '';
echo '</div>';
echo '';
echo '<hr class="underLine">';
echo '<a class="icone" href="https://www.facebook.com">';
echo '<img src="..\image\facebook icone.png" width="30" height="30">';
echo '</a>';
echo '';
echo '<a class="icone" href="https://twitter.com/login">';
echo '<img src="..\image\twiter icone.png" width="30" height="30">';
echo '</a>';
echo '';
echo '<a class="icone" href="https://www.instagram.com">';
echo '<img src="..\image\inst icone.png" width="30" height="30">';
echo '</a>';
echo '';
echo '<a class="icone" href="https://myaccount.google.com/profile">';
echo '<img src="..\image\google icone.png" width="30" height="30">';
echo '</a>';
echo '';
echo '<div class="payiconeSet">';
echo '<a class="payicone" href="https://www.visa.com.lk/pay-with-visa/security/secure-online-shopping.html"><img src="../images/visa icone.jpg" width="30" height="30"></a>';
echo '<a class="payicone" href="https://www.mastercard.com/global/en/personal/find-card-products.html"> <img src="../images/master icone.jpg" width="30" height="30"></a>';
echo '<a class="payicone" href="https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fmyaccount%2Fsummary&state="><img src="..//images/paypal icone.jpg" width="30" height="30"> </a>';
echo '<a class="payicone" href="https://portal.discover.com/customersvcs/universalLogin/ac_main"><img src="../images/discover icone.jpg" width="30" height="30"></a>';
echo '</div>';
echo '';
echo '<div class="helpicone1">';
echo '<a class="helpicone" href="../html/help&support.html">';
echo '<img src="..\images\help icone.jpg" width="60" height="40">';
echo '</a>';
echo '</div>';
echo '';
echo '<div class="feedbackicone1">';
echo '<a class="feedbackicone" href="../html/feedback.html">';
echo '<img src="..\images\feedback icone.jpg" width="60" height="40">';
echo '</a>';
echo '';
echo '</div>';
echo '';
echo '</nav>';
echo '';
echo '';
echo '</header>';
echo '</div>';
echo '</body>';
echo '</html>';
?>