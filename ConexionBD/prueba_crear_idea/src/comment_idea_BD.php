<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$_id = new MongoId($_GET['lab']);

$query = array('_id' => $_id);
$retrieved = $ideas->find($query);

if ($_GET['comment']) {
    if ($retrieved->hasNext()) {
        $obj = $retrieved->getNext();
        echo '<form action="save_comment.php" method="post" role="form">';
        echo "<input type='hidden' name='lab' value=$_id />";
        echo '<div class="form-group">';
        echo "<label for='idea_title_label'>" . $obj['title'] . "</label>";
        echo '</div>';
        echo '<div class="form-group">';
        echo $obj['body'];
        echo '</div>';
        echo '<div class="form-group">';
        echo "<label for='comment_label'>Comment: </label>";
        echo "<textarea class='form-control' rows='6' name='comment_description'></textarea>";
        echo '</div>';
        echo '<div class="form-group">';
        echo "<input type='submit' class='btn btn-primary' value='Save' name='save'/>";
        echo '</div>';
        echo '</form>';
    }
}
if ($_GET['vote']){
    $ideas ->update(array("_id"=>$_id),array('$inc' => array("votes" => 1)));
    header("Location: list_ideas.php");
}