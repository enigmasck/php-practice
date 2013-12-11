<?php
session_start();
echo '<p>Your name is: '.htmlspecialchars($_SESSION['savedForm']['yourName']).'</p>';
echo '<p>You age is: '.htmlspecialchars($_SESSION['savedForm']['yourAge']).'</p>';

if(isset($_SESSION['savedForm'])) {
   
    //session_unset();
    //session_destroy();
}

?>
