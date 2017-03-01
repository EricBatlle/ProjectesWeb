<form name="add_task" action="add_task.php" method="POST">
    Tasca: <input type="text" name="tasca"/>
    <input type="submit" name="submit" value="Afegir"/>
</form>

<?php
if (!empty($_POST)) {
    $tasca = $_POST['tasca'];

    $file = file_get_contents(__DIR__ . "/todolist.txt");
    if (empty($file)) {
        $file .= $tasca;
    } else {
        $file .= "-" . $tasca;
    }
    file_put_contents(__DIR__ . "/todolist.txt", $file);
    echo "S'ha afegit correctament";
}