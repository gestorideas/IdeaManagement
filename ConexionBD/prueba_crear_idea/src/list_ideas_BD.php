<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$retrieved = $ideas->find();
foreach ($retrieved as $obj) {
    $obj_date = date(preg_replace('`(?<!\\\\)u`', $obj['date']->usec, 'Y-M-d H:i:s.u'), $obj['date']->sec);
    echo "<tr>";
    echo "<td>";echo $obj['author'];echo "</td>";
    echo "<td>";echo $obj['title'];echo "</td>";
    echo "<td>";echo substr($obj['body'],0,20);echo " ...</td>";
    echo "<td>";echo $obj_date;echo "</td>";
    echo '<td>
            <button type="submit" class="btn btn-primary" id="show">Show</button>
         </td>';
    echo "</tr>";
}

