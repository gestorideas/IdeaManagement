<?php
echo '<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Idea!</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="dashboard.php">Dashboard</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Actions<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
                                <li>
                                    <a href="list_ideas.php">List Ideas</a>
                                </li>
								<li>
									<a href="create_idea.php">New Idea</a>
								</li>
								<li>
									<a href="delete.php">Delete Idea</a>
								</li>
								<li>
									<a href="#">Edit Idea</a>
								</li>
								<li class="divider">
								</li>
								<!--
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							-->
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Search</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<!--
						<li>
							<a href="#">Link</a>
						</li>
					-->
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Profile<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Edit Information</a>
								</li>
								<li>
									<a href="#">Change Password</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Log out</a>
								</li>
								<li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>'
?>