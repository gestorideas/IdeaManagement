<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$query = array('author'=>'Emilio');
$retrieved = $ideas->find($query);
$i = 0;
foreach ($retrieved as $obj) {
    $i++;
    $_id = $obj['_id'];
    $obj_date = date(preg_replace('`(?<!\\\\)u`', $obj['date']->usec, 'Y-M-d H:i:s.u'), $obj['date']->sec);
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>";echo $obj['title'];echo "</td>";
    echo "<td>";echo substr($obj['body'],0,20);echo " ...</td>";
    echo "<td>";echo $obj_date;echo "</td>";
    echo "<td>";
        echo "<form action='show_idea.php' method='get' role='form'>";
            echo "<input type='hidden' name='lab' value=$_id />";
            echo "<input type='submit' class='btn btn-primary' value='Show' name='show'/>";
            echo "<input type='submit' class='btn btn-primary' value='Edit' name='edit'/>";
            echo "<input type='submit' class='btn btn-primary' value='Delete' name='delete'/>";
            echo "<input type='submit' class='btn btn-primary' value='Sell' name='sell'/>";
        echo "</form>";

    echo "</td>";
    echo "</tr>";
}

