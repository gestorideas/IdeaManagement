<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$query = array('author'=>'Emilio');
$retrieved = $ideas->find($query);
$i = 0;
foreach ($retrieved as $obj) {
    $i++;
    $obj_date = date(preg_replace('`(?<!\\\\)u`', $obj['date']->usec, 'Y-M-d H:i:s.u'), $obj['date']->sec);
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>";echo $obj['title'];echo "</td>";
    echo "<td>";echo substr($obj['body'],0,20);echo " ...</td>";
    echo "<td>";echo $obj_date;echo "</td>";
    echo '<td>
            <button type="submit" class="btn btn-primary" id="show">Show</button>
            <button type="submit" class="btn btn-primary" id="edit">Edit</button>
            <button type="submit" class="btn btn-primary" id="delete">Delete</button>
            <button type="submit" class="btn btn-primary" id="sell">Sell</button>
         </td>';
    echo "</tr>";
}

