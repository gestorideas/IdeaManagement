<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$retrieved = $ideas->find();
foreach ($retrieved as $obj) {
    echo('<h1>');
    echo nl2br("Autor: ");
    echo('</h1>');
    echo ($obj['author']);
    echo nl2br("\n");
    echo('<h1>');
    echo nl2br("Nombre de la idea: ");
    echo('</h1>');
    echo($obj['title']);
    echo nl2br("\n");
    echo('<h1>');
    echo nl2br("Idea: ");
    echo('</h1>');
    echo($obj['body']);
    echo nl2br("\n");
    echo('<h1>');
    echo nl2br("Categorías: ");
    echo('</h1>');
    try {
        foreach ($obj['tags'] as $tag){
            echo('<p>');
            echo ($tag);
            echo('</p>');
        }
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
    try {
        echo('<h1>');
        echo nl2br("Comentarios: ");
        echo('</h1>');
        foreach ($obj['comments'] as $comment){
            echo('<p>');
            echo nl2br("---------------------------\n");
            echo('<b>');
            echo nl2br("Autor: ");
            echo('</b>');
            echo ($comment['author']);
            echo('<h3>');
            echo nl2br("Comentario: ");
            echo('</h3>');
            echo ($comment['body']);
            echo('</p>');

        }
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
}

