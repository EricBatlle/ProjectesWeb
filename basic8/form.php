<?php
    // --  Check  --
    $correct = true;
    //Name - 20 maxlength
    if(strlen($_POST['nom']) > 20){
        $correct = false;
        echo 'Invalid Name';
    }
    //Email - validate
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $correct = false;
        echo 'Invalid Email';
    }
    //Edat - Integer between 0-120
    if(((string)(int)$_POST['edat'] != $_POST['edat']) || (($_POST['edat'] > 120)||((int)$_POST['edat'] < 0))) {
        $correct = false;
        echo 'Invalid Age';
    }
    if($correct == true) {
        echo 'The name is: ' . $_POST['nom'] . '<br/>';
        echo 'The email is: ' . $_POST['email'] . '<br/>';
        echo 'The age is: ' . $_POST['edat'] . '<br/>';
    }
?>