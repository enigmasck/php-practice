<?php
session_start();

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

echo '<pre>'.var_dump($_POST).'</pre>';

if(count($_POST['yourName']) > 0){
    $myForm['yourName'] = $_POST['yourName'];
    $myForm['yourAge'] = $_POST['yourAge'];
    
    $_SESSION['savedForm'] = $myForm;
    $theUrl = explode('/',$_SERVER['REQUEST_URI']);
    unset($theUrl[count($theUrl)-1]); // reduce the array size by 1 at the end.
    $theUrl = implode("/",$theUrl); //rejoin array without .php script
    header("HTTP/1.1 303 See Other");
    header("Location: http://$_SERVER[HTTP_HOST]$theUrl/action.php");
    die();
} else if(isset($_SESSION['savedForm'])) {
   
    //session_unset();
    //session_destroy();
}



?>
