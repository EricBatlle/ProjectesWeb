
<form enctype="multipart/form-data" action="formulari.php" method="POST">
    Name: <input type="text" name="nom" />
    Email: <input type="text" name="email" />
    Edat: <input type="text" name="edat" />
    <input type="submit" name="submit" value="Send"/>

</form>

<form enctype="multipart/form-data" action="img.php" method="POST">
    <input type="file" name="myfile">
    <input type="submit" name="submit" value="Upload">
</form>