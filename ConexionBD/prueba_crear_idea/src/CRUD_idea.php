<?php
$mongoDB = new Mongo();
$database = $mongoDB->selectDB("magiles");
$ideas = $database->ideas;
$_id = new MongoId($_GET['lab']);

if ($_GET['show']) {
    $query = array('_id' => $_id);
    $retrieved = $ideas->find($query);
    echo '<form action="comment_idea.php" method="get" role="form">';
    echo "<input type='hidden' name='lab' value=$_id />";
    foreach ($retrieved as $obj) {
        echo '<div class="form-group">';
        echo "<label for='idea_title_label'>" . $obj['author'] . "</label>";
        echo '</div>';
        echo '<div class="form-group">';
        echo "<label for='idea_title_label'>" . $obj['title'] . "</label>";
        echo '</div>';
        echo '<div class="form-group">';
        echo $obj['body'];
        echo '</div>';
        echo '<div class="form-group">';
        echo "<input type='submit' class='btn btn-primary' value='Comment' name='comment'/>";
        echo '</div>';
        echo '<div class="form-group">';
        echo "<input type='submit' class='btn btn-primary' value='Vote' name='vote'/>";
        echo '</div>';
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
    }
    echo '</form>';
}
if ($_GET['edit']){
    $query = array('_id'=>$_id);
    $retrieved = $ideas->find($query);
    echo '<form action="update_idea.php" method="post" role="form">';
    echo "<input type='hidden' name='lab' value=$_id />";
    foreach ($retrieved as $obj) {
        echo '<div class="form-group">';
        echo '<h2>'.$obj['author'].'</h2>';
        echo '</div>';
        echo '<div class="form-group">';
        $title = $obj['title'];
        echo "<input type='text' name='idea_title' class='form-control' value='$title'>";
        echo '</div>';
        echo '<div class="form-group">';
        echo "<textarea class='form-control' rows='6' name='idea_description'>".$obj['body']."</textarea>";
        echo '</div>';
        echo '<div class="form-group">';
        echo "<input type='submit' class='btn btn-primary' value='Save' name='save'/>";
        echo '</div>';
    }
    echo '</form>';

}
if ($_GET['delete']){
    echo "Borrar idea";
    //TODO
    echo '<script type="text/javascript">
                                        alert("hola");
                                    </script>';
    // Dialogo de confirmación
    // Borrar idea
}
if ($_GET['sell']){
    echo "Vender idea";
    //TODO
    // Precio???
}
