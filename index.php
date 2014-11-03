<?php defined('_JEXEC') or die; 

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');
$menu = $app->getMenu();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Joomla's head info -->
    <jdoc:include type="head" />

    <!-- Bootstrap CSS -->
	<link href="<?php echo $this->baseurl ?>/templates/businesstemplate/css/bootstrap.css" rel="stylesheet">
  
</head>

<body>
<div id="search-wrapper">
	<div class="container">
		<div class="row">
			<div class="span12">

				<!--<form class="form-search pull-right">
					<input class="input-medium search-query" type="text"> <button class="btn" type="submit">Search</button>
				</form>-->

				<jdoc:include type="modules" name="search" style="xhtml" />

			</div>
		</div>
	</div>
</div>
<div id="menu-wrapper">
	<div class="container">
		<div class="row">
			<div class="span4 logo">
				<a href="<?php echo $this->baseurl ?>" >
					<img class="img" alt="Logo" src="<?php echo $this->baseurl ?>/templates/businesstemplate/images/logo.gif">
				</a>
			</div>
			<div class="span8 mainmenu">
				<jdoc:include type="modules" name="mainmenu" style="none" />
			</div>
		</div>
	</div>
</div>
<div id="carousel-wrapper">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="carousel slide" id="carousel-553052">
					<ol class="carousel-indicators">
						<li class="active" data-target="#carousel-553052" data-slide-to="0">
						</li>
						<li data-target="#carousel-553052" data-slide-to="1">
						</li>
						<li data-target="#carousel-553052" data-slide-to="2">
						</li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img alt="" src="http://lorempixel.com/1600/500/sports/1">
							<div class="carousel-caption">
								<h4>
									First Thumbnail label
								</h4>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
						</div>
						<div class="item">
							<img alt="" src="http://lorempixel.com/1600/500/sports/2">
							<div class="carousel-caption">
								<h4>
									Second Thumbnail label
								</h4>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
						</div>
						<div class="item">
							<img alt="" src="http://lorempixel.com/1600/500/sports/3">
							<div class="carousel-caption">
								<h4>
									Third Thumbnail label
								</h4>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
						</div>
					</div> <a class="left carousel-control" href="#carousel-553052" data-slide="prev">‹</a> <a class="right carousel-control" href="#carousel-553052" data-slide="next">›</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ($menu->getActive() == $menu->getDefault()) : ?>
<!-- if this is the homepage -->
<div id="thumbnail-wrapper">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="thumbnails">
					<li class="span4">
						<div class="thumbnail">
							<img alt="300x200" src="http://lorempixel.com/600/200/people">
							<div class="caption">
								<h3>
									Thumbnail label
								</h3>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
								<p>
									<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
								</p>
							</div>
						</div>
					</li>
					<li class="span4">
						<div class="thumbnail">
							<img alt="300x200" src="http://lorempixel.com/600/200/city">
							<div class="caption">
								<h3>
									Thumbnail label
								</h3>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
								<p>
									<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
								</p>
							</div>
						</div>
					</li>
					<li class="span4">
						<div class="thumbnail">
							<img alt="300x200" src="http://lorempixel.com/600/200/sports">
							<div class="caption">
								<h3>
									Thumbnail label
								</h3>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
								<p>
									<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
								</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php else: ?>
<!-- if this is not the homepage -->
<div class="container">
	<div class="row">
		<div class="span12">
			<jdoc:include type="component" />
		</div>
	</div>
</div>


<?php endif; ?>
<div id="media-wrapper">
	<div class="container">
		<div class="row">
			<div class="span6">
				<div class="media">
					 <a class="pull-left" href="#"><img class="media-object" alt="" src="http://lorempixel.com/64/64/"></a>
					<div class="media-body">
						<h4 class="media-heading">
							Nested media heading
						</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="media">
					 <a class="pull-left" href="#"><img class="media-object" alt="" src="http://lorempixel.com/64/64/"></a>
					<div class="media-body">
						<h4 class="media-heading">
							Nested media heading
						</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end #media-wrapper -->
<div id="footer-wrapper">
	<div class="container">
		<div class='row'>
			<div class='span4'><jdoc:include type="modules" name="footer-left" style="xhtml" /></div>
			<div class='span4'><jdoc:include type="modules" name="footer-center" style="xhtml" /></div>
			<div class='span4'><jdoc:include type="modules" name="footer-right" style="xhtml" /></div>
		</div>
	</div>
</div>

<!-- JavaScript placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/businesstemplate/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/businesstemplate/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/businesstemplate/js/scripts.js"></script>

</body>
</html>
