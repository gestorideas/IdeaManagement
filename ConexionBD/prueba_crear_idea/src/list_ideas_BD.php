<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$retrieved = $ideas->find();
foreach ($retrieved as $obj) {
    $obj_date = date(preg_replace('`(?<!\\\\)u`', $obj['date']->usec, 'Y-M-d H:i'), $obj['date']->sec);
    $_id = $obj['_id'];
    echo "<tr>";
    echo "<td>";echo $obj['author'];echo "</td>";
    echo "<td>";echo $obj['title'];echo "</td>";



    echo "<td>";echo substr($obj['body'],0,20);echo " ...</td>";
    echo "<td>";echo $obj_date;echo "</td>";
    try {
        echo "<td>";echo $obj['votes'];echo "</td>";
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
    echo "<td>";
    echo "<form action='show_idea.php' method='get' role='form'>";
    echo "<input type='hidden' name='lab' value=$_id />";
    echo "<input type='submit' class='btn btn-primary' value='Show' name='show'/>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}

