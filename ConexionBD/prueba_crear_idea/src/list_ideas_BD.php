<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$retrieved = $ideas->find();
foreach ($retrieved as $obj) {
    $obj_date = date(preg_replace('`(?<!\\\\)u`', $obj['date']->usec, 'Y-M-d H:i:s.u'), $obj['date']->sec);
    $_id = $obj['_id'];
    echo "<tr>";
    echo "<td>";echo $obj['author'];echo "</td>";
    echo "<td>";echo $obj['title'];echo "</td>";
    echo "<td>";echo substr($obj['body'],0,20);echo " ...</td>";
    echo "<td>";echo $obj_date;echo "</td>";
    echo "<td>";
    echo "<label id='show' value=$_id></label>";
    echo "<button type='submit' class='btn btn-primary' name='show' value='Show' onclick='show()'>Show</button>";
    echo "</td>";
    echo "</tr>";
}

