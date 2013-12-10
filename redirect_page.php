<?php

if(count($POST) > 0){
    $myForm['yourName'] = $_POST['yourName'];
    $myForm['yourAge'] = $_POST['yourAge'];
    
    $_SESSION['savedForm']['yourAge'] = $myForm;
    
    header("HTTP/1.1 303 See Other");
    header("Location: http://$_SERVER[HTTP_HOST]/action.php");
    die();
} else if(isset($_SESSION['savedForm']['yourName'])) {
    
    
    session_unset();
    session_destroy();
}



?>
