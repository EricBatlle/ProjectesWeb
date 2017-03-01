<form name="add_task" action="remove_task.php" method="GET">
    Numero de la tasca: <input type="text" name="tasca"/>
    <input type="submit" name="submit" value="Esborrar"/>
</form>

<?php
if (!empty($_GET)) {
    $tasca_re = $_GET['tasca'];
    $num_tasca = intval($tasca_re);

    $file_todo = file_get_contents(__DIR__ . "/todolist.txt");
    $file_remove = file_get_contents(__DIR__ . "/completed.txt");

    $tasques = explode("-", $file_todo);
    $num_total = count($tasques);

    if ($num_tasca >= $num_total){
        echo "No existeix aquesta tasca";
        exit;
    }

    if(empty($file_todo)){
        echo "No hi han tasques per esborrar";
        exit;
    }

    if (empty($file_remove)) {
        $file_remove .= $tasques[$num_tasca];
    } else {
        $file_remove .= "-" . $tasques[$num_tasca];
    }
    file_put_contents(__DIR__ . "/completed.txt", $file_remove);
    unset($tasques[$num_tasca]);

    $tasques = implode("-", $tasques);
    file_put_contents(__DIR__ . "/todolist.txt", $tasques);
    echo "S'ha el·liminat correctament";
}

