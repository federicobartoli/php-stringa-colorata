<link rel="stylesheet" href="css/master.css">
<div class="container">


<?php

     $password_inserita = $_GET['password'];

     if ($password_inserita == Boolean) {
          echo '<div class="green">'. $password_inserita . '</div>';
     } else {
          echo '<div class="red">'. $password_inserita . '</div>';
     }

?>
</div>
