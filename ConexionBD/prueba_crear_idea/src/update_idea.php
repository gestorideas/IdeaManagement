<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$title = $_POST['idea_title'];
$description = $_POST['idea_description'];
$_id = new MongoId($_POST['lab']);
$ideas ->update(array("_id"=>$_id),array('$set' =>array("title"=>$title,"body"=>$description)));
header("Location: list_ideas.php");