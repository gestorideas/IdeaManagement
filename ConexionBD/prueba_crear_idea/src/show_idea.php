<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap 3, from LayoutIt!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <?php include 'menu.php' ?>
            <div class="row clearfix">
                <div class="col-md-12 column">
                        <?php
                            $mongoDB = new Mongo();
                            $database = $mongoDB->selectDB("magiles");
                            $ideas = $database->ideas;
                            $_id = new MongoId($_GET['lab']);
                            if ($_GET['show']){
                                $query = array('_id'=>$_id);
                                $retrieved = $ideas->find($query);
                                foreach ($retrieved as $obj) {
                                    echo '<h2>'.$obj['author'].'</h2>';
                                    echo $obj['body'];
                                }
                            }
                            if ($_GET['edit']){
                                $query = array('_id'=>$_id);
                                $retrieved = $ideas->find($query);
                                echo '<form action=".php" method="post" role="form">';
                                echo "<input type='hidden' name='lab' value=$_id />";
                                    foreach ($retrieved as $obj) {
                                        echo '<div class="form-group">';
                                            echo '<h2>'.$obj['author'].'</h2>';
                                        echo '</div>';
                                        echo '<div class="form-group">';
                                            echo "<input type='text' name='idea_title' class='form-control' value=".$obj['title'].">";
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
                                // Dialogo de confirmación
                                // Borrar idea
                            }
                            if ($_GET['sell']){
                                echo "Vender idea";
                                //TODO
                                // Precio???
                            }
                        ?>




                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


