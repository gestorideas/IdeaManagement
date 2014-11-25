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
        echo '<div class="row clearfix">';
            echo '<div class="col-md-9 column">';
                echo '<div class="form-group">';
                echo "<label for='idea_title_label'>" . $obj['author'] . "</label>";
                echo '</div>';
                echo '<div class="form-group">';
                echo "<label for='idea_title_label'>" . $obj['title'] . "</label>";
                echo '</div>';
                echo '<div class="form-group">';
                echo "<blockquote><p class='text-justify' align='justify'>".$obj['body']."</p></blockquote>";
                echo '</div>';
            echo '</div>';


            echo '<div class="col-md-3 column">';
                echo '<div class="row clearfix">';
                    echo '<div class="col-md-12 column">';
                        echo '<div class="form-group">';
                            echo "<input type='submit' class='btn btn-primary' value='Comment' name='comment'/>";
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="row clearfix">';
                    echo '<div class="col-md-12 column">';
                        echo '<div class="form-group">';
                            echo "<input type='submit' class='btn btn-primary' value='Vote' name='vote'/>";
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';


        echo '<div class="row clearfix">';
        echo '<div class="col-md-9 column">';
        echo '</div>';


        echo '</div>';



        echo '<div class="row clearfix">';
        echo '<div class="form-group">';
        echo "<h3>Comments: </h3>";
        echo '<div class="col-md-12 column">';
        foreach ($obj['comments'] as $comment){
            echo '<div class="row clearfix">';
                echo '<div class="col-md-6 column">';
                    echo '<div class="form-group">';
                        echo "<label for='au_label'>" . $comment['author'] . " - 29/11/2014</label>";
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="row clearfix">';
                echo '<div class="col-md-6 column">';
                    echo '<div class="form-group">';
                        echo ($comment['body']);
                    echo '</div>';
                echo '</div>';
            echo '</div>';


        }
        echo '</div>';
        echo '</div>';



        echo '</div>';
        echo('<h1>');

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
