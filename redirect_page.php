<?php
session_start();

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

echo '<pre>'.var_dump($_POST).'</pre>';

if(count($_POST['yourName']) > 0){
    $myForm['yourName'] = $_POST['yourName'];
    $myForm['yourAge'] = $_POST['yourAge'];
    
    $_SESSION['savedForm'] = $myForm;
    $theUrl = explode ('/',$_SERVER['REQUEST_URI']);
    echo '<pre>'.var_dump($theUrl).'</pre>';
    echo '<pre>'.var_dump($_SERVER['HTTP_HOST']).'</pre>';
    header("HTTP/1.1 303 See Other");
    //header("Location: http://$_SERVER[HTTP_HOST]/action.php");
    die();
} else if(isset($_SESSION['savedForm'])) {
   
    session_unset();
    session_destroy();
}



?>
