<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$author = "Pepe";
$comment = $_POST['comment_description'];
$_id = new MongoId($_POST['lab']);
$ideas ->update(array("_id"=>$_id),array('$push'=>array("comments"=>array("author"=>$author,"body"=>$comment))));
header("Location: list_ideas.php");