<?php

if(!empty($_POST)) {
   include 'formulari.php';
}
?>

<form action = "formulari.php" method="POST">
    Name: <input type="text" name="nom" />
    Email: <input type="text" name="email" />
    Edat: <input type="text" name="edat" />
    <input type="submit" name="submit" value="Send"/>
</form>

