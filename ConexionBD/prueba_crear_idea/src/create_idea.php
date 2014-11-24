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
					<form action="create_idea.php" method="post" role="form">
						<div class="form-group">
							 <label for="idea_title_label">Title</label>
							 <input type="text" name="idea_title" class="form-control">
						</div>
						<div class="form-group">
							 <label for="idea_description_label">Idea description</label>
							 <textarea class="form-control" rows="6" name="idea_description"></textarea>
						</div>
						<!--
						<div class="form-group">
							 <label for="exampleInputEmail1">Email address</label>
							 <input type="email" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1">
						</div>
						<div class="form-group">
							 <label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile">
							<p class="help-block">
								Example block-level help text here.
							</p>
						</div>
						<div class="checkbox">
							 <label><input type="checkbox"> Check me out</label>
						</div> 
-->
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
