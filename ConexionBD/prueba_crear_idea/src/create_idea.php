<?php
    $title = $_POST['idea_title'];
    $idea_description = $_POST['idea_description'];
    $mongoDB = new Mongo();
    $database = $mongoDB->selectDB("magiles");
    $ideas = $database->ideas;
    $today = new MongoDate();
    $idea = array(
        "author" => "Emilio",
        "title" => $title,
        "body" => $idea_description,
        "tags" => [],
        "comments" => [],
        "date" => $today
    );
    $ideas->insert($idea);

    $doc = new DOMDocument();
    $doc->loadHTMLFile("index.html");
    echo $doc->saveHTML();
?>